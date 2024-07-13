@props(['class' => ''])

<li class="nav-link py-1">
  <a class="px-4 text-white font-bold hover:underline {{ $class }}" {{ $attributes }}>
    {{ $slot }}
  </a>
</li>
