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
            <form action="/logout" method="post">
                @csrf
                <button type="submit"><iconify-icon icon="ph:power" width="20"></iconify-icon>
                Logout</button>
            </form>
        </div>
    </div>
</div>
{{-- end-sidebar --}}
<form method="GET" action="/dashboard/order_list">
<div class="dashboard-content">
    <p class="title-dashboard">Order Lists</p>
    <div class="head-order-list">
        <div class="icn-filter">
            <iconify-icon icon="akar-icons:filter" width="28"></iconify-icon>
        </div>
        <div class="filter-by">
            <p>Filter</p>
        </div>
        <div class="reset-filter">
            <input type="date" name="date" value="{{ request('date') }}">
            <button type="submit">Filter data</button>
        </div>
        {{-- <div class="input-filter-orderlist">
            <select name="languages" id="lang">
                <option value="javascript">Date</option>
                <option value="javascript">Oldest</option>
                <option value="php">Latest</option>
            </select>
        </div> --}}
        {{-- <div class="input-filter-orderlist">
            <select name="languages" id="lang">
                <option value="javascript">Order Status</option>
                <option value="php">Completed</option>
                <option value="java">In Delivery</option>
            </select>
        </div>
        <div class="reset-filter">
            <iconify-icon icon="carbon:reset" width="20"></iconify-icon>
            <p>Reset Filter</p>
        </div> --}}
</div>
</form>
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
                @if ($data->isEmpty())
                <tr>
                    <td><h3>Tidak ada data</h3></td>
                    <td><h3>Tidak ada data</h3></td>
                    <td><h3>Tidak ada data</h3></td>
                    <td><h3>Tidak ada data</h3></td>
                    <td><h3>Tidak ada data</h3></td>
                    <td><h3>Tidak ada data</h3></td>
                </tr>
                @else
                @foreach ($data as $orderlist)    
                    <tr data-url="/order_list/{{ $orderlist->order_id }}">
                      <td>{{ $orderlist->order_id }}</td>
                      <td>{{ $orderlist->user->name }}</td>
                      <td>{{ $orderlist->addres->complete_address }}</td>
                      <td>{{ \Carbon\Carbon::parse($orderlist->date)->format('d F Y') }}</td>
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
                  <!-- Pagination Links -->
                  @endif
                </tbody>
            </table>
            {!! $data->links('vendor.pagination.default') !!}
        <div class="line-gap-orderlist"></div>
        {{-- <p class="showing-txt-orderlist">Showing 1-09 of 78</p> --}}
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