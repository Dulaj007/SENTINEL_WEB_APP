<!-- ============================================ -->
<!-- OUR STORY SECTION - NEW STYLE -->
<!-- ============================================ -->
<section id="our-story" class="relative py-16 sm:py-20 md:py-24 lg:py-32 overflow-hidden" 
         style="background-color: var(--color-dark-1);">
  
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5 pointer-events-none">
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, var(--color-white) 1px, transparent 0); background-size: 40px 40px;"></div>
  </div>

  <!-- Floating Gradient Orbs -->
  <div class="absolute top-20 left-10 w-64 h-64 rounded-full opacity-10 blur-3xl" 
       style="background: var(--accent-red); animation: float 15s ease-in-out infinite;"></div>
  <div class="absolute bottom-20 right-10 w-72 h-72 rounded-full opacity-10 blur-3xl" 
       style="background: var(--color-yellow); animation: float 20s ease-in-out infinite reverse;"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12">
    
    <!-- Section Header -->
    <div class="text-center mb-16 sm:mb-20 md:mb-24">
      <!-- Badge -->
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full mb-6 backdrop-blur-sm"
           style="background-color: rgba(255, 255, 255, 0.05); border: 1px solid var(--border-color);">
        <span class="text-xs sm:text-sm font-medium tracking-wide uppercase" style="color: var(--color-yellow);">
          Our Journey
        </span>
      </div>

      <!-- Title -->
      <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6" style="color: var(--color-white);">
        Our 
        <span class="bg-clip-text text-transparent bg-gradient-to-r" 
              style="background-image: linear-gradient(135deg, var(--color-yellow), var(--accent-red), var(--color-yellow)); background-size: 200% auto; animation: shimmer 3s linear infinite;">
          Story
        </span>
      </h2>

      <!-- Subtitle -->
      <p class="text-base sm:text-lg md:text-xl max-w-3xl mx-auto leading-relaxed" 
         style="color: var(--text-secondary);">
        From a bold vision to a trusted security partner – discover how we revolutionized the industry
      </p>

      <!-- Decorative Line -->
      <div class="flex items-center justify-center gap-2 mt-8">
        <div class="w-16 h-0.5" style="background: linear-gradient(90deg, transparent, var(--color-yellow));"></div>
        <div class="w-2 h-2 rounded-full" style="background-color: var(--accent-red);"></div>
        <div class="w-16 h-0.5" style="background: linear-gradient(90deg, var(--color-yellow), transparent);"></div>
      </div>
    </div>

    <!-- Story Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 xl:gap-16 items-center">
      
      <!-- Content -->
      <div class="space-y-6" data-aos="fade-right">
        
        <!-- Icon & Title -->
        <div class="flex items-start gap-4">
          <div class="shrink-0 w-14 h-14 sm:w-16 sm:h-16 rounded-2xl flex items-center justify-center relative overflow-hidden group"
               style="background: linear-gradient(135deg, var(--color-yellow), var(--color-orange-dark)); box-shadow: 0 8px 32px rgba(255, 191, 53, 0.3);">
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);"></div>
            
            <svg class="w-7 h-7 sm:w-8 sm:h-8 relative z-10 transition-transform duration-300 group-hover:scale-110" 
                 style="color: var(--color-black);" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm8.94 3c-.46-4.17-3.77-7.48-7.94-7.94V1h-2v2.06C6.83 3.52 3.52 6.83 3.06 11H1v2h2.06c.46 4.17 3.77 7.48 7.94 7.94V23h2v-2.06c4.17-.46 7.48-3.77 7.94-7.94H23v-2h-2.06zM12 19c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"/>
            </svg>
          </div>
          
          <div>
            <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2" style="color: var(--color-white);">
              Founded in 2025
            </h3>
            <div class="flex items-center gap-2 text-sm" style="color: var(--color-yellow);">
              <span class="w-2 h-2 rounded-full animate-pulse" style="background-color: var(--accent-red);"></span>
              <span>A Vision Realized</span>
            </div>
          </div>
        </div>

        <!-- Description -->
        <p class="text-base sm:text-lg leading-relaxed" style="color: var(--color-white-80);">
          24/7 SENTINEL emerged from a vision: to revolutionize security monitoring by combining 
          advanced technology and human expertise. We saw an industry relying on outdated methods 
          and knew there was a better way.
        </p>

        <p class="text-base sm:text-lg leading-relaxed" style="color: var(--color-white-80);">
          Today, we protect over 500 properties across industries. Our monitoring is 24/7, 
          with certified professionals trained to respond to any situation with precision and speed.
        </p>

        <!-- Stats Grid -->
        <div class="grid grid-cols-3 gap-4 pt-6">
          <div class="text-center p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
               style="background-color: rgba(255, 255, 255, 0.05); border-color: var(--border-color);">
            <span class="text-2xl sm:text-3xl font-bold block" style="color: var(--color-yellow);">99.9%</span>
            <span class="text-xs sm:text-sm mt-1 block" style="color: var(--text-secondary);">Uptime</span>
          </div>
          <div class="text-center p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
               style="background-color: rgba(255, 255, 255, 0.05); border-color: var(--border-color);">
            <span class="text-2xl sm:text-3xl font-bold block" style="color: var(--color-yellow);">24/7</span>
            <span class="text-xs sm:text-sm mt-1 block" style="color: var(--text-secondary);">Monitoring</span>
          </div>
          <div class="text-center p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
               style="background-color: rgba(255, 255, 255, 0.05); border-color: var(--border-color);">
            <span class="text-2xl sm:text-3xl font-bold block" style="color: var(--color-yellow);">500+</span>
            <span class="text-xs sm:text-sm mt-1 block" style="color: var(--text-secondary);">Properties</span>
          </div>
        </div>

      </div>

      <!-- Image -->
      <div data-aos="fade-left">
        <div class="group relative rounded-2xl overflow-hidden border transition-all duration-500 hover:-translate-y-2"
             style="border-color: var(--border-color); box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);">
          
          <div class="relative overflow-hidden aspect-[4/3]">
            <img src="<?= base_url('SENTINEL/public_html/assets/img/imgStory.png') ?>" 
                 alt="Monitoring Room" 
                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.7) 100%);"></div>
          </div>

          <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
               style="box-shadow: inset 0 0 0 2px var(--color-yellow), 0 0 40px rgba(255, 191, 53, 0.4);"></div>
        </div>
      </div>

    </div>
  </div>
</section>