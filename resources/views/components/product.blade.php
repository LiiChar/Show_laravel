<div class="product">
    <div class="product_image_wrapper">
        <div alt="product image" class="product_image"  style="background-image: url({{$product->image}})"></div>
        {{-- <img alt="product image" class="product_image" src={{$product->image}}> --}}
        <div class="product_info">
            <div>
                {{$product->name}}
            </div>
            <div>
                {{$product->price}}
            </div>
            <a style="display: inline" href="http://127.0.0.1:8000/busket/{{$product->id}}">
                Добавть в корзин
            </a>
            {{-- <x-modal/>  --}}

        </div>
    </div>
</div>
