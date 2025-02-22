<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    @livewireStyles
    <!-- Include any other stylesheets here -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <div>
            {!! (new \League\CommonMark\CommonMarkConverter())->convertToHtml($post->content) !!}
        </div>
    </div>

    @livewireScripts
    <!-- Include the custom JavaScript file -->
    <script src="{{ asset('js/editor.js') }}"></script>
</body>
</html>