<div class="container">
    <div class="logo pull-left">
        <a href="{{url('cabinet')}}">
            <img src="{{asset('images/logo.png')}}" alt="Logo" width="352" height="140">
        </a>
    </div>
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#readable-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="collapse  navbar-collapse" id="readable-navbar-collapse">
            <ul class="navigation">
                <li class="dropdown active">
                    <a href="{{route('index')}}" class="dropdown-toggle" data-toggle="dropdown">Главная</a>
                </li>
                <li class="dropdown">
                    <a href="{{route('authabout')}}" class="dropdown-toggle" data-toggle="dropdown">Кто я?</a>
                </li>
                <li class="">
                    <a href="{{route('authcontact')}}" class="dropdown-toggle" data-toggle="dropdown">Написать мне</a>
                </li>
                <li class="">
                    <a href="{{route('registerform')}}" class="dropdown-toggle" data-toggle="dropdown">Регистрация</a>
                </li>
                <li class="">
                    <a href="{{route('auth.layouts.login')}}" class="dropdown-toggle" data-toggle="dropdown">Вход</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="search-panel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form action="{{route('search')}}">
                    <input type="text" class="search-panel__form  js--search-panel-text" placeholder="Что ищем?">
                    <p class="search-panel__text">Нажите Enter для поиска или ESC для выхода.</p>
                </form>
            </div>
        </div>
    </div>
</div>

