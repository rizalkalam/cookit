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
<form action="/update/bundling/{{ $bundling }}" method="POST">
@csrf
    <div class="title-section-bundling">
        <p class="title-dashboard">{{ $bundling }}</p>
        <button type="submit" class="btn-save-edit-product">Save</button>
    </div>

    <div class="section-bundling">
        <div class="head-section-bundling">
            <p>Live Menu</p>
        </div>
        <div class="content-bundling">
            <div class="table-warp-bundling">
                @if (isset($menu_appetizer) && !$menu_appetizer->isEmpty())
                    <table id="bundling">
                        <tr>
                        <th></th>
                        <th>Appetizer</th>
                        <th>Last Modified</th>
                        <th>Price</th>
                        <th>Qty</th>
                        </tr>
                        @foreach ($menu_appetizer as $menu)
                        <tr>
                        <td><input class="menu-checkbox" disabled type="checkbox" data-menu-id="{{ $menu->menu_id }}" data-menu-price="{{ $menu->price }}" data-menu-qty="{{ $menu->qty }}"  id="status_bundling" name="status_bundling" {{ $menu->status_bundling === 'on_bundling' ? 'checked' : '' }}></td>
                        <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">{{ $menu->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($menu->updated_at)->format('d-m-Y'); }}</td>
                        <td>Rp. <span class="unit-price-bskt" data-unit-price="{{ $menu->price }}">{{ $menu->price }}</span></td>
                        <td>
                            <div class="qty-items-bundling">
                                <input type="text" name="quantities[]" value="{{ $menu->qty }}">
                            </div>
                        </td>
                        <td>
                            <iconify-icon icon="ic:round-read-more" width="30" style="color: #F46A45; cursor: pointer;"
                            id="edit-status-bundling"
                            data-bundling-id="{{ $menu->id }}"
                            data-bundling-old_id="{{ $menu->bundling_id }}"
                            data-menu-id="{{ $menu->menu_id }}"
                            data-menu-status="{{ $menu->status_bundling }}"
                            data-menu-qty="{{ $menu->qty }}"
                            ></iconify-icon>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                @else        
                    <br>
                        <h3>Data menu appetizer kosong</h3>  
                    <br>                          
                @endif
            </div>
            <div class="table-warp-bundling">
                @if (isset($menu_maincourse) && !$menu_maincourse->isEmpty())
                    <table id="bundling">
                        <tr>
                        <th></th>
                        <th>Maincourse</th>
                        <th>Last Modified</th>
                        <th>Price</th>
                        <th>Qty</th>
                        </tr>
                        @foreach ($menu_maincourse as $menu)
                        <tr>
                        <td><input class="menu-checkbox" disabled type="checkbox" data-menu-id="{{ $menu->id }}" data-menu-price="{{ $menu->price }}" data-menu-qty="{{ $menu->qty }}"  id="status_bundling" name="status_bundling" {{ $menu->status_bundling === 'on_bundling' ? 'checked' : '' }}></td>
                        <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">{{ $menu->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($menu->updated_at)->format('d-m-Y'); }}</td>
                        <td>Rp. <span class="unit-price-bskt" data-unit-price="{{ $menu->price }}">{{ $menu->price }}</span></td>
                        <td>
                            <div class="qty-items-bundling">
                                <input type="text" name="quantities[]" value="{{ $menu->qty }}">
                            </div>
                        </td>
                        <td>
                            <iconify-icon icon="ic:round-read-more" width="30" style="color: #F46A45; cursor: pointer;"
                            id="edit-status-bundling"
                            data-bundling-id="{{ $menu->id }}"
                            data-bundling-old_id="{{ $menu->bundling_id }}"
                            data-menu-id="{{ $menu->menu_id }}"
                            data-menu-status="{{ $menu->status_bundling }}"
                            data-menu-qty="{{ $menu->qty }}"
                            ></iconify-icon>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                @else
                    <br>
                        <h3>Data menu maincourse kosong</h3>  
                    <br>                          
                @endif
            </div>
            <div class="table-warp-bundling">
                @if (isset($menu_dessert) && !$menu_dessert->isEmpty())
                    <table id="bundling">
                        <tr>
                        <th></th>
                        <th>Dessert</th>
                        <th>Last Modified</th>
                        <th>Price</th>
                        <th>Qty</th>
                        </tr>
                        @foreach ($menu_dessert as $menu)
                        <tr>
                        <td><input class="menu-checkbox" disabled type="checkbox" data-menu-id="{{ $menu->menu_id }}" data-menu-price="{{ $menu->price }}" data-menu-qty="{{ $menu->qty }}"  id="status_bundling" name="status_bundling" {{ $menu->status_bundling === 'on_bundling' ? 'checked' : '' }}></td>
                        <td class="td-menu"><img src="/img_menu/card1-sec2.png" alt="">{{ $menu->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($menu->updated_at)->format('d-m-Y'); }}</td>
                        <td>Rp. <span class="unit-price-bskt" data-unit-price="{{ $menu->price }}">{{ $menu->price }}</span></td>
                        <td>
                            <div class="qty-items-bundling">
                                <input type="text" name="quantities[]" value="{{ $menu->qty }}">
                            </div>
                        </td>
                        <td>
                            <iconify-icon icon="ic:round-read-more" width="30" style="color: #F46A45; cursor: pointer;"
                            id="edit-status-bundling"
                            data-bundling-id="{{ $menu->id }}"
                            data-bundling-old_id="{{ $menu->bundling_id }}"
                            data-menu-id="{{ $menu->menu_id }}"
                            data-menu-status="{{ $menu->status_bundling }}"
                            data-menu-qty="{{ $menu->qty }}"
                            ></iconify-icon>
                        </td>
                        </tr>
                        @endforeach
                    </table> 
                @else
                    <br>
                        <h3>Data menu dessert kosong</h3>  
                    <br>                          
                @endif
            </div>
            <div class="con-count-bundling">
                <div class="top-count-bundling">
                    <p>Total (<span class="total-items">2</span> Product)</p>
                    <div class="price-total-bundling">Rp.<span class="total-price">2000</span></div>
                </div>
                <div class="bot-count-bundling">
                    <p>
                        Harga Spesial bundling
                    </p>
                    <div class="input-price-bundling">Rp. <input type="text" name="price" value="{{ number_format($bundling_price->price ?? '0', 0, ',', '.') }}"></div>
                </div>
            </div>
        </div>
    </div> 
</form>
</div>

{{-- modal-edit --}} 
{{-- @foreach ($tutorials as $tutorial)     --}}
<div id="modal-edit-statusbundling" style="display: none;">
    <div id="exampleModal" class="reveal-modal-tutorial">
        <span class="btn-close-modal" id="close-edit-statusbundling"><img src="/assets/close-modal.svg" alt=""></span>
        <form id="editStatusBundling" action="/update/status_bundling" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="con-modal-bundling">
                <input type="hidden" name="menu_id" id="menuId_bundling">
                <input type="hidden" name="bundlingtyp_id" id="bundlingId">
                <div class="status-bundling">
                    <label for="status_bundling">Status Bundling</label>
                    <input type="checkbox" id="status_bundling_modal" name="status_bundling" value="1">
                </div>
                <div class="qty_bundlingmenu">
                    <label for="qty_menu">Qty</label>
                    <input type="number" name="qty_menu" id="qty_menu">
                </div>
                <input type="hidden" id="bundlingId" name="bundlingId">
            </div>
            <button class="btn-modal-livetopromote" id="submit-btn-statusbundling" type="submit" style="width: 100%; margin-top: 20px;">Simpan</button>
            {{-- <button class="btn-modal-livetopromote" id="submit-btn-statusbundling" type="submit" style="width: 100%; margin-top: 20px; display: none;">Simpan</button> --}}
            {{-- <div class="con-btn-modal-statusbundling" id="delete-btn-statusbundling" >
                <button class="btn-modal-livetopromote" type="submit">Simpan</button>
                <button class="btn-modal-livetopromote" type="button">Hapus</button>
            </div> --}}
        </form>
    </div>
</div>
{{-- @endforeach --}}
{{-- modal-edit --}}

<script>
    // count total price
    document.addEventListener('DOMContentLoaded', function() {
        var checkboxes = document.querySelectorAll('.menu-checkbox');
        var totalItems = document.querySelector('.total-items');
        var totalPrice = document.querySelector('.total-price');

        function updateTotal() {
            var total = 0;
            var itemCount = 0;
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    var price = parseFloat(checkbox.getAttribute('data-menu-price'));
                    var qty = parseInt(checkbox.getAttribute('data-menu-qty'));
                    if (!isNaN(price) && !isNaN(qty)) {
                        total += price * qty;
                        itemCount += qty;
                    }
                }
            });
            totalItems.textContent = itemCount;
            totalPrice.textContent = total.toLocaleString('id-ID'); // Format currency
        }

        // Initial calculation
        updateTotal();

        // Add event listener to each checkbox
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                updateTotal();
            });
        });
    });
    // count total price

    // price input data
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.querySelector('form');
        var priceInput = document.getElementById('price-input');

        form.addEventListener('submit', function(event) {
            // Remove thousand separators before submitting the form
            var rawPrice = priceInput.value.replace(/\./g, '');
            priceInput.value = rawPrice;
        });

        // Optional: Format the input value as currency while typing
        priceInput.addEventListener('input', function() {
            var value = priceInput.value.replace(/\D/g, ''); // Remove non-numeric characters
            priceInput.value = formatNumber(value);
        });

        function formatNumber(number) {
            return new Intl.NumberFormat('id-ID').format(number);
        }
    });
    // price input data

    // modal
    document.addEventListener('DOMContentLoaded', function() {
        var editButtons = document.querySelectorAll('#edit-status-bundling');
        var editModal = document.getElementById('modal-edit-statusbundling');
        var closeEditModal = document.getElementById('close-edit-statusbundling');
        var form = document.getElementById('editStatusBundling');
        var deleteButton = document.getElementById('delete-btn-statusbundling');
        var submitButton = document.getElementById('submit-btn-statusbundling');

        editButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Ambil id dan attribute dari data attribute
                var bundlingId = this.getAttribute('data-bundling-id');
                var old_bundlingId = this.getAttribute('data-bundling-old_id');
                var menuId = this.getAttribute('data-menu-id');
                var menuStatus = this.getAttribute('data-menu-status');
                var menuQty = this.getAttribute('data-menu-qty');

                // Log untuk debugging
                console.log('ID:', menuId);
                console.log('status:', menuStatus);
                console.log('bundlingId:', bundlingId);
                console.log('old_bundlingId:', old_bundlingId);

                document.getElementById('menuId_bundling').value = menuId;
                document.getElementById('bundlingId').value = bundlingId;
                document.getElementById('status_bundling_modal').checked = (menuStatus === 'on_bundling');
                document.getElementById('qty_menu').value = menuQty;

                console.log('form action value: ', form.action);

                editModal.style.display = 'block';
            });
        });

        closeEditModal.addEventListener('click', function() {
            editModal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == editModal) {
                editModal.style.display = 'none';
            }
        });
    });
    // modal
</script>

@endsection