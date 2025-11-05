<div class="service-card relative w-72 md:w-96 h-48 md:h-64 rounded-2xl overflow-hidden shadow-xl 
transform transition-all duration-500 
hover:scale-110 hover:shadow-2xl hover:-translate-y-2 hover:rotate-2">
  <!-- Background Image -->
  <img src="<?= base_url($icon) ?>" alt="<?= esc($title) ?> Icon" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">

  <!-- Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent pointer-events-none transition-all duration-500 hover:from-black/70 hover:via-black/50"></div>

  <!-- Text Content -->
  <div class="absolute bottom-6 left-6 text-white z-10">
    <h2 class="text-xl md:text-2xl font-bold transition-all duration-300"><?= esc($title) ?></h2>
    <p class="text-sm md:text-base opacity-80 mt-1 transition-all duration-300"><?= esc($description) ?></p>
  </div>
</div>
