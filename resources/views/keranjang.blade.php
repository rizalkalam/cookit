@extends('layouts.main')
@section('content')
<form action="/order" method="POST">
    @csrf
    <div class="section-bskt">
        <p class="title-keranjang">Keranjang Belanja</p>
        <div class="on-bskt">
            <div class="head-bskt">
                <div class="head-bskt-con">
                    <p>Produk</p>
                </div>
                <div class="head-bskt-con">
                    <p>Harga Satuan</p>
                    <p>Qty</p>
                </div>
            </div>
            <div class="list-bskt">
                @if ($cart_products->isEmpty() && $cart_bundlings->isEmpty())
                    <div class="item">
                        <div class="left-list-bskt">
                            <h3>Tidak ada barang</h3>
                        </div>
                        <div class="right-list-bskt"></div>
                    </div>
                @else
                    @foreach ($cart_products as $item)
                        <div class="item" data-id-cart="{{ $item->id }}">
                            <div class="left-list-bskt">
                                <div class="image">
                                    <img src="/{{ $item->menu->img_menu }}" alt="" />
                                </div>
                                <div class="description">
                                    <p class="title-menu-bskt">{{ $item->menu->name }}</p>
                                    <p class="dsc-menu-bskt">{{ $item->menu->description }}</p>
                                </div>
                            </div>
                            <div class="right-list-bskt">
                                <div class="price-con-bskt">Rp.<span class="unit-price-bskt" data-unit-price="{{ $item->menu->price }}">{{ number_format($item->menu->price, 0, ',', '.') }}</span></div>
                                <div class="end-con-list-bskt">
                                    <div class="quantity">
                                        <button class="minus-btn-bskt" type="button" name="button" data-cart-id="{{ $item->id }}">
                                            <iconify-icon icon="ic:baseline-minus" width="12"></iconify-icon>
                                        </button>
                                        <input type="text" name="quantities[{{ $item->id }}]" class="quantity-input" value="{{ $item->qty }}">
                                        <input type="hidden" class="total_qty" name="qty[{{ $item->id }}]" value="{{ $item->qty }}">
                                        <button class="plus-btn-bskt" type="button" name="button" data-cart-id="{{ $item->id }}">
                                            <iconify-icon icon="material-symbols:add" width="12"></iconify-icon>
                                        </button>
                                    </div>
                                    <a href="#" class="delete-item-cart" id="btn-delete-cart" data-id="{{ $item->id }}">Delete</a>
                                </div>
                            </div>
                        </div>
                        {{-- input --}}
                        <input type="hidden" name="cart_id[]" value="{{ $item->id }}">
                        <input type="hidden" name="shipping_cost" value="{{ auth()->user()->addres->district->shipping_cost }}">
                        <input type="hidden" name="total_price" value="{{ $cart_products->sum(fn($item) => $item->menu->price * $item->qty) }}">
                        <input type="hidden" name="price" value="{{ $cart_products->sum(fn($item) => $item->menu->price * $item->qty) + auth()->user()->addres->district->shipping_cost }}">
                        <input type="hidden" name="menu_name[]" value="{{ $item->menu->name }}">
                        <input type="hidden" name="menu_type[]" value="{{ $item->menu->type->name_type }}">
                        <input type="hidden" name="bundling[]" value="">
                        <input type="hidden" name="customer_first_name" value="{{ $item->user->name }}">
                        <input type="hidden" name="customer_email" value="{{ $item->user->email }}">
                        <input type="hidden" name="customer_address" value="{{ auth()->user()->addres->complete_address }}">
                        {{-- input --}}
                    @endforeach

                    @foreach ($cart_bundlings as $item)
                        <div class="item" data-id-cart="{{ $item->id }}">
                            <div class="left-list-bskt">
                                <div class="image">
                                    <img src="/assets/card3-sec2.png" alt="" />
                                </div>
                                <div class="description">
                                    <p class="title-menu-bskt">{{ $item->bundling->bundling_name }}</p>
                                    <div class="bundling-badge">
                                        <p>Bundling</p>
                                    </div>
                                    <p class="dsc-menu-bskt">Paket Bundling</p>
                                </div>
                            </div>
                            <div class="right-list-bskt">
                                <div class="price-con-bskt">Rp.<span class="unit-price-bskt" data-unit-price="{{ $item->total_price }}">{{ number_format($item->total_price, 0, ',', '.') }}</span></div>
                                <div class="end-con-list-bskt">
                                    <div class="quantity">
                                        <button class="minus-btn-bskt" type="button" name="button" data-cart-id="{{ $item->id }}">
                                            <iconify-icon icon="ic:baseline-minus" width="20"></iconify-icon>
                                        </button>
                                        <input type="text" name="quantities[{{ $item->id }}]" class="quantity-input" value="{{ $item->qty }}">
                                        <input type="hidden" class="total_qty" name="qty[{{ $item->id }}]" value="{{ $item->qty }}">
                                        <button class="plus-btn-bskt" type="button" name="button" data-cart-id="{{ $item->id }}">
                                            <iconify-icon icon="material-symbols:add" width="20"></iconify-icon>
                                        </button>
                                    </div>
                                    <a href="#" class="delete-item" id="btn-delete-cart" data-id="{{ $item->id }}">Delete</a>
                                </div>
                            </div>
                        </div>
                        {{-- input --}}
                        <input type="hidden" name="cart_id[]" value="{{ $item->id }}">
                        <input type="hidden" name="shipping_cost" value="{{ auth()->user()->addres->district->shipping_cost }}">
                        <input type="hidden" name="total_price" value="{{ number_format($cart_products->sum(fn($item) => $item->menu->price * $item->qty) + $cart_bundlings->sum('total_price'), 0, ',', '.') }}">
                        <input type="hidden" name="price" value="{{ $cart_products->sum(fn($item) => $item->menu->price * $item->qty) + $cart_bundlings->sum('total_price') + auth()->user()->addres->district->shipping_cost }}">
                        <input type="hidden" name="menu_name[]" value="{{ $item->bundling->bundling_name }}">
                        <input type="hidden" name="menu_type[]" value="Bundling">
                        <input type="hidden" name="customer_first_name" value="{{ auth()->user()->name }}">
                        <input type="hidden" name="customer_email" value="{{ auth()->user()->email }}">
                        <input type="hidden" name="customer_address" value="{{ auth()->user()->addres->complete_address }}">
                        {{-- input --}}
                    @endforeach
                @endif
            </div>
        </div>
        <div class="sec-total-bskt">
            <div class="right-total-bskt"></div>
            <div class="left-total-bskt">
                <p>Total (<span class="total-items">{{ $totalQty = $cart_products->sum('qty') + $cart_bundlings->sum('qty') }}</span> Produk)</p>
                <div class="price-con-total-bskt">
                    Rp.<span class="total-price">
                        {{ number_format($cart_products->sum(fn($item) => $item->menu->price * $item->qty) + $cart_bundlings->sum('total_price') + auth()->user()->addres->district->shipping_cost, 0, ',', '.') }}
                    </span>
                </div>
                <button type="submit" class="btn-checkout">Check Out</button>
            </div>
        </div>
    </div>
</form>

{{-- modal-popup-cart --}}
<div id="deleteModal" style="display: none;">
    <div id="editTosentModal" class="reveal-modal-tutorial">
        <span class="btn-close-modal" id="close-delete-address_user"><img src="/assets/close-modal.svg" alt="Close"></span>
        <p>Anda yakin ingin menghapus item ini dari keranjang?</p>
        
        {{-- Form untuk menghapus item --}}
        <form action="" method="POST" id="deleteFormCart">
            @csrf
            @method('DELETE')
            <input type="hidden" name="cartId_delete" id="cartId_delete">
            <button type="submit" class="btn-delete">Hapus</button>
        </form>
    </div>
</div>
{{-- modal-popup-cart --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // refresh
    window.addEventListener('pageshow', function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    });

    function formatCurrency(number) {
        return new Intl.NumberFormat('id-ID', {
            style: 'decimal',
            minimumFractionDigits: 0
        }).format(number);
    }

    function updatePrice($quantityInput) {
        var $item = $quantityInput.closest('.item');
        var unitPrice = parseFloat($item.find('.unit-price-bskt').data('unit-price'));
        var quantity = parseInt($quantityInput.val(), 10);
        var totalPrice = unitPrice * quantity;
        $item.find('.total-price-bskt').text(formatCurrency(totalPrice));
        updateTotalPrice();
        updateTotalItems();
    }

    function updateTotalPrice() {
        var total = 0;
        $('.item').each(function() {
            var unitPrice = parseFloat($(this).find('.unit-price-bskt').data('unit-price'));
            var quantity = parseInt($(this).find('input[type="text"]').val(), 10);
            if (!isNaN(unitPrice) && !isNaN(quantity)) {
                total += unitPrice * quantity;
            }
        });
        $('.price-con-total-bskt .total-price').text(formatCurrency(total));
    }

    function updateTotalItems() {
        var totalItems = 0;
        $('.item').each(function() {
            var quantity = $(this).find('.quantity-input').val();
            var parsedQuantity = parseInt(quantity, 10);

            if (!isNaN(parsedQuantity) && parsedQuantity > 0) {
                totalItems += parsedQuantity;
            }
            
            $(this).find('.total_qty').val(parsedQuantity);
        });

        $('.total-items').text(totalItems);
    }

    // Handle minus button click
    $('.minus-btn-bskt').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $item = $this.closest('.item');
        var $input = $item.find('input[type="text"]');
        var value = parseInt($input.val(), 10);

        if (value > 1) {
            value = value - 1;
            $input.val(value);
            updatePrice($input);
            updateTotalItems();
        }
    });

    // Handle plus button click
    $('.plus-btn-bskt').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $item = $this.closest('.item');
        var $input = $item.find('input[type="text"]');
        var value = parseInt($input.val(), 10);

        if (value < 100) {
            value = value + 1;
            $input.val(value);
            updatePrice($input);
            updateTotalItems();
        }
    });

    // Handle manual input change
    $('.quantity input').on('input', function() {
        var $this = $(this);
        var value = parseInt($this.val(), 10);

        if (isNaN(value) || value < 1) {
            $this.val(1);
        } else if (value > 100) {
            $this.val(100);
        }
        updatePrice($this);
        updateTotalItems();
    });

    // Initialize #total_qty value on page load based on existing input values
    $(document).ready(function() {
        updateTotalItems();
    });

    // Modal delete
    document.addEventListener('DOMContentLoaded', function() {
        var delButtons = document.querySelectorAll('#btn-delete-cart');
        var delModal = document.getElementById('deleteModal');
        var closeDelModal = document.getElementById('close-delete-address_user');
        var deleteForm = document.getElementById('deleteFormCart');

        delButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var cartId = this.getAttribute('data-id');

                deleteForm.action = "/cart/delete/" + cartId;
                document.getElementById('cartId_delete').value = cartId;

                delModal.style.display = 'block';
            });
        });

        closeDelModal.addEventListener('click', function() {
            delModal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == delModal) {
                delModal.style.display = 'none';
            }
        });
    });
</script>

@endsection

{{-- input --}}
                            {{-- <input type="hidden" name="cart_id[]" value="{{ $item->id }}">
                            <input type="hidden" name="shipping_cost" value="{{ $shippingCost = auth()->user()->addres->district->shipping_cost }}">
                            <input type="hidden" name="total_price" value="{{ $subtotal = $cart_products->sum(function($item) { return $item->menu->price * $item->qty; }) }}">
                            <input type="hidden" name="price" value="{{ $subtotal + $shippingCost }}">
                            <input type="hidden" name="qty[]" value="{{ $item->qty }}">
                            <input type="hidden" name="menu_name[]" value="{{ $item->menu->name }}">
                            <input type="hidden" name="menu_type[]" value="{{ $item->menu->type->name_type }}">
                            <input type="hidden" name="customer_first_name" value="{{ $item->user->name }}">
                            <input type="hidden" name="customer_email" value="{{ $item->user->email }}">
                            <input type="hidden" name="customer_address" value="{{ auth()->user()->addres->complete_address }}"> --}}
{{-- input --}}


{{-- <div class="item">
                    <div class="left-list-bskt">
                        <div class="checklist-bskt">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </div>
                        <div class="image">
                          <img src="/assets/1.jpg" alt="" />
                        </div>
                        <div class="description">
                            <p class="title-menu-bskt">Tower Pancake</p>
                            <div class="bundling-badge">
                                <p>Bundling</p>
                            </div>
                            <p class="dsc-menu-bskt">Pair up with a friend and enjoy the 
                                hot and crispy pizza pops. Try it 
                                with the best deals.</p>
                        </div>
                    </div>
                    <div class="right-list-bskt">
                        <div class="price-con-bskt">Rp.<span class="price-bskt" data-unit-price="13000">13000</span></div>
                        <div class="end-con-list-bskt">
                            <div class="quantity">
                              <button class="minus-btn-bskt" type="button" name="button">
                                  <iconify-icon icon="ic:baseline-minus" width="20"></iconify-icon>
                              </button>
                              <input type="text" name="name" value="1">
                              <button class="plus-btn-bskt" type="button" name="button">
                                  <iconify-icon icon="material-symbols:add" width="20"></iconify-icon>
                              </button>
                            </div>
                            <a href="">Delete</a>
                        </div>
                    </div>
                </div> --}}