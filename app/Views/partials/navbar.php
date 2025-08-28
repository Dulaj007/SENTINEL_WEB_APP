
  <nav class="w-full bg-black text-white" role="navigation" aria-label="Primary">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
      <div class="flex h-16 items-center justify-between">
        <!-- Brand -->
        <a href="#" class="flex items-center gap-3">
          <img src="assets/img/247LogoNoBG.svg" alt="24/7 Sentinel logo" class="h-10 w-10 object-contain" />
          <div class="leading-tight">
            <div class="text-base font-extrabold tracking-wide">
              <span class="text-white">24/7</span>
              <span class="ml-1 bg-gradient-to-r from-[#F6C04D] to-[#B77D12] bg-clip-text text-transparent">SENTINEL</span>
            </div>
            <div class="text-[12px] text-[#B7B7B7]">Live Monitoring</div>
          </div>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center gap-2">
          <a href="#" class="px-3 py-2 text-sm font-semibold rounded-md text-white border-b-2 border-[#F6C04D]">Home</a>
          <a href="#" class="px-3 py-2 text-sm font-semibold rounded-md text-white/90 hover:text-white hover:bg-white/5">About</a>
          <a href="#" class="px-3 py-2 text-sm font-semibold rounded-md text-white/90 hover:text-white hover:bg-white/5">Services</a>
          <a href="#" class="px-3 py-2 text-sm font-semibold rounded-md text-white/90 hover:text-white hover:bg-white/5">Products</a>
          <a href="#" class="px-3 py-2 text-sm font-semibold rounded-md text-white/90 hover:text-white hover:bg-white/5">Portfolio</a>
          <a href="#" class="px-3 py-2 text-sm font-semibold rounded-md text-white/90 hover:text-white hover:bg-white/5">Blog</a>
          <a href="#" class="ml-3 inline-flex items-center rounded-xl px-4 py-2 text-sm font-semibold bg-gradient-to-r from-[#F0C24A] to-[#B77D12] text-black shadow hover:from-[#F5CD63] hover:to-[#C08517]">Contact</a>
        </div>

        <!-- Mobile Hamburger -->
        <button id="nav-toggle" type="button" class="lg:hidden inline-flex items-center justify-center rounded-md p-2 text-white/90 hover:text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-[#F0C24A]/60" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg id="icon-open" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
          <svg id="icon-close" class="hidden h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden border-t border-white/10">
      <div class="space-y-1 px-4 py-3">
        <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-white bg-white/5">Home</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-white/90 hover:text-white hover:bg-white/10">About</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-white/90 hover:text-white hover:bg-white/10">Services</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-white/90 hover:text-white hover:bg-white/10">Products</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-white/90 hover:text-white hover:bg-white/10">Portfolio</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-white/90 hover:text-white hover:bg-white/10">Blog</a>
        <a href="#" class="mt-2 block text-center rounded-xl px-4 py-2 text-base font-semibold bg-gradient-to-r from-[#F0C24A] to-[#B77D12] text-black shadow hover:from-[#F5CD63] hover:to-[#C08517]">Contact</a>
      </div>
    </div>
  </nav>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggle = document.getElementById('nav-toggle');
      const menu = document.getElementById('mobile-menu');
      const openIcon = document.getElementById('icon-open');
      const closeIcon = document.getElementById('icon-close');

      toggle?.addEventListener('click', () => {
        const open = menu.classList.contains('hidden');
        menu.classList.toggle('hidden', !open);
        openIcon.classList.toggle('hidden', open);
        closeIcon.classList.toggle('hidden', !open);
        toggle.setAttribute('aria-expanded', String(open));
      });
    });
  </script>

</html>