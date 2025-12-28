<!-- ============================================ -->
<!-- PORTFOLIO CTA SECTION -->
<!-- ============================================ -->
<section class="py-20 md:py-28 relative overflow-hidden" style="background-color: var(--bg-background);">
  
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5 pointer-events-none">
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, var(--color-white) 1px, transparent 0); background-size: 40px 40px;"></div>
  </div>

  <!-- Floating Orbs - Orange Colors -->
  <div class="absolute top-10 right-20 w-48 h-48 rounded-full opacity-10 blur-3xl pointer-events-none" 
       style="background: var(--accent-red);"></div>
  <div class="absolute bottom-10 left-20 w-56 h-56 rounded-full opacity-10 blur-3xl pointer-events-none" 
       style="background: var(--accent-red);"></div>

  <div class="relative z-10 max-w-4xl mx-auto text-center px-4">
    
    <!-- Badge -->
    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full mb-6 backdrop-blur-sm"
         style="background-color: rgba(255, 255, 255, 0.05); border: 1px solid var(--border-color);">
      <span class="text-xs sm:text-sm font-medium tracking-wide uppercase" style="color: var(--color-yellow);">
        Start Today
      </span>
    </div>
    
    <!-- Title -->
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6" style="color: var(--color-white);">
      Ready to Secure Your 
      <span class="bg-clip-text text-transparent bg-gradient-to-r" 
            style="background-image: linear-gradient(135deg, var(--accent-red), var(--accent-shine), var(--accent-red)); background-size: 200% auto; animation: shimmer 3s linear infinite;">
        Property?
      </span>
    </h2>
    
    <!-- Subtitle -->
    <p class="text-lg md:text-xl mb-10 max-w-2xl mx-auto" style="color: var(--text-secondary);">
      Join 500+ businesses that trust 24/7 SENTINEL for their security needs. Get a free consultation today.
    </p>
    
    <!-- Buttons - Matching Hero Style -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <!-- Primary Button - Red Gradient -->
      <a href="<?= base_url('contact') ?>" 
         class="flex items-center justify-center gap-3 px-8 py-4 font-bold rounded-2xl 
                bg-gradient-to-r from-[var(--accent-red)] via-[var(--accent-shine)] to-[var(--accent-red)]
                text-[var(--bg-background)] shadow-[var(--shadow-hard)]
                bg-gradient-animate hover:opacity-90 transition-all duration-500 hover:scale-105">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
        </svg>
        <span>Get Free Quote</span>
      </a>
      
      <!-- Secondary Button - Outline -->
      <a href="<?= base_url('services') ?>" 
         class="flex items-center justify-center gap-3 px-8 py-4 border-2 border-[var(--accent-red)] rounded-2xl
                text-[var(--text-primary)] font-bold transition-all duration-500 hover:scale-105
                hover:bg-gradient-to-r from-[var(--accent-red)] via-[var(--bg-background)] to-[var(--accent-red)]">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
        </svg>
        <span>View Our Services</span>
      </a>
    </div>
    
  </div>
</section>