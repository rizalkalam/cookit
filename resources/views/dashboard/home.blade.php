@extends('layouts.main')
@section('content')   

{{-- sidebar --}}
<div class="wrap-side">
    <div class="sidebar">
        <div class="side-menu" id="side-menu">
            <div id="mark" class="active"></div>
            <a class="active" href="/dashboard/home">
                <iconify-icon class="active" icon="radix-icons:dashboard" width="20"></iconify-icon>
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
    <p class="title-dashboard">Dashboard</p>
    <div class="section-dashboard-home">
        <div class="con-total-customer">
            <div class="content-total-customer">
                <div class="content-count-total-customer">
                    <p>Total Customer</p>
                    <p>{{ $user_count ?? '0' }}</p>
                </div>
                <div class="icon-total-customer">
                    <iconify-icon icon="majesticons:users" width="28"></iconify-icon>
                </div>
            </div>
            <div class="dsc-total-customer">
                <p>{{ $user_percentage_increase ?? '0' }}% Up from yesterday</p>
            </div>
        </div>
        <div class="con-total-customer">
            <div class="content-total-customer">
                <div class="content-count-total-customer">
                    <p>Total Order</p>
                    <p>{{ $order_count ?? '0' }}</p>
                </div>
                <div class="icon-total-customer">
                    <iconify-icon icon="ri:box-3-fill" width="28"></iconify-icon>
                </div>
            </div>
            <div class="dsc-total-customer">
                <p>{{ $order_percentage_increase ?? '0' }}% Up from yesterday</p>
            </div>
        </div>
        <div class="con-total-customer">
            <div class="content-total-customer">
                <div class="content-count-total-customer">
                    <p>Total Sales</p>
                    <p>{{ $order_completed_count ?? '0' }}</p>
                </div>
                <div class="icon-total-customer">
                    <iconify-icon icon="octicon:graph-16" width="28"></iconify-icon>
                </div>
            </div>
            <div class="dsc-total-customer">
                <p>{{ $completed_percentage_increase ?? '0' }}% Up from yesterday</p>
            </div>
        </div>
        <div class="con-total-customer">
            <div class="content-total-customer">
                <div class="content-count-total-customer">
                    <p>Total Canceled</p>
                    <p>{{ $order_rejected_count ?? '0' }}</p>
                </div>
                <div class="icon-total-customer">
                    <iconify-icon icon="material-symbols:history" width="28"></iconify-icon>
                </div>
            </div>
            <div class="dsc-total-customer">
                <p>{{ $rejected_percentage_increase ?? '0' }}% Up from yesterday</p>
            </div>
        </div>
    </div>

    {{-- <div>
        <canvas id="chart"></canvas>
    </div>
    
    <div class="featured-product">
        <div class="meter-warp">
            <img id="MeterBody" class="meter-body" src="/assets/meter-body.svg" alt="">
            <div class="container-meter">
                <img id="MeterHand" class="meter-hand" src="/assets/arrow-meter.svg" alt="">
            </div>
        </div>
    </div> --}}
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/js/speed-meter.js"></script>

<script>
    // line-chart
        var ctx = document.getElementById('chart').getContext('2d');

        // var gradient = ctx.createLinearGradient(0, 0, 0, 500);
        // gradient.addColorStop(0, 'rgb(255, 174, 0)');
        // gradient.addColorStop(1, 'rgba(255, 255, 255, 0.3)');

        var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['5k', '10k', '15k', '20k', '25k', '30k', '35k'],
            datasets: [{
            backgroundColor: '#fff',
            fill: true,
            borderWidth: 2,
            borderColor: '#F46A45',
            pointBackgroundColor: '#F46A45',
            pointBorderWidth: 8,
            data: [12, 19, 3, 5, 2, 3, 4],
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false,
                }
            },
            scales: {
            x: {
                grid: {
                    display: false,
                }
            },
            y: {
                beginAtZero: true
            }
            },
            tension: 0.1
        }
        });
    // end-line-chart
        

  </script>
@endsection