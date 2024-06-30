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
            <div id="mark"></div>
            <a href="/dashboard/product">
                <iconify-icon icon="fluent:box-multiple-checkmark-24-regular" width="20"></iconify-icon>
                Products
            </a>
        </div>
        <div id="side-menu">
            <div id="mark" class="active"></div>
            <a class="active" href="/dashboard/order_list">
                <iconify-icon class="active" icon="hugeicons:note-03" width="20"></iconify-icon>
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
                @foreach ($data as $orderlist)    
                    <tr data-url="/order_list/{{ $orderlist->order_id }}">
                      <td>{{ $orderlist->order_id }}</td>
                      <td>{{ $orderlist->user->name }}</td>
                      <td>{{ $orderlist->addres->complete_address }}</td>
                      <td>{{ \Carbon\Carbon::parse($orderlist->date)->format('d-m-Y') }}</td>
                      <td>{{ $orderlist->menu_type }}</td>
                      <td>
                        @if ($orderlist->status === 'on_processed')
                        <div class="status-pesanan yellow-status">
                            <p>{{ $orderlist->status }}</p>
                        </div>
                        @elseif($orderlist->status === 'in_delivery')
                        <div class="status-pesanan orange-status">
                            <p>{{ $orderlist->status }}</p>
                        </div>
                        @elseif($orderlist->status === 'received' || $orderlist->status === 'completed')
                        <div class="status-pesanan green-status">
                            <p>{{ $orderlist->status }}</p>
                        </div>
                        @elseif($orderlist->status === 'rejected')    
                        <div class="status-pesanan red-status">
                            <p>{{ $orderlist->status }}</p>
                        </div>
                        @endif
                      </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="line-gap-orderlist"></div>
        <p class="showing-txt-orderlist">Showing 1-09 of 78</p>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var rows = document.querySelectorAll('table tr[data-url]');

        rows.forEach(function (row) {
            row.addEventListener('click', function () {
                var url = row.getAttribute('data-url');
                window.location.href = url;
            });
        });
    });
</script>
@endsection