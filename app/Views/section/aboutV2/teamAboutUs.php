
<!-- ============================================ -->
<!-- MEET OUR TEAM SECTION - NEW STYLE -->
<!-- ============================================ -->
<section id="team" class="relative py-16 sm:py-20 md:py-24 lg:py-32 overflow-hidden" 
         style="background-color: var(--bg-background);">
  
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5 pointer-events-none">
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, var(--color-white) 1px, transparent 0); background-size: 40px 40px;"></div>
  </div>

  <!-- Floating Gradient Orbs -->
  <div class="absolute top-20 right-10 w-64 h-64 rounded-full opacity-10 blur-3xl" 
       style="background: var(--color-yellow); animation: float 15s ease-in-out infinite;"></div>
  <div class="absolute bottom-20 left-10 w-72 h-72 rounded-full opacity-10 blur-3xl" 
       style="background: var(--accent-red); animation: float 20s ease-in-out infinite reverse;"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12">
    
    <!-- Section Header -->
    <div class="text-center mb-16 sm:mb-20 md:mb-24">
      <!-- Badge -->
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full mb-6 backdrop-blur-sm"
           style="background-color: rgba(255, 255, 255, 0.05); border: 1px solid var(--border-color);">
        <span class="text-xs sm:text-sm font-medium tracking-wide uppercase" style="color: var(--color-yellow);">
          Our People
        </span>
      </div>

      <!-- Title -->
      <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6" style="color: var(--color-white);">
        Meet Our 
        <span class="bg-clip-text text-transparent bg-gradient-to-r" 
              style="background-image: linear-gradient(135deg, var(--color-yellow), var(--accent-red), var(--color-yellow)); background-size: 200% auto; animation: shimmer 3s linear infinite;">
          Team
        </span>
      </h2>

      <!-- Subtitle -->
      <p class="text-base sm:text-lg md:text-xl max-w-3xl mx-auto leading-relaxed" 
         style="color: var(--text-secondary);">
        A passionate, cross-functional crew building delighthat experiences and keeping you safe
      </p>

      <!-- Decorative Line -->
      <div class="flex items-center justify-center gap-2 mt-8">
        <div class="w-16 h-0.5" style="background: linear-gradient(90deg, transparent, var(--color-yellow));"></div>
        <div class="w-2 h-2 rounded-full" style="background-color: var(--accent-red);"></div>
        <div class="w-16 h-0.5" style="background: linear-gradient(90deg, var(--color-yellow), transparent);"></div>
      </div>
    </div>

    <!-- Team Grid -->
    <div class="grid gap-6 sm:gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
      
      <!-- Team Member 1 -->
      <article class="group flip-card [perspective:1200px] rounded-2xl" tabindex="0" data-aos="fade-up">
        <div class="relative h-[420px] w-full overflow-hidden rounded-2xl border shadow-2xl transition-all duration-300 ease-out"
             style="border-color: var(--border-color); background-color: var(--bg-secondary);">
          <div class="card-inner card-3d relative h-full w-full transition-transform duration-700 ease-out group-hover:[transform:rotateY(180deg)]">
            
            <!-- Front -->
            <div class="absolute inset-0 backface-hidden flex flex-col justify-end p-6"
                 style="background-image:
                        linear-gradient(180deg, rgba(0,0,0,.10) 20%, rgba(0,0,0,.55) 70%, rgba(0,0,0,.85) 100%),
                        url('<?= base_url('SENTINEL/public_html/assets/img/user-1.png') ?>');
                        background-size: cover; background-position: center;">
              <div class="space-y-1">
                <div class="text-xl font-semibold" style="color: var(--color-white);">Alex Carter</div>
                <div style="color: var(--color-yellow);">Product Manager</div>
              </div>
              <p class="mt-3 max-w-[45ch]" style="color: var(--color-white-80);">Turning ideas into lovable products. Strategy, roadmap, delivery.</p>
              <div class="mt-5 text-xs" style="color: var(--text-secondary);">Hover or tap to flip</div>
            </div>

            <!-- Back -->
            <div class="absolute inset-0 p-6 [transform:rotateY(180deg)] backface-hidden flex flex-col justify-between rounded-2xl"
                 style="background: linear-gradient(135deg, var(--color-dark-3), var(--color-dark-1), var(--color-dark-2));">
              <div class="flex items-center gap-3">
                <div class="relative h-12 w-12 overflow-hidden rounded-full ring-2 shrink-0"
                     style="ring-color: var(--color-yellow);">
                  <img src="<?= base_url('SENTINEL/public_html/assets/img/user-1.png') ?>" alt="Alex Carter" class="h-full w-full object-cover"/>
                </div>
                <div>
                  <h3 class="text-xl font-semibold leading-tight" style="color: var(--color-white);">Alex Carter</h3>
                  <p class="text-sm" style="color: var(--color-yellow);">Product Manager</p>
                </div>
              </div>
              <p class="mt-3" style="color: var(--color-white-80);">Loves customer interviews, lean experiments, and clear metrics. Dedicated to building products that matter.</p>
              <div class="mt-6 flex items-center gap-4">
                <!-- Email -->
                <a href="mailto:alex@example.com" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 7l8.4 5.25a2 2 0 002.2 0L22 7M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                </a>
                <!-- WhatsApp -->
                <a href="https://wa.me/1234567890" target="_blank" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 448 512" fill="currentColor">
                    <path d="M380.9 97.1C339 55.1 283.2 32 224.8 32 106.1 32 8 130.1 8 248.8c0 38.4 10 75.9 29 108.9L0 480l125.5-36.5c31.2 17 66.6 26 102.4 26h.1c118.7 0 216.8-98.1 216.8-216.8 0-58.4-23.1-114.2-64.9-156.1z"/>
                  </svg>
                </a>
                <!-- Facebook -->
                <a href="https://facebook.com/alex.carter" target="_blank" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.675 0h-21.35C.595 0 0 .594 0 1.326v21.348C0 23.405.595 24 1.326 24H12.82v-9.294H9.692v-3.62h3.128V8.413c0-3.1 1.893-4.787 4.658-4.787 1.325 0 2.463.099 2.794.143v3.24l-1.918.001c-1.503 0-1.794.715-1.794 1.763v2.313h3.587l-.467 3.62h-3.12V24h6.116C23.405 24 24 23.405 24 22.674V1.326C24 .594 23.405 0 22.675 0z"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Team Member 2 -->
      <article class="group flip-card [perspective:1200px] rounded-2xl" tabindex="0" data-aos="fade-up" data-aos-delay="100">
        <div class="relative h-[420px] w-full overflow-hidden rounded-2xl border shadow-2xl transition-all duration-300 ease-out"
             style="border-color: var(--border-color); background-color: var(--bg-secondary);">
          <div class="card-inner card-3d relative h-full w-full transition-transform duration-700 ease-out group-hover:[transform:rotateY(180deg)]">
            
            <!-- Front -->
            <div class="absolute inset-0 backface-hidden flex flex-col justify-end p-6"
                 style="background-image:
                        linear-gradient(180deg, rgba(0,0,0,.10) 20%, rgba(0,0,0,.55) 70%, rgba(0,0,0,.85) 100%),
                        url('<?= base_url('SENTINEL/public_html/assets/img/user-2.png') ?>');
                        background-size: cover; background-position: center;">
              <div class="space-y-1">
                <div class="text-xl font-semibold" style="color: var(--color-white);">Jessica Brown</div>
                <div style="color: var(--color-yellow);">UX Designer</div>
              </div>
              <p class="mt-3 max-w-[45ch]" style="color: var(--color-white-80);">Crafting beautiful and intuitive user experiences. Design thinking at its best.</p>
              <div class="mt-5 text-xs" style="color: var(--text-secondary);">Hover or tap to flip</div>
            </div>

            <!-- Back -->
            <div class="absolute inset-0 p-6 [transform:rotateY(180deg)] backface-hidden flex flex-col justify-between rounded-2xl"
                 style="background: linear-gradient(135deg, var(--color-dark-3), var(--color-dark-1), var(--color-dark-2));">
              <div class="flex items-center gap-3">
                <div class="relative h-12 w-12 overflow-hidden rounded-full ring-2 shrink-0"
                     style="ring-color: var(--color-yellow);">
                  <img src="<?= base_url('SENTINEL/public_html/assets/img/user-2.png') ?>" alt="Jessica Brown" class="h-full w-full object-cover"/>
                </div>
                <div>
                  <h3 class="text-xl font-semibold leading-tight" style="color: var(--color-white);">Jessica Brown</h3>
                  <p class="text-sm" style="color: var(--color-yellow);">UX Designer</p>
                </div>
              </div>
              <p class="mt-3" style="color: var(--color-white-80);">Passionate about user-centric design, prototyping, and usability testing.</p>
              <div class="mt-6 flex items-center gap-4">
                <a href="mailto:jessica@example.com" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 7l8.4 5.25a2 2 0 002.2 0L22 7M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                </a>
                <a href="https://wa.me/1234567891" target="_blank" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 448 512" fill="currentColor">
                    <path d="M380.9 97.1C339 55.1 283.2 32 224.8 32 106.1 32 8 130.1 8 248.8c0 38.4 10 75.9 29 108.9L0 480l125.5-36.5c31.2 17 66.6 26 102.4 26h.1c118.7 0 216.8-98.1 216.8-216.8 0-58.4-23.1-114.2-64.9-156.1z"/>
                  </svg>
                </a>
                <a href="https://facebook.com/jessica.brown" target="_blank" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.675 0h-21.35C.595 0 0 .594 0 1.326v21.348C0 23.405.595 24 1.326 24H12.82v-9.294H9.692v-3.62h3.128V8.413c0-3.1 1.893-4.787 4.658-4.787 1.325 0 2.463.099 2.794.143v3.24l-1.918.001c-1.503 0-1.794.715-1.794 1.763v2.313h3.587l-.467 3.62h-3.12V24h6.116C23.405 24 24 23.405 24 22.674V1.326C24 .594 23.405 0 22.675 0z"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Team Member 3 -->
      <article class="group flip-card [perspective:1200px] rounded-2xl" tabindex="0" data-aos="fade-up" data-aos-delay="200">
        <div class="relative h-[420px] w-full overflow-hidden rounded-2xl border shadow-2xl transition-all duration-300 ease-out"
             style="border-color: var(--border-color); background-color: var(--bg-secondary);">
          <div class="card-inner card-3d relative h-full w-full transition-transform duration-700 ease-out group-hover:[transform:rotateY(180deg)]">
            
            <!-- Front -->
            <div class="absolute inset-0 backface-hidden flex flex-col justify-end p-6"
                 style="background-image:
                        linear-gradient(180deg, rgba(0,0,0,.10) 20%, rgba(0,0,0,.55) 70%, rgba(0,0,0,.85) 100%),
                        url('<?= base_url('SENTINEL/public_html/assets/img/user-3.png') ?>');
                        background-size: cover; background-position: center;">
              <div class="space-y-1">
                <div class="text-xl font-semibold" style="color: var(--color-white);">Michael Lee</div>
                <div style="color: var(--color-yellow);">Software Engineer</div>
              </div>
              <p class="mt-3 max-w-[45ch]" style="color: var(--color-white-80);">Building robust and scalable software solutions with passion.</p>
              <div class="mt-5 text-xs" style="color: var(--text-secondary);">Hover or tap to flip</div>
            </div>

            <!-- Back -->
            <div class="absolute inset-0 p-6 [transform:rotateY(180deg)] backface-hidden flex flex-col justify-between rounded-2xl"
                 style="background: linear-gradient(135deg, var(--color-dark-3), var(--color-dark-1), var(--color-dark-2));">
              <div class="flex items-center gap-3">
                <div class="relative h-12 w-12 overflow-hidden rounded-full ring-2 shrink-0"
                     style="ring-color: var(--color-yellow);">
                  <img src="<?= base_url('SENTINEL/public_html/assets/img/user-3.png') ?>" alt="Michael Lee" class="h-full w-full object-cover"/>
                </div>
                <div>
                  <h3 class="text-xl font-semibold leading-tight" style="color: var(--color-white);">Michael Lee</h3>
                  <p class="text-sm" style="color: var(--color-yellow);">Software Engineer</p>
                </div>
              </div>
              <p class="mt-3" style="color: var(--color-white-80);">Enjoys coding, testing, and deploying high-quality apps and APIs.</p>
              <div class="mt-6 flex items-center gap-4">
                <a href="mailto:michael@example.com" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 7l8.4 5.25a2 2 0 002.2 0L22 7M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                </a>
                <a href="https://wa.me/1234567892" target="_blank" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 448 512" fill="currentColor">
                    <path d="M380.9 97.1C339 55.1 283.2 32 224.8 32 106.1 32 8 130.1 8 248.8c0 38.4 10 75.9 29 108.9L0 480l125.5-36.5c31.2 17 66.6 26 102.4 26h.1c118.7 0 216.8-98.1 216.8-216.8 0-58.4-23.1-114.2-64.9-156.1z"/>
                  </svg>
                </a>
                <a href="https://facebook.com/michael.lee" target="_blank" class="social-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.675 0h-21.35C.595 0 0 .594 0 1.326v21.348C0 23.405.595 24 1.326 24H12.82v-9.294H9.692v-3.62h3.128V8.413c0-3.1 1.893-4.787 4.658-4.787 1.325 0 2.463.099 2.794.143v3.24l-1.918.001c-1.503 0-1.794.715-1.794 1.763v2.313h3.587l-.467 3.62h-3.12V24h6.116C23.405 24 24 23.405 24 22.674V1.326C24 .594 23.405 0 22.675 0z"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>
<!-- ============================================ -->