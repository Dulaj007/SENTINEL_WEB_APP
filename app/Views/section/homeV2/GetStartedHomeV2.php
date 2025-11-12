<!-- ========================= GETTING STARTED SECTION ========================= -->
<section id="getting-started" class="relative w-full py-24 bg-[var(--color-black)] overflow-hidden">

  <!-- Background Particle / Glow Overlay -->
  <div class="absolute inset-0 z-0">
    <div class="w-full h-full bg-gradient-to-tr from-[var(--accent-red)]/20 via-[var(--color-yellow)]/10 to-[var(--accent-blue)]/20 animate-pulse-slow"></div>
  </div>

  <!-- Container -->
  <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">

    <!-- Section Title -->
    <h2 class="text-4xl sm:text-5xl  font-extrabold text-[var(--text-primary)] drop-shadow-[0_0_5px_var(--accent-red)] mb-4">
      Getting Started is Easy
    </h2>

    <!-- Subtitle -->
    <p class="text-[var(--text-secondary)] text-base sm:text-lg md:text-xl max-w-3xl mx-auto mb-16 leading-relaxed">
      Secure your property in 3 simple steps. Fast, simple, and reliable.
    </p>

    <!-- Steps Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- Step 1 -->
      <div class="relative p-6 md:p-8 rounded-2xl bg-[rgba(255,255,255,0.05)] backdrop-blur-md border border-[var(--border-color)] shadow-[0_0_20px_var(--shadow-soft)] hover:shadow-[0_0_25px_var(--accent-red)] transition-all duration-500">
        <div class="flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-tr from-[var(--color-yellow)] to-[var(--color-orange-dark)] mx-auto mb-4 text-2xl font-bold text-[var(--color-black)]">
          1
        </div>
        <h3 class="text-xl sm:text-2xl font-bold text-[var(--color-yellow)] mb-2">Contact Us</h3>
        <p class="text-[var(--text-primary)] text-sm sm:text-base leading-relaxed">
          Reach out via WhatsApp, Email, or our website form. Quick and simple.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="relative p-6 md:p-8 rounded-2xl bg-[rgba(255,255,255,0.05)] backdrop-blur-md border border-[var(--border-color)] shadow-[0_0_20px_var(--shadow-soft)] hover:shadow-[0_0_25px_var(--accent-blue)] transition-all duration-500">
        <div class="flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-tr from-[var(--accent-blue)] to-[var(--color-blue)] mx-auto mb-4 text-2xl font-bold text-[var(--color-black)]">
          2
        </div>
        <h3 class="text-xl sm:text-2xl font-bold text-[var(--color-blue)] mb-2">Get Your Plan</h3>
        <p class="text-[var(--text-primary)] text-sm sm:text-base leading-relaxed">
          We design a tailored CCTV monitoring plan with real-time surveillance.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="relative p-6 md:p-8 rounded-2xl bg-[rgba(255,255,255,0.05)] backdrop-blur-md border border-[var(--border-color)] shadow-[0_0_20px_var(--shadow-soft)] hover:shadow-[0_0_25px_var(--accent-red)] transition-all duration-500">
        <div class="flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-tr from-[var(--accent-red)] to-[var(--color-red-dark)] mx-auto mb-4 text-2xl font-bold text-[var(--color-black)]">
          3
        </div>
        <h3 class="text-xl sm:text-2xl font-bold text-[var(--accent-red)] mb-2">Stay Protected</h3>
        <p class="text-[var(--text-primary)] text-sm sm:text-base leading-relaxed">
          Enjoy 24/7 protection with installation and real-time monitoring.
        </p>
      </div>

    </div>

    <!-- CTA Button -->
    <div class="mt-12 flex justify-center">
      <a href="<?= base_url('contact') ?>"
         class="px-10 py-3 font-bold rounded-xl bg-gradient-to-r from-[var(--color-yellow)] via-[var(--color-orange-dark)] to-[var(--accent-red)]
                text-[var(--color-black)] shadow-[0_0_20px_var(--accent-red)] hover:opacity-90 transition transform duration-500 hover:scale-105 uppercase tracking-wide flex items-center gap-3">
        Get Started
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </a>
    </div>

  </div>
</section>
