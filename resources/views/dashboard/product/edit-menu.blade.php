@extends('layouts.main')
@section('content')   

{{-- sidebar --}}
<div class="wrap-side">
    <div class="sidebar">
        <div class="side-menu" id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/home">
                <iconify-icon icon="radix-icons:dashboard" width="20"></iconify-icon>
                Dashboard
            </a>
        </div>
        <div id="side-menu">
            <div id="mark" class="active"></div>
            <a class="active" href="/dashboard/product">
                <iconify-icon class="active" icon="fluent:box-multiple-checkmark-24-regular" width="20"></iconify-icon>
                Products
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/order_list">
                <iconify-icon icon="hugeicons:note-03" width="20"></iconify-icon>
                Order
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/review">
                <iconify-icon icon="solar:hand-stars-linear" width="20"></iconify-icon>
                Review
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/customer">
                <iconify-icon icon="humbleicons:users" width="20"></iconify-icon>
                Customer
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/database">
                <iconify-icon icon="iconoir:database" width="20"></iconify-icon>
                Database
            </a>
        </div>
        <div class="line-gap-sidebar"></div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="mage:settings" width="20"></iconify-icon>
                Settings
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <form action="/logout" method="post">
                @csrf
                <button type="submit"><iconify-icon icon="ph:power" width="20"></iconify-icon>
                Logout</button>
            </form>
        </div>
    </div>
</div>
{{-- end-sidebar --}}

<div class="dashboard-content">
    <p class="title-dashboard">Edit Menu</p>
    <div class="container-edit-menu">
        <form action="/dashboard/product/menu/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="head-sec-edit-menu">
            <div class="head-sec-edit-menu-top">
                <p class="txt-type">Type:</p>
                <div class="warp-save-archive">
                    <button type="submit" class="btn-save-menu">Save</button>
                    <a href="#delModal" id="delete_menu" data-id-menu="{{ $menu->id }}">
                        <button class="btn-popup-del-menu">Delete</button>
                    </a>
                </div>
            </div>
            <div class="head-sec-edit-menu-bot">
                <p class="type-menu">{{ $type }}</p>
                <input type="hidden" name="type_id" value="{{ old('type_id', $menu->type_id) }}">
            </div>
        </div>
        <div class="sec1-edit-menu">
            <div class="wrap-left-sec1-edit-menu">
                <div class="left-sec1-edit-menu">
                    <img id="output_img_bahan" src="/{{ $menu->img_menu }}" alt="">
                    <img id="default_img_bahan" src="/assets/img-default.png" alt="" style="display: none">
                    <div class="con-btn-sec1-edit-menu">
                        <div class="btn-upload-menu">
                            <label for="input_img_bahan">Upload</label>
                            <input id="input_img_bahan" name="img_menu"  type="file" accept="image/*" onchange="loadFile(event)" style="display: none">
                        </div>
                        <button type="button" id="clearBtnMenu" class="btn-delete-menu">Delete</button>
                    </div>
                </div>
                <div class="con-price-dshb-menu">
                    <label for="">Harga (Rp)</label>
                    <input type="text" name="price" value="{{ old('price', $menu->price) }}">
                </div>
            </div>
            <div class="right-sec1-edit-menu">
                <div class="input-form-edit-menu">
                    <p>Nama Menu: </p>
                    <input type="text" name="name" id="name" value="{{ old('name', $menu->name) }}" required />
                </div>
                <div class="input-form-edit-menu">
                    <p>Profil Youtube:</p>
                    <input type="text" name="profile_yt" id="profile_yt" value="{{ old('profile_yt', $menu->profile_yt) }}" required />
                </div>
                <div class="input-form-edit-menu">
                    <p>Link Youtube:</p>
                    <input type="text" name="link_yt" id="link_yt" value="{{ old('link_yt', $menu->link_yt) }}" required />
                </div>
                <div class="input-form-edit-menu">
                    <p>Deskripsi Menu:</p>
                    <input type="text" name="description" id="description" value="{{ old('description', $menu->description) }}" required />
                </div>
                <div class="input-form-edit-menu">
                    <p>Profil Rasa:</p>
                    <select name="flavor_id" id="lang">
                        @foreach ($flavors as $flavor)
                            @if (old('flavor_id', $menu->flavor_id == $flavor->id))
                                <option value="{{ $flavor->id }}" selected>{{ $flavor->flavor }}</option>
                            @else
                            <option value="{{ $flavor->id }}">{{ $flavor->flavor }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        </form>
        <form action="/further_information/update/{{ $menu->id }}" method="POST">
            @csrf
            <div class="further-information-edit-menu">
                <p class="title-con-edit-menu">Further Information</p>
                
                <div class="tools-further-information">
                    <p>Peralatan Khusus</p>
                    <textarea name="tools" id="tools" cols="30" rows="10">{{ old('tools', $further_information->tools ?? '') }}</textarea>
                </div>
                
                <div class="tools-further-information">
                    <p>Tingkat Kesulitan</p>
                    <select name="difficulty" id="difficulty">
                        <option value="Mudah" {{ isset($further_information->difficulty) && $further_information->difficulty === 'Mudah' ? 'selected' : '' }}>Mudah</option>
                        <option value="Sedang" {{ isset($further_information->difficulty) && $further_information->difficulty === 'Sedang' ? 'selected' : '' }}>Sedang</option>
                        <option value="Sulit" {{ isset($further_information->difficulty) && $further_information->difficulty === 'Sulit' ? 'selected' : '' }}>Sulit</option>
                    </select>
                </div>
                
                <div class="tools-further-information">
                    <p>Bahan Tambahan</p>
                    <textarea name="material" id="material" cols="30" rows="10">{{ old('material', $further_information->material ?? '') }}</textarea>
                </div>
                
                <div class="tools-further-information last">
                    <p>Waktu Penyajian</p>
                    <input type="text" name="serving_time" id="serving_time" value="{{ old('serving_time', $further_information->serving_time ?? '') }}">
                    <select name="time_format" id="time_format">
                        <option value="Menit" {{ isset($further_information->time_format) && $further_information->time_format === 'Menit' ? 'selected' : '' }}>Menit</option>
                        <option value="Jam" {{ isset($further_information->time_format) && $further_information->time_format === 'Jam' ? 'selected' : '' }}>Jam</option>
                    </select>
                </div>
                
                <div class="edit-further-information">
                    <button type="submit">
                        <iconify-icon icon="bi:save-fill" width="28" style="color: #979797; cursor: pointer;"></iconify-icon>
                    </button>
                </div>
            </div>
        </form>
        
        
        <div class="sec2-edit-menu">
            <p class="title-con-edit-menu">Yang kami kirim</p>
                <div class="table-edit-menu-warp">
                    <table id="edit-menu">
                        <tr>
                          <th>Name</th>
                          <th>Qty</th>
                          <th>Unit</th>
                        </tr>
                        @foreach ($to_sents as $to_sent)    
                        @if ($to_sent->count() === null)
                            <h1>Data belum ditambahkan.. silahkan tambahkan data!</h1>
                        @else

                        <tr>
                        <td class="input-name-edit-menu">
                            <input type="material_name" name="text" id="text" value="{{ old('material_name', $to_sent->material_name) }}" disabled />
                        </td>
                        <td class="input-qty-edit-menu">
                            <input type="text" name="qty" id="qty" value="{{ old('qty', $to_sent->qty) }}" disabled />
                        </td>
                        <td class="input-unit-edit-menu">
                                @foreach ($units as $unit)
                                    @if (old('unit_id', $to_sent->unit_id == $unit->id))
                                        <input type="text" value="{{ $unit->unit }}" disabled/>
                                    @endif
                                @endforeach
                        </td>
                        <td>
                            <div class="edit-to-sent">
                                <a class="icn-edit-to-sent" href="#editModal" id="edit-tosent"
                                   data-id-tosent="{{ $to_sent->id }}" 
                                   data-material-id="{{ $to_sent->material_id }}"
                                   data-qty="{{ $to_sent->qty }}"
                                   data-unit-id="{{ $to_sent->unit_id }}">
                                    <iconify-icon icon="lucide:edit" width="18"></iconify-icon>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="edit-to-sent">
                                <a class="icn-edit-to-sent" href="#delModal" id="delete-tosent" data-id-tosent="{{ $to_sent->id }}">
                                    <iconify-icon icon="typcn:delete" width="25" style="color: red"></iconify-icon>
                                </a>
                            </div>                                
                        </td>
                        </tr>
                        @endif
                        @endforeach
                      </table>
                      <div class="add-to-sent">
                        <a class="icn-add-to-sent" href="#addModal" id="add-tosent">
                            <iconify-icon icon="material-symbols:add-box" width="38"></iconify-icon>
                        </a>
                    </div>
                    
                </div>
        </div>
        {{-- section-3 --}}
        <div class="sec3-edit-menu">
            <p class="title-con-edit-menu">Nutrition Corner</p>
            <div class="container-sec3-edit-menu">
                @php
                    // Atribut yang akan ditampilkan
                    $attributes = ['karbohidrat', 'protein', 'lemak', 'serat', 'natrium', 'kalori'];
        
                    // Membagi atribut menjadi dua bagian
                    $half = ceil(count($attributes) / 2);
                    $leftAttributes = array_slice($attributes, 0, $half);
                    $rightAttributes = array_slice($attributes, $half);
                @endphp
                <div class="con-left-sec3-edit-menu">
                    @foreach ($nutritions as $nutrition)
                        @foreach ($leftAttributes as $attribute)
                            @if (isset($nutrition->$attribute))
                                <div class="input-nutrition">
                                    <p>{{ ucfirst($attribute) }} :</p>
                                    <div class="input-form-sec3">
                                        <input class="nutrition_value" type="text" placeholder="1" name="{{ $attribute }}" id="{{ $attribute }}" value="{{ old($attribute, $nutrition->$attribute) }}" disabled />
                                        @foreach ($units as $unit)    
                                            @if (old($attribute . '_unit', $nutrition->{$attribute . '_unit'}) == $unit->id)
                                                <input class="nutrition_unit" type="text" placeholder="1" name="{{ $attribute }}" id="{{ $attribute }}" value="{{ $unit->unit }}" disabled />
                                            @endif
                                        @endforeach
                                        {{-- <select name="{{ $attribute . '_unit' }}" id="lang">
                                            @foreach ($units as $unit)    
                                                @if (old($attribute . '_unit', $nutrition->{$attribute . '_unit'}) == $unit->id)
                                                    <option value="{{ $unit->id }}" selected>{{ $unit->unit }}</option>    
                                                @else                                                    
                                                    <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                                                @endif
                                            @endforeach
                                        </select> --}}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
                

                <div class="line-gap-sec3"></div>
                
                <div class="con-right-sec3-edit-menu">
                    @foreach ($nutritions as $nutrition)
                        @foreach ($rightAttributes as $attribute)
                            @if (isset($nutrition->$attribute))
                                <div class="input-nutrition">
                                    <p>{{ ucfirst($attribute) }} :</p>
                                    <div class="input-form-sec3">
                                        <input class="nutrition_value" type="text" placeholder="1" name="{{ $attribute }}" id="{{ $attribute }}" value="{{ old($attribute, $nutrition->$attribute) }}" disabled />
                                            @foreach ($units as $unit)    
                                                @if (old($attribute . '_unit', $nutrition->{$attribute . '_unit'}) == $unit->id)
                                                    <input class="nutrition_unit" type="text" placeholder="1" name="{{ $attribute }}" id="{{ $attribute }}" value="{{ $unit->unit }}" disabled />
                                                @endif
                                            @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="edit-nutrition">
                @foreach ($nutritions as $nutrition)    
                <a class="icn-edit-nutrition" href="#editModal" id="edit-nutrition"
                   data-id="{{ $nutrition->id }}"
                   data-karbohidrat="{{ $nutrition->karbohidrat }}"
                   data-karbohidrat_unit="{{ $nutrition->karbohidrat_unit }}"
                   data-protein="{{ $nutrition->protein }}"
                   data-protein_unit="{{ $nutrition->protein_unit }}"
                   data-lemak="{{ $nutrition->lemak }}"
                   data-lemak_unit="{{ $nutrition->lemak_unit }}"
                   data-serat="{{ $nutrition->serat }}"
                   data-serat_unit="{{ $nutrition->serat_unit }}"
                   data-natrium="{{ $nutrition->natrium }}"
                   data-natrium_unit="{{ $nutrition->natrium_unit }}"
                   data-kalori="{{ $nutrition->kalori }}"
                   data-kalori_unit="{{ $nutrition->kalori_unit }}"
                   data-unit_id="{{ $nutrition->unit_id }}"
                   >
                    <iconify-icon icon="mdi:edit-box" width="38" style="color: #979797"></iconify-icon>
                </a>
                @endforeach
            </div>
        </div>
        {{-- end-section-3 --}}
    

        {{-- section-4 --}}
        <div class="sec4-edit-menu">
            <p class="title-con-edit-menu">How to Cook</p>
            <div class="container-form-sec4-edit-menu">
                @foreach ($tutorials as $tutorial)    
                    <div class="container-sec4-edit-menu">
                        <div class="list-img-sec4-edit-menu">
                            <img src="/{{ $tutorial->image }}">
                        </div>
                        <div class="con-edit-tutorial-dshb">
                            <textarea class="title-dsc-sec4" id="input-dsc-sec4" name="title_instruction" id="title_instruction" disabled>{{ old('title_instruction', $tutorial->title_instruction) }}</textarea>
                            <textarea class="input-dsc-sec4" id="input-dsc-sec4" name="instruction" id="instruction" disabled>{{ old('instruction', $tutorial->instruction) }}</textarea>
                        </div>
                        <div class="con-btn-tutorial">
                            <div class="edit-to-sent">
                                <a class="icn-edit-to-sent" href="#delModal" id="edit-tutorial" 
                                    data-id_tutorial="{{ $tutorial->id }}"
                                    data-stepnumber="{{ $tutorial->step_number }}"
                                    data-title_instruction="{{ $tutorial->title_instruction }}"
                                    data-instruction="{{ $tutorial->instruction }}"
                                    >
                                    <iconify-icon icon="lucide:edit" width="18" style="color: #F46A45"></iconify-icon>
                                </a>
                            </div>                                
                            <div class="edit-to-sent">
                                <a class="icn-edit-to-sent" href="#delModal" id="delete-tutorial" data-id_tutorial="{{ $tutorial->id }}">
                                    <iconify-icon icon="typcn:delete" width="25" style="color: red"></iconify-icon>
                                </a>
                            </div>  
                        </div>
                    </div>
                @endforeach
                <div class="add-data-alamat">
                    <a class="icn-add-data-alamat" href="#contact" id="add-tutorial">
                        <iconify-icon icon="material-symbols:add-box" width="38"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
        {{-- end-section-4 --}}
    </div>
</div>

{{-- modal-popup-success --}}
<div id="successModal" style="display: none;">
    <div id="editTosentModal" class="reveal-modal-tutorial">
        <span class="btn-close-modal" id="close-modal-carthome"><img src="/assets/close-modal.svg" alt="Close"></span>
        <p>Further Information berhasil tersimpan</p>
    </div>
</div>
{{-- modal-popup-success --}}

{{-- modal-delete-menu --}}
<div id="modal-delete-menu" style="display: none;">
    <div id="editTosentModal" class="reveal-modal-tutorial">
        <span class="btn-close-modal" id="close-delete-menu"><img src="/assets/close-modal.svg" alt="Close"></span>
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
        <form action="/dashboard/product/menu/{{ $menu->id }}" method="POST" id="deleteForm">
            @csrf
            @method('DELETE')
            <input type="hidden" name="menuId" id="menuId_delete">
            <button type="submit" class="btn-delete">Ya, Hapus</button>
        </form>
    </div>
</div>
{{-- modal-delete-menu --}}

{{-- modal-add-tosent --}}
<form action="/to_sent/create/{{ $menu->id }}" method="POST" id="addTosentForm">
@csrf
@method('POST')
<div id="modal-add-tosent" style="display:none;">
    <div id="tosentModal" class="reveal-modal-edit-tosent">
        <span class="btn-close-modal" id="close-add-modal"><img src="/assets/close-modal.svg" alt="Close"></span>
        <div class="con-input-tosent">
                <select name="material_id" id="add_material_id">
                    @foreach ($materials as $material)
                        <option value="{{ $material->id }}">{{ $material->material_name }}</option>
                    @endforeach
                </select>
                <input type="text" placeholder="Qty" name="qty" id="add_qty" required>
                <select name="unit_id" id="add_unit_id">
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                    @endforeach
                </select>
                <button class="btn-modal-livetopromote" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
{{-- modal-add-tosent --}}

{{-- modal-edit_tosent --}}
@foreach ($to_sents as $to_sent)    
<form action="/to_sent/update/{{ $menu->id }}" method="POST" id="editTosentForm">
@csrf
<div id="modal-edit-tosent" style="display:none;">
    <div id="editTosentModal" class="reveal-modal-edit-tosent">
        <span class="btn-close-modal" id="close-edit-modal"><img src="/assets/close-modal.svg" alt="Close"></span>
        <div class="con-input-tosent">
                <input type="hidden" name="tosentId" id="tosentId">
                <select name="material_id" id="material_id">
                    @foreach ($materials as $material)
                        <option value="{{ $material->id }}">{{ $material->material_name }}</option>
                    @endforeach
                </select>
                <input type="text" placeholder="Qty" name="qty" id="qtyInput" value="{{ old('qtyInput', $to_sent->qty) }}" required>
                <select name="unit_id" id="unit_id">
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                    @endforeach
                </select>
                <button class="btn-modal-livetopromote" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
@endforeach
{{-- modal-edit_tosent --}}

{{-- modal-delete-tosent --}}
<div id="modal-delete-tosent" style="display: none;">
    <div id="editTosentModal" class="reveal-modal-edit-tosent">
        <span class="btn-close-modal" id="close-delte-modal"><img src="/assets/close-modal.svg" alt="Close"></span>
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
        <form action="/to_sent/delete/{{ $menu->id }}" method="POST" id="deleteForm">
            @csrf
            @method('DELETE')
            <input type="hidden" name="tosentId" id="tosentId_delete">
            <button type="submit" class="btn-delete">Ya, Hapus</button>
        </form>
    </div>
</div>
{{-- modal-delete-tosent --}}

{{-- modal-edit-nutrition --}}
@foreach ($nutritions as $nutrition)    
<form action="/nutrition/update/{{ $menu->id }}" method="POST" id="editNutritionForm">
@csrf
<div id="modal-edit-nutrition" style="display:none;">
    <div id="editTosentModal" class="reveal-modal-edit-nutrition">
        <span class="btn-close-modal" id="close-edit-nutrition"><img src="/assets/close-modal.svg" alt="Close"></span>
        <h2>Nutrition Corner</h2>
        <div class="con-modal-nutrition">
            @php
            // Atribut yang akan ditampilkan
            $attributes = ['karbohidrat', 'protein', 'lemak', 'serat', 'natrium', 'kalori'];

            // Membagi atribut menjadi dua bagian
            $half = ceil(count($attributes) / 2);
            $leftAttributes = array_slice($attributes, 0, $half);
            $rightAttributes = array_slice($attributes, $half);
            @endphp
            <div class="con-left-sec3-edit-menu">
                @foreach ($leftAttributes as $attribute)
                    @if (isset($nutrition->$attribute))
                        <div class="input-nutrition">
                            <p>{{ ucfirst($attribute) }} :</p>
                            <div class="input-nutrition-modal">
                                <input type="text" placeholder="angka" name="{{ $attribute }}" id="{{ $attribute }}" value="{{ old($attribute, $nutrition->$attribute) }}" required />
                                <select name="{{ $attribute . '_unit' }}" id="lang">
                                    @foreach ($units as $unit)    
                                        @if (old($attribute . '_unit', $nutrition->{$attribute . '_unit'}) == $unit->id)
                                            <option value="{{ $unit->id }}" selected>{{ $unit->unit }}</option>    
                                        @else                                                    
                                            <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="line-gap-sec3"></div>
            <div class="con-right-sec3-edit-menu">
                @foreach ($rightAttributes as $attribute)
                    @if (isset($nutrition->$attribute))
                        <div class="input-nutrition">
                            <p>{{ ucfirst($attribute) }} :</p>
                            <div class="input-nutrition-modal">
                                <input type="text" placeholder="angka" name="{{ $attribute }}" id="{{ $attribute }}" value="{{ old($attribute, $nutrition->$attribute) }}" required />
                                <select name="{{ $attribute.'_unit' }}" id="lang">
                                    @foreach ($units as $unit)    
                                        @if (old($attribute . '_unit', $nutrition->{$attribute . '_unit'}) == $unit->id)
                                            <option value="{{ $unit->id }}" selected>{{ $unit->unit }}</option>    
                                        @else                                                    
                                            <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <button class="btn-modal-livetopromote" type="submit">Submit</button>
        </div>
    </div>
</form>
@endforeach
{{-- modal-edit-nutrition --}}

{{-- modal-add-tutorials --}}
<form action="/tutorial/create/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="modal-add-tutorial" style="display: none;">
        <div id="exampleModal" class="reveal-modal-tutorial">
            <span class="btn-close-modal" id="close-add-tutorial"><img src="/assets/close-modal.svg" alt=""></span>
            <div class="con-input-tutorial">
                <input id="input_image_toturials" type="file" name="image" style="display: none">
                <div class="input-tutorial-modal">
                    <label for="input_image_toturials">Upload</label>
                    <input type="number" name="stepnumber" placeholder="masukkan urutan tutorial" id="stepnumber">
                </div>
                <input class="title-instruction" type="text" placeholder="masukkan judul instruksi" name="titleInstruction" id="title_instruction" >
                <textarea placeholder="masukkan instruksi" class="input-modal-instruction" id="instructionInput" name="instructionInput" required></textarea>
            </div>
            <div class="">
                <button class="btn-modal-livetopromote" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
{{-- modal-add-tutorials --}}

{{-- modal-edit-tutorials --}} 
@foreach ($tutorials as $tutorial)    
<form id="editTutorialForm" action="/tutorial/update/{{ $tutorial->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="modal-edit-tutorial" style="display: none;">
        <div id="exampleModal" class="reveal-modal-tutorial">
            <span class="btn-close-modal" id="close-edit-tutorial"><img src="/assets/close-modal.svg" alt=""></span>
            <div class="con-input-tutorial">
                <input id="input_image_toturials_{{ $tutorial->id }}" type="file" name="image" style="display: none">
                <div class="input-tutorial-modal">
                    <label for="input_image_toturials_{{ $tutorial->id }}">Upload</label>
                    <input type="number" name="stepnumber" placeholder="masukkan urutan tutorial" id="stepnumberModal">
                </div>
                <input type="hidden" name="tutorialId" id="tutorialId" >
                <input id="titleInstruction" class="title-instruction" type="text" placeholder="masukkan judul instruksi" name="titleInstruction">
                <textarea placeholder="masukkan instruksi" class="input-modal-instruction" id="instructionInputModal" name="instructionInput" required></textarea>
                {{-- <textarea placeholder="masukkan instruksi" class="input-modal-instruction" id="instructionInput" name="instructionInput" required></textarea> --}}
            </div>
            <div class="">
                <button class="btn-modal-livetopromote" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
@endforeach
{{-- modal-edit-tutorials --}}

{{-- modal-delete-tutorial --}}
<div id="modal-delete-tutorial" style="display: none;">
    <div id="editTosentModal" class="reveal-modal-tutorial">
        <span class="btn-close-modal" id="close-delete-tutorial"><img src="/assets/close-modal.svg" alt="Close"></span>
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
        <form action="/tutorial/delete/{{ $menu->id }}" method="POST" id="deleteForm">
            @csrf
            @method('DELETE')
            <input type="hidden" name="tutorialId" id="tutorialId_delete">
            <button type="submit" class="btn-delete">Ya, Hapus</button>
        </form>
    </div>
</div>
{{-- modal-delete-tutorial --}}

<script src="/js/modal-form-menu.js"></script>
<script src="/js/modal-form-delmenu.js"></script>
<script src="/js/modal-form-nutrition.js"></script>
<script src="/js/modal-form-tutorial.js"></script>
<script>

$(document).ready(function() {
            @if(session('show_modal'))
                $('#successModal').show();
            @endif

            $('#close-modal-carthome').on('click', function() {
                $('#successModal').hide();
            });
        });
</script>
@endsection