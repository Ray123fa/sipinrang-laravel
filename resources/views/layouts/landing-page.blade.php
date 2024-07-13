<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <base href="{{ env('APP_URL') }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

  @vite(['resources/css/home.css', 'resources/js/home.js'])
</head>

<body>
  {{ $slot }}

  {{-- <script src="{{ asset('js/home.js') }}"></script> --}}
  <script src="https://site-assets.fontawesome.com/releases/v6.5.1/js/all.js"></script>
</body>

</html>
