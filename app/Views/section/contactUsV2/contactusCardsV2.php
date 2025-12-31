<section class="w-full h-screen backdrop-blur-xl relative z-10 overflow-hidden flex items-center justify-center text-[var(--color-white)] bg-[var(--color-black)]">
  
  <!-- Background Image -->
  <div class="absolute inset-0">
    <img 
      src="<?= getenv('app.baseURL') ?>assets/img/contactusimg.png" 
      alt="Contact Us Background"
      class="w-full h-full object-cover opacity-70 blur-md"
    >
  </div>

  <!-- Content -->
  <div class="max-w-6xl mx-auto px-6 text-center relative z-10 flex flex-col items-center justify-center h-full">
    <h2 class="text-4xl md:text-5xl font-bold mb-14 text-[var(--text-primary)] tracking-tight">
      Contact Us
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-8 justify-center">
      
      <!-- Call Us -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)] p-3 sm:p-10 flex flex-col items-center border border-[var(--color-yellow-dark)] hover:border-[var(--color-yellow)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-yellow)] hover:shadow-[inset_0_0_15px_var(--color-yellow)]">
        <div class="h-10 w-10 sm:h-14 sm:w-14 mb-1 sm:mb-3 text-[var(--color-yellow)] transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
          <!-- Call Icon -->
          <svg viewBox="0 0 20 20" fill="currentColor" class="w-full h-full">
            <path d="M61.7302966,7173.99596 C61.2672966,7175.40296 59.4532966,7176.10496 58.1572966,7175.98796 C56.3872966,7175.82796 54.4612966,7174.88896 52.9992966,7173.85496 C50.8502966,7172.33496 48.8372966,7169.98396 47.6642966,7167.48896 C46.8352966,7165.72596 46.6492966,7163.55796 47.8822966,7161.95096 C48.3382966,7161.35696 48.8312966,7161.03996 49.5722966,7161.00296 C50.6002966,7160.95296 50.7442966,7161.54096 51.0972966,7162.45696 C51.3602966,7163.14196 51.7112966,7163.84096 51.9072966,7164.55096 C52.2742966,7165.87596 50.9912966,7165.93096 50.8292966,7167.01396 C50.7282966,7167.69696 51.5562966,7168.61296 51.9302966,7169.09996 C52.6632966,7170.05396 53.5442966,7170.87696 54.5382966,7171.50296 C55.1072966,7171.86196 56.0262966,7172.50896 56.6782966,7172.15196 C57.6822966,7171.60196 57.5872966,7169.90896 58.9912966,7170.48196 C59.7182966,7170.77796 60.4222966,7171.20496 61.1162966,7171.57896 C62.1892966,7172.15596 62.1392966,7172.75396 61.7302966,7173.99596 C61.4242966,7174.92396 62.0362966,7173.06796 61.7302966,7173.99596" transform="translate(-47.000000, -7160.000000)"></path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold mb-1">Call Us</h3>
        <p class="text-sm text-gray-400 mb-3">Speak directly with our experts</p>
        <a href="tel:+1800SENTINEL" class="text-[var(--color-yellow)] text-sm font-medium hover:underline">+1-800-SENTINEL</a>
      </div>

      <!-- WhatsApp -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)]  p-3 sm:p-10 flex flex-col items-center border border-[var(--color-green-dark)] hover:border-[var(--color-green)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-green)] hover:shadow-[inset_0_0_15px_var(--color-green)]">
        <div class="h-10 w-10 sm:h-14 sm:w-14 mb-1 sm:mb-3 text-[var(--color-green)] transition-transform duration-500 group-hover:-rotate-12 group-hover:scale-110">
          <!-- WhatsApp Icon -->
          <svg viewBox="0 0 20 20" fill="currentColor" class="w-full h-full">
            <path d="M10 0C4.477 0 0 4.485 0 10c0 1.77.462 3.418 1.266 4.866L0 20l5.342-1.381A9.956 9.956 0 0010 20c5.523 0 10-4.485 10-10S15.523 0 10 0zm4.87 14.04c-.238.667-1.384 1.28-1.914 1.36-.53.08-1.224.118-2.088-.2-.864-.318-2.003-.67-3.4-2.046-1.398-1.375-1.953-2.868-2.03-3.09-.08-.223-.482-1.278.1-2.44.582-1.163 1.305-1.3 1.774-1.3.47 0 .77.007 1.108.008.338 0 .822-.18 1.286.97.465 1.15.942 1.9 1.03 2.027.088.127.147.277.03.445-.118.168-.177.276-.353.428-.176.152-.372.34-.53.46-.157.12-.32.25-.14.52.18.27.795 1.31 1.7 2.126.905.816 1.666 1.1 1.936 1.222.27.122.43.105.587-.064.158-.17.68-.793.863-1.065.182-.272.36-.23.6-.137.24.092 1.53.72 1.794.85.265.13.44.19.503.3.06.11.06.637-.178 1.305z"/>
          </svg>
        </div>
        <h3 class="text-lg font-semibold mb-1">WhatsApp</h3>
        <p class="text-sm text-gray-400 mb-3">Quick chat support</p>
        <a href="https://wa.me/18001234567" target="_blank" class="text-[var(--color-green)] text-sm font-medium hover:underline">Start Chat</a>
      </div>

      <!-- Facebook -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)]  p-3 sm:p-10 flex flex-col items-center border border-[var(--color-blue-dark)] hover:border-[var(--color-blue)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-blue)] hover:shadow-[inset_0_0_15px_var(--color-blue)]">
        <div class="h-10 w-10 sm:h-14 sm:w-14 mb-1 sm:mb-3 text-[var(--color-blue)] transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
          <svg fill="currentColor" viewBox="0 0 24 24" class="w-full h-full">
            <path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.92 21.59 18.06 20.39 19.61 18.57C21.16 16.75 22.01 14.45 22 12.06C22 6.53 17.5 2.04 12 2.04Z"/>
          </svg>
        </div>
        <h3 class="text-lg font-semibold mb-1">Facebook</h3>
        <p class="text-sm text-gray-400 mb-3">Follow us for updates</p>
        <a href="https://facebook.com/247sentinel" target="_blank" class="text-[var(--color-blue)] text-sm font-medium hover:underline">Start Chat</a>
      </div>

      <!-- Email -->
      <div class="group bg-[var(--color-black)] rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)]  p-3 sm:p-10 flex flex-col items-center border border-[var(--color-red-dark)] hover:border-[var(--color-red)] transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_0_25px_var(--color-red)] hover:shadow-[inset_0_0_15px_var(--color-red)]">
        <div class="h-10 w-10 sm:h-14 sm:w-14 mb-1 sm:mb-3 text-[var(--color-red)] transition-transform duration-500 group-hover:-rotate-12 group-hover:scale-110">
          <svg viewBox="0 0 20 20" fill="currentColor" class="w-full h-full">
            <path d="M2 4a2 2 0 00-2 2v8a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2H2zm8 5l8-5v2l-8 5-8-5V4l8 5z"/>
          </svg>
        </div>
        <h3 class="text-lg font-semibold mb-1">Email</h3>
        <p class="text-sm text-gray-400 mb-3">Write to our team</p>
        <a href="mailto:info@247sentinel.com" class="text-[var(--color-red)] text-sm font-medium hover:underline">info@247sentinel.com</a>
      </div>
    </div>
  </div>
</section>
