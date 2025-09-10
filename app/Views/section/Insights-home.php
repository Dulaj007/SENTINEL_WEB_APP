<section id="insights" class="relative mt-12 px-4 md:px-4">

  <!-- Background Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-black/30 to-transparent z-0"></div>

  <!-- Section Titles -->
  <div class="relative z-10 text-center mb-8">
    <h2 class="text-2xl md:text-4xl font-bold text-[var(--color-white)]">Latest Insights</h2>
    <h2 class="text-base md:text-xl font-semibold text-[var(--color-white-60)] mt-2">
      Stay updated with our news, case studies, and security tips.
    </h2>
  </div>

  <!-- Insights Cards Row -->
  <div class="relative sm:z-10 flex sm:flex-row xl:justify-center sm:gap-10 pb-5 sm:pb-20 gap-6 overflow-x-auto snap-x snap-mandatory">
      
      <?php foreach($insightsData as $insight): ?>
        <div class="snap-start flex-shrink-0 w-80 md:w-auto">
          <?= view('cards/insights-card', [
              'image' => $insight['Image'],
              'title' => $insight['title'],
              'readTime' => $insight['readTime'],
              'postDate' => $insight['PostDate']
          ]) ?>
        </div>
      <?php endforeach; ?>

      <!-- Blog Link Button -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="<?= base_url('blog') ?>"
           class="items-center justify-center gap-2 w-[100px] py-3 font-semibold rounded-[15px] text-[var(--color-white)]
                  hover:opacity-90 transition transform duration-500 hover:scale-105
                  hidden md:flex">
          <img src="<?= base_url('SENTINEL/public_html/assets/icons/next-icon.svg') ?>" alt="Next Icon" class="w-16 h-16">
        </a>
      </div>

  </div>

  <!-- Mobile Blog Arrow -->
  <div class="absolute top-1/2 right-4 transform -translate-y-1/2 z-20 lg:hidden">
    <a href="<?= base_url('blog')?>">
      <svg class="w-6 h-6 text-white opacity-70" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
      </svg> 
    </a>
  </div>

</section>
