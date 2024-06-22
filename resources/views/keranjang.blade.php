@extends('layouts.main')
@section('content')
    <div class="section-bskt">
        <p class="title-keranjang">Keranjang Belanja</p>
        <div class="on-bskt">
            <div class="head-bskt">
                <div class="head-bskt-con">
                    <div class="checklist-bskt">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    </div>
                    <p>Produk</p>
                </div>
                <div class="head-bskt-con">
                    <p>Harga Satuan</p>
                    <p>Qty</p>
                </div>
            </div>
            <div class="list-bskt">
                <div class="item">
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
                </div>
                <div class="item">
                    <div class="left-list-bskt">
                        <div class="checklist-bskt">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </div>
                        <div class="image">
                          <img src="/assets/1.jpg" alt="" />
                        </div>
                        <div class="description">
                            <p class="title-menu-bskt">Tower Pancake</p>
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
                </div>
            </div>
        </div>
        <div class="archived-bskt">
            <div class="head-bskt">
                <div class="head-bskt-con">
                    <div class="checklist-bskt">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    </div>
                    <p>Arhcived Menu</p>
                </div>
                <a href="">Hapus</a>
            </div>
            <div class="list-bskt">
                <div class="item-archived">
                    <div class="left-list-bskt">
                        <div class="checklist-bskt">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </div>
                        <div class="image">
                          <img src="/assets/1.jpg" alt="" />
                        </div>
                        <div class="description">
                            <p class="title-menu-bskt">Tower Pancake</p>
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
                </div>
                <div class="item-archived">
                    <div class="left-list-bskt">
                        <div class="checklist-bskt">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </div>
                        <div class="image">
                          <img src="/assets/1.jpg" alt="" />
                        </div>
                        <div class="description">
                            <p class="title-menu-bskt">Tower Pancake</p>
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
                </div>
            </div>
        </div>
        
        <div class="sec-total-bskt">
            <div class="right-total-bskt">
                <iconify-icon icon="mdi:voucher-outline" width="40"></iconify-icon>
                <a href="">Masukkan Voucher</a>
            </div>
            <div class="left-total-bskt">
                <p>Total (5 Product)</p>
                <div class="price-con-total-bskt">Rp.<span class="price-bskt" data-unit-price="13000">13000</span></div>
                <a href="/detail/product">
                    <button class="btn-add-db">Add</button>
                </a>
            </div>
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
         function updatePrice($quantityInput) {
            var $item = $quantityInput.closest('.item');
            var unitPrice = parseInt($item.find('.price-bskt').data('unit-price'));
            var quantity = parseInt($quantityInput.val());
            var totalPrice = unitPrice * quantity;
            $item.find('.price-bskt').text(totalPrice.toFixed(2));
        }

        $('.minus-btn-bskt').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('.quantity').find('input');
            var value = parseInt($input.val());

            if (value > 1) {
                value = value - 1;
                $input.val(value);
                updatePrice($input);
            }
        });

        $('.plus-btn-bskt').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('.quantity').find('input');
            var value = parseInt($input.val());

            if (value < 100) {
                value = value + 1;
                $input.val(value);
                updatePrice($input);
            }
        });

        $('.quantity input').on('input', function() {
            var $this = $(this);
            var value = parseInt($this.val());
            if (isNaN(value) || value < 1) {
                $this.val(1);
            } else if (value > 100) {
                $this.val(100);
            }
            updatePrice($this);
        });
    </script>
@endsection