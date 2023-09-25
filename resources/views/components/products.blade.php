<main class="main">
    <div class='products'>
        @foreach ($products as $product)
        <x-product_item :product='$product'/>
    @endforeach
    </div>
</main>