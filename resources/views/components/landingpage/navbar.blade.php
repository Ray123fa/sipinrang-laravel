<nav
  class="flex justify-between items-center shadow-md px-4 py-2 z-[1000] fixed top-0 left-0 right-0 h-[52px] bg-gradient-primary">
  <div class="flex items-center">
    <img src="img/logo.png" alt="Logo STIS" width="35">
    <span class="nav-brand">Sipinrang</span>
  </div>

  <ul class="flex gap-2 list-none" id="nav-menu">
    <x-landingpage.navlink class="py-2 scroll-link" href="#home">Beranda</x-landingpage.navlink>
    <x-landingpage.navlink class="py-2 scroll-link" href="#about">Tentang</x-landingpage.navlink>
    <x-landingpage.navlink class="py-2 scroll-link" href="#faq">FAQ</x-landingpage.navlink>
    <x-landingpage.navlink class="py-2 scroll-link" href="#services">Layanan</x-landingpage.navlink>
    @if (!Auth::check())
      <x-landingpage.navlink class="py-1" href="{{ route('login') }}">
        <i class="fas fa-arrow-right-to-bracket"></i>
        Login
      </x-landingpage.navlink>
    @else
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-landingpage.navlink class="py-1" href="{{ route('logout') }}"
          onclick="event.preventDefault(); this.closest('form').submit();">
          <i class="fas fa-arrow-right-from-bracket"></i>
          Logout
        </x-landingpage.navlink>
      </form>
    @endif
  </ul>

  <span class="z-[1000] hidden text-white text-[1.25rem]" id="mobile-nav"><i class="fas fa-bars-staggered"></i></span>
</nav>
