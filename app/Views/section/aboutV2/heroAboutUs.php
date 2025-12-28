<!-- ============================================ -->
<!-- ABOUT US HERO SECTION - MATCHING HOME STYLE -->
<!-- ============================================ -->
<section id="about-hero" class="relative w-full h-screen flex items-center overflow-hidden">

  <!-- Full Background Image -->
  <div class="absolute -inset-1">
    <img src="<?= base_url('SENTINEL/public_html/assets/img/hero_aboutus.jpg') ?>" 
         alt="About Hero Background" 
         class="w-full h-full object-cover object-center">
    <!-- Dark overlay for better text contrast -->
    <div class="absolute inset-0 bg-black/90"></div>
  </div>

  <!-- Hero Content (Left Aligned) -->
  <div class="relative z-10 w-full xl:w-1/2 flex flex-col justify-center px-8 lg:px-20 py-20">
    
    <!-- 🏢 Building/Company Icon -->
    <div class="mb-1 animate-float">
      <svg class="w-[15vh] xl:w-[10vh] xl:h-[10vh] h-[15vh] text-[var(--accent-red)] drop-shadow-[0_0_12px_rgba(255,59,63,0.6)]"
           fill="currentColor"
           viewBox="0 0 24 24"
           xmlns="http://www.w3.org/2000/svg">
        <path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/>
      </svg>
    </div>

    <!-- Tagline -->
    <span class="text-[var(--accent-red)] text-sm uppercase font-semibold tracking-widest mb-2 animate-pulse">
      ⬤ About Our Company
    </span>

    <!-- Main Headline -->
    <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-[var(--text-primary)] mb-2 leading-tight">
      &nbsp;About&nbsp;<span class="text-[var(--accent-red)]"><br class="block lg:hidden">&nbsp;24/7</span>
      <span class=""><br class="hidden lg:block">&nbsp;SENTINEL<br class="block lg:hidden">&nbsp;<span class="text-[var(--accent-red)]">SECURITY</span></span>
      <span class="absolute h-[36px] lg:h-[45px] w-[4px] bg-[var(--accent-red)] animate-blink"></span>
    </h1>

    <!-- Subtitle -->
    <p class="text-[var(--text-secondary)] w-2/3 xl:w-3/3 text-base sm:text-xl mb-7 ml-2 leading-snug italic">
      Leading the future of professional CCTV monitoring with cutting-edge technology 
      and an unwavering commitment to security excellence.
    </p>

    <!-- Buttons -->
    <div class="flex flex-col sm:flex-row gap-4">
      <a href="<?= base_url('contact') ?>" 
         class="flex items-center gap-2 px-4 py-4 font-bold rounded-2xl 
                bg-gradient-to-r from-[var(--accent-red)] via-[var(--accent-shine)] to-[var(--accent-red)]
                text-[var(--bg-background)] shadow-[var(--shadow-hard)]
                bg-gradient-animate hover:opacity-90 transition transform duration-500 hover:scale-105">

        <!-- Shield SVG Icon -->
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 24">
          <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"></path>
        </svg>

        <h1>Start Monitoring</h1>
      </a>

      <a href="<?= base_url('services') ?>" 
         class="flex items-center gap-2 px-8 py-4 border border-[var(--accent-red)] rounded-2xl
                text-[var(--text-primary)] font-bold hover:text-[var(--text-primary)]
                hover:scale-105 transform transition duration-500
                bg-gradient-animate
                hover:bg-gradient-to-r from-[var(--accent-red)] via-[var(--bg-background)] to-[var(--accent-red)]">
        <img src="<?= base_url('SENTINEL/public_html/assets/icons/yellowarrow.png') ?>" class="w-5 h-5">
        <h1>Watch Demo</h1>
      </a>
    </div>
  </div>

  <!-- Optional Floating Right Accent Elements -->
  <div class="absolute right-10 bottom-10 hidden lg:flex flex-col items-center space-y-2">
    <div class="w-12 h-12 rounded-full border-2 border-[var(--accent-red)] flex items-center justify-center shadow-[var(--shadow-soft)] animate-bounce">
      <svg class="w-6 h-6 text-[var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
      </svg>
    </div>
    <span class="text-[var(--accent-red)] font-medium">Scroll Down</span>
  </div>

</section>