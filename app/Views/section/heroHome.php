
<section id="hero" class="relative w-full h-screen flex items-center justify-center bg-[var(--color-dark-1)] text-white overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="<?= base_url('SENTINEL/public_html/assets/img/hero.png') ?>"
             alt="Hero Background"
             class="w-full h-full object-cover object-right opacity-70 md:opacity-100">
        <div class="absolute inset-0 bg-[var(--color-dark-1)]/60"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 flex flex-col items-center text-center px-6 md:px-16 max-w-3xl mx-auto">
        <!-- Title -->
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">
            <span class="text-white">24/7</span>
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-white via-[var(--color-yellow)] to-[#DB2525]">
                PROTECTION
            </span>
        </h1>

        <!-- Subtitle -->
      <p class="text-base sm:text-lg md:text-xl text-[var(--color-white)] leading-relaxed mb-8">
        Professional CCTV monitoring services with real time surveillance,
        <span class="hidden sm:inline"><br></span>
        emergency response, and live intervention capabilities.
    </p>

        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <!-- Start Monitoring Button -->
            <a href="#contact"
               class="flex items-center gap-2 px-8 py-3 font-semibold rounded-[10px] text-[var(--color-white)] bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] hover:opacity-90 transition transform duration-500 hover:scale-105">
                <img src="<?= base_url('SENTINEL/public_html/assets/icons/whiteShield.png') ?>" alt="Shield Icon" class="w-5 h-5">
                Start Monitoring
            </a>

            <!-- Watch Demo Button -->
            <a href="#learn-more"
               class="flex items-center gap-2 px-8 py-3 border border-[var(--color-yellow)] text-[var(--color-white)] font-semibold rounded-[10px] hover:bg-[var(--color-white)] hover:text-[var(--color-yellow)] hover:opacity-90 transition transform duration-500 hover:scale-105">
                <img src="<?= base_url('SENTINEL/public_html/assets/icons/yellowarrow.png') ?>" alt="Arrow Icon" class="w-5 h-5">
                Watch Demo
            </a>
        </div>
    </div>
</section>
