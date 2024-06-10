{{-- post data order --}}
<form action="/order" method="post" >
    @csrf
    <input type="hidden" name="price" id="price" value="{{ $menu->price }}">
    <input type="hidden" name="menu_name" id="menu_name" value="{{ $menu->menu_name }}">
    <input type="hidden" name="customer_first_name" id="customer_first_name" value="{{ auth()->user()->name }}">
    <input type="hidden" name="customer_email" id="customer_email" value="{{ auth()->user()->email }}">
    <button class="btn-order-now" type="submit">Pesan Sekarang</button>
</form>
{{-- end post data order --}}

<script>
    $(document).ready(function() {
    initializeSlick();
    $(window).on('resize', function() {
        initializeSlick();
    });

    const prev_material = document.getElementById('prev-btn-mtrl');
    const next_material = document.getElementById('next-btn-mtrl');
    const list_material = document.getElementById('material-list');

    const itemWidth = 150;
    const padding = 10;

    prev_material.addEventListener('click', () => {
        list_material.scrollLeft -= itemWidth + padding;
    });

    next_material.addEventListener('click', () => {
        list_material.scrollLeft += itemWidth + padding;
    });
    });
</script>