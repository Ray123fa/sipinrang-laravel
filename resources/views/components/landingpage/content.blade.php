@props([
    'class' => '',
    'id' => '',
    'title' => '',
])

<section class="content {{ $class }}" id="{{ $id }}">
  <h2 class="content-title text-center">{{ $title }}</h2>
  <div class="horizontal-line"></div>

  {{ $slot }}
</section>
