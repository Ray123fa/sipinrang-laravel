<section class="hero" id="home" style="background-image: url('{{ asset('img/hero.jpg') }}')">
  <div class="flex flex-col justify-center items-center text-center hero-content">
    <h1 class="hero-title">Selamat Datang di Sipinrang STIS</h1>
    <p class="hero-desc">Sistem Informasi Peminjaman Ruang STIS</p>
    <br>

    @if (!Auth::check())
      <a href="{{ route('login') }}" class="px-4 py-2 btn">
        <i class="fas fa-arrow-up-right-from-square"></i>
        Login
      </a>
    @else
      <a href="{{ route('dashboard') }}" class="px-4 py-2 btn">
        <i class="fas fa-arrow-up-right-from-square"></i>
        Dashboard
      </a>
    @endif
  </div>
</section>
