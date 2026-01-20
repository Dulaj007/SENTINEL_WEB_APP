<!-- ============================================ -->
<!-- HOW IT WORKS - TIMELINE SECTION -->
<!-- ============================================ -->
<section id="how-it-works" class="relative py-16 sm:py-20 md:py-24 lg:py-32 overflow-hidden" 
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
          Simple Process
        </span>
      </div>

      <!-- Title -->
      <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6" style="color: var(--color-white);">
        How It 
        <span class="bg-clip-text text-transparent bg-gradient-to-r" 
              style="background-image: linear-gradient(135deg, var(--color-yellow), var(--accent-red), var(--color-yellow)); background-size: 200% auto; animation: shimmer 3s linear infinite;">
          Works
        </span>
      </h2>

      <!-- Subtitle -->
      <p class="text-base sm:text-lg md:text-xl max-w-3xl mx-auto leading-relaxed" 
         style="color: var(--text-secondary);">
        Get started with 24/7 Sentinel security in just a few simple steps
      </p>

      <!-- Decorative Line -->
      <div class="flex items-center justify-center gap-2 mt-8">
        <div class="w-16 h-0.5" style="background: linear-gradient(90deg, transparent, var(--color-yellow));"></div>
        <div class="w-2 h-2 rounded-full" style="background-color: var(--accent-red);"></div>
        <div class="w-16 h-0.5" style="background: linear-gradient(90deg, var(--color-yellow), transparent);"></div>
      </div>
    </div>

    <!-- Timeline Container -->
    <div class="relative">
      
      <!-- Horizontal Timeline Line -->
      <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 transform -translate-y-1/2 z-0"
           style="background: linear-gradient(90deg, var(--accent-red), var(--color-yellow), var(--accent-red)); opacity: 0.3;"></div>

      <!-- Timeline Steps -->
      <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8 lg:gap-4">
        
        <!-- Step 1 -->
        <div class="timeline-step group relative z-10" data-aos="fade-up" data-aos-delay="0">
          <div class="flex flex-col items-center text-center">
            <!-- Step Number Circle -->
            <div class="relative mb-6">
              <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full flex items-center justify-center transition-all duration-500 group-hover:scale-110"
                   style="background: linear-gradient(135deg, var(--accent-red), var(--accent-shine)); box-shadow: 0 8px 32px rgba(255, 59, 63, 0.4);">
                <span class="text-3xl sm:text-4xl font-bold" style="color: var(--bg-background);">1</span>
              </div>
              <!-- Connecting Line (Mobile) -->
              <div class="hidden md:block lg:hidden absolute top-1/2 left-full w-full h-0.5 transform -translate-y-1/2"
                   style="background: linear-gradient(90deg, var(--accent-red), var(--color-yellow));"></div>
            </div>
            
            <!-- Step Content -->
            <div class="space-y-3 max-w-[200px]">
              <h3 class="text-lg sm:text-xl font-bold" style="color: var(--color-white);">
                Request Service
              </h3>
              <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">
                Contact 24/7 Sentinel via email to get started
              </p>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="timeline-step group relative z-10" data-aos="fade-up" data-aos-delay="100">
          <div class="flex flex-col items-center text-center">
            <div class="relative mb-6">
              <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full flex items-center justify-center transition-all duration-500 group-hover:scale-110"
                   style="background: linear-gradient(135deg, var(--accent-red), var(--accent-shine)); box-shadow: 0 8px 32px rgba(255, 59, 63, 0.4);">
                <span class="text-3xl sm:text-4xl font-bold" style="color: var(--bg-background);">2</span>
              </div>
              <div class="hidden md:block lg:hidden absolute top-1/2 left-full w-full h-0.5 transform -translate-y-1/2"
                   style="background: linear-gradient(90deg, var(--accent-red), var(--color-yellow));"></div>
            </div>
            
            <div class="space-y-3 max-w-[200px]">
              <h3 class="text-lg sm:text-xl font-bold" style="color: var(--color-white);">
                Choose Package
              </h3>
              <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">
                Select the perfect package based on your camera count
              </p>
            </div>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="timeline-step group relative z-10" data-aos="fade-up" data-aos-delay="200">
          <div class="flex flex-col items-center text-center">
            <div class="relative mb-6">
              <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full flex items-center justify-center transition-all duration-500 group-hover:scale-110"
                   style="background: linear-gradient(135deg, var(--accent-red), var(--accent-shine)); box-shadow: 0 8px 32px rgba(255, 59, 63, 0.4);">
                <span class="text-3xl sm:text-4xl font-bold" style="color: var(--bg-background);">3</span>
              </div>
              <div class="hidden md:block lg:hidden absolute top-1/2 left-full w-full h-0.5 transform -translate-y-1/2"
                   style="background: linear-gradient(90deg, var(--accent-red), var(--color-yellow));"></div>
            </div>
            
            <div class="space-y-3 max-w-[200px]">
              <h3 class="text-lg sm:text-xl font-bold" style="color: var(--color-white);">
                Connect Cameras
              </h3>
              <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">
                Our agent connects your cameras to our monitoring center
              </p>
            </div>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="timeline-step group relative z-10" data-aos="fade-up" data-aos-delay="300">
          <div class="flex flex-col items-center text-center">
            <div class="relative mb-6">
              <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full flex items-center justify-center transition-all duration-500 group-hover:scale-110"
                   style="background: linear-gradient(135deg, var(--accent-red), var(--accent-shine)); box-shadow: 0 8px 32px rgba(255, 59, 63, 0.4);">
                <span class="text-3xl sm:text-4xl font-bold" style="color: var(--bg-background);">4</span>
              </div>
              <div class="hidden md:block lg:hidden absolute top-1/2 left-full w-full h-0.5 transform -translate-y-1/2"
                   style="background: linear-gradient(90deg, var(--accent-red), var(--color-yellow));"></div>
            </div>
            
            <div class="space-y-3 max-w-[200px]">
              <h3 class="text-lg sm:text-xl font-bold" style="color: var(--color-white);">
                Get 24/7 Service
              </h3>
              <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">
                Start receiving round-the-clock surveillance protection
              </p>
            </div>
          </div>
        </div>

        <!-- Step 5 -->
        <div class="timeline-step group relative z-10" data-aos="fade-up" data-aos-delay="400">
          <div class="flex flex-col items-center text-center">
            <div class="relative mb-6">
              <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full flex items-center justify-center transition-all duration-500 group-hover:scale-110"
                   style="background: linear-gradient(135deg, var(--accent-red), var(--accent-shine)); box-shadow: 0 8px 32px rgba(255, 59, 63, 0.4);">
                <span class="text-3xl sm:text-4xl font-bold" style="color: var(--bg-background);">5</span>
              </div>
              <div class="hidden md:block lg:hidden absolute top-1/2 left-full w-full h-0.5 transform -translate-y-1/2"
                   style="background: linear-gradient(90deg, var(--accent-red), var(--color-yellow));"></div>
            </div>
            
            <div class="space-y-3 max-w-[200px]">
              <h3 class="text-lg sm:text-xl font-bold" style="color: var(--color-white);">
                Receive Alerts
              </h3>
              <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">
                Get instant emergency alerts when threats are detected
              </p>
            </div>
          </div>
        </div>

        <!-- Step 6 -->
        <div class="timeline-step group relative z-10" data-aos="fade-up" data-aos-delay="500">
          <div class="flex flex-col items-center text-center">
            <div class="relative mb-6">
              <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full flex items-center justify-center transition-all duration-500 group-hover:scale-110"
                   style="background: linear-gradient(135deg, var(--accent-red), var(--accent-shine)); box-shadow: 0 8px 32px rgba(255, 59, 63, 0.4);">
                <svg class="w-10 h-10 sm:w-12 sm:h-12" style="color: var(--bg-background);" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
              </div>
            </div>
            
            <div class="space-y-3 max-w-[200px]">
              <h3 class="text-lg sm:text-xl font-bold" style="color: var(--color-white);">
                Stay Protected
              </h3>
              <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">
                Relax knowing your property is safe - we've got you covered
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<style>
/* Timeline Styles */
.timeline-step {
  transition: transform 0.3s ease;
}

.timeline-step:hover {
  transform: translateY(-8px);
}

/* Responsive adjustments */
@media (max-width: 1023px) {
  .timeline-step {
    margin-bottom: 2rem;
  }
}

@media (min-width: 1024px) {
  .timeline-step:nth-child(odd) {
    margin-top: 0;
  }
  
  .timeline-step:nth-child(even) {
    margin-top: 4rem;
  }
}

/* Animation for shimmer effect */
@keyframes shimmer {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}
</style>
