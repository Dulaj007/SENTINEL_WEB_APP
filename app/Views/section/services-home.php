
  <section id="services" class="relative my-12 px-4 md:px-4">
  <!-- Background Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/100 via-black/60 to-transparent z-0"></div>


  <!-- Centered Titles -->
  <div class="relative z-10 text-center mb-8 pt-5">
    <h2 class="text-2xl md:text-4xl font-bold text-[var(--color-white)]">
       Our Security Services
    </h2>
    <h2 class="text-base md:text-xl font-semibold text-[var(--color-white-60)] mt-2">
        Comprehensive surveillance solutions for residential and commercial properties
    </h2>
  </div>

  <!-- Cards Row -->
  <div class="flex flex-col md:flex-row justify-center items-center gap-10 ">
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
