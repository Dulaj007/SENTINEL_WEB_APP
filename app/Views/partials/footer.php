<footer class="w-full h-auto py-10 text-[var(--color-white)]   relative overflow-hidden
bg-gradient-to-t from-[var(--accent-red)]/20 to-[var(--color-black)]"
        role="contentinfo"
        style="font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;">

  <div class="mt-10 lg:mt-12 border-t border-white/30 "></div>

  <!-- Top-left sheen -->
  <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10 opacity-[0.25]"
       style="background: radial-gradient(90% 70% at 0% 0%,
                 rgba(255,255,255,0.08) 0%,
                 rgba(255,255,255,0.00) 50%);">
  </div>

  <div class="relative mx-auto max-w-7xl px-4 lg:px-6 py-12 lg:py-16 ">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-16 ">

      <!-- Brand / Intro -->
      <div>
        <div ><a href="<?= base_url('/') ?>" class="flex items-start gap-3">
          <img src="assets/icons/logo.png" alt="24/7 Sentinel logo" class="h-14 w-14 object-contain" />
          <div class="leading-tight">
            <div class="text-2xl sm:text-2xl font-extrabold tracking-wide">
              <span class="text-[var(--color-white)]">24/7</span>
              <span class=" bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] bg-clip-text text-transparent">
                SENTINEL
              </span>
            </div>
            <div class="text-[13px] sm:text-sm text-[var(--color-white-80)] -mt-0.5">Live Monitoring</div>
          </div></a>
        </div>

        <p class="mt-4 sm:mt-5 max-w-md text-[var(--text-secondary)] text-base sm:text-lg leading-6 sm:leading-7">
          Professional CCTV monitoring services providing 24/7 security solutions.
        </p>
      </div>

      <!-- Services -->
      <div class="">
        <h3 class="text-xl border-b p-3 sm:text-2xl font-bold mb-4">Services</h3>
        <ul class="space-y-2 sm:space-y-2 ml-5 text-sm sm:text-base text-[var(--text-secondary)]">
          <li> <a href="<?= base_url('services') ?>" class="hover:text-[var(--color-yellow)] transition cursor-pointer">Live Monitoring </a></li>
          <li> <a href="<?= base_url('services') ?>" class="hover:text-[var(--color-yellow)] transition cursor-pointer">Emergency Response </a></li>
          <li> <a href="<?= base_url('services') ?>" class="hover:text-[var(--color-yellow)] transition cursor-pointer">Two-Way Audio </a></li>
          <li> <a href="<?= base_url('services') ?>" class="hover:text-[var(--color-yellow)] transition cursor-pointer">Installation </a></li>
        </ul>
      </div>

      <!-- Company -->
      <div>
        <h3 class="text-xl sm:text-2xl border-b p-3 font-bold mb-4">Company</h3>
        <ul class="space-y-2 sm:space-y-1 text-sm ml-5 sm:text-base text-[var(--text-secondary)]">
          <li><a href="<?= base_url('about') ?>" class=" hover:text-[var(--color-white)] underline-offset-4 hover:underline transition">About Us</a></li>
          <li><a href="<?= base_url('services') ?>" class=" hover:text-[var(--color-white)] underline-offset-4 hover:underline transition">Services</a></li>
          <li><a href="<?= base_url('careers') ?>" class=" hover:text-[var(--color-white)] underline-offset-4 hover:underline transition">Careers</a></li>
          <li><a href="<?= base_url('blog') ?>" class=" hover:text-[var(--color-white)] underline-offset-4 hover:underline transition">Blog</a></li>
          <li><a href="<?= base_url('contact') ?>" class=" hover:text-[var(--color-white)] underline-offset-4 hover:underline transition">Contact</a></li>
        </ul>
      </div>

      <!-- Connect -->
      <div>
        <h3 class="text-xl sm:text-2xl  border-b p-3 font-bold mb-4">Connect</h3>
        <ul class="space-y-3 sm:space-y-3 text-sm sm:text-base text-[var(--color-white)]/80">
          <li class="flex items-center gap-3 hover:text-[var(--color-blue)] transition cursor-pointer">
            <span class="inline-flex items-center justify-center h-8 w-8 rounded-full  text-[var(--text-secondary)]">
              <!-- facebook icon -->
              <img src="assets/icons/fb-logo.png" alt="24/7 Sentinel logo" class="h-6 w-6 object-contain" />
             
            </span>
            <span>247sentinel</span>
          </li>
          <li class="flex items-center gap-3 hover:text-[#A020F0]  transition cursor-pointer">
            <span class="inline-flex items-center justify-center h-8 w-8 rounded-full  text-[var(--text-secondary)]">
              <!-- envelope -->
              <img src="assets/icons/em-logo.png" alt="24/7 Sentinel logo" class="h-6 w-6 object-contain" />
            </span>
            <span>info@247sentinel.com</span>
          </li>
          <li class="flex items-center gap-3 hover:text-[var(--color-orange-dark)] transition cursor-pointer">
            <span class="inline-flex items-center justify-center h-8 w-8 rounded-full  text-[var(--text-secondary)]">
              <!-- map pin -->
              <img src="assets/icons/loc-logo.svg" alt="24/7 Sentinel logo" class="h-6 w-6 object-contain" />
            </span>
            <span>123 Security St, Safe City</span>
          </li>
        </ul>
      </div>

    </div>

    <!-- divider line -->
    <div class="mt-10 lg:mt-12 border-t border-white/30"></div>

    <!-- bottom bar -->
    <div class="py-4 text-center text-[var(--color-white-60)] text-sm sm:text-base">
      <span>© 2025 <span class="font-extrabold">24/7 SENTINEL</span>. All rights reserved.</span>
    </div>
  </div>
</footer>
