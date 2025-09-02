<section id="services" class="relative my-12 px-4 md:px-4">
  <!-- Background Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-black/60 to-transparent z-0"></div>

  <!-- Centered Titles -->
  <div class="relative z-10 text-center mb-8">
    <h2 class="text-2xl md:text-4xl font-bold text-[var(--color-white)]">
      Our Work
    </h2>
    <h2 class="text-base md:text-xl font-semibold text-[var(--color-white-60)] mt-2">
      Successful security installations across various industries
    </h2>
  </div>

  <!-- Cards Row -->
  <div class="relative z-10 flex flex-col md:flex-row justify-center items-center gap-10 pb-10">
    <?php foreach($workHomeData as $workHomeDataSingle): ?>
      <?= view('cards/work-card', [
          'icon' => $workHomeDataSingle['icon'],
          'title' => $workHomeDataSingle['title'],
          'description' => $workHomeDataSingle['description']
      ]) ?>
    <?php endforeach; ?>
  </div>
  
</section>
