<?php
// Expecting $testimonial array with keys: name, role, rating, message, image
?>
<div id="testimonials" class="max-w-lg mx-auto">
  <div class="testimonial-card p-6">

    <!-- Top row: Image left + Name/Role right -->
 <!-- Top row: Image left + Name/Role right -->
<div class="flex items-center justify-center mb-4">
  <img src="<?= base_url($testimonial['image']); ?>"
       alt="<?= $testimonial['name']; ?>"
       class="w-24 h-24 rounded-full object-cover">

  <div class="ml-4">
    <h3 class="text-lg font-semibold text-[var(--color-white)] m-0 z-5">
      <?= $testimonial['name']; ?>
    </h3>
    <span class="text-sm text-[var(--color-white-60)]">
      <?= $testimonial['role']; ?>
    </span>
        <!-- Stars -->
    <div class="flex justify-center mb-4">
      <?php for ($i=0; $i < $testimonial['rating']; $i++): ?>
        <span class="text-[var(--color-yellow)] text-lg mr-1">★</span>
      <?php endfor; ?>
    </div>
  </div>
</div>

    <!-- Message -->
    <p class="text-[var(--color-white-80)] text-sm leading-relaxed text-center z-5">
      “<?= $testimonial['message']; ?>”
    </p>
  </div>
</div>

