

</form>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="http://127.0.0.1:8000/js/product.js" defer></script>
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/main.css">
    </head>
    <body class="antialiased">
        <header class="header">
            <x-header/>
        </header>
        @foreach ($items as $item)
            <x-busket_item :item='$item->product'/>
        @endforeach


        <form action="/busket/pay" method="get">
            <button>Оплатить</button>
        </form>
        <x-footer/>
    </body>
</html>
