@extends('layouts.main')
@section('content')
<div class="head-weekly">
    <div class="left-con1">
        <p><span class="cook-it">Cook It</span> and <span class="eat">Eat</span> on Your Day!</p>
    </div>
    <div class="right-con1">
        <ul class="monthly-links">
            @foreach ($months as $index => $month)    
            <li class="monthly {{ $index === 0 ? 'selected' : '' }}">
                <a href="javascript:void(0);" data-target="section_weekly_{{ $section_id[$index] }}">
                    <p class="month">{{ $month }}</p>
                    <p class="day">{{ $days[$index] }}</p>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@foreach ($sections as $index => $section)
<div class="container-weekly" id="section_weekly_{{ $section->id }}" style="{{ $index !== 0 ? 'display: none;' : '' }}">
    @if (!$section->menu_appetizer && !$section->menu_maincourse && !$section->menu_dessert)
    <div class="section-weekly-null" id="right">
        <h3>
            Data tidak tersedia
        </h3>
    </div>
    @else
        @if ($section->menu_appetizer)
        <form action="/cart/create" method="POST">
            @csrf
            {{-- data-input-to-cart --}}
            <input type="hidden" name="id" value="{{ $section->menu_appetizer->id }}">
            <input type="hidden" name="qty" value="1">
            <input type="hidden" name="total_price" value="{{ $section->menu_appetizer->price }}">
            {{-- data-input-to-cart --}}
                <div class="section-weekly" id="right">
                    <div class="left-con-week">
                        <div class="txt-con">
                            <p class="title-week"><span>Wanna eat hot & spicy</span> {{ $section->menu_appetizer->name }}</p>
                            <p class="dsc-week">{{ $section->menu_appetizer->description }}</p>
                        </div>
                        @auth    
                            <button type="submit" class="btn-placed-order">Proceed to order<img src="/assets/icn-next.svg"></button>
                        @else
                            <button type="button" class="btn-bundle-guest btn-placed-order">Proceed to order<img src="/assets/icn-next.svg"></button>
                        @endauth
                    </div>
                    <div class="con-img">
                        <img src="/{{ $section->menu_appetizer->img_menu }}" alt="">
                    </div>
                </div>
        </form>
        @endif

        @if ($section->menu_maincourse)
        <form action="/cart/create" method="post">
            @csrf
            {{-- data-input-to-cart --}}
            <input type="hidden" name="id" value="{{ $section->menu_maincourse->id }}">
            <input type="hidden" name="qty" value="1">
            <input type="hidden" name="total_price" value="{{ $section->menu_maincourse->price }}">
            {{-- data-input-to-cart --}}
            <div class="section-weekly" id="left">
                <div class="con-img con-img-left">
                    <img src="/{{ $section->menu_maincourse->img_menu }}" alt="">
                </div>
                <div class="right-con-week">
                    <div class="txt-con">
                        <p class="title-week"><span>Celebrate parties with</span> {{ $section->menu_maincourse->name }}</p>
                        <p class="dsc-week">{{ $section->menu_maincourse->description }}</p>
                    </div>
                    @auth    
                        <button type="submit" class="btn-placed-order">Proceed to order<img src="/assets/icn-next.svg"></button>
                    @else
                        <button type="button" class="btn-bundle-guest btn-placed-order">Proceed to order<img src="/assets/icn-next.svg"></button>
                    @endauth
                </div>
            </div>
        </form>
        @endif

        @if ($section->menu_dessert)
        <form action="/cart/create" method="post">
            @csrf
            <div class="section-weekly" id="right">
                <div class="left-con-week">
                    <div class="txt-con">
                        <p class="title-week"><span>Wanna eat hot & spicy</span> {{ $section->menu_dessert->name }}</p>
                        <p class="dsc-week">{{ $section->menu_dessert->description }}</p>
                    </div>
                    @auth    
                        <button type="submit" class="btn-placed-order">Proceed to order<img src="/assets/icn-next.svg"></button>
                    @else
                        <button type="button" class="btn-bundle-guest btn-placed-order">Proceed to order<img src="/assets/icn-next.svg"></button>
                    @endauth
                </div>
                <div class="con-img">
                    <img src="/{{ $section->menu_dessert->img_menu }}" alt="">
                </div>
            </div>
        </form>
        @endif
    @endif
</div>
@endforeach

{{-- modal-popup-guest --}}
<div id="guestModal" style="display: none;">
    <div id="editTosentModal" class="reveal-modal-tutorial">
        <span class="btn-close-modal" id="close-modal-guest"><img src="/assets/close-modal.svg" alt="Close"></span>
        <p>Silahkan login terlebih dahulu</p>
    </div>
</div>
{{-- modal-popup-guest --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
            // Menampilkan modal ketika tombol diklik
            $('.btn-bundle-guest').on('click', function() {
                $('#guestModal').show();
            });

            // Menutup modal ketika tombol close diklik
            $('#close-modal-guest').on('click', function() {
                $('#guestModal').hide();
            });
        });

    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll(".monthly-links li a");
        const sections = document.querySelectorAll(".container-weekly");

        function showSection(sectionId) {
            sections.forEach((section) => {
                if (section.id === sectionId) {
                    section.style.display = "flex";
                } else {
                    section.style.display = "none";
                }
            });
        }

        buttons.forEach((button) => {
            button.addEventListener("click", (e) => {
                e.preventDefault();

                buttons.forEach((btn) => {
                    btn.parentElement.classList.remove("selected");
                });

                button.parentElement.classList.add("selected");

                const targetId = button.getAttribute("data-target");
                showSection(targetId);
            });
        });

        if (sections.length > 0) {
            showSection(sections[0].id);
        }
    });
</script>

@endsection