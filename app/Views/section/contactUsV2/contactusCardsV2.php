<section class="w-full h-auto min-h-screen backdrop-blur-xl relative z-10 overflow-hidden flex items-center justify-center text-[var(--color-white)] bg-[var(--color-black)] py-20 sm:py-16">
  
  <!-- Background Image -->
  <div class="absolute inset-0">
    <img 
      src="<?= getenv('app.baseURL') ?>assets/img/contactusimg.png" 
      alt="Contact Us Background"
      class="w-full h-full object-cover opacity-70 blur-md"
    >
  </div>

  <!-- Content -->
  <div class="max-w-7xl mx-auto px-6 text-center relative z-10 flex flex-col items-center justify-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-14 text-[var(--text-primary)] tracking-tight">
      Contact Us
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 justify-center items-stretch">
      
      <!-- Call Us - Number 1 -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)] p-4 sm:p-8 flex flex-col items-center border border-[var(--color-yellow-dark)] hover:border-[var(--color-yellow)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-yellow),inset_0_0_15px_rgba(255,191,53,0.15)]">
        <div class="h-10 w-10 sm:h-12 sm:w-12 mb-2 sm:mb-3 text-[var(--color-yellow)] transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
          <svg viewBox="0 0 24 24" fill="currentColor" class="w-full h-full">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
        </div>
        <h3 class="text-base sm:text-lg font-semibold mb-1">Call Us</h3>
        <p class="text-xs sm:text-sm text-gray-400 mb-2">Speak directly with our experts</p>
        <a href="tel:+94762472477" class="text-[var(--color-yellow)] text-sm font-medium hover:underline">+94 076 247 2477</a>
      </div>

      <!-- Call Us - Number 2 -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)] p-4 sm:p-8 flex flex-col items-center border border-[var(--color-yellow-dark)] hover:border-[var(--color-yellow)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-yellow),inset_0_0_15px_rgba(255,191,53,0.15)]">
        <div class="h-10 w-10 sm:h-12 sm:w-12 mb-2 sm:mb-3 text-[var(--color-yellow)] transition-transform duration-500 group-hover:-rotate-12 group-hover:scale-110">
          <svg viewBox="0 0 24 24" fill="currentColor" class="w-full h-full">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
        </div>
        <h3 class="text-base sm:text-lg font-semibold mb-1">Call Us</h3>
        <p class="text-xs sm:text-sm text-gray-400 mb-2">Secondary support line</p>
        <a href="tel:+94762472476" class="text-[var(--color-yellow)] text-sm font-medium hover:underline">+94 076 247 2476</a>
      </div>

      <!-- WhatsApp - Number 1 -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)] p-4 sm:p-8 flex flex-col items-center border border-[var(--color-green-dark)] hover:border-[var(--color-green)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-green),inset_0_0_15px_rgba(37,211,102,0.15)]">
        <div class="h-10 w-10 sm:h-12 sm:w-12 mb-2 sm:mb-3 text-[var(--color-green)] transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
          <svg viewBox="0 0 20 20" fill="currentColor" class="w-full h-full">
            <path d="M10 0C4.477 0 0 4.485 0 10c0 1.77.462 3.418 1.266 4.866L0 20l5.342-1.381A9.956 9.956 0 0010 20c5.523 0 10-4.485 10-10S15.523 0 10 0zm4.87 14.04c-.238.667-1.384 1.28-1.914 1.36-.53.08-1.224.118-2.088-.2-.864-.318-2.003-.67-3.4-2.046-1.398-1.375-1.953-2.868-2.03-3.09-.08-.223-.482-1.278.1-2.44.582-1.163 1.305-1.3 1.774-1.3.47 0 .77.007 1.108.008.338 0 .822-.18 1.286.97.465 1.15.942 1.9 1.03 2.027.088.127.147.277.03.445-.118.168-.177.276-.353.428-.176.152-.372.34-.53.46-.157.12-.32.25-.14.52.18.27.795 1.31 1.7 2.126.905.816 1.666 1.1 1.936 1.222.27.122.43.105.587-.064.158-.17.68-.793.863-1.065.182-.272.36-.23.6-.137.24.092 1.53.72 1.794.85.265.13.44.19.503.3.06.11.06.637-.178 1.305z"/>
          </svg>
        </div>
        <h3 class="text-base sm:text-lg font-semibold mb-1">WhatsApp</h3>
        <p class="text-xs sm:text-sm text-gray-400 mb-2">Quick chat support</p>
        <a href="https://wa.me/94762472477" target="_blank" class="text-[var(--color-green)] text-sm font-medium hover:underline">076 247 2477</a>
      </div>

      <!-- WhatsApp - Number 2 -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)] p-4 sm:p-8 flex flex-col items-center border border-[var(--color-green-dark)] hover:border-[var(--color-green)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-green),inset_0_0_15px_rgba(37,211,102,0.15)]">
        <div class="h-10 w-10 sm:h-12 sm:w-12 mb-2 sm:mb-3 text-[var(--color-green)] transition-transform duration-500 group-hover:-rotate-12 group-hover:scale-110">
          <svg viewBox="0 0 20 20" fill="currentColor" class="w-full h-full">
            <path d="M10 0C4.477 0 0 4.485 0 10c0 1.77.462 3.418 1.266 4.866L0 20l5.342-1.381A9.956 9.956 0 0010 20c5.523 0 10-4.485 10-10S15.523 0 10 0zm4.87 14.04c-.238.667-1.384 1.28-1.914 1.36-.53.08-1.224.118-2.088-.2-.864-.318-2.003-.67-3.4-2.046-1.398-1.375-1.953-2.868-2.03-3.09-.08-.223-.482-1.278.1-2.44.582-1.163 1.305-1.3 1.774-1.3.47 0 .77.007 1.108.008.338 0 .822-.18 1.286.97.465 1.15.942 1.9 1.03 2.027.088.127.147.277.03.445-.118.168-.177.276-.353.428-.176.152-.372.34-.53.46-.157.12-.32.25-.14.52.18.27.795 1.31 1.7 2.126.905.816 1.666 1.1 1.936 1.222.27.122.43.105.587-.064.158-.17.68-.793.863-1.065.182-.272.36-.23.6-.137.24.092 1.53.72 1.794.85.265.13.44.19.503.3.06.11.06.637-.178 1.305z"/>
          </svg>
        </div>
        <h3 class="text-base sm:text-lg font-semibold mb-1">WhatsApp</h3>
        <p class="text-xs sm:text-sm text-gray-400 mb-2">Secondary chat line</p>
        <a href="https://wa.me/94762472476" target="_blank" class="text-[var(--color-green)] text-sm font-medium hover:underline">076 247 2476</a>
      </div>
      
      <!-- Facebook -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)] p-4 sm:p-8 flex flex-col items-center border border-[var(--color-blue-dark)] hover:border-[var(--color-blue)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-blue),inset_0_0_15px_rgba(8,158,252,0.15)]">
        <div class="h-10 w-10 sm:h-12 sm:w-12 mb-2 sm:mb-3 text-[var(--color-blue)] transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
          <svg fill="currentColor" viewBox="0 0 24 24" class="w-full h-full">
            <path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.92 21.59 18.06 20.39 19.61 18.57C21.16 16.75 22.01 14.45 22 12.06C22 6.53 17.5 2.04 12 2.04Z"/>
          </svg>
        </div>
        <h3 class="text-base sm:text-lg font-semibold mb-1">Facebook</h3>
        <p class="text-xs sm:text-sm text-gray-400 mb-2">Follow us for updates</p>
        <a href="https://facebook.com/247sentinel" target="_blank" class="text-[var(--color-blue)] text-sm font-medium hover:underline">Follow Us</a>
      </div>

      <!-- Email -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)] p-4 sm:p-8 flex flex-col items-center border border-[var(--color-red-dark)] hover:border-[var(--color-red)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-red),inset_0_0_15px_rgba(219,37,37,0.15)]">
        <div class="h-10 w-10 sm:h-12 sm:w-12 mb-2 sm:mb-3 text-[var(--color-red)] transition-transform duration-500 group-hover:-rotate-12 group-hover:scale-110">
          <svg viewBox="0 0 24 24" fill="currentColor" class="w-full h-full">
            <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
          </svg>
        </div>
        <h3 class="text-base sm:text-lg font-semibold mb-1">Email</h3>
        <p class="text-xs sm:text-sm text-gray-400 mb-2">Write to our team</p>
        <a href="mailto:info@sentinel24-7.com" class="text-[var(--color-red)] text-sm font-medium hover:underline">info@sentinel24-7.com</a>
      </div>

      <!-- Instagram -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)] p-4 sm:p-8 flex flex-col items-center transition-all duration-500 hover:scale-[1.05]"
           style="border: 1px solid #833AB4;"
           onmouseover="this.style.borderColor='#E1306C'; this.style.boxShadow='0 0 25px #E1306C, inset 0 0 15px rgba(225,48,108,0.15)';"
           onmouseout="this.style.borderColor='#833AB4'; this.style.boxShadow='0 0 20px rgba(255,255,255,0.05)';">
        <div class="h-10 w-10 sm:h-12 sm:w-12 mb-2 sm:mb-3 transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110"
             style="color: #E1306C;">
          <svg fill="currentColor" viewBox="0 0 24 24" class="w-full h-full">
            <path d="M7.75 2C4.57 2 2 4.57 2 7.75v8.5C2 19.43 4.57 22 7.75 22h8.5C19.43 22 22 19.43 22 16.25v-8.5C22 4.57 19.43 2 16.25 2h-8.5zm0 1.5h8.5c2.35 0 4.25 1.9 4.25 4.25v8.5c0 2.35-1.9 4.25-4.25 4.25h-8.5C5.4 20.5 3.5 18.6 3.5 16.25v-8.5C3.5 5.4 5.4 3.5 7.75 3.5zm8.75 2a1 1 0 100 2 1 1 0 000-2zM12 7a5 5 0 100 10 5 5 0 000-10zm0 1.5a3.5 3.5 0 110 7 3.5 3.5 0 010-7z"/>
          </svg>
        </div>
        <h3 class="text-base sm:text-lg font-semibold mb-1">Instagram</h3>
        <p class="text-xs sm:text-sm mb-2" style="color: #E1306C;">Follow our latest updates</p>
        <a href="https://www.instagram.com/247sentinel/" target="_blank"
           class="text-sm font-medium hover:underline"
           style="color: #E1306C;"
           onmouseover="this.style.color='#F56040';"
           onmouseout="this.style.color='#E1306C';">
          Follow Us
        </a>
      </div>

      <!-- Location -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)] p-4 sm:p-8 flex flex-col items-center border border-[var(--color-yellow-dark)] hover:border-[var(--color-yellow)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-yellow),inset_0_0_15px_rgba(255,191,53,0.15)]">
        <div class="h-10 w-10 sm:h-12 sm:w-12 mb-2 sm:mb-3 text-[var(--color-yellow)] transition-transform duration-500 group-hover:scale-110">
          <svg viewBox="0 0 24 24" fill="currentColor" class="w-full h-full">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
          </svg>
        </div>
        <h3 class="text-base sm:text-lg font-semibold mb-1">Visit Us</h3>
        <p class="text-xs sm:text-sm text-gray-400 mb-2">Our office location</p>
        <span class="text-[var(--color-yellow)] text-xs sm:text-sm font-medium text-center leading-relaxed">No 167/B, Rathnapura Road,<br>Wekada, Panadura, Sri Lanka</span>
      </div>

    </div>
  </div>
</section>