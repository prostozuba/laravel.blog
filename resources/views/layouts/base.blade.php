<html>
<head>
    <title>{{ $title ?? '' }}</title>
    @section('head_scripts')
        @include('blocks.head_scripts')
    @show
</head>

<body>
<header class="header  push-down-45">
    @section('header')
        @include('blocks.header')
    @show
</header>

<div class="content">
    @section('content')
        @include('blocks.base_content')
    @show
</div>
<footer class="footer">
    @include('blocks.footer')
</footer>
</body>
</html>
