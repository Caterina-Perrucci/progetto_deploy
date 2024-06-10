<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titolo ?? 'GialloAulab'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar />
    @if(session('denied'))
        <div class="alert alert-danger">
            {{ session('denied') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="min-vh-100">
        {{ $slot }}
    </div>
    <x-footer/>
</body>
</html>