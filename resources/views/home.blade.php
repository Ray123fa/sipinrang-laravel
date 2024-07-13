<x-landing-page-layout>
  <x-landingpage.navbar />
  <main class="relative top-[52px] w-full mb-[5rem] min-h-[100vh]">
    <x-landingpage.hero />
    <div class="content-wrapper">
      <x-landingpage.about />
      <x-landingpage.faq />
      <x-landingpage.service />
    </div>
  </main>
  <x-landingpage.footer />

  <a class="list-none scroll-top shadow-md" onclick="window.scrollTo({top:0});">
    <i class="fas fa-chevron-up"></i>
  </a>
</x-landing-page-layout>
