<!-- Navbar -->
<nav class="w-full fixed top-0 left-0 z-50 backdrop-blur-md border-b border-[var(--color-dark-2)] xl:border-transparent bg-transparent transition-transform duration-300">

  <div class="max-w-7xl mx-auto flex items-center justify-between px-3 py-4">

    <!-- Center: Brand with Logo -->
    <div class="flex items-center gap-3">
      <a href="<?= base_url('/') ?>" class="">
      <h1 class="text-xl sm:text-2xl font-extrabold flex items-center gap-1">
        <span class="text-[var(--accent-red)] drop-shadow-[0_0_4px_var(--accent-red)] text-2xl uppercase font-semibold tracking-widest  animate-pulse">
          ⬤ 
        </span>
        <span class="text-[var(--text-primary)] drop-shadow-[0_0_2px_var(--text-primary)]">24/7</span>
        <span class="text-[var(--accent-red)] drop-shadow-[0_0_4px_var(--accent-red)]">SENTINEL</span>
      </h1>
      </a>
    </div>

    <!-- Right: Desktop Links -->
    <div class="hidden lg:flex items-center gap-6 font-title">
      <a href="<?= base_url('/') ?>" class="nav-link">Home</a>
      <a href="<?= base_url('/about') ?>" class="nav-link">About</a>
      <a href="<?= base_url('/services') ?>" class="nav-link">Services</a>
      <a href="<?= base_url('/portfolio') ?>" class="nav-link">Portfolio</a>
     
      <a href="<?= base_url('contact') ?>" 
         class="px-4 py-2 flex items-center gap-2 border border-[var(--accent-red)] rounded-2xl
                text-[var(--text-primary)] font-bold hover:text-[var(--text-primary)]
                hover:scale-105 transform transition duration-500
                bg-gradient-animate
                hover:bg-gradient-to-r from-[var(--accent-red)] via-[var(--bg-background)] to-[var(--accent-red)]">
        Contact
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <div class="lg:hidden relative z-50">
      <button id="menu-toggle" class="flex flex-col justify-center items-center w-8 h-8 gap-1.5 focus:outline-none">
        <span class="block w-8 h-0.5 bg-[var(--accent-red)] transition-all duration-500 origin-center"></span>
        <span class="block w-8 h-0.5 bg-[var(--accent-red)] transition-all duration-500 origin-center"></span>
        <span class="block w-8 h-0.5 bg-[var(--accent-red)] transition-all duration-500 origin-center"></span>
      </button>
    </div>

  </div>

  <!-- Mobile Menu -->

</nav>
<!-- Mobile Menu -->
<div id="mobile-menu" class="lg:hidden fixed inset-0 top-0
 bg-transparent backdrop-blur-xl font-title flex flex-col items-center justify-center space-y-6 scale-0 opacity-0 transform transition-all duration-500 z-40">
  <a href="<?= base_url('/') ?>" class="mobile-nav-link text-2xl shadow-2xl">Home</a>
  <a href="<?= base_url('about') ?>" class="mobile-nav-link text-2xl shadow-2xl">About</a>
  <a href="<?= base_url('services') ?>" class="mobile-nav-link text-2xl shadow-2xl">Services</a>
  <a href="<?= base_url('portfolio') ?>" class="mobile-nav-link text-2xl shadow-2xl">Portfolio</a>

  <a href="<?= base_url('contact') ?>" class="mobile-nav-link border border-[var(--accent-red)] rounded-2xl px-6 py-3 text-[var(--text-primary)] hover:bg-[var(--accent-red)] hover:text-[var(--bg-background)] transition">
    Contact
  </a>
</div>

<script>
// Hamburger + Mobile Menu (your existing code)
const toggleBtn = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const spans = toggleBtn.querySelectorAll('span');

let menuOpen = false;

toggleBtn.addEventListener('click', () => {
  menuOpen = !menuOpen;

  // Animate hamburger → X
  if(menuOpen){
    spans[0].classList.add('rotate-45', 'translate-y-2');
    spans[1].classList.add('opacity-0');
    spans[2].classList.add('-rotate-45', '-translate-y-2');
  } else {
    spans[0].classList.remove('rotate-45', 'translate-y-2');
    spans[1].classList.remove('opacity-0');
    spans[2].classList.remove('-rotate-45', '-translate-y-2');
  }

  // Animate mobile menu zoom
  if(menuOpen){
    mobileMenu.classList.remove('scale-0', 'opacity-0');
    mobileMenu.classList.add('scale-100', 'opacity-100');
  } else {
    mobileMenu.classList.remove('scale-100', 'opacity-100');
    mobileMenu.classList.add('scale-0', 'opacity-0');
  }
});

// Highlight current page link
const currentPath = window.location.pathname.replace(/\/$/, '');

document.querySelectorAll('.nav-link, .mobile-nav-link').forEach(link => {
  const linkPath = new URL(link.href).pathname.replace(/\/$/, '');

  if (currentPath === linkPath) {
    link.classList.add('text-[var(--accent-red)]', 'font-bold');
  }
});


// Smart navbar hide/show on scroll
let lastScrollTop = 0;
const navbar = document.querySelector('nav');

window.addEventListener('scroll', () => {
  const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  if(currentScroll > lastScrollTop && currentScroll > 100){
    // Scroll Down → hide navbar
    navbar.classList.add('-translate-y-full');
    navbar.classList.remove('translate-y-0');
  } else {
    // Scroll Up → show navbar
    navbar.classList.remove('-translate-y-full');
    navbar.classList.add('translate-y-0');
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scroll
});
</script>



<!-- Mobile Menu Toggle Script -->
<script>
const toggleBtn = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

toggleBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

// Highlight current page link
const currentURL = window.location.href;
document.querySelectorAll('.nav-link, .mobile-nav-link').forEach(link => {
  if(currentURL.includes(link.getAttribute('href'))) {
    link.classList.add('text-[var(--accent-red)]', 'font-bold');
  }
});
</script>

