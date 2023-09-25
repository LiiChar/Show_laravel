    <div class="header_wrapper">
        <a href="http://127.0.0.1:8000/" class="header_name">
            CREACTEX
        </a>
        <div class="header_search">
            <input type="search">
        </div>
        <nav class="header_nav">
            @auth
            <a href="http://127.0.0.1:8000/busket">

                <x-bi-basket/>
            </a>
@endauth
@guest
<a href="http://127.0.0.1:8000/auth">Зарегестрироваться</a>
@endguest
            <div>
            </div>
        </nav>
    </div>

