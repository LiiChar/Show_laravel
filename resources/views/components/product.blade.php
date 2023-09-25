<a class="product">
    <div class="product_image_wrapper">
        <img alt="product image" class="product_image" src={{$product->image}}>
        <div class="product_name">
            <div>
                {{$product->name}}
            </div>
            <div>
                {{$product->price}}
            </div>
            <button class="toBusket">
                Добавть в корзину
            </button>
            <x-modal-order/> 

        </div>
    </div>
</a>
