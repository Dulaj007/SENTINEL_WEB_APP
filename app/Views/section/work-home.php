
  <section  class="relative pb-24 px-4 md:px-4 bg-[var(--color-dark-2)]">
  <!-- Background Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/100 via-black/40 to-transparent z-0"></div>
  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-black/40 to-transparent z-0"></div>


  <!-- Centered Titles -->
  <div class="relative z-10 text-center mb-8">
    <h2 class="text-2xl md:text-4xl font-bold text-[var(--color-white)] pt-16">
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

  <!--  Discover portfolio -->
   <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="<?= base_url('contact') ?>"
        class="flex justify-center items-center gap-2 px-8 py-3 font-semibold rounded-[10px] text-[var(--color-white)]
              bg-gradient-to-r from-[var(--color-orange-dark)] via-[var(--color-yellow)] to-[var(--color-red)]
              bg-gradient-animate hover:opacity-90 transition transform duration-500 hover:scale-105">
                    Discover portfolio
      <img src="<?= base_url('SENTINEL/public_html/assets/icons/se-logo.svg') ?>" alt="Shield Icon" class="w-6 h-6">
                
      </a>
  </div>
  
</section>
