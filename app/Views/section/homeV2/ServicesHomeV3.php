<!-- ========================= SERVICES SECTION V3 ========================= -->
<section id="services" class="relative pt-20 w-full min-h-[100vh] py-20 overflow-hidden">
  <!-- ===== Background Image ===== -->
  <div class="absolute inset-0 -z-10">
    <img 
      src="<?= getenv('app.baseURL') ?>assets/img/servicebg.png" 
      alt="Services Background" 
      class="w-full h-full object-cover object-center"
    >
  </div>

  <!-- ===== Background Gradient Overlay ===== -->
  <div class="absolute inset-0 bg-gradient-to-t from-[#0b0c10] via-[#0b0c10]/90 to-[#0b0c10]/80 z-0"></div>

  <!-- ===== Section Title ===== -->
  <div class="relative z-10 flex flex-col items-center justify-center mb-14 px-4">
    <!-- Live Icon -->
    <div class="mb-2">
      <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
           class="w-20 h-20 fill-[var(--accent-red)] drop-shadow-[0_0_18px_var(--accent-red)]">
        <g id="SVGRepo_iconCarrier">
          <g id="ic_fluent_live_24_filled" fill="currentColor" fill-rule="nonzero">
            <path d="M6.34277267,4.93867691 C6.73329697,5.3292012 6.73329697,5.96236618 6.34277267,6.35289047 C3.21757171,9.47809143 3.21757171,14.5450433 6.34277267,17.6702443 C6.73329697,18.0607686 6.73329697,18.6939336 6.34277267,19.0844579 C5.95224838,19.4749821 5.3190834,19.4749821 4.92855911,19.0844579 C1.02230957,15.1782083 1.02230957,8.84492646 4.92855911,4.93867691 C5.3190834,4.54815262 5.95224838,4.54815262 6.34277267,4.93867691 Z M19.0743401,4.93867691 C22.9805896,8.84492646 22.9805896,15.1782083 19.0743401,19.0844579 C18.6838158,19.4749821 18.0506508,19.4749821 17.6601265,19.0844579 C17.2696022,18.6939336 17.2696022,18.0607686 17.6601265,17.6702443 C20.7853275,14.5450433 20.7853275,9.47809143 17.6601265,6.35289047 C17.2696022,5.96236618 17.2696022,5.3292012 17.6601265,4.93867691 C18.0506508,4.54815262 18.6838158,4.54815262 19.0743401,4.93867691 Z M9.3094225,7.81205295 C9.69994679,8.20257725 9.69994679,8.83574222 9.3094225,9.22626652 C7.77845993,10.7572291 7.77845993,13.2394099 9.3094225,14.7703724 C9.69994679,15.1608967 9.69994679,15.7940617 9.3094225,16.184586 C8.91889821,16.5751103 8.28573323,16.5751103 7.89520894,16.184586 C5.58319778,13.8725748 5.58319778,10.1240641 7.89520894,7.81205295 C8.28573323,7.42152866 8.91889821,7.42152866 9.3094225,7.81205295 Z M16.267742,7.81205295 C18.5797531,10.1240641 18.5797531,13.8725748 16.267742,16.184586 C15.8772177,16.5751103 15.2440527,16.5751103 14.8535284,16.184586 C14.4630041,15.7940617 14.4630041,15.1608967 14.8535284,14.7703724 C16.384491,13.2394099 16.384491,10.7572291 14.8535284,9.22626652 C14.4630041,8.83574222 14.4630041,8.20257725 14.8535284,7.81205295 C15.2440527,7.42152866 15.8772177,7.42152866 16.267742,7.81205295 Z M12.0814755,10.5814755 C12.9099026,10.5814755 13.5814755,11.2530483 13.5814755,12.0814755 C13.5814755,12.9099026 12.9099026,13.5814755 12.0814755,13.5814755 C11.2530483,13.5814755 10.5814755,12.9099026 10.5814755,12.0814755 C10.5814755,11.2530483 11.2530483,10.5814755 12.0814755,10.5814755 Z"></path>
          </g>
        </g>
      </svg>
    </div>

    <!-- Main Title -->
    <h1 class="text-4xl text-center sm:text-5xl font-extrabold leading-tight">
      <span class="text-white drop-shadow-[0_0_6px_var(--accent-red)]">
        OUR SERVICES
      </span>
    </h1>

    <!-- Subtitle -->
    <p class="text-gray-400 text-base sm:text-lg mt-3 text-center max-w-2xl leading-relaxed">
      Comprehensive security solutions tailored to protect what matters most to you — 24 hours a day, 7 days a week.
    </p>
  </div>

  <!-- ===== Service Cards Grid ===== -->
  <div class="relative z-10 max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-10 xl:px-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 xl:gap-7">

      <!-- ====== Card 1: 24/7 LIVE CCTV MONITORING ====== -->
      <div class="service-v3-card group relative rounded-2xl p-[1px] cursor-pointer"
           style="transform-style: preserve-3d; perspective: 800px;">
        <!-- Animated border gradient (hidden by default, shown on hover) -->
        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
             style="background: linear-gradient(135deg, var(--accent-red), transparent 40%, transparent 60%, var(--accent-red));"></div>
        <!-- Card inner -->
        <div class="relative rounded-2xl p-6 sm:p-7 flex flex-col items-center text-center h-full
                    transition-all duration-500 ease-out
                    group-hover:-translate-y-2
                    overflow-hidden"
             style="background: linear-gradient(165deg, #1a1a22 0%, #12121a 50%, #0d0d14 100%);
                    box-shadow: 
                      0 4px 6px rgba(0,0,0,0.4),
                      0 10px 20px rgba(0,0,0,0.3),
                      0 1px 0 rgba(255,255,255,0.03) inset,
                      0 -1px 0 rgba(0,0,0,0.5) inset;">
          <!-- Hover glow overlay -->
          <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"
               style="background: radial-gradient(ellipse at 50% 0%, rgba(255,59,63,0.08) 0%, transparent 70%);"></div>
          <!-- Bottom reflection line -->
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[1px] group-hover:w-3/4 transition-all duration-700 ease-out"
               style="background: linear-gradient(90deg, transparent, var(--accent-red), transparent);"></div>

          <!-- Icon -->
          <div class="relative w-16 h-16 rounded-xl flex items-center justify-center mb-5
                      transition-all duration-500
                      group-hover:scale-110 group-hover:rotate-3"
               style="background: linear-gradient(135deg, #1f1f2a, #16161e);
                      box-shadow: 
                        0 4px 12px rgba(0,0,0,0.5),
                        0 1px 0 rgba(255,255,255,0.04) inset,
                        0 0 0 1px rgba(255,59,63,0.08);">
            <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="box-shadow: 0 0 20px rgba(255,59,63,0.25), 0 0 0 1px rgba(255,59,63,0.3);"></div>
            <svg class="w-7 h-7 text-[var(--accent-red)] relative z-10 transition-all duration-500 group-hover:drop-shadow-[0_0_8px_var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"/>
            </svg>
          </div>

          <!-- Title -->
          <h3 class="text-sm sm:text-base font-extrabold text-white mb-3 tracking-wide leading-snug
                      transition-all duration-300 group-hover:text-[var(--accent-red)] group-hover:drop-shadow-[0_0_6px_rgba(255,59,63,0.4)]">
            24/7 LIVE CCTV MONITORING
          </h3>

          <!-- Description -->
          <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-5 flex-grow
                    transition-colors duration-300 group-hover:text-gray-300">
            We provide live monitoring for homes and private residences, business properties, warehouses, factories, construction sites, parking lots, retail stores, offices, plantations, and valuable private lands.
          </p>

          <!-- Learn More -->
          <a href="<?= base_url('services') ?>" 
             class="relative inline-flex items-center gap-1.5 text-[var(--accent-red)] text-xs sm:text-sm font-semibold tracking-wide
                    group-hover:gap-3 transition-all duration-300 z-10">
            Learn More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- ====== Card 2: INSTANT RESPONSE ====== -->
      <div class="service-v3-card group relative rounded-2xl p-[1px] cursor-pointer"
           style="transform-style: preserve-3d; perspective: 800px;">
        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
             style="background: linear-gradient(135deg, var(--accent-red), transparent 40%, transparent 60%, var(--accent-red));"></div>
        <div class="relative rounded-2xl p-6 sm:p-7 flex flex-col items-center text-center h-full
                    transition-all duration-500 ease-out
                    group-hover:-translate-y-2
                    overflow-hidden"
             style="background: linear-gradient(165deg, #1a1a22 0%, #12121a 50%, #0d0d14 100%);
                    box-shadow: 
                      0 4px 6px rgba(0,0,0,0.4),
                      0 10px 20px rgba(0,0,0,0.3),
                      0 1px 0 rgba(255,255,255,0.03) inset,
                      0 -1px 0 rgba(0,0,0,0.5) inset;">
          <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"
               style="background: radial-gradient(ellipse at 50% 0%, rgba(255,59,63,0.08) 0%, transparent 70%);"></div>
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[1px] group-hover:w-3/4 transition-all duration-700 ease-out"
               style="background: linear-gradient(90deg, transparent, var(--accent-red), transparent);"></div>

          <div class="relative w-16 h-16 rounded-xl flex items-center justify-center mb-5
                      transition-all duration-500
                      group-hover:scale-110 group-hover:rotate-3"
               style="background: linear-gradient(135deg, #1f1f2a, #16161e);
                      box-shadow: 
                        0 4px 12px rgba(0,0,0,0.5),
                        0 1px 0 rgba(255,255,255,0.04) inset,
                        0 0 0 1px rgba(255,59,63,0.08);">
            <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="box-shadow: 0 0 20px rgba(255,59,63,0.25), 0 0 0 1px rgba(255,59,63,0.3);"></div>
            <!-- Lightning Bolt -->
            <svg class="w-7 h-7 text-[var(--accent-red)] relative z-10 transition-all duration-500 group-hover:drop-shadow-[0_0_8px_var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
            </svg>
          </div>

          <h3 class="text-sm sm:text-base font-extrabold text-white mb-3 tracking-wide leading-snug
                      transition-all duration-300 group-hover:text-[var(--accent-red)] group-hover:drop-shadow-[0_0_6px_rgba(255,59,63,0.4)]">
            INSTANT RESPONSE
          </h3>

          <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-5 flex-grow
                    transition-colors duration-300 group-hover:text-gray-300">
            When a threat is detected, we immediately notify you and if you are unavailable, we continue informing your nominated contact person until the situation is acknowledged.
          </p>

          <a href="<?= base_url('services') ?>" 
             class="relative inline-flex items-center gap-1.5 text-[var(--accent-red)] text-xs sm:text-sm font-semibold tracking-wide
                    group-hover:gap-3 transition-all duration-300 z-10">
            Learn More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- ====== Card 3: LIVE MONITORING & ALERTS ====== -->
      <div class="service-v3-card group relative rounded-2xl p-[1px] cursor-pointer"
           style="transform-style: preserve-3d; perspective: 800px;">
        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
             style="background: linear-gradient(135deg, var(--accent-red), transparent 40%, transparent 60%, var(--accent-red));"></div>
        <div class="relative rounded-2xl p-6 sm:p-7 flex flex-col items-center text-center h-full
                    transition-all duration-500 ease-out
                    group-hover:-translate-y-2
                    overflow-hidden"
             style="background: linear-gradient(165deg, #1a1a22 0%, #12121a 50%, #0d0d14 100%);
                    box-shadow: 
                      0 4px 6px rgba(0,0,0,0.4),
                      0 10px 20px rgba(0,0,0,0.3),
                      0 1px 0 rgba(255,255,255,0.03) inset,
                      0 -1px 0 rgba(0,0,0,0.5) inset;">
          <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"
               style="background: radial-gradient(ellipse at 50% 0%, rgba(255,59,63,0.08) 0%, transparent 70%);"></div>
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[1px] group-hover:w-3/4 transition-all duration-700 ease-out"
               style="background: linear-gradient(90deg, transparent, var(--accent-red), transparent);"></div>

          <div class="relative w-16 h-16 rounded-xl flex items-center justify-center mb-5
                      transition-all duration-500
                      group-hover:scale-110 group-hover:rotate-3"
               style="background: linear-gradient(135deg, #1f1f2a, #16161e);
                      box-shadow: 
                        0 4px 12px rgba(0,0,0,0.5),
                        0 1px 0 rgba(255,255,255,0.04) inset,
                        0 0 0 1px rgba(255,59,63,0.08);">
            <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="box-shadow: 0 0 20px rgba(255,59,63,0.25), 0 0 0 1px rgba(255,59,63,0.3);"></div>
            <!-- Eye Icon -->
            <svg class="w-7 h-7 text-[var(--accent-red)] relative z-10 transition-all duration-500 group-hover:drop-shadow-[0_0_8px_var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>

          <h3 class="text-sm sm:text-base font-extrabold text-white mb-3 tracking-wide leading-snug
                      transition-all duration-300 group-hover:text-[var(--accent-red)] group-hover:drop-shadow-[0_0_6px_rgba(255,59,63,0.4)]">
            LIVE MONITORING & ALERTS
          </h3>

          <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-5 flex-grow
                    transition-colors duration-300 group-hover:text-gray-300">
            24/7 real-time surveillance monitoring with instant push notifications, email alerts, and SMS warnings when suspicious activity is detected.
          </p>

          <a href="<?= base_url('services') ?>" 
             class="relative inline-flex items-center gap-1.5 text-[var(--accent-red)] text-xs sm:text-sm font-semibold tracking-wide
                    group-hover:gap-3 transition-all duration-300 z-10">
            Learn More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- ====== Card 4: PEOPLE, ASSET & VEHICLE TRACKING ====== -->
      <div class="service-v3-card group relative rounded-2xl p-[1px] cursor-pointer"
           style="transform-style: preserve-3d; perspective: 800px;">
        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
             style="background: linear-gradient(135deg, var(--accent-red), transparent 40%, transparent 60%, var(--accent-red));"></div>
        <div class="relative rounded-2xl p-6 sm:p-7 flex flex-col items-center text-center h-full
                    transition-all duration-500 ease-out
                    group-hover:-translate-y-2
                    overflow-hidden"
             style="background: linear-gradient(165deg, #1a1a22 0%, #12121a 50%, #0d0d14 100%);
                    box-shadow: 
                      0 4px 6px rgba(0,0,0,0.4),
                      0 10px 20px rgba(0,0,0,0.3),
                      0 1px 0 rgba(255,255,255,0.03) inset,
                      0 -1px 0 rgba(0,0,0,0.5) inset;">
          <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"
               style="background: radial-gradient(ellipse at 50% 0%, rgba(255,59,63,0.08) 0%, transparent 70%);"></div>
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[1px] group-hover:w-3/4 transition-all duration-700 ease-out"
               style="background: linear-gradient(90deg, transparent, var(--accent-red), transparent);"></div>

          <div class="relative w-16 h-16 rounded-xl flex items-center justify-center mb-5
                      transition-all duration-500
                      group-hover:scale-110 group-hover:rotate-3"
               style="background: linear-gradient(135deg, #1f1f2a, #16161e);
                      box-shadow: 
                        0 4px 12px rgba(0,0,0,0.5),
                        0 1px 0 rgba(255,255,255,0.04) inset,
                        0 0 0 1px rgba(255,59,63,0.08);">
            <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="box-shadow: 0 0 20px rgba(255,59,63,0.25), 0 0 0 1px rgba(255,59,63,0.3);"></div>
            <!-- Map Pin Icon -->
            <svg class="w-7 h-7 text-[var(--accent-red)] relative z-10 transition-all duration-500 group-hover:drop-shadow-[0_0_8px_var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
            </svg>
          </div>

          <h3 class="text-sm sm:text-base font-extrabold text-white mb-3 tracking-wide leading-snug
                      transition-all duration-300 group-hover:text-[var(--accent-red)] group-hover:drop-shadow-[0_0_6px_rgba(255,59,63,0.4)]">
            PEOPLE, ASSET & VEHICLE TRACKING
          </h3>

          <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-5 flex-grow
                    transition-colors duration-300 group-hover:text-gray-300">
            Track vehicles, valuable assets, and individuals who require protection. Includes optional child safety tracking with parental consent and real-time location monitoring.
          </p>

          <a href="<?= base_url('services') ?>" 
             class="relative inline-flex items-center gap-1.5 text-[var(--accent-red)] text-xs sm:text-sm font-semibold tracking-wide
                    group-hover:gap-3 transition-all duration-300 z-10">
            Learn More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- ====== Card 5: ANIMAL INTRUSION DETECTION ====== -->
      <div class="service-v3-card group relative rounded-2xl p-[1px] cursor-pointer"
           style="transform-style: preserve-3d; perspective: 800px;">
        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
             style="background: linear-gradient(135deg, var(--accent-red), transparent 40%, transparent 60%, var(--accent-red));"></div>
        <div class="relative rounded-2xl p-6 sm:p-7 flex flex-col items-center text-center h-full
                    transition-all duration-500 ease-out
                    group-hover:-translate-y-2
                    overflow-hidden"
             style="background: linear-gradient(165deg, #1a1a22 0%, #12121a 50%, #0d0d14 100%);
                    box-shadow: 
                      0 4px 6px rgba(0,0,0,0.4),
                      0 10px 20px rgba(0,0,0,0.3),
                      0 1px 0 rgba(255,255,255,0.03) inset,
                      0 -1px 0 rgba(0,0,0,0.5) inset;">
          <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"
               style="background: radial-gradient(ellipse at 50% 0%, rgba(255,59,63,0.08) 0%, transparent 70%);"></div>
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[1px] group-hover:w-3/4 transition-all duration-700 ease-out"
               style="background: linear-gradient(90deg, transparent, var(--accent-red), transparent);"></div>

          <div class="relative w-16 h-16 rounded-xl flex items-center justify-center mb-5
                      transition-all duration-500
                      group-hover:scale-110 group-hover:rotate-3"
               style="background: linear-gradient(135deg, #1f1f2a, #16161e);
                      box-shadow: 
                        0 4px 12px rgba(0,0,0,0.5),
                        0 1px 0 rgba(255,255,255,0.04) inset,
                        0 0 0 1px rgba(255,59,63,0.08);">
            <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="box-shadow: 0 0 20px rgba(255,59,63,0.25), 0 0 0 1px rgba(255,59,63,0.3);"></div>
            <!-- Paw Print Icon -->
            <svg class="w-7 h-7 text-[var(--accent-red)] relative z-10 transition-all duration-500 group-hover:drop-shadow-[0_0_8px_var(--accent-red)]" viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <path d="M8.5 3C7.12 3 6 4.34 6 6s1.12 3 2.5 3S11 7.66 11 6 9.88 3 8.5 3zM15.5 3C14.12 3 13 4.34 13 6s1.12 3 2.5 3S18 7.66 18 6s-1.12-3-2.5-3zM4.5 8C3.12 8 2 9.34 2 11s1.12 3 2.5 3S7 12.66 7 11 5.88 8 4.5 8zM19.5 8C18.12 8 17 9.34 17 11s1.12 3 2.5 3S22 12.66 22 11s-1.12-3-2.5-3zM12 12c-2.5 0-4.5 1.5-5.5 3.5-.4.8-.5 1.7-.1 2.5.5 1 1.6 1.5 2.8 1.5.7 0 1.4-.2 1.9-.5.5-.3 1.2-.5 1.9-.5s1.4.2 1.9.5c.5.3 1.2.5 1.9.5 1.2 0 2.3-.5 2.8-1.5.4-.8.3-1.7-.1-2.5-1-2-3-3.5-5.5-3.5z"/>
            </svg>
          </div>

          <h3 class="text-sm sm:text-base font-extrabold text-white mb-3 tracking-wide leading-snug
                      transition-all duration-300 group-hover:text-[var(--accent-red)] group-hover:drop-shadow-[0_0_6px_rgba(255,59,63,0.4)]">
            ANIMAL INTRUSION DETECTION
          </h3>

          <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-5 flex-grow
                    transition-colors duration-300 group-hover:text-gray-300">
            We detect animal intrusions on farms and protected areas instantly, alerting you before damage happens. Protect your crops, livestock, and property around the clock.
          </p>

          <a href="<?= base_url('services') ?>" 
             class="relative inline-flex items-center gap-1.5 text-[var(--accent-red)] text-xs sm:text-sm font-semibold tracking-wide
                    group-hover:gap-3 transition-all duration-300 z-10">
            Learn More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- ====== Card 6: FIRE & SMOKE DETECTION ====== -->
      <div class="service-v3-card group relative rounded-2xl p-[1px] cursor-pointer"
           style="transform-style: preserve-3d; perspective: 800px;">
        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
             style="background: linear-gradient(135deg, var(--accent-red), transparent 40%, transparent 60%, var(--accent-red));"></div>
        <div class="relative rounded-2xl p-6 sm:p-7 flex flex-col items-center text-center h-full
                    transition-all duration-500 ease-out
                    group-hover:-translate-y-2
                    overflow-hidden"
             style="background: linear-gradient(165deg, #1a1a22 0%, #12121a 50%, #0d0d14 100%);
                    box-shadow: 
                      0 4px 6px rgba(0,0,0,0.4),
                      0 10px 20px rgba(0,0,0,0.3),
                      0 1px 0 rgba(255,255,255,0.03) inset,
                      0 -1px 0 rgba(0,0,0,0.5) inset;">
          <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"
               style="background: radial-gradient(ellipse at 50% 0%, rgba(255,59,63,0.08) 0%, transparent 70%);"></div>
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[1px] group-hover:w-3/4 transition-all duration-700 ease-out"
               style="background: linear-gradient(90deg, transparent, var(--accent-red), transparent);"></div>

          <div class="relative w-16 h-16 rounded-xl flex items-center justify-center mb-5
                      transition-all duration-500
                      group-hover:scale-110 group-hover:rotate-3"
               style="background: linear-gradient(135deg, #1f1f2a, #16161e);
                      box-shadow: 
                        0 4px 12px rgba(0,0,0,0.5),
                        0 1px 0 rgba(255,255,255,0.04) inset,
                        0 0 0 1px rgba(255,59,63,0.08);">
            <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="box-shadow: 0 0 20px rgba(255,59,63,0.25), 0 0 0 1px rgba(255,59,63,0.3);"></div>
            <!-- Fire Icon -->
            <svg class="w-7 h-7 text-[var(--accent-red)] relative z-10 transition-all duration-500 group-hover:drop-shadow-[0_0_8px_var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1.001A3.75 3.75 0 0012 18z"/>
            </svg>
          </div>

          <h3 class="text-sm sm:text-base font-extrabold text-white mb-3 tracking-wide leading-snug
                      transition-all duration-300 group-hover:text-[var(--accent-red)] group-hover:drop-shadow-[0_0_6px_rgba(255,59,63,0.4)]">
            FIRE & SMOKE DETECTION
          </h3>

          <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-5 flex-grow
                    transition-colors duration-300 group-hover:text-gray-300">
            Early-warning fire and smoke detection systems with automated alerts to fire departments, sprinkler integration, and emergency evacuation protocols.
          </p>

          <a href="<?= base_url('services') ?>" 
             class="relative inline-flex items-center gap-1.5 text-[var(--accent-red)] text-xs sm:text-sm font-semibold tracking-wide
                    group-hover:gap-3 transition-all duration-300 z-10">
            Learn More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- ====== Card 7: EMERGENCY ESCALATION ====== -->
      <div class="service-v3-card group relative rounded-2xl p-[1px] cursor-pointer"
           style="transform-style: preserve-3d; perspective: 800px;">
        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
             style="background: linear-gradient(135deg, var(--accent-red), transparent 40%, transparent 60%, var(--accent-red));"></div>
        <div class="relative rounded-2xl p-6 sm:p-7 flex flex-col items-center text-center h-full
                    transition-all duration-500 ease-out
                    group-hover:-translate-y-2
                    overflow-hidden"
             style="background: linear-gradient(165deg, #1a1a22 0%, #12121a 50%, #0d0d14 100%);
                    box-shadow: 
                      0 4px 6px rgba(0,0,0,0.4),
                      0 10px 20px rgba(0,0,0,0.3),
                      0 1px 0 rgba(255,255,255,0.03) inset,
                      0 -1px 0 rgba(0,0,0,0.5) inset;">
          <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"
               style="background: radial-gradient(ellipse at 50% 0%, rgba(255,59,63,0.08) 0%, transparent 70%);"></div>
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[1px] group-hover:w-3/4 transition-all duration-700 ease-out"
               style="background: linear-gradient(90deg, transparent, var(--accent-red), transparent);"></div>

          <div class="relative w-16 h-16 rounded-xl flex items-center justify-center mb-5
                      transition-all duration-500
                      group-hover:scale-110 group-hover:rotate-3"
               style="background: linear-gradient(135deg, #1f1f2a, #16161e);
                      box-shadow: 
                        0 4px 12px rgba(0,0,0,0.5),
                        0 1px 0 rgba(255,255,255,0.04) inset,
                        0 0 0 1px rgba(255,59,63,0.08);">
            <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="box-shadow: 0 0 20px rgba(255,59,63,0.25), 0 0 0 1px rgba(255,59,63,0.3);"></div>
            <!-- Megaphone / Siren Icon -->
            <svg class="w-7 h-7 text-[var(--accent-red)] relative z-10 transition-all duration-500 group-hover:drop-shadow-[0_0_8px_var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 010 15.75m-1.14-15.75a23.834 23.834 0 00-.38-1.125"/>
            </svg>
          </div>

          <h3 class="text-sm sm:text-base font-extrabold text-white mb-3 tracking-wide leading-snug
                      transition-all duration-300 group-hover:text-[var(--accent-red)] group-hover:drop-shadow-[0_0_6px_rgba(255,59,63,0.4)]">
            EMERGENCY ESCALATION
          </h3>

          <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-5 flex-grow
                    transition-colors duration-300 group-hover:text-gray-300">
            We alert and dispatch police, fire services, or other authorities directly to your location as the situation requires. Rapid coordination when every second counts.
          </p>

          <a href="<?= base_url('services') ?>" 
             class="relative inline-flex items-center gap-1.5 text-[var(--accent-red)] text-xs sm:text-sm font-semibold tracking-wide
                    group-hover:gap-3 transition-all duration-300 z-10">
            Learn More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- ====== Card 8: OVERSEAS CARE & MONITORING ====== -->
      <div class="service-v3-card group relative rounded-2xl p-[1px] cursor-pointer"
           style="transform-style: preserve-3d; perspective: 800px;">
        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
             style="background: linear-gradient(135deg, var(--accent-red), transparent 40%, transparent 60%, var(--accent-red));"></div>
        <div class="relative rounded-2xl p-6 sm:p-7 flex flex-col items-center text-center h-full
                    transition-all duration-500 ease-out
                    group-hover:-translate-y-2
                    overflow-hidden"
             style="background: linear-gradient(165deg, #1a1a22 0%, #12121a 50%, #0d0d14 100%);
                    box-shadow: 
                      0 4px 6px rgba(0,0,0,0.4),
                      0 10px 20px rgba(0,0,0,0.3),
                      0 1px 0 rgba(255,255,255,0.03) inset,
                      0 -1px 0 rgba(0,0,0,0.5) inset;">
          <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"
               style="background: radial-gradient(ellipse at 50% 0%, rgba(255,59,63,0.08) 0%, transparent 70%);"></div>
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[1px] group-hover:w-3/4 transition-all duration-700 ease-out"
               style="background: linear-gradient(90deg, transparent, var(--accent-red), transparent);"></div>

          <div class="relative w-16 h-16 rounded-xl flex items-center justify-center mb-5
                      transition-all duration-500
                      group-hover:scale-110 group-hover:rotate-3"
               style="background: linear-gradient(135deg, #1f1f2a, #16161e);
                      box-shadow: 
                        0 4px 12px rgba(0,0,0,0.5),
                        0 1px 0 rgba(255,255,255,0.04) inset,
                        0 0 0 1px rgba(255,59,63,0.08);">
            <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="box-shadow: 0 0 20px rgba(255,59,63,0.25), 0 0 0 1px rgba(255,59,63,0.3);"></div>
            <!-- Globe Icon -->
            <svg class="w-7 h-7 text-[var(--accent-red)] relative z-10 transition-all duration-500 group-hover:drop-shadow-[0_0_8px_var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5a17.92 17.92 0 01-8.716-2.247m0 0A8.966 8.966 0 013 12c0-1.264.26-2.467.732-3.559"/>
            </svg>
          </div>

          <h3 class="text-sm sm:text-base font-extrabold text-white mb-3 tracking-wide leading-snug
                      transition-all duration-300 group-hover:text-[var(--accent-red)] group-hover:drop-shadow-[0_0_6px_rgba(255,59,63,0.4)]">
            OVERSEAS CARE & MONITORING
          </h3>

          <p class="text-gray-400 text-xs sm:text-sm leading-relaxed mb-5 flex-grow
                    transition-colors duration-300 group-hover:text-gray-300">
            We monitor homes and properties for overseas owners, detecting suspicious activity and notifying designated contacts in real time. Peace of mind, no matter where you are.
          </p>

          <a href="<?= base_url('services') ?>" 
             class="relative inline-flex items-center gap-1.5 text-[var(--accent-red)] text-xs sm:text-sm font-semibold tracking-wide
                    group-hover:gap-3 transition-all duration-300 z-10">
            Learn More
            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<style>
  /* ========== Service Cards V3 - 3D Depth ========== */
.service-v3-card {
  transform-style: preserve-3d;
  perspective: 800px;
}

.service-v3-card > div:last-child {
  transition: transform 0.4s cubic-bezier(0.03, 0.98, 0.52, 0.99),
              box-shadow 0.4s cubic-bezier(0.03, 0.98, 0.52, 0.99);
}

.service-v3-card:hover > div:last-child {
  box-shadow:
    0 20px 40px rgba(0, 0, 0, 0.5),
    0 0 30px rgba(255, 59, 63, 0.1),
    0 1px 0 rgba(255, 255, 255, 0.03) inset,
    0 -1px 0 rgba(0, 0, 0, 0.5) inset !important;
}

/* Subtle edge highlight on card surfaces */
.service-v3-card::before {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 1rem;
  padding: 1px;
  background: linear-gradient(
    165deg,
    rgba(255, 255, 255, 0.06) 0%,
    rgba(255, 255, 255, 0.02) 30%,
    transparent 60%,
    rgba(0, 0, 0, 0.2) 100%
  );
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  pointer-events: none;
  z-index: 1;
}

/* Icon container depth on hover */
.service-v3-card:hover .relative.w-16 {
  box-shadow:
    0 6px 16px rgba(0, 0, 0, 0.6),
    0 0 25px rgba(255, 59, 63, 0.2),
    0 0 0 1px rgba(255, 59, 63, 0.3),
    0 1px 0 rgba(255, 255, 255, 0.05) inset !important;
}

</style>

<!-- ===== Services V3 - 3D Tilt + Scroll Reveal Script ===== -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const cards = document.querySelectorAll('.service-v3-card');

  // === Scroll Reveal ===
  cards.forEach((card, i) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(40px) scale(0.95) rotateX(4deg)';
    card.style.transition = `all 0.7s cubic-bezier(0.4, 0, 0.2, 1) ${i * 0.09}s`;
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0) scale(1) rotateX(0deg)';
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  cards.forEach(card => observer.observe(card));

  // === 3D Mouse Tilt Effect ===
  cards.forEach(card => {
    const inner = card.querySelector(':scope > div:last-child');
    
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = ((y - centerY) / centerY) * -6;
      const rotateY = ((x - centerX) / centerX) * 6;

      if (inner) {
        inner.style.transform = `translateY(-8px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        inner.style.boxShadow = `
          ${-rotateY * 2}px ${rotateX * 2}px 25px rgba(0,0,0,0.5),
          0 15px 35px rgba(0,0,0,0.4),
          0 0 30px rgba(255,59,63,0.08),
          0 1px 0 rgba(255,255,255,0.03) inset,
          0 -1px 0 rgba(0,0,0,0.5) inset
        `;
      }
    });

    card.addEventListener('mouseleave', () => {
      if (inner) {
        inner.style.transform = 'translateY(0) rotateX(0deg) rotateY(0deg)';
        inner.style.boxShadow = `
          0 4px 6px rgba(0,0,0,0.4),
          0 10px 20px rgba(0,0,0,0.3),
          0 1px 0 rgba(255,255,255,0.03) inset,
          0 -1px 0 rgba(0,0,0,0.5) inset
        `;
      }
    });
  });
});
</script>

