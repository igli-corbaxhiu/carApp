<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Heroic Features - Start Bootstrap Template</title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body>

<div id="app">
    <app></app>
</div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>



{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--   @include('heroic.layout.head')--}}
{{--</head>--}}
{{--<body>--}}
{{--<!-- Responsive navbar-->--}}
{{--@include('heroic.layout.navbar')--}}
{{--<!-- Header-->--}}
{{--@include('heroic.layout.header')--}}
{{--<!-- Page Content-->--}}
{{--@yield('content')--}}
{{--<!-- Footer-->--}}
{{--@include('heroic.layout.footer')--}}
{{--<!-- Bootstrap core JS-->--}}
{{--@include('heroic.layout.scripts')--}}

{{--</body>--}}
{{--</html>--}}
<script>
    import App from "../../js/App";
    export default {
        components: {App}
    }
</script>
