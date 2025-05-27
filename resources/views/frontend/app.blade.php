<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scientific || Tafsir</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/fav-logo.png') }}">
    @include('frontend.layouts.head')
    <style>
        * {
            .tiro-bangla-regular {
                font-family: "Tiro Bangla", serif;
                font-weight: 400;
                font-style: normal;
            }

            .tiro-bangla-regular-italic {
                font-family: "Tiro Bangla", serif;
                font-weight: 400;
                font-style: italic;
            }

        }
    </style>
</head>

<body class="homepage5-body">
    @include('frontend.layouts.loader')
    @include('frontend.layouts.menubar')
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.script')
</body>

</html>
