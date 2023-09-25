<a href="http://127.0.0.1:8000/product/{{$product->id}}" class="product_item">
    <div class="product_item_image_wrapper">
        <img alt="product image" class="product_item_image" src={{$product->image}}>
        <div class="product_item_name">
            {{$product->name}}
        </div>
    </div>
</a>
