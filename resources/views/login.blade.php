

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
            <div class="register_wrapper">
                <h2 class="form-group-name">Login</h2>
                <form method="POST" action="/store_login">
                    {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div>
                    Если вы не зарегестрированы, <a href="http://127.0.0.1:8000/auth">Зарегестрируйся</a>
                </div>

                <div class="register_button">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <x-footer/>
    </body>
</html>
