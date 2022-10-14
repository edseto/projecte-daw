<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Daw Va Go' }}</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body>
    {!! $slot !!}
</body>
</html>