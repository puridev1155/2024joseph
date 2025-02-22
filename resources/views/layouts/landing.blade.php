<!doctype html>
<html lang="en">
<head>
    @include('layouts.shared/title-meta', ['title' => $title])

    @vite(['resources/js/head.js'])

    @yield('css')

    @include('layouts.shared/head-css')
</head>

<body>

@yield('content')

@include('layouts.shared/footer')

@include('layouts.shared/back-to-top')

@include('layouts.shared/footer-scripts')

@vite(['resources/js/theme.js','resources/js/swiper.js'])

</body>
</html>
