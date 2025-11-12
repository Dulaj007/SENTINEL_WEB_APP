<div class="service-card relative w-full max-w-xs md:max-w-sm lg:max-w-md h-auto border border-white/20 rounded-2xl overflow-hidden shadow-xl 
            transform transition-all duration-500 
            hover:scale-105 hover:shadow-2xl hover:-translate-y-1 hover:rotate-1">
  
  <!-- Background Image -->
  <img src="<?= base_url($icon) ?>" alt="<?= esc($title) ?> Icon" 
       class="w-full h-48 md:h-56 lg:h-64 object-cover transition-transform duration-500 hover:scale-110">

  <!-- Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-black/60 to-transparent pointer-events-none transition-all duration-500 hover:from-black/90 hover:via-black/20"></div>

  <!-- Text Content -->
  <div class="absolute bottom-4 px-4 sm:px-6 text-white z-10">
    <h2 class="text-lg sm:text-xl md:text-2xl font-bold transition-all duration-300"><?= esc($title) ?></h2>
    <p class="text-sm md:text-base opacity-80 mt-1 transition-all duration-300"><?= esc($description) ?></p>
  </div>
</div>
