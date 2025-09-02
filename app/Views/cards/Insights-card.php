<div class="max-w-sm bg-[var(--color-black)] rounded-[20px] overflow-hidden shadow-lg transform transition-transform duration-500 hover:scale-105">
  <!-- Image Container -->
  <div class="relative">
    <!-- Image -->
   <img src="<?= base_url($image) ?>" 
     alt="<?= esc($title) ?>" 
     class="w-full h-28 md:h-52 object-cover opacity-90">



    <!-- Date Badge (above gradient) -->
    <span class="absolute bottom-4 right-4 z-10 text-[var(--color-black)] font-semibold text-sm bg-[var(--color-white)] px-2 py-1 rounded-[20px]">
      <?= esc($postDate) ?>
    </span>
    
  </div>

  <!-- Card Content -->
  <div class="p-4 relative">
    
    <!-- Title -->
    <h3 class="text-[var(--color-white)] text-lg font-semibold mb-2">
      <?= esc($title) ?>
    </h3>

    <!-- Read Time & Read More -->
    <div class="flex justify-between items-center mt-2">
      <span class="text-[var(--color-white-60)] text-sm font-bold"><?= esc($readTime) ?></span>
      <a href="#" class="text-[var(--color-yellow)] text-sm font-extrabold hover:underline">Read More</a>
    </div>
  </div>
</div>


