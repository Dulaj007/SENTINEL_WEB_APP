<footer class="w-full h-auto py-10 text-[var(--color-white)] relative overflow-hidden
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
        <div><a href="<?= base_url('/') ?>" class="flex items-start gap-3">
          <img src="assets/icons/logo.png" alt="24/7 Sentinel logo" class="h-14 w-14 object-contain" />
          <div class="leading-tight">
            <div class="text-2xl sm:text-2xl font-extrabold tracking-wide">
              <span class="text-[var(--color-white)]">24/7</span>
              <span class="bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] bg-clip-text text-transparent">
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
          <li><a href="<?= base_url('services') ?>" class="hover:text-[var(--color-yellow)] transition cursor-pointer">Live Monitoring</a></li>
          <li><a href="<?= base_url('services') ?>" class="hover:text-[var(--color-yellow)] transition cursor-pointer">Emergency Response</a></li>
          <li><a href="<?= base_url('services') ?>" class="hover:text-[var(--color-yellow)] transition cursor-pointer">Two-Way Audio</a></li>
          <li><a href="<?= base_url('services') ?>" class="hover:text-[var(--color-yellow)] transition cursor-pointer">Installation</a></li>
        </ul>
      </div>

      <!-- Company -->
      <div>
        <h3 class="text-xl sm:text-2xl border-b p-3 font-bold mb-4">Company</h3>
        <ul class="space-y-2 sm:space-y-1 text-sm ml-5 sm:text-base text-[var(--text-secondary)]">
          <li><a href="<?= base_url('about') ?>" class="hover:text-[var(--color-white)] underline-offset-4 hover:underline transition">About Us</a></li>
          <li><a href="<?= base_url('services') ?>" class="hover:text-[var(--color-white)] underline-offset-4 hover:underline transition">Services</a></li>
          <li><a href="<?= base_url('careers') ?>" class="hover:text-[var(--color-white)] underline-offset-4 hover:underline transition">Careers</a></li>
          <li><a href="<?= base_url('blog') ?>" class="hover:text-[var(--color-white)] underline-offset-4 hover:underline transition">Blog</a></li>
          <li><a href="<?= base_url('contact') ?>" class="hover:text-[var(--color-white)] underline-offset-4 hover:underline transition">Contact</a></li>
        </ul>
      </div>

      <!-- Connect -->
<div>
  <h3 class="text-xl sm:text-2xl border-b p-3 font-bold mb-4">Connect</h3>
  <ul class="space-y-3 sm:space-y-3 text-sm sm:text-base text-[var(--color-white)]/80">
    
    <!-- Facebook Link (Clickable) -->
    <li class="hover:text-[var(--color-blue)] transition">
      <a href="https://www.facebook.com/247Sentinel" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3">
        <span class="inline-flex items-center justify-center h-8 w-8 rounded-full text-[var(--text-secondary)]">
          <img src="assets/icons/fb-logo.png" alt="Facebook" class="h-6 w-6 object-contain" />
        </span>
        <span>247sentinel</span>
      </a>
    </li>
    
    <!-- Instagram Link (Clickable) - With Colored Instagram Icon -->
<li class="hover:text-[var(--accent-red)] transition">
  <a href="https://www.instagram.com/247sentinel/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3">
    <span class="inline-flex items-center justify-center h-8 w-8 rounded-full text-[var(--text-secondary)]">
      <!-- Instagram SVG Icon with Gradient -->
      <svg class="h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="instagram-gradient" x1="0%" y1="100%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#FFDC80"/>
            <stop offset="25%" style="stop-color:#FCAF45"/>
            <stop offset="50%" style="stop-color:#F77737"/>
            <stop offset="75%" style="stop-color:#F56040"/>
            <stop offset="100%" style="stop-color:#FD1D1D"/>
          </linearGradient>
          <linearGradient id="instagram-gradient-2" x1="0%" y1="100%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#FFDC80"/>
            <stop offset="10%" style="stop-color:#FCAF45"/>
            <stop offset="30%" style="stop-color:#F77737"/>
            <stop offset="50%" style="stop-color:#F56040"/>
            <stop offset="70%" style="stop-color:#E1306C"/>
            <stop offset="90%" style="stop-color:#C13584"/>
            <stop offset="100%" style="stop-color:#833AB4"/>
          </linearGradient>
        </defs>
        <path fill="url(#instagram-gradient-2)" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
      </svg>
    </span>
    <span>247sentinel</span>
  </a>
</li>
    
    <!-- Email Link (Clickable - Opens Mail Client) -->
    <li class="hover:text-[var(--accent-blue)] transition">
      <a href="mailto:info@247sentinel.com" class="flex items-center gap-3">
        <span class="inline-flex items-center justify-center h-8 w-8 rounded-full text-[var(--text-secondary)]">
          <img src="assets/icons/em-logo.png" alt="Email" class="h-6 w-6 object-contain" />
        </span>
        <span>info@247sentinel.com</span>
      </a>
    </li>
    
    <!-- Location -->
    <li class="flex items-center gap-3 hover:text-[var(--color-yellow)] transition">
      <span class="inline-flex items-center justify-center h-8 w-8 rounded-full text-[var(--text-secondary)]">
        <img src="assets/icons/loc-logo.svg" alt="Location" class="h-6 w-6 object-contain" />
      </span>
      <span>No 167/B. Rathnapura Road, Wekada, Panadura, Sri Lanka</span>
    </li>
    
    </ul>
    </div>

    </div>

    <!-- divider line -->
    <div class="mt-10 lg:mt-12 border-t border-white/30"></div>

    <!-- bottom bar -->
    <div class="py-4 text-center text-[var(--color-white-60)] text-sm sm:text-base">
      <span>© 2026 <span class="font-extrabold">24/7 SENTINEL</span>. All rights reserved.</span>
    </div>
  </div>
</footer>