<!-- ============================================ -->
<!-- PORTFOLIO GRID SECTION -->
<!-- ============================================ -->
<?php 
// ========================================
// PROJECT DATA
// ========================================
// Available work images
$workImages = [
    base_url('SENTINEL/public_html/assets/img/work-img-1.png'),
    base_url('SENTINEL/public_html/assets/img/work-img-2.png'),
    base_url('SENTINEL/public_html/assets/img/work-img-3.png')
];

// Shuffled image assignment for main images (distributed across 12 projects)
$shuffledImages = [
    $workImages[0], // 1
    $workImages[2], // 3
    $workImages[1], // 2
    $workImages[2], // 3
    $workImages[0], // 1
    $workImages[1], // 2
    $workImages[1], // 2
    $workImages[2], // 3
    $workImages[0], // 1
    $workImages[1], // 2
    $workImages[0], // 1
    $workImages[2], // 3
];

$allProjects = [
    [
        'title' => 'World Trade Center Colombo', 
        'category' => 'commercial', 
        'location' => 'Colombo 01',
        'cameras' => '200+',
        'description' => 'Complete security overhaul with advanced surveillance systems',
        'img' => $shuffledImages[0],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Successfully deployed cutting-edge surveillance technology across this premier Colombo 01 location. Our team integrated advanced AI-powered cameras with existing infrastructure, ensuring seamless 24/7 monitoring capabilities.',
            'installation' => '2-3 weeks',
            'coverage' => 'Full premises',
            'support' => '24/7 Local',
            'features' => [
                'AI-powered threat detection with instant SMS/Email alerts',
                'Local monitoring center with Sinhala/Tamil/English support',
                'Power backup systems for uninterrupted operation'
            ]
        ]
    ],
    [
        'title' => 'Biyagama Export Zone', 
        'category' => 'industrial', 
        'location' => 'Biyagama',
        'cameras' => '150+',
        'description' => 'Industrial-grade security monitoring for export processing zone',
        'img' => $shuffledImages[1],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Comprehensive industrial security solution for one of Sri Lanka\'s largest export processing zones with perimeter protection and warehouse surveillance.',
            'installation' => '3-4 weeks',
            'coverage' => 'Full zone',
            'support' => '24/7 Local',
            'features' => [
                'Perimeter intrusion detection systems',
                'Vehicle tracking and access control',
                'Integration with existing security protocols'
            ]
        ]
    ],
    [
        'title' => 'Cinnamon Gardens Residences', 
        'category' => 'residential', 
        'location' => 'Colombo 07',
        'cameras' => '100+',
        'description' => 'Premium residential security for luxury apartments',
        'img' => $shuffledImages[2],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Elegant security solution designed for high-end residential complex in Colombo\'s prime neighborhood with discreet camera placement.',
            'installation' => '2 weeks',
            'coverage' => 'All common areas',
            'support' => '24/7 Local',
            'features' => [
                'Facial recognition access control',
                'Visitor management system',
                'Mobile app for residents'
            ]
        ]
    ],
    [
        'title' => 'ODEL Shopping Complex', 
        'category' => 'retail', 
        'location' => 'Colombo 03',
        'cameras' => '350+',
        'description' => 'Retail security with loss prevention focus',
        'img' => $shuffledImages[3],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Comprehensive retail security system with integrated loss prevention analytics and customer flow analysis.',
            'installation' => '4 weeks',
            'coverage' => 'All floors & parking',
            'support' => '24/7 Local',
            'features' => [
                'POS integration for transaction verification',
                'Customer behavior analytics',
                'Emergency evacuation support systems'
            ]
        ]
    ],
    [
        'title' => 'Orion City IT Park', 
        'category' => 'commercial', 
        'location' => 'Dematagoda',
        'cameras' => '275+',
        'description' => 'Corporate campus security with multi-tenant support',
        'img' => $shuffledImages[4],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Multi-tenant commercial building security with individual tenant dashboards and unified security management.',
            'installation' => '3 weeks',
            'coverage' => 'Full campus',
            'support' => '24/7 Local',
            'features' => [
                'Tenant-specific access zones',
                'Server room monitoring',
                'Biometric access integration'
            ]
        ]
    ],
    [
        'title' => 'Mount Lavinia Beach Resort', 
        'category' => 'hospitality', 
        'location' => 'Mount Lavinia',
        'cameras' => '180+',
        'description' => 'Beachfront resort security with guest privacy focus',
        'img' => $shuffledImages[5],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Hospitality-focused security maintaining guest privacy while ensuring comprehensive coverage of all public areas.',
            'installation' => '2-3 weeks',
            'coverage' => 'Public areas & perimeter',
            'support' => '24/7 Local',
            'features' => [
                'Weather-resistant beach cameras',
                'Night vision for 24/7 coverage',
                'Integration with hotel PMS'
            ]
        ]
    ],
    [
        'title' => 'Kandy General Hospital', 
        'category' => 'hospitality', 
        'location' => 'Kandy',
        'cameras' => '400+',
        'description' => 'Healthcare facility security with patient safety focus',
        'img' => $shuffledImages[6],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Comprehensive healthcare security solution with infant protection systems and emergency response integration.',
            'installation' => '5-6 weeks',
            'coverage' => 'All departments',
            'support' => '24/7 Local',
            'features' => [
                'Infant protection & tracking',
                'Pharmacy and medication storage monitoring',
                'Emergency room priority coverage'
            ]
        ]
    ],
    [
        'title' => 'Katunayake FTZ', 
        'category' => 'industrial', 
        'location' => 'Katunayake',
        'cameras' => '225+',
        'description' => 'Free trade zone industrial security',
        'img' => $shuffledImages[7],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Multi-factory security coordination for Sri Lanka\'s premier free trade zone with centralized monitoring.',
            'installation' => '4 weeks',
            'coverage' => 'Multiple factories',
            'support' => '24/7 Local',
            'features' => [
                'Cross-factory incident correlation',
                'Customs compliance monitoring',
                'Container tracking systems'
            ]
        ]
    ],
    [
        'title' => 'Commercial Bank Plaza', 
        'category' => 'commercial', 
        'location' => 'Colombo Fort',
        'cameras' => '175+',
        'description' => 'Banking sector security with high compliance standards',
        'img' => $shuffledImages[8],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Banking-grade security meeting Central Bank of Sri Lanka compliance requirements.',
            'installation' => '3 weeks',
            'coverage' => 'All branches & ATMs',
            'support' => '24/7 Local',
            'features' => [
                'ATM transaction monitoring',
                'Vault and cash handling surveillance',
                'Regulatory compliance reporting'
            ]
        ]
    ],
    [
        'title' => 'Blue Ocean Residencies', 
        'category' => 'residential', 
        'location' => 'Dehiwala',
        'cameras' => '300+',
        'description' => 'Large-scale apartment complex security',
        'img' => $shuffledImages[9],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Multi-tower residential security with swimming pool, gym, and parking surveillance.',
            'installation' => '4 weeks',
            'coverage' => 'All towers & amenities',
            'support' => '24/7 Local',
            'features' => [
                'Elevator monitoring',
                'Parking guidance integration',
                'Amenity access control'
            ]
        ]
    ],
    [
        'title' => 'House of Fashion', 
        'category' => 'retail', 
        'location' => 'Nugegoda',
        'cameras' => '250+',
        'description' => 'Multi-floor retail security with inventory protection',
        'img' => $shuffledImages[10],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Fashion retail security with fitting room monitoring and stockroom protection.',
            'installation' => '3 weeks',
            'coverage' => 'All floors & storage',
            'support' => '24/7 Local',
            'features' => [
                'Shoplifting prevention AI',
                'Stock room access logging',
                'Employee area monitoring'
            ]
        ]
    ],
    [
        'title' => 'Dialog Axiata Data Center', 
        'category' => 'industrial', 
        'location' => 'Malabe',
        'cameras' => '190+',
        'description' => 'Mission-critical data center security',
        'img' => $shuffledImages[11],
        'gallery' => $workImages,
        'details' => [
            'overview' => 'Tier-3 data center security with multi-layer access control and environmental monitoring.',
            'installation' => '4-5 weeks',
            'coverage' => 'All server rooms & perimeter',
            'support' => '24/7 Local',
            'features' => [
                'Biometric + card dual authentication',
                'Server rack level monitoring',
                'Environmental sensor integration'
            ]
        ]
    ],
];

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