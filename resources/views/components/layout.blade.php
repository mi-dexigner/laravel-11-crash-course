<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Note Book' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
@session('message')
        <div class="success-message">
            {{ session('message') }}
        </div>
    @endsession
{{ $slot }}
</body>
</html>