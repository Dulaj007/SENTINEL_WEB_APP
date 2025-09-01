<footer class="w-full text-[var(--color-white)] border-t border-[rgba(255,255,255,0.08)] relative overflow-hidden"
        role="contentinfo"
        style="font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;">
  <!-- Gradient background: black (top) -> dark-1 (bottom) -->
  <div aria-hidden="true" class="absolute inset-0 -z-10"
       style="background: linear-gradient(180deg,
                 var(--color-black) 0%,
                 #0b0b0b 28%,
                 #0e0e0e 52%,
                 var(--color-dark-1) 100%);">
  </div>

  <!-- Subtle top-left sheen to match the mock -->
  <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10 opacity-[0.25]"
       style="background: radial-gradient(90% 70% at 0% 0%,
                 rgba(255,255,255,0.08) 0%,
                 rgba(255,255,255,0.00) 50%);">
  </div>

  <div class="relative mx-auto max-w-7xl px-4 lg:px-6 py-10 lg:py-14">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-16">
      <!-- Brand/intro -->
      <div>
        <div class="flex items-start gap-3">
          <img src="assets/img/247LogoNoBG.svg" alt="24/7 Sentinel logo" class="h-12 w-12 object-contain">
          <div class="leading-tight">
            <div class="text-2xl font-extrabold tracking-wide">
              <span class="text-[var(--color-white)]">24/7</span>
              <span class="ml-1 bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] bg-clip-text text-transparent">
                SENTINEL
              </span>
            </div>
            <div class="text-[13px] text-[var(--color-white-80)] -mt-0.5">Live Monitoring</div>
          </div>
        </div>

        <p class="mt-5 max-w-md text-[var(--color-white)]/85 text-lg leading-7">
          Professional CCTV monitoring services providing 24/7 security solutions.
        </p>
      </div>

      <!-- Services (text list) -->
      <div>
        <h3 class="text-2xl font-bold mb-4">Services</h3>
        <ul class="space-y-3 text-[var(--color-white)]/85 text-lg">
          <li>Live Monitoring</li>
          <li>Emergency Response</li>
          <li>Two-Way Audio</li>
          <li>Installation</li>
        </ul>
      </div>

      <!-- Company (links) -->
      <div>
        <h3 class="text-2xl font-bold mb-4">Company</h3>
        <ul class="space-y-3 text-lg">
          <li><a href="/about" class="text-[var(--color-white)]/90 hover:text-[var(--color-white)] underline-offset-4 hover:underline">About Us</a></li>
          <li><a href="/careers" class="text-[var(--color-white)]/90 hover:text-[var(--color-white)] underline-offset-4 hover:underline">Careers</a></li>
          <li><a href="/blog" class="text-[var(--color-white)]/90 hover:text-[var(--color-white)] underline-offset-4 hover:underline">Blog</a></li>
          <li><a href="/contact" class="text-[var(--color-white)]/90 hover:text-[var(--color-white)] underline-offset-4 hover:underline">Contact</a></li>
        </ul>
      </div>

      <!-- Connect -->
      <div>
        <h3 class="text-2xl font-bold mb-4">Connect</h3>
        <ul class="space-y-4 text-[var(--color-white)]/85 text-lg">
          <li class="flex items-center gap-3">
            <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-white/10 text-[var(--color-white)]">
              <!-- facebook icon -->
              <svg viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                <path d="M22 12.07C22 6.48 17.52 2 11.93 2S2 6.48 2 12.07c0 5.01 3.66 9.17 8.44 9.94v-7.03H7.9v-2.91h2.54V9.41c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.23.2 2.23.2v2.45h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.77l-.44 2.91h-2.33V22c4.78-.77 8.44-4.93 8.44-9.93z"/>
              </svg>
            </span>
            <span>247sentinel</span>
          </li>
          <li class="flex items-center gap-3">
            <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-white/10 text-[var(--color-white)]">
              <!-- envelope -->
              <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <rect x="3" y="5" width="18" height="14" rx="2" ry="2"></rect>
                <path d="M3 7l9 6 9-6"></path>
              </svg>
            </span>
            <span>info@247sentinel.com</span>
          </li>
          <li class="flex items-center gap-3">
            <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-white/10 text-[var(--color-white)]">
              <!-- map pin -->
              <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 21s7-5.33 7-11a7 7 0 10-14 0c0 5.67 7 11 7 11z"></path>
                <circle cx="12" cy="10" r="2.5"></circle>
              </svg>
            </span>
            <span>123 Security St, Safe City</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- divider line -->
    <div class="mt-10 lg:mt-12 border-t border-[rgba(255,255,255,0.10)]"></div>

    <!-- bottom bar -->
    <div class="py-4 text-center text-[var(--color-white-60)]">
      <span class="text-sm">© 2025 <span class="font-extrabold">24/7 SENTINEL</span>. All right reserved.</span>
    </div>
  </div>
</footer>