<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    @if (!empty($materialCss))
        @foreach ($materialCss as $css)
            <link rel="stylesheet" href="{{ $css }}">
        @endforeach
    @endif
    @stack('css_bot_all')
</head>

<body class="{{ !empty($bodyClass) ? $bodyClass : '' }}">
    <div class="wrapper">

        <x-admin-menus></x-admin-menus>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    @foreach ($materialJs as $jsItem)
        <script src="{{ $jsItem }}"></script>
    @endforeach
    @stack('js_bot_all')
</body>

</html>
