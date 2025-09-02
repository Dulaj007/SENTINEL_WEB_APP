<section id="insights" class="relative my-12 px-4 md:px-4">
  <!-- Background Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-black/30 to-transparent z-0"></div>


  <!-- Centered Titles -->
  <div class="relative z-10 text-center mb-8">
    <h2 class="text-2xl md:text-4xl font-bold text-[var(--color-white)]">Latest Insights</h2>
    <h2 class="text-base md:text-xl font-semibold text-[var(--color-white-60)] mt-2">
      Stay updated with our news, case studies, and security tips.
    </h2>
  </div>

  
  <!-- Cards Row -->
    <div class="relative sm:z-10 flex sm:flex-row xl:justify-center sm:gap-10 pb-10 sm:pb-40 gap-6 overflow-x-auto snap-x snap-mandatory  ">
        
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
    </div>

  <div class="absolute top-1/2 right-4 transform -translate-y-1/2 z-20 md:hidden">
    <svg class="w-6 h-6 text-white opacity-70" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
    </svg>
  </div>
 
</section>
