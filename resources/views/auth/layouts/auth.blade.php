<html>
<head>
    <title>{{ $title ?? '' }}</title>
    @section('head_scripts')
        @include('auth.blocks.auth_head_scripts')
        @include('blocks.head_scripts')
    @show
</head>
<body>
<header class="header  push-down-45">
    @section('header')
        @include('auth.blocks.header_login')
    @show
</header>

<div class="content">
    @section('content')

    @show
</div>
<footer class="footer">
    @include('blocks.footer')
</footer>
</body>
</html>

