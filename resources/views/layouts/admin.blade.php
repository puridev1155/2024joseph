<!doctype html>
<html lang="en">
<head>
    @include('layouts.shared/title-meta', ['title' => $title])

    @vite(['resources/js/head.js'])

    @yield('css')

    @include('layouts.shared/head-css')
</head>

<body class="bg-default-50">

@include('layouts.shared/admin-navbar')

@include('layouts.shared/admin-page-title',['title' => $title,'subtitle' => $subtitle])

@yield('content')

@include('layouts.shared/admin-footer')

@include('layouts.shared/back-to-top')

@include('layouts.shared/footer-scripts')

@vite(['resources/js/theme.js'])

</body>
</html>
