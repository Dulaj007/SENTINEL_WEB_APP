<div
  class="relative bg-[var(--color-black)] text-[var(--color-white)] max-w-sm p-6 rounded-2xl shadow-lg flex flex-col gap-4
         transform transition-transform duration-700 ease-in-out
         border border-transparent
         hover:scale-105 hover:border-[var(--color-yellow)] group overflow-hidden">

  <!-- Background Image Overlay -->
  <div class="absolute inset-0 opacity-30">
    <img src="<?= base_url($img) ?>" alt="<?= esc($title) ?> Background" class="w-full h-full object-cover rounded-2xl">
  </div>

  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-black/40 to-transparent z-1"></div>
  
  <!-- Card Content -->
  <div class="relative z-10 flex flex-col gap-4">

    <!-- Icon -->
    <div class="bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] w-12 h-12 flex items-center justify-center rounded-xl">
      <img src="<?= base_url($icon) ?>" alt="<?= esc($title) ?> Icon" class="w-6 h-6">
    </div>

    <!-- Title + Description -->
    <div>
      <h2 class="text-xl font-semibold"><?= esc($title) ?></h2>
      <p class="text-[var(--color-white-60)] text-sm font-medium mt-1"><?= esc($description) ?></p>
    </div>

    <!-- Features -->
    <ul class="space-y-2 text-sm">
      <?php foreach($features as $feature): ?>
        <li class="flex items-center gap-2 font-medium">
          <img src="<?= getenv('app.baseURL') ?> assets/icons/correct.png') " alt="Correct Icon" class="w-4 h-4">
          <?= esc($feature) ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <!-- Learn More Button -->
    <div class="mt-auto flex justify-end">
      <a href="<?= base_url('services') ?>"
         class="px-4 py-2 border border-[var(--color-yellow)] text-[var(--color-yellow)] rounded-lg
                text-sm font-medium transition-all duration-700 ease-in-out 
                group-hover:bg-gradient-to-r group-hover:from-[var(--color-yellow)] group-hover:to-[var(--color-orange-dark)]
                group-hover:text-[var(--color-black)]">
         Discover More
      </a>
    </div>

  </div>
</div>
