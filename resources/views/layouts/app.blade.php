@props(['title' => 'Sipinrang'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" :class="{ 'theme-dark': dark }" x-data="data()">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    {{ $title === 'Sipinrang' ? 'Sipinrang STIS' : $title . ' | Sipinrang' }}
  </title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  <script src="{{ asset('js/alpinejs-v2.8.2.js') }}" defer></script>
  <script src="{{ asset('js/focus-trap.js') }}"></script>
  <script src="{{ asset('js/init-alpine.js') }}"></script>

  @vite(['resources/css/dashboard.css'])
</head>

<body class="font-sans antialiased">
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <x-side-nav-layout textLogo='SIPINRANG' />
    <div class="flex flex-col flex-1 w-full">
      <x-top-nav-layout />

      <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          {{ $header }}

          {{ $slot }}
        </div>
      </main>
    </div>
  </div>
</body>

</html>
