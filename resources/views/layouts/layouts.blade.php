<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
 <title>Photography Company Name</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- Css styleSheet --}}
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    {{-- AOS javascript library --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- Font Awesome --}}
    <script src="https://use.fontawesome.com/a9d785a7a5.js"></script>
</head>



<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">

            <p style="padding-top: 75px; padding-bottom:40px; padding-left:55px;">Logo Here!</p>
            <div id="sidebar-wrapper-a">

                <a href="{{ route('home') }}" style="color: #f1f1f1">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('testimonials') }}">What Clients Are Saying</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>

<div>
                <footer>
                    <div class="footer-social-icons">
                        <a href="https://www.facebook.com/alphygacheru1/" target="blank" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/alphygacheru/" class="fa fa-instagram" target="blank"></a>
                        <a href="https://twitter.com/Alphygacheru" class="fa fa-twitter" target="blank"></a>
                    </div>
                    <p style="font-size: 16px;"><small>© 2021 Photography Company Name</small></p>
                </footer>
            </div>




        </div>
        @yield('content')


</body>

</html>
