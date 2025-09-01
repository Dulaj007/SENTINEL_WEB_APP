<section id="services" class="my-12 px-4 md:px-4">
  <!-- Centered Titles -->
  <div class="text-center mb-8">
    <h2 class="text-2xl md:text-4xl font-bold text-[var(--color-white)]">
      Our Security Services
    </h2>
    <h2 class="text-base md:text-xl font-semibold text-[var(--color-white-60)] mt-2">
      Comprehensive surveillance solutions for residential and commercial properties
    </h2>
  </div>

  <!-- Cards Row -->
  <div class="flex flex-col md:flex-row justify-center gap-10 ">
    <?php foreach($services as $service): ?>
      <?= view('cards/service-card', [
          'icon' => $service['icon'],
          'title' => $service['title'],
          'description' => $service['description'],
          'features' => $service['features']
      ]) ?>
    <?php endforeach; ?>
  </div>
</section>
