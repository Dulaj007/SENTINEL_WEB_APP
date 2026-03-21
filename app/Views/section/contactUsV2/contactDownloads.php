<!-- ========================= DOWNLOAD SECTION ========================= -->
<section class="w-full py-16 sm:py-20 lg:py-24 relative z-10 overflow-hidden bg-[var(--color-dark-1)]">
  
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-[0.03] pointer-events-none">
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, var(--color-white) 1px, transparent 0); background-size: 40px 40px;"></div>
  </div>

  <!-- Floating Gradient Orbs -->
  <div class="absolute top-20 left-10 w-64 h-64 rounded-full opacity-5 blur-3xl" 
       style="background: var(--accent-red); animation: float 15s ease-in-out infinite;"></div>
  <div class="absolute bottom-20 right-10 w-72 h-72 rounded-full opacity-5 blur-3xl" 
       style="background: var(--color-yellow); animation: float 20s ease-in-out infinite reverse;"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center mb-12 sm:mb-16">
      <!-- Badge -->
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full mb-6 backdrop-blur-sm"
           style="background-color: rgba(255, 255, 255, 0.05); border: 1px solid var(--border-color);">
        <span class="text-xs sm:text-sm font-medium tracking-wide uppercase" style="color: var(--color-yellow);">
          Get Started
        </span>
      </div>

      <!-- Title -->
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4" style="color: var(--color-white);">
        Download Our 
        <span class="bg-clip-text text-transparent bg-gradient-to-r" 
              style="background-image: linear-gradient(135deg, var(--color-yellow), var(--accent-red), var(--color-yellow)); background-size: 200% auto; animation: shimmer 3s linear infinite;">
          Documents
        </span>
      </h2>

      <!-- Subtitle -->
      <p class="text-base sm:text-lg md:text-xl max-w-2xl mx-auto leading-relaxed" 
         style="color: var(--text-secondary);">
        Review our service proposal and agreement terms before getting started with 24/7 SENTINEL
      </p>

      <!-- Decorative Line -->
      <div class="flex items-center justify-center gap-2 mt-8">
        <div class="w-16 h-0.5" style="background: linear-gradient(90deg, transparent, var(--color-yellow));"></div>
        <div class="w-2 h-2 rounded-full" style="background-color: var(--accent-red);"></div>
        <div class="w-16 h-0.5" style="background: linear-gradient(90deg, var(--color-yellow), transparent);"></div>
      </div>
    </div>

    <!-- Download Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 max-w-4xl mx-auto">

      <!-- ===== PROPOSAL CARD ===== -->
      <div class="group relative bg-[rgba(31,31,36,0.6)] backdrop-blur-md rounded-2xl border border-[var(--border-color)] 
                  overflow-hidden transition-all duration-500 hover:border-[var(--color-yellow)] 
                  hover:shadow-[0_0_35px_rgba(255,191,53,0.15)] hover:-translate-y-2
                  hover:shadow-[inset_0_0_20px_rgba(255,191,53,0.05)]">
        
        <!-- Top Accent Line -->
        <div class="absolute top-0 left-0 w-full h-[3px] bg-gradient-to-r from-transparent via-[var(--color-yellow)] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

        <!-- Card Content -->
        <div class="p-6 sm:p-8 flex flex-col items-center text-center">
          
          <!-- Icon -->
          <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl mb-5 flex items-center justify-center relative overflow-hidden
                      transition-all duration-500 group-hover:scale-110"
               style="background: linear-gradient(135deg, var(--color-yellow), var(--color-orange-dark)); box-shadow: 0 8px 32px rgba(255, 191, 53, 0.3);">
            <!-- Icon Glow -->
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);"></div>
            
            <!-- PDF Icon -->
            <svg class="w-8 h-8 sm:w-10 sm:h-10 relative z-10 transition-transform duration-300" 
                 style="color: var(--color-black);" fill="currentColor" viewBox="0 0 24 24">
              <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6zm-1 2l5 5h-5V4zM6 20V4h5v7h7v9H6z"/>
              <path d="M8 12h2v2H8v-2zm0 4h2v2H8v-2zm4-4h2v2h-2v-2zm0 4h2v2h-2v-2zm4-4h2v2h-2v-2zm0 4h2v2h-2v-2z"/>
            </svg>
          </div>

          <!-- Title -->
          <h3 class="text-xl sm:text-2xl font-bold mb-2" style="color: var(--color-white);">
            Service Proposal
          </h3>

          <!-- Description -->
          <p class="text-sm sm:text-base mb-5" style="color: var(--text-secondary);">
            Detailed overview of our monitoring services, pricing packages, and coverage options tailored to your needs.
          </p>

          <!-- File Info -->
          <div class="flex items-center gap-3 mb-6 px-4 py-2 rounded-lg"
               style="background-color: rgba(255, 255, 255, 0.05);">
            <svg class="w-4 h-4" style="color: var(--color-yellow);" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <span class="text-xs sm:text-sm font-mono" style="color: var(--color-white-80);">Proposal.pdf</span>
          </div>

          <!-- Download Button -->
          <a href="<?= getenv('app.baseURL') ?>assets/docs/Proposal.pdf" 
             download="24-7-Sentinel-Proposal.pdf"
             class="inline-flex items-center gap-2 px-6 py-3 rounded-xl font-bold text-sm sm:text-base
                    transition-all duration-500 group-hover:scale-105
                    bg-gradient-to-r from-[var(--color-yellow)] via-[var(--color-orange-dark)] to-[var(--color-yellow)]
                    text-[var(--color-black)] shadow-[0_0_20px_rgba(255,191,53,0.3)]
                    hover:shadow-[0_0_30px_rgba(255,191,53,0.5)]">
            <svg class="w-5 h-5 transition-transform duration-300 group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
            </svg>
            <span>Download Proposal</span>
          </a>

        </div>
      </div>

      <!-- ===== AGREEMENT CARD ===== -->
      <div class="group relative bg-[rgba(31,31,36,0.6)] backdrop-blur-md rounded-2xl border border-[var(--border-color)] 
                  overflow-hidden transition-all duration-500 hover:border-[var(--accent-red)] 
                  hover:shadow-[0_0_35px_rgba(255,59,63,0.15)] hover:-translate-y-2
                  hover:shadow-[inset_0_0_20px_rgba(255,59,63,0.05)]">
        
        <!-- Top Accent Line -->
        <div class="absolute top-0 left-0 w-full h-[3px] bg-gradient-to-r from-transparent via-[var(--accent-red)] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

        <!-- Card Content -->
        <div class="p-6 sm:p-8 flex flex-col items-center text-center">
          
          <!-- Icon -->
          <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl mb-5 flex items-center justify-center relative overflow-hidden
                      transition-all duration-500 group-hover:scale-110"
               style="background: linear-gradient(135deg, var(--accent-red), var(--color-red-dark)); box-shadow: 0 8px 32px rgba(255, 59, 63, 0.3);">
            <!-- Icon Glow -->
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                 style="background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);"></div>
            
            <!-- Document Icon -->
            <svg class="w-8 h-8 sm:w-10 sm:h-10 relative z-10 transition-transform duration-300" 
                 style="color: var(--color-white);" fill="currentColor" viewBox="0 0 24 24">
              <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6zm4 18H6V4h7v5h5v11z"/>
              <path d="M8 12h8v2H8v-2zm0 4h8v2H8v-2zm0-8h5v2H8V8z"/>
            </svg>
          </div>

          <!-- Title -->
          <h3 class="text-xl sm:text-2xl font-bold mb-2" style="color: var(--color-white);">
            Service Agreement
          </h3>

          <!-- Description -->
          <p class="text-sm sm:text-base mb-5" style="color: var(--text-secondary);">
            Terms and conditions, service level agreements, and legal documentation for our security monitoring services.
          </p>

          <!-- File Info -->
          <div class="flex items-center gap-3 mb-6 px-4 py-2 rounded-lg"
               style="background-color: rgba(255, 255, 255, 0.05);">
            <svg class="w-4 h-4" style="color: var(--accent-red);" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <span class="text-xs sm:text-sm font-mono" style="color: var(--color-white-80);">Agreement.pdf</span>
          </div>

          <!-- Download Button -->
          <a href="<?= getenv('app.baseURL') ?>assets/docs/Agreement.pdf" 
             download="24-7-Sentinel-Agreement.pdf"
             class="inline-flex items-center gap-2 px-6 py-3 rounded-xl font-bold text-sm sm:text-base
                    transition-all duration-500 group-hover:scale-105
                    bg-gradient-to-r from-[var(--accent-red)] via-[var(--color-red-dark)] to-[var(--accent-red)]
                    text-[var(--color-white)] shadow-[0_0_20px_rgba(255,59,63,0.3)]
                    hover:shadow-[0_0_30px_rgba(255,59,63,0.5)]">
            <svg class="w-5 h-5 transition-transform duration-300 group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
            </svg>
            <span>Download Agreement</span>
          </a>

        </div>
      </div>

    </div>

    <!-- Bottom Note -->
    <div class="text-center mt-10 sm:mt-12">
      <p class="text-sm sm:text-base" style="color: var(--text-secondary);">
        Have questions about these documents? 
        <a href="<?= base_url('contact') ?>" class="text-[var(--color-yellow)] hover:text-[var(--accent-red)] transition-colors duration-300 underline underline-offset-4">
          Contact our team
        </a>
      </p>
    </div>

  </div>
</section>

<!-- ===== Download Section Styles ===== -->
<style>
  /* Floating animation for orbs */
  @keyframes float {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    25% { transform: translate(10px, -10px) rotate(2deg); }
    50% { transform: translate(-5px, 5px) rotate(-2deg); }
    75% { transform: translate(-10px, -5px) rotate(1deg); }
  }

  /* Shimmer animation for gradient text */
  @keyframes shimmer {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  /* Card hover glow intensify */
  .group:hover .absolute.top-0 {
    animation: pulse-glow 2s ease-in-out infinite;
  }

  @keyframes pulse-glow {
    0%, 100% { opacity: 0.5; }
    50% { opacity: 1; }
  }

  /* Mobile adjustments */
  @media (max-width: 640px) {
    .group:hover {
      transform: translateY(-4px) !important;
    }
  }
</style>