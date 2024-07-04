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
    <p class="title-dashboard">Add Menu</p>
    <div class="container-edit-menu">
        <form action="/dashboard/product/menu" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="head-sec-edit-menu">
                <div class="head-sec-edit-menu-top">
                    <p class="txt-type">Type:</p>
                    <div class="warp-save-archive">
                        <a href="/detail/product">
                            <button type="submit" class="btn-save-menu">Save</button>
                        </a>
                        <a href="/detail/product">
                            <button class="btn-archive-menu">Archive</button>
                        </a>
                    </div>
                </div>
                <div class="head-sec-edit-menu-bot">
                    <p class="type-menu">{{ $type }}</p>
                    <input type="hidden" name="type_id" id="type_id" value="{{ $type_id }}">
                    <input type="hidden" name="section_id" value="{{ $section_id }}">
                </div>
            </div>
            <div class="sec1-edit-menu">
                <div class="wrap-left-sec1-edit-menu">
                    <div class="left-sec1-edit-menu">
                        <img id="output_img_bahan" src="/assets/img-default.png" alt="">
                        <div class="con-btn-sec1-edit-menu">
                            <div class="btn-upload-menu">
                                <label for="input_img_bahan">Upload</label>
                                <input id="input_img_bahan" name="img_menu"  type="file" accept="image/*" onchange="loadFile(event)" style="display: none">
                            </div>
                            <button type="button" id="clearBtn" class="btn-delete-menu">Delete</button>
                        </div>
                    </div>
                    <div class="con-price-dshb-menu">
                        <label for="">Harga (Rp)</label>
                        <input type="number" name="price" placeholder="34.000">
                    </div>
                </div>
                <div class="right-sec1-edit-menu">
                    <div class="input-form-edit-menu">
                        <p>Nama Menu: </p>
                        <input type="name" name="name" id="name" required />
                    </div>
                    <div class="input-form-edit-menu">
                        <p>Profil Youtube:</p>
                        <input type="text" name="profile_yt" id="password" required />
                    </div>
                    <div class="input-form-edit-menu">
                        <p>Link Youtube:</p>
                        <input type="text" name="link_yt" id="password" required />
                    </div>
                    <div class="input-form-edit-menu">
                        <p>Deskripsi Menu:</p>
                        <input type="text" name="description" id="description" required />
                    </div>
                    <div class="input-form-edit-menu">
                        <p>Profil Rasa:</p>
                        <select name="flavor_id" id="lang">
                            @foreach ($flavors as $flavor)
                                <option value="{{ $flavor->id }}">{{ $flavor->flavor }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
     // preview upload img
     input_img_bahan.onchange = evt => {
    const [file] = input_img_bahan.files
        if (file) {
            output_img_bahan.src = URL.createObjectURL(file)
            output_img_bahan.style.display = 'block';
            default_img_bahan.style.display = 'none';
        }

        clearBtn.onclick = () => {
            input_img_bahan.value = ""; // Mengosongkan input file
            output_img_bahan.src = "#"; // Mengatur ulang sumber gambar
            output_img_bahan.style.display = 'none'; // Menyembunyikan gambar pratinjau
            default_img_bahan.style.display = 'block';
        }
    }
</script>


@endsection