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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Тест</a>
                    <ul class="navigation__dropdown">
                        <li><a href="#">Пункт 1</a></li>
                        <li><a href="#">Пункт 2</a></li>
                        <li><a href="#">Пункт 3</a></li>
                        <li><a href="#">Пункт 4</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{route('elements')}}" class="dropdown-toggle" data-toggle="dropdown">Верстка</a>
                </li>
                <li class="">
                    <a href="{{route('about')}}" class="dropdown-toggle" data-toggle="dropdown">Обо мне</a>
                </li>
                <li class="">
                    <a href="{{route('contact')}}" class="dropdown-toggle" data-toggle="dropdown">Обратная связь</a>
                </li>
                <li class="">
                    <a href="{{route('auth.layouts.login')}}" class="dropdown-toggle" data-toggle="dropdown">@if(
                    \Illuminate\Support\Facades\Auth::attempt(['name' => 1])) Выход @endif Вход</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="hidden-xs hidden-sm">
        <a href="#" class="search__container  js--toggle-search-mode"><img src="{{asset('images/search-icon.png')}}" alt="Serch" width="60" height="60"><span class="glyphicon  glyphicon-search"></span> </a>
    </div>
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

