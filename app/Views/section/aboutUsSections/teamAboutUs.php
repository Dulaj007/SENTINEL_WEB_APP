<!-- Meet Our Team -->
<section id="team" class="relative py-20 sm:py-24" style="background-color: var(--color-black);">
  <div class="mx-auto max-w-7xl px-5 sm:px-8">
    <!-- Header -->
    <header class="reveal mb-12 sm:mb-16 text-center">
      <p class="text-sm uppercase tracking-widest text-white/60">Our People</p>
      <h2 class="mt-2 text-3xl sm:text-4xl md:text-5xl font-semibold text-white">Meet Our Team</h2>
      <p class="mt-4 max-w-2xl text-white/60 mx-auto">
        A passionate, cross-functional crew building delightful experiences.
      </p>
    </header>

    <!-- Team Grid -->
    <div class="grid gap-6 sm:gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Team Member 1 -->
      <article class="group flip-card reveal [perspective:1200px] rounded-2xl" tabindex="0">
        <div class="relative h-[420px] w-full overflow-hidden rounded-2xl border border-white/10 shadow-2xl transition-all duration-300 ease-out hover:shadow-[0_0_20px_var(--color-yellow)]">
          <div class="card-inner card-3d relative h-full w-full transition-transform duration-700 ease-out group-hover:[transform:rotateY(180deg)]">
            <!-- Front -->
            <div class="absolute inset-0 backface-hidden flex flex-col justify-end p-6"
                 style="background-image:
                        linear-gradient(180deg, rgba(0,0,0,.10) 20%, rgba(0,0,0,.55) 70%, rgba(0,0,0,.85) 100%),
                        url('<?= getenv('app.baseURL') ?>assets/img/user-1.png');
                        background-size: cover; background-position: center;">
              <div class="space-y-1">
                <div class="text-xl font-semibold text-white">Alex Carter</div>
                <div class="text-white/80">Product Manager</div>
              </div>
              <p class="mt-3 text-white/80 max-w-[45ch]">Turning ideas into lovable products. Strategy, roadmap, delivery.</p>
              <div class="mt-5 text-xs text-white/60">Hover or tap to flip</div>
            </div>

            <!-- Back -->
            <div class="absolute inset-0 p-6 [transform:rotateY(180deg)] backface-hidden flex flex-col justify-between bg-gradient-to-br from-var(--color-dark-3) via-var(--color-dark-1) to-var(--color-dark-2)">
              <div class="flex items-center gap-3">
                <div class="relative h-10 w-10 overflow-hidden rounded-full ring-1 ring-white/10 bg-white/5 shrink-0">
                  <img src="<?= getenv('app.baseURL') ?>assets/img/user-1.png" alt="Alex Carter" class="h-full w-full object-cover"/>
                </div>
                <div>
                  <h3 class="text-xl font-semibold leading-tight text-white">Alex Carter</h3>
                  <p class="text-white/60 text-sm">Product Manager</p>
                </div>
              </div>
              <p class="mt-3 text-white/80">Loves customer interviews, lean experiments, and clear metrics.</p>
              <div class="mt-6 flex items-center gap-4">
                <!-- Email -->
                <a href="mailto:alex@example.com" class="social-icon text-white hover:text-yellow-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 7l8.4 5.25a2 2 0 002.2 0L22 7M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                </a>
                <!-- WhatsApp -->
                <a href="https://wa.me/1234567890" target="_blank" class="social-icon text-white hover:text-yellow-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 448 512" fill="currentColor">
                    <path d="M380.9 97.1C339 55.1 283.2 32 224.8 32 106.1 32 8 130.1 8 248.8c0 38.4 10 75.9 29 108.9L0 480l125.5-36.5c31.2 17 66.6 26 102.4 26h.1c118.7 0 216.8-98.1 216.8-216.8 0-58.4-23.1-114.2-64.9-156.1zM224 438.6c-31.4 0-62.2-8.4-89.1-24.2l-6.4-3.8-74.4 21.6 21.8-72.5-4.2-6.9c-17.9-29.5-27.3-63.5-27.3-98.9 0-103.4 84.1-187.5 187.5-187.5 50.1 0 97.2 19.5 132.6 54.9 35.4 35.4 54.9 82.5 54.9 132.6 0 103.4-84.1 187.7-187.5 187.7z"/>
                  </svg>
                </a>
                <!-- Facebook -->
                <a href="https://facebook.com/alex.carter" target="_blank" class="social-icon text-white hover:text-yellow-400">
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
      <article class="group flip-card reveal [perspective:1200px] rounded-2xl" tabindex="0">
        <div class="relative h-[420px] w-full overflow-hidden rounded-2xl border border-white/10 shadow-2xl transition-all duration-300 ease-out hover:shadow-[0_0_20px_var(--color-yellow)]">
          <div class="card-inner card-3d relative h-full w-full transition-transform duration-700 ease-out group-hover:[transform:rotateY(180deg)]">
            <!-- Front -->
            <div class="absolute inset-0 backface-hidden flex flex-col justify-end p-6"
                 style="background-image:
                        linear-gradient(180deg, rgba(0,0,0,.10) 20%, rgba(0,0,0,.55) 70%, rgba(0,0,0,.85) 100%),
                        url('<?= getenv('app.baseURL') ?>assets/img/user-2.png');
                        background-size: cover; background-position: center;">
              <div class="space-y-1">
                <div class="text-xl font-semibold text-white">Jessica Brown</div>
                <div class="text-white/80">UX Designer</div>
              </div>
              <p class="mt-3 text-white/80 max-w-[45ch]">Crafting beautiful and intuitive user experiences. Design thinking at its best.</p>
              <div class="mt-5 text-xs text-white/60">Hover or tap to flip</div>
            </div>

            <!-- Back -->
            <div class="absolute inset-0 p-6 [transform:rotateY(180deg)] backface-hidden flex flex-col justify-between bg-gradient-to-br from-var(--color-dark-3) via-var(--color-dark-1) to-var(--color-dark-2)">
              <div class="flex items-center gap-3">
                <div class="relative h-10 w-10 overflow-hidden rounded-full ring-1 ring-white/10 bg-white/5 shrink-0">
                  <img src="<?= getenv('app.baseURL') ?>assets/img/user-2.png" alt="Jessica Brown" class="h-full w-full object-cover"/>
                </div>
                <div>
                  <h3 class="text-xl font-semibold leading-tight text-white">Jessica Brown</h3>
                  <p class="text-white/60 text-sm">UX Designer</p>
                </div>
              </div>
              <p class="mt-3 text-white/80">Passionate about user-centric design, prototyping, and usability testing.</p>
              <div class="mt-6 flex items-center gap-4">
                <a href="mailto:jessica@example.com" class="social-icon text-white hover:text-yellow-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 7l8.4 5.25a2 2 0 002.2 0L22 7M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                </a>
                <a href="https://wa.me/1234567891" target="_blank" class="social-icon text-white hover:text-yellow-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 448 512" fill="currentColor">
                    <path d="M380.9 97.1C339 55.1 283.2 32 224.8 32 106.1 32 8 130.1 8 248.8c0 38.4 10 75.9 29 108.9L0 480l125.5-36.5c31.2 17 66.6 26 102.4 26h.1c118.7 0 216.8-98.1 216.8-216.8 0-58.4-23.1-114.2-64.9-156.1zM224 438.6c-31.4 0-62.2-8.4-89.1-24.2l-6.4-3.8-74.4 21.6 21.8-72.5-4.2-6.9c-17.9-29.5-27.3-63.5-27.3-98.9 0-103.4 84.1-187.5 187.5-187.5 50.1 0 97.2 19.5 132.6 54.9 35.4 35.4 54.9 82.5 54.9 132.6 0 103.4-84.1 187.7-187.5 187.7z"/>
                  </svg>
                </a>
                <a href="https://facebook.com/jessica.brown" target="_blank" class="social-icon text-white hover:text-yellow-400">
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
      <article class="group flip-card reveal [perspective:1200px] rounded-2xl" tabindex="0">
        <div class="relative h-[420px] w-full overflow-hidden rounded-2xl border border-white/10 shadow-2xl transition-all duration-300 ease-out hover:shadow-[0_0_20px_var(--color-yellow)]">
          <div class="card-inner card-3d relative h-full w-full transition-transform duration-700 ease-out group-hover:[transform:rotateY(180deg)]">
            <!-- Front -->
            <div class="absolute inset-0 backface-hidden flex flex-col justify-end p-6"
                 style="background-image:
                        linear-gradient(180deg, rgba(0,0,0,.10) 20%, rgba(0,0,0,.55) 70%, rgba(0,0,0,.85) 100%),
                        url('<?= getenv('app.baseURL') ?>assets/img/user-3.png');
                        background-size: cover; background-position: center;">
              <div class="space-y-1">
                <div class="text-xl font-semibold text-white">Michael Lee</div>
                <div class="text-white/80">Software Engineer</div>
              </div>
              <p class="mt-3 text-white/80 max-w-[45ch]">Building robust and scalable software solutions with passion.</p>
              <div class="mt-5 text-xs text-white/60">Hover or tap to flip</div>
            </div>

            <!-- Back -->
            <div class="absolute inset-0 p-6 [transform:rotateY(180deg)] backface-hidden flex flex-col justify-between bg-gradient-to-br from-var(--color-dark-3) via-var(--color-dark-1) to-var(--color-dark-2)">
              <div class="flex items-center gap-3">
                <div class="relative h-10 w-10 overflow-hidden rounded-full ring-1 ring-white/10 bg-white/5 shrink-0">
                  <img src="<?= getenv('app.baseURL') ?>assets/img/user-3.png" alt="Michael Lee" class="h-full w-full object-cover"/>
                </div>
                <div>
                  <h3 class="text-xl font-semibold leading-tight text-white">Michael Lee</h3>
                  <p class="text-white/60 text-sm">Software Engineer</p>
                </div>
              </div>
              <p class="mt-3 text-white/80">Enjoys coding, testing, and deploying high-quality apps and APIs.</p>
              <div class="mt-6 flex items-center gap-4">
                <a href="mailto:michael@example.com" class="social-icon text-white hover:text-yellow-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 7l8.4 5.25a2 2 0 002.2 0L22 7M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                </a>
                <a href="https://wa.me/1234567892" target="_blank" class="social-icon text-white hover:text-yellow-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 448 512" fill="currentColor">
                    <path d="M380.9 97.1C339 55.1 283.2 32 224.8 32 106.1 32 8 130.1 8 248.8c0 38.4 10 75.9 29 108.9L0 480l125.5-36.5c31.2 17 66.6 26 102.4 26h.1c118.7 0 216.8-98.1 216.8-216.8 0-58.4-23.1-114.2-64.9-156.1zM224 438.6c-31.4 0-62.2-8.4-89.1-24.2l-6.4-3.8-74.4 21.6 21.8-72.5-4.2-6.9c-17.9-29.5-27.3-63.5-27.3-98.9 0-103.4 84.1-187.5 187.5-187.5 50.1 0 97.2 19.5 132.6 54.9 35.4 35.4 54.9 82.5 54.9 132.6 0 103.4-84.1 187.7-187.5 187.7z"/>
                  </svg>
                </a>
                <a href="https://facebook.com/michael.lee" target="_blank" class="social-icon text-white hover:text-yellow-400">
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