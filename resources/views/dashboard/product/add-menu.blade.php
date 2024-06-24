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
            <a href="#about">
                <iconify-icon icon="solar:hand-stars-linear" width="20"></iconify-icon>
                Review
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="humbleicons:users" width="20"></iconify-icon>
                Customer
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
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
            <a href="#about">
                <iconify-icon icon="ph:power" width="20"></iconify-icon>
                Logout
            </a>
        </div>
    </div>
</div>
{{-- end-sidebar --}}

<div class="dashboard-content">
    <p class="title-dashboard">Add Menu</p>
    <div class="container-edit-menu">
        <div class="head-sec-edit-menu">
            <div class="head-sec-edit-menu-top">
                <p class="txt-type">Type:</p>
                <div class="warp-save-archive">
                    <a href="/detail/product">
                        <button class="btn-save-menu">Save</button>
                    </a>
                    <a href="/detail/product">
                        <button class="btn-archive-menu">Archive</button>
                    </a>
                </div>
            </div>
            <div class="head-sec-edit-menu-bot">
                <p class="type-menu">Appetizer</p>
            </div>
        </div>
        <div class="sec1-edit-menu">
            <div class="wrap-left-sec1-edit-menu">
                <div class="left-sec1-edit-menu">
                    <img src="/img_menu/card1-sec2.png" alt="">
                    <div class="con-btn-sec1-edit-menu">
                        <a href="/detail/product">
                            <button class="btn-upload-menu">Upload</button>
                        </a>
                        <a href="/detail/product">
                            <button class="btn-delete-menu">Delete</button>
                        </a>
                    </div>
                </div>
                <div class="con-price-dshb-menu">
                    <label for="">Harga (Rp)</label>
                    <input type="text" placeholder="34.000">
                </div>
            </div>
            <div class="right-sec1-edit-menu">
                <div class="input-form-edit-menu">
                    <p>Nama Menu: </p>
                    <input type="name" name="name" id="name" required />
                </div>
                <div class="input-form-edit-menu">
                    <p>Profil Youtube:</p>
                    <input type="password" name="password" id="password" required />
                </div>
                <div class="input-form-edit-menu">
                    <p>Link Youtube:</p>
                    <input type="password" name="password" id="password" required />
                </div>
            </div>
        </div>
        <div class="sec2-edit-menu">
            <p class="title-con-edit-menu">Yang kami kirim</p>
                <div class="table-edit-menu-warp">
                    <table id="edit-menu">
                        <tr>
                          <th>Name</th>
                          <th>Qty</th>
                          <th>Unit</th>
                        </tr>
                        <tr>
                          <td class="input-name-edit-menu"><input type="password" placeholder="Ragi instan" name="password" id="password" required /></td>
                          <td class="input-qty-edit-menu"><input type="password" placeholder="1" name="password" id="password" required /></td>
                          <td class="input-unit-edit-menu">
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="input-name-edit-menu"><input type="password" placeholder="Ragi instan" name="password" id="password" required /></td>
                          <td class="input-qty-edit-menu"><input type="password" placeholder="1" name="password" id="password" required /></td>
                          <td class="input-unit-edit-menu">
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="input-name-edit-menu"><input type="password" placeholder="Ragi instan" name="password" id="password" required /></td>
                          <td class="input-qty-edit-menu"><input type="password" placeholder="1" name="password" id="password" required /></td>
                          <td class="input-unit-edit-menu">
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="input-name-edit-menu"><input type="password" placeholder="Ragi instan" name="password" id="password" required /></td>
                          <td class="input-qty-edit-menu"><input type="password" placeholder="1" name="password" id="password" required /></td>
                          <td class="input-unit-edit-menu">
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="input-name-edit-menu"><input type="password" placeholder="Ragi instan" name="password" id="password" required /></td>
                          <td class="input-qty-edit-menu"><input type="password" placeholder="1" name="password" id="password" required /></td>
                          <td class="input-unit-edit-menu">
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="input-name-edit-menu"><input type="password" placeholder="Ragi instan" name="password" id="password" required /></td>
                          <td class="input-qty-edit-menu"><input type="password" placeholder="1" name="password" id="password" required /></td>
                          <td class="input-unit-edit-menu">
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="input-name-edit-menu"><input type="password" placeholder="Ragi instan" name="password" id="password" required /></td>
                          <td class="input-qty-edit-menu"><input type="password" placeholder="1" name="password" id="password" required /></td>
                          <td class="input-unit-edit-menu">
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="input-name-edit-menu"><input type="password" placeholder="Ragi instan" name="password" id="password" required /></td>
                          <td class="input-qty-edit-menu"><input type="password" placeholder="1" name="password" id="password" required /></td>
                          <td class="input-unit-edit-menu">
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="input-name-edit-menu"><input type="password" placeholder="Ragi instan" name="password" id="password" required /></td>
                          <td class="input-qty-edit-menu"><input type="password" placeholder="1" name="password" id="password" required /></td>
                          <td class="input-unit-edit-menu">
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="input-name-edit-menu"><input type="password" placeholder="Ragi instan" name="password" id="password" required /></td>
                          <td class="input-qty-edit-menu"><input type="password" placeholder="1" name="password" id="password" required /></td>
                          <td class="input-unit-edit-menu">
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                          </td>
                        </tr>
                      </table>
                </div>
        </div>
        {{-- section-3 --}}
        <div class="sec3-edit-menu">
            <p class="title-con-edit-menu">Nutrition Corner</p>
            <div class="container-sec3-edit-menu">
                <div class="con-left-sec3-edit-menu">
                    <div class="input-karbohidrat">
                        <p>Karbohidrat :</p>
                        <div class="input-form-sec3">
                            <input type="text" placeholder="1" name="password" id="password" required />
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-protein">
                        <p>Protein :</p>
                        <div class="input-form-sec3">
                            <input type="text" placeholder="1" name="password" id="password" required />
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-lemak">
                        <p>Lemak :</p>
                        <div class="input-form-sec3">
                            <input type="text" placeholder="1" name="password" id="password" required />
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="line-gap-sec3"></div>
                <div class="con-right-sec3-edit-menu">
                    <div class="input-karbohidrat">
                        <p>Serat :</p>
                        <div class="input-form-sec3">
                            <input type="text" placeholder="1" name="password" id="password" required />
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-protein">
                        <p>Natrium :</p>
                        <div class="input-form-sec3">
                            <input type="text" placeholder="1" name="password" id="password" required />
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-lemak">
                        <p>Kalori :</p>
                        <div class="input-form-sec3">
                            <input type="text" placeholder="1" name="password" id="password" required />
                            <select name="languages" id="lang">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end-section-3 --}}

        {{-- section-4 --}}
        <div class="sec4-edit-menu">
            <p class="title-con-edit-menu">How to Cook</p>
            <div class="container-form-sec4-edit-menu">
                <div class="container-sec4-edit-menu">
                    <input class="input-number-sec4" type="text" placeholder="1" name="password" id="password" required />
                    <input class="input-dsc-sec4" type="text" placeholder="tes" name="password" id="password" required />
                </div>
                <div class="container-sec4-edit-menu">
                    <input class="input-number-sec4" type="text" placeholder="1" name="password" id="password" required />
                    <input class="input-dsc-sec4" type="text" placeholder="tes" name="password" id="password" required />
                </div>
                <div class="container-sec4-edit-menu">
                    <input class="input-number-sec4" type="text" placeholder="1" name="password" id="password" required />
                    <input class="input-dsc-sec4" type="text" placeholder="tes" name="password" id="password" required />
                </div>
                <div class="container-sec4-edit-menu-last">
                    <div class=""></div>
                    <a class="icn-add-data-sec4" href="#contact">
                        <iconify-icon icon="material-symbols-light:add-box-outline" width="38"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
        {{-- end-section-4 --}}
    </div>
</div>

<script>
    
</script>
@endsection