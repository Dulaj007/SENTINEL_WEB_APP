<!-- ============================================ -->
<!-- PORTFOLIO GRID SECTION -->
<!-- ============================================ -->
<?php 
// ========================================
// PROJECT DATA - Loaded from JSON
// ========================================
// Get portfolio data from controller (loaded from portfolio.json)
$portfolioProjects = $portfolioProjects ?? [];

// Process the data: convert relative paths to full URLs and ensure proper format
$allProjects = [];
foreach ($portfolioProjects as $project) {
    $allProjects[] = [
        'title' => $project['title'],
        'category' => $project['category'],
        'location' => $project['location'],
        'cameras' => $project['cameras'],
        'description' => $project['description'],
        'img' => base_url($project['img']),
        'gallery' => array_map(function($img) {
            return base_url($img);
        }, $project['gallery']),
        'details' => $project['details']
    ];
}

$projectsPerPage = 6;
$pages = array_chunk($allProjects, $projectsPerPage);
$totalPages = count($pages);
?>

<section class="py-12 md:py-16 relative overflow-hidden" id="portfolio-grid" style="background-color: var(--bg-background);">
  
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5 pointer-events-none">
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, var(--color-white) 1px, transparent 0); background-size: 40px 40px;"></div>
  </div>

  <!-- Floating Orbs - Orange Colors -->
  <div class="absolute top-20 left-10 w-64 h-64 rounded-full opacity-10 blur-3xl pointer-events-none" 
       style="background: var(--accent-red);"></div>
  <div class="absolute bottom-20 right-10 w-72 h-72 rounded-full opacity-10 blur-3xl pointer-events-none" 
       style="background: var(--accent-red);"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Portfolio Slider -->
    <div class="portfolio-slider overflow-hidden relative" id="portfolioSlider">
      <div class="flex transition-transform duration-500 ease-in-out" id="portfolioTrack">
        
        <?php foreach ($pages as $pageIndex => $pageProjects): ?>
          <div class="min-w-full w-full" data-page="<?= $pageIndex + 1 ?>">
            
            <!-- Grid Container - Fixed 3 Column Layout -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 w-full">
              
              <?php foreach ($pageProjects as $p): ?>
              <div class="project-card group relative rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 hover:-translate-y-1 flex flex-col h-full"
                   style="background-color: var(--bg-secondary); border: 1px solid var(--border-color);"
                   data-category="<?= $p['category'] ?>"
                   data-title="<?= htmlspecialchars($p['title']) ?>"
                   data-location="<?= htmlspecialchars($p['location']) ?>"
                   data-cameras="<?= htmlspecialchars($p['cameras']) ?>"
                   data-gallery='<?= htmlspecialchars(json_encode($p['gallery'])) ?>'
                   data-details='<?= htmlspecialchars(json_encode($p['details'])) ?>'>
                
                <!-- Image Container - Fixed Height with Background -->
                <div class="relative overflow-hidden flex-shrink-0 bg-[var(--color-dark-2)]" style="height: 240px; min-height: 240px;">
                  <img src="<?= $p['img'] ?>" 
                       alt="<?= htmlspecialchars($p['title']) ?>" 
                       class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                       onerror="this.style.display='none'">
                  
                  <!-- Category Badge -->
                  <div class="absolute top-4 left-4 z-10">
                    <span class="px-3 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider"
                          style="background: rgba(255, 59, 63, 0.95); color: white; box-shadow: 0 2px 8px rgba(0,0,0,0.3);">
                      <?= strtoupper($p['category']) ?>
                    </span>
                  </div>

                  <!-- View Details Text - Glow Effect (Hover Animation) -->
                  <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                    <span class="font-bold text-base md:text-lg text-white whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                          style="text-shadow: 0 0 20px rgba(255, 59, 63, 0.8), 0 0 40px rgba(255, 59, 63, 0.6), 0 0 60px rgba(255, 59, 63, 0.4);
                                 letter-spacing: 1px;">
                      View Details
                    </span>
                  </div>
                </div>
                
                <!-- Card Content - Flex grow to fill space -->
                <div class="p-5 md:p-6 flex flex-col flex-grow">
                  <h3 class="font-bold text-base md:text-lg mb-2.5 line-clamp-1 uppercase tracking-tight" style="color: var(--color-white);">
                    <?= htmlspecialchars($p['title']) ?>
                  </h3>
                  
                  <div class="flex items-center gap-2 mb-3" style="color: var(--color-yellow);">
                    <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium"><?= htmlspecialchars($p['location']) ?></span>
                  </div>
                  
                  <p class="text-sm mb-4 line-clamp-2 flex-grow leading-relaxed" style="color: var(--text-secondary);">
                    <?= htmlspecialchars($p['description']) ?>
                  </p>
                  
                  <div class="flex justify-between items-center pt-4 mt-auto" style="border-top: 1px solid var(--border-color);">
                    <div class="flex items-center gap-2" style="color: var(--color-yellow);">
                      <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                      </svg>
                      <span class="text-sm font-semibold"><?= htmlspecialchars($p['cameras']) ?> Cameras</span>
                    </div>
                    <span class="text-sm font-bold flex items-center gap-1" style="color: var(--accent-red);">
                      Details
                      <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                      </svg>
                    </span>
                  </div>
                </div>

                <!-- Hover Glow -->
                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"
                     style="box-shadow: inset 0 0 0 2px var(--accent-red), 0 0 30px rgba(255, 59, 63, 0.2);"></div>
              </div>
              <?php endforeach; ?>
              
            </div>
          </div>
        <?php endforeach; ?>
        
      </div>
    </div>

    <!-- Pagination -->
    <?php if ($totalPages > 1): ?>
    <div class="flex justify-center mt-10 md:mt-14">
      <div class="flex gap-3">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
          <button class="page-btn w-12 h-12 rounded-xl font-bold text-lg transition-all duration-300 cursor-pointer <?= $i === 1 ? 'active' : '' ?>" 
                  data-page="<?= $i ?>">
            <?= $i ?>
          </button>
        <?php endfor; ?>
      </div>
    </div>
    <?php endif; ?>

  </div>
</section>