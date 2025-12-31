<!-- About Us Hero Section -->
<section id="about-hero" class="relative w-full h-[80vh] flex items-center text-white overflow-hidden">

  <!-- Background Image -->
  <div class="absolute inset-0">
    <img src="<?= getenv('app.baseURL') ?>assets/img/hero_aboutus.jpg"
         alt="About Sentinel Background"
         class="w-full h-full object-cover object-center">
    <!-- Global dark overlay (very subtle) -->
    <div class="absolute inset-0 bg-black/80"></div>
  </div>

  <!-- Hero Content -->
  <div class="relative z-10 flex flex-col items-start text-left px-8 sm:px-16 md:px-24 max-w-3xl">
    
    <!-- Transparent dark background behind text -->
    
      <!-- Title -->
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">
        <span class="text-[var(--color-white)]">ABOUT</span>
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--color-yellow)] via-[var(--color-red)] to-[var(--color-yellow)]">
          24/7 SENTINEL
        </span>
      </h1>

      <!-- Subtitle -->
      <p class="text-base sm:text-lg md:text-xl text-[var(--color-white-80)] leading-relaxed mb-8 max-w-2xl">
        Leading the future of professional CCTV monitoring with cutting-edge technology 
        and an unwavering commitment to security excellence.
      </p>

      <!-- Buttons -->
      <div class="flex flex-col sm:flex-row gap-4">
        <!-- Start Monitoring Button -->
        <a href="<?= base_url('contact') ?>"
           class="flex items-center gap-2 px-8 py-3 font-semibold rounded-[10px] text-[var(--color-white)]
                  bg-gradient-to-r from-[var(--color-orange-dark)] via-[var(--color-yellow)] to-[var(--color-red)]
                  bg-gradient-animate hover:opacity-90 transition transform duration-500 hover:scale-105">
          <img src="<?= getenv('app.baseURL') ?>assets/icons/whiteShield.png" alt="Shield Icon" class="w-5 h-5">
          Start Monitoring
        </a>

        <!-- Watch Demo Button -->
        <a href="<?= base_url('services') ?>"
           class="flex items-center gap-2 px-8 py-3 border border-[var(--color-yellow)] text-[var(--color-white)] font-semibold rounded-[10px]
                  hover:bg-[var(--color-white)] hover:text-[var(--color-yellow)] hover:opacity-90 transition transform duration-500 hover:scale-105">
          <img src="<?= getenv('app.baseURL') ?>assets/icons/yellowarrow.png" alt="Arrow Icon" class="w-5 h-5">
          Watch Demo
        </a>
      </div>
    
  </div>
</section>
