<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('custom/css/bootstrap.css')}}">

        <title>{{config('app.name', 'SeriesApp')}}</title>

    </head>
    <body>
        @include('inc.navbar')
            <div class='container mt-3'>
                @include('inc.messages')
                @yield('content')
            </div>

            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>

    </body>
</html>
