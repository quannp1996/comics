<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ @$title ?? 'AdminLTE 3 | Dashboard' }}</title>
    <link rel="manifest" href="/manifest.json" />
    <link rel="manifest" href="/app.webmanifest" crossorigin="use-credentials" />
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
            <x-admin-breadcrumbs></x-admin-breadcrumbs>
            <section class="content">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('failed'))
                    <div class="alert alert-danger">{{ Session::get('failed') }}</div>
                @endif
                @if (Session::has('errors'))
                    <div class="alert alert-danger">{{ Session::get('errors')->first() }}</div>
                @endif
                @yield('content')
            </section>
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
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <script>
        $(function() {
            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state');
            });
            $('.select2').select2();
            $('.lazy').Lazy();
        });
    </script>
    @stack('js_bot_all')
</body>

</html>
