@extends('layouts.main')
@section('content')   

{{-- sidebar --}}
<div class="wrap-side">
    <div class="sidebar">
        <div class="side-menu" id="side-menu">
            <div id="mark"></div>
            <a href="/dashboard/home">
                <iconify-icon icon="mingcute:dashboard-3-line" width="20"></iconify-icon>
                Dashboard
            </a>
        </div>
        <div id="side-menu">
            <div id="mark" class="active"></div>
            <a href="/dashboard/product" class="active">
                <iconify-icon class="active" icon="material-symbols:window-outline-sharp" width="20"></iconify-icon>
                Products
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#contact">
                <iconify-icon icon="lucide:notebook-pen" width="20"></iconify-icon>
                Order
            </a>
        </div>
        <div id="side-menu">
            <div id="mark"></div>
            <a href="#about">
                <iconify-icon icon="typcn:messages" width="20"></iconify-icon>
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
    <p class="title-dashboard">Edit Live Product / Add New</p>
    <div class="container-edit-product">
        <div class="edit-dshb-sec">
            <div class="head-sec-edit-product">
                <p class="title-con-product">#Section 1</p>
                <ul>
                    <li id="live">Live</li>
                </ul>
            </div>
            <div class="warp-row-edit-product">
                <div class="row1-edit-product">
                    <p>Delivery Date</p>
                    <p>Pre Order Opens</p>
                </div>
                <div class="row2-edit-product">
                    <input type="date" value="2017-06-01" />
                    <div class="con-inpt-date">
                        <div class="from-date">
                            <p>From</p>
                            <input type="date" value="2017-06-01" />
                        </div>
                        <div class="until-date">
                            <p>Until</p>
                            <input type="date" value="2017-06-01" />
                        </div>
                    </div>
                </div>
                <div class="row3-edit-product"></div>
                <p class="row4-edit-product">Menu</p>
                <div class="row5-edit-product">
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Appetizer</button>
                    </a>
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Main Course</button>
                    </a>
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Dessert</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="edit-dshb-sec">
            <div class="head-sec-edit-product">
                <p class="title-con-product">#Section 2</p>
                <ul>
                    <li id="live">Live</li>
                </ul>
            </div>
            <div class="warp-row-edit-product">
                <div class="row1-edit-product">
                    <p>Delivery Date</p>
                    <p>Pre Order Opens</p>
                </div>
                <div class="row2-edit-product">
                    <input type="date" value="2017-06-01" />
                    <div class="con-inpt-date">
                        <div class="from-date">
                            <p>From</p>
                            <input type="date" value="2017-06-01" />
                        </div>
                        <div class="until-date">
                            <p>Until</p>
                            <input type="date" value="2017-06-01" />
                        </div>
                    </div>
                </div>
                <div class="row3-edit-product"></div>
                <p class="row4-edit-product">Menu</p>
                <div class="row5-edit-product">
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Appetizer</button>
                    </a>
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Main Course</button>
                    </a>
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Dessert</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="edit-dshb-sec">
            <div class="head-sec-edit-product">
                <p class="title-con-product">#Section 3</p>
                <ul>
                    <li id="live">Live</li>
                </ul>
            </div>
            <div class="warp-row-edit-product">
                <div class="row1-edit-product">
                    <p>Delivery Date</p>
                    <p>Pre Order Opens</p>
                </div>
                <div class="row2-edit-product">
                    <input type="date" value="2017-06-01" />
                    <div class="con-inpt-date">
                        <div class="from-date">
                            <p>From</p>
                            <input type="date" value="2017-06-01" />
                        </div>
                        <div class="until-date">
                            <p>Until</p>
                            <input type="date" value="2017-06-01" />
                        </div>
                    </div>
                </div>
                <div class="row3-edit-product"></div>
                <p class="row4-edit-product">Menu</p>
                <div class="row5-edit-product">
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Appetizer</button>
                    </a>
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Main Course</button>
                    </a>
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Dessert</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="edit-dshb-sec">
            <div class="head-sec-edit-product">
                <p class="title-con-product">#Section 4</p>
                <ul>
                    <li id="empty">Empty</li>
                </ul>
            </div>
            <div class="warp-row-edit-product">
                <div class="row1-edit-product">
                    <p>Delivery Date</p>
                    <p>Pre Order Opens</p>
                </div>
                <div class="row2-edit-product">
                    <input type="date" value="2017-06-01" />
                    <div class="con-inpt-date">
                        <div class="from-date">
                            <p>From</p>
                            <input type="date" value="2017-06-01" />
                        </div>
                        <div class="until-date">
                            <p>Until</p>
                            <input type="date" value="2017-06-01" />
                        </div>
                    </div>
                </div>
                <div class="row3-edit-product"></div>
                <p class="row4-edit-product">Menu</p>
                <div class="row5-edit-product">
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Appetizer</button>
                    </a>
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Main Course</button>
                    </a>
                    <a href="/detail/product">
                        <button class="btn-ordernow-dshb-product">Dessert</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
</script>
@endsection