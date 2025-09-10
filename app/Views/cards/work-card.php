<div class="service-card relative w-80 h-40 md:h-60 rounded-[15px] overflow-hidden shadow-xl transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
  <!-- Background Image -->
  <img src="<?= base_url($icon) ?>" alt="<?= esc($title) ?> Icon" class="w-full h-full object-cover">

  <!-- Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-black/80 to-transparent pointer-events-none"></div>

  <!-- Text Content -->
  <div class="absolute bottom-4 left-4 text-white z-10">
    <h2 class="text-lg font-semibold"><?= esc($title) ?></h2>
    <p class="text-sm opacity-80"><?= esc($description) ?></p>
  </div>
</div>
