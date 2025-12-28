<!-- ============================================ -->
<!-- PORTFOLIO FILTER SECTION -->
<!-- ============================================ -->
<section class="relative z-10 py-10 md:py-14 text-center px-4 overflow-hidden" style="background-color: var(--bg-background);">
  
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5 pointer-events-none">
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, var(--color-white) 1px, transparent 0); background-size: 40px 40px;"></div>
  </div>

  <!-- Floating Orbs - Orange Colors -->
  <div class="absolute top-10 right-20 w-48 h-48 rounded-full opacity-10 blur-3xl pointer-events-none" 
       style="background: var(--accent-red);"></div>
  <div class="absolute bottom-10 left-20 w-56 h-56 rounded-full opacity-10 blur-3xl pointer-events-none" 
       style="background: var(--accent-red);"></div>

  <div class="relative z-10">
  
    <!-- Section Header -->
    <div class="mb-8">
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full mb-4 backdrop-blur-sm"
           style="background-color: rgba(255, 255, 255, 0.05); border: 1px solid var(--border-color);">
        <span class="text-xs sm:text-sm font-medium tracking-wide uppercase" style="color: var(--accent-red);">
          Filter by Category
        </span>
      </div>
    </div>

    <!-- Filter Buttons - Red Gradient Style -->
    <div class="inline-flex flex-wrap justify-center gap-3 md:gap-4">
    
    <button class="filter-btn active px-6 py-3 rounded-2xl font-semibold text-sm md:text-base cursor-pointer"
            data-filter="all">
      <span class="relative z-10">All Projects</span>
    </button>
    
    <button class="filter-btn px-6 py-3 rounded-2xl font-semibold text-sm md:text-base cursor-pointer"
            data-filter="commercial">
      <span class="relative z-10">Commercial</span>
    </button>
    
    <button class="filter-btn px-6 py-3 rounded-2xl font-semibold text-sm md:text-base cursor-pointer"
            data-filter="residential">
      <span class="relative z-10">Residential</span>
    </button>
    
    <button class="filter-btn px-6 py-3 rounded-2xl font-semibold text-sm md:text-base cursor-pointer"
            data-filter="industrial">
      <span class="relative z-10">Industrial</span>
    </button>
    
    <button class="filter-btn px-6 py-3 rounded-2xl font-semibold text-sm md:text-base cursor-pointer"
            data-filter="retail">
      <span class="relative z-10">Retail</span>
    </button>
    
    <button class="filter-btn px-6 py-3 rounded-2xl font-semibold text-sm md:text-base cursor-pointer"
            data-filter="hospitality">
      <span class="relative z-10">Hospitality</span>
    </button>
    
    </div>
  </div>
</section>