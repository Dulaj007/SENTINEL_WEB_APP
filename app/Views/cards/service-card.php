

<div class="bg-[var(--color-black)] text-[var(--color-white)] max-w-sm p-6 rounded-2xl shadow-lg flex flex-col gap-4">
  <!-- Icon -->
  <div class="bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] w-12 h-12 flex items-center justify-center rounded-xl">
    <img src="<?= base_url($icon) ?>" alt="<?= esc($title) ?> Icon" class="w-6 h-6">
  </div>

  <!-- Title + Description -->
  <div>
    <h2 class="text-xl font-semibold"><?= esc($title) ?></h2>
    <p class="text-[var(--color-white-60)] text-sm mt-1"><?= esc($description) ?></p>
  </div>

  <!-- Features -->
  <ul class="space-y-2 text-sm">
    <?php foreach($features as $feature): ?>
      <li class="flex items-center gap-2">
        <img src="<?= base_url('SENTINEL/public_html/assets/icons/correct.png') ?>" alt="Correct Icon" class="w-4 h-4">
        <?= esc($feature) ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
