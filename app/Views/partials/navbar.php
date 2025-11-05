<!-- NAVBAR -->
<nav id="main-nav"
     class="w-full fixed top-0 left-0 z-50 bg-[rgba(0,0,0,0.5)] backdrop-blur-md text-[var(--color-white)]
            shadow-lg transition-transform duration-300 ease-in-out will-change-transform"
     role="navigation" aria-label="Primary"
     style="font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;">

  <div class="mx-auto max-w-7xl px-4 lg:px-8">
    <div class="flex h-20 items-center justify-between">

      <!-- Brand -->
      <a href="#" class="flex items-center gap-3">
        <img src="assets/icons/logo.png" alt="24/7 Sentinel logo" class="h-14 w-14 object-contain" />
        <div class="leading-tight">
          <div class="text-lg font-extrabold tracking-wide">
            <span class="text-[var(--color-white)]">24/7</span>
            <span class="ml-1 bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] bg-clip-text text-transparent">
              SENTINEL
            </span>
          </div>
          <div class="text-[13px] text-[var(--color-white-60)]">Live Monitoring</div>
        </div>
      </a>

  <!-- Desktop Menu -->
  <div class="hidden lg:flex items-center gap-4">
    <a href="<?= base_url('/') ?>"
      class="px-4 py-2 text-[15px] font-semibold rounded-md <?= set_active('') ?>">
      Home
    </a>
    <a href="<?= base_url('about') ?>"
      class="px-4 py-2 text-[15px] font-semibold rounded-md hover:text-[var(--color-white)] hover:bg-[rgba(255,255,255,0.08)] transition <?= set_active('about') ?>">
      About
    </a>
    <a href="<?= base_url('services') ?>"
      class="px-4 py-2 text-[15px] font-semibold rounded-md hover:text-[var(--color-white)] hover:bg-[rgba(255,255,255,0.08)] transition <?= set_active('services') ?>">
      Services
    </a>
    <a href="<?= base_url('portfolio') ?>"
      class="px-4 py-2 text-[15px] font-semibold rounded-md hover:text-[var(--color-white)] hover:bg-[rgba(255,255,255,0.08)] transition <?= set_active('portfolio') ?>">
      Portfolio
    </a>
    <a href="<?= base_url('blog') ?>"
      class="px-4 py-2 text-[15px] font-semibold rounded-md hover:text-[var(--color-white)] hover:bg-[rgba(255,255,255,0.08)] transition <?= set_active('blog') ?>">
      Blog
    </a>

    <!-- Quick Contact Icons (desktop) -->
    <div class="flex items-center gap-3 ml-4">
      <!-- Facebook -->
      <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook"
        class="p-1 rounded-md text-[var(--color-white-80)] hover:text-[var(--color-yellow)] transition">
        <img src="assets/icons/fb-logo.png" alt="24/7 Sentinel logo" class="h-6 w-6 object-contain" />
      </a>

      <!-- WhatsApp -->
      <a href="https://wa.me/947XXXXXXXX" target="_blank" rel="noopener" aria-label="WhatsApp"
        class="p-1 rounded-md text-[var(--color-white-80)] hover:text-[var(--color-green)] transition">
        <img src="assets/icons/wp-logo.png" alt="24/7 Sentinel logo" class="h-6 w-6 object-contain" />
      </a>
    </div>

    <!-- Contact Button -->
    <a href="<?= base_url('contact') ?>"
      class="ml-4 bg-gradient-animate inline-flex items-center rounded-xl px-6 py-2 text-[15px] font-bold
            bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)]
          text-[var(--color-black)] shadow-md hover:brightness-110 transition hover:text-white hover:scale-105 transform duration-500">    
      Contact
    </a>
  </div>

      <!-- Mobile Hamburger -->
      <button id="nav-toggle" type="button"
              class="lg:hidden inline-flex items-center justify-center rounded-md p-1
                  text-[var(--color-white-80)] hover:text-[var(--color-white)] hover:bg-[rgba(255,255,255,0.15)]
                    focus:outline-none focus:ring-2 focus:ring-[var(--color-yellow)] focus:ring-opacity-60 transition"
              aria-controls="mobile-menu" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg id="icon-open" class="h-7 w-7" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
        <svg id="icon-close" class="hidden h-7 w-7" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>
  </div>
</nav>

<!-- MOBILE MENU OVERLAY -->
<div id="mobile-menu"
     class="lg:hidden fixed inset-0 z-40 bg-[var(--color-black)] bg-opacity-95
            flex flex-col items-center justify-center space-y-6 text-center text-lg
            opacity-0 pointer-events-none transform -translate-y-4 transition-all duration-250 ease-in-out">
  <!-- White close button (top-right) -->
  <button id="mobile-close"
          class="absolute top-6 right-6 bg-white text-black rounded-full w-10 h-10 flex items-center justify-center shadow-lg"
          aria-label="Close menu">
    <span class="text-2xl leading-none">&times;</span>
  </button>



  <!-- Navigation Links -->
<a href="<?= base_url('/') ?>"
   class="block px-4 py-2 font-semibold hover:text-[var(--color-yellow)] transition <?= set_active('') ?>">
  Home
</a>
<a href="<?= base_url('about') ?>"
   class="block px-4 py-2 font-semibold hover:text-[var(--color-yellow)] transition <?= set_active('about') ?>">
  About
</a>
<a href="<?= base_url('services') ?>"
   class="block px-4 py-2 font-semibold hover:text-[var(--color-yellow)] transition <?= set_active('services') ?>">
  Services
</a>
<a href="<?= base_url('portfolio') ?>"
   class="block px-4 py-2 font-semibold hover:text-[var(--color-yellow)] transition <?= set_active('portfolio') ?>">
  Portfolio
</a>
<a href="<?= base_url('blog') ?>"
   class="block px-4 py-2 font-semibold hover:text-[var(--color-yellow)] transition <?= set_active('blog') ?>">
  Blog
</a>
  <!-- Social Icons inside the menu list -->
  <div class="flex items-center justify-center gap-6 mt-6">
    <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook"
       class="p-2 rounded-full bg-[rgba(255,255,255,0.1)] text-white hover:text-[var(--color-yellow)] transition">
      <img src="assets/icons/fb-logo.png" alt="24/7 Sentinel logo" class="h-6 w-6 object-contain" />
    </a>
    <a href="https://wa.me/947XXXXXXXX" target="_blank" rel="noopener" aria-label="WhatsApp"
       class="p-2 rounded-full bg-[rgba(255,255,255,0.1)] text-white hover:text-[var(--color-green)] transition">
       <img src="assets/icons/wp-logo.png" alt="24/7 Sentinel logo" class="h-6 w-1-6 object-contain" />
    </a>
  </div>

  <!-- Contact Button -->
<a href="<?= base_url('contact') ?>"
   class="mt-6 inline-block rounded-xl px-6 py-2 font-semibold
          bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)]
          text-[var(--color-black)] shadow-md hover:brightness-110 transition">
  Contact
</a>
</div>

<!-- Mobile nav bar script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('nav-toggle');
    const menu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('icon-open');
    const closeIcon = document.getElementById('icon-close');
    const mobileClose = document.getElementById('mobile-close');
    const nav = document.getElementById('main-nav');

    let menuOpen = false;

    function openMenu() {
      menuOpen = true;
      menu.style.opacity = '1';
      menu.style.pointerEvents = 'auto';
      menu.style.transform = 'translateY(0)';

      openIcon.classList.add('hidden');
      closeIcon.classList.remove('hidden');

      nav.style.transform = 'translateY(0)';
 
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      menuOpen = false;

      menu.style.opacity = '0';
      menu.style.pointerEvents = 'none';
      menu.style.transform = 'translateY(-8px)';

      openIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
  
      document.body.style.overflow = '';
    }

    toggle?.addEventListener('click', () => {
      if (menuOpen) closeMenu();
      else openMenu();
    });

    mobileClose?.addEventListener('click', () => closeMenu());

   
    menu?.addEventListener('click', (e) => {
      if (e.target === menu) closeMenu();
    });

   
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && menuOpen) closeMenu();
    });


    let lastScroll = window.pageYOffset || 0;
    window.addEventListener('scroll', () => {
      if (menuOpen) return; 
      const currentScroll = window.pageYOffset || 0;
      if (currentScroll > lastScroll && currentScroll > 80) {
     
        nav.style.transform = 'translateY(-100%)';
      } else {
        
        nav.style.transform = 'translateY(0)';
      }
      lastScroll = currentScroll;
    }, { passive: true });
  });
</script>
