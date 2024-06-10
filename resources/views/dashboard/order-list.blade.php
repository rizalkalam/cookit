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
            <div id="mark"></div>
            <a href="/dashboard/product">
                <iconify-icon icon="material-symbols:window-outline-sharp" width="20"></iconify-icon>
                Products
            </a>
        </div>
        <div id="side-menu">
            <div id="mark" class="active"></div>
            <a href="/dashboard/order_list" class="active">
                <iconify-icon class="active" icon="lucide:notebook-pen" width="20"></iconify-icon>
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
    <p class="title-dashboard">Order Lists</p>
    <div class="head-order-list">
        <div class="icn-filter">
            <iconify-icon icon="akar-icons:filter" width="28"></iconify-icon>
        </div>
        <div class="filter-by">
            <p>Filter By</p>
        </div>
        <div class="input-filter-orderlist">
            <select name="languages" id="lang">
                <option value="javascript">JavaScript</option>
                <option value="php">PHP</option>
                <option value="java">Java</option>
            </select>
        </div>
        <div class="input-filter-orderlist">
            <select name="languages" id="lang">
                <option value="javascript">JavaScript</option>
                <option value="php">PHP</option>
                <option value="java">Java</option>
            </select>            
        </div>
        <div class="input-filter-orderlist">
            <select name="languages" id="lang">
                <option value="javascript">JavaScript</option>
                <option value="php">PHP</option>
                <option value="java">Java</option>
            </select>
        </div>
        <div class="reset-filter">
            <iconify-icon icon="carbon:reset" width="20"></iconify-icon>
            <p>Reset Filter</p>
        </div>
    </div>
    <div class="warp-orderlist-table">
        <table id="orderlist">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>ADDRESS</th>
                  <th>DATE</th>
                  <th>TYPE</th>
                  <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>Alfreds Futterkiste</td>
                  <td>Maria Anders</td>
                  <td>Germany</td>
                  <td>tes</td>
                  <td>tes</td>
                  <td>tes</td>
                </tr>
                <tr>
                  <td>Berglunds snabbköp</td>
                  <td>Christina Berglund</td>
                  <td>Sweden</td>
                  <td>tes</td>
                  <td>tes</td>
                  <td>tes</td>
                </tr>
                <tr>
                  <td>Centro comercial Moctezuma</td>
                  <td>Francisco Chang</td>
                  <td>Mexico</td>
                  <td>tes</td>
                  <td>tes</td>
                  <td>tes</td>
                </tr>
                <tr>
                  <td>Ernst Handel</td>
                  <td>Roland Mendel</td>
                  <td>Austria</td>
                  <td>tes</td>
                  <td>tes</td>
                  <td>tes</td>
                </tr>
                <tr>
                  <td>Island Trading</td>
                  <td>Helen Bennett</td>
                  <td>UK</td>
                  <td>tes</td>
                  <td>tes</td>
                  <td>tes</td>
                </tr>
                <tr>
                  <td>Königlich Essen</td>
                  <td>Philip Cramer</td>
                  <td>Germany</td>
                  <td>tes</td>
                  <td>tes</td>
                  <td>tes</td>
                </tr>
                <tr>
                  <td>Laughing Bacchus Winecellars</td>
                  <td>Yoshi Tannamuri</td>
                  <td>Canada</td>
                  <td>tes</td>
                  <td>tes</td>
                  <td>tes</td>
                </tr>
                <tr>
                  <td>Magazzini Alimentari Riuniti</td>
                  <td>Giovanni Rovelli</td>
                  <td>Italy</td>
                  <td>tes</td>
                  <td>tes</td>
                  <td>tes</td>
                </tr>
                <tr>
                  <td>North/South</td>
                  <td>Simon Crowther</td>
                  <td>UK</td>
                  <td>tes</td>
                  <td>tes</td>
                  <td>tes</td>
                </tr>
                <tr>
                  <td>Paris spécialités</td>
                  <td>Marie Bertrand</td>
                  <td>France</td>
                  <td>tes</td>
                  <td>tes</td>
                  <td>tes</td>
                </tr>
            </tbody>
        </table>
        <div class="line-gap-orderlist"></div>
        <p class="showing-txt-orderlist">Showing 1-09 of 78</p>
    </div>
</div>

<script>
    
</script>
@endsection