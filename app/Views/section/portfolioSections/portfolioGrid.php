<section class="py-12 md:py-16" id="portfolio-grid" style="background: linear-gradient(to bottom, var(--color-black), var(--color-dark-1), var(--color-dark-2));">
    <div class="portfolio-slider overflow-hidden relative" id="portfolioSlider">
        <div class="flex transition-transform duration-500 ease-in-out" id="portfolioTrack">
            <?php 
            $allProjects = [
                // Page 1 (6 cards) - Randomly alternating between card1 and card2
                [
                    'title' => 'World Trade Center Colombo', 
                    'category'=>'commercial', 
                    'location'=>'Colombo 01',
                    'cameras'=>'200+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-2.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-3.png')
                    ]
                ],
                [
                    'title' => 'Biyagama Export Zone', 
                    'category'=>'industrial', 
                    'location'=>'Biyagama',
                    'cameras'=>'150+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img2.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img3.png')
                    ]
                ],
                [
                    'title' => 'Cinnamon Gardens Residences', 
                    'category'=>'residential', 
                    'location'=>'Colombo 07',
                    'cameras'=>'100+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-2.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-3.png')
                    ]
                ],
                [
                    'title' => 'ODEL Shopping Complex', 
                    'category'=>'retail', 
                    'location'=>'Colombo 03',
                    'cameras'=>'350+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img2.png')
                    ]
                ],
                [
                    'title' => 'Orion City IT Park', 
                    'category'=>'commercial', 
                    'location'=>'Dematagoda',
                    'cameras'=>'275+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-2.png')
                    ]
                ],
                [
                    'title' => 'Mount Lavinia Beach Resort', 
                    'category'=>'hospitality', 
                    'location'=>'Mount Lavinia',
                    'cameras'=>'180+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img2.png')
                    ]
                ],
                
                // Page 2 (6 cards)
                [
                    'title' => 'Kandy General Hospital', 
                    'category'=>'hospitality', 
                    'location'=>'Kandy',
                    'cameras'=>'400+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-2.png')
                    ]
                ],
                [
                    'title' => 'Katunayake FTZ', 
                    'category'=>'industrial', 
                    'location'=>'Katunayake',
                    'cameras'=>'225+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img2.png')
                    ]
                ],
                [
                    'title' => 'Commercial Bank Plaza', 
                    'category'=>'commercial', 
                    'location'=>'Colombo Fort',
                    'cameras'=>'175+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-2.png')
                    ]
                ],
                [
                    'title' => 'Blue Ocean Residencies', 
                    'category'=>'residential', 
                    'location'=>'Dehiwala',
                    'cameras'=>'300+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img2.png')
                    ]
                ],
                [
                    'title' => 'House of Fashion', 
                    'category'=>'retail', 
                    'location'=>'Nugegoda',
                    'cameras'=>'250+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card1/img-2.png')
                    ]
                ],
                [
                    'title' => 'Dialog Axiata Data Center', 
                    'category'=>'industrial', 
                    'location'=>'Malabe',
                    'cameras'=>'190+',
                    'img'=> base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                    'gallery' => [
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img1.png'),
                        base_url('SENTINEL/public_html/assets/img/porfolio/card2/img2.png')
                    ]
                ],
            ];
            
            // Divide projects into pages (6 per page)
            $projectsPerPage = 6;
            $pages = array_chunk($allProjects, $projectsPerPage);
            
            foreach ($pages as $pageIndex => $pageProjects): ?>
                <div class="min-w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 sm:px-6 lg:px-10 py-4" data-page="<?= $pageIndex + 1 ?>">
                    <?php foreach ($pageProjects as $p): ?>
                    <div class="reveal project-card rounded-xl overflow-hidden transition-all duration-500 transform hover:scale-105 cursor-pointer" 
                         style="background-color: var(--color-dark-2);"
                         onmouseover="this.style.boxShadow='0 0 20px rgba(255,191,53,0.6)'"
                         onmouseout="this.style.boxShadow=''"
                         data-category="<?= $p['category'] ?>"
                         data-location="<?= $p['location'] ?>"
                         data-gallery='<?= json_encode($p['gallery']) ?>'>
                        <img src="<?= $p['img'] ?>" alt="<?= $p['title'] ?>" class="w-full h-48 md:h-56 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-base md:text-lg" style="color: var(--color-white);"><?= $p['title'] ?></h3>
                            <p class="text-xs mb-2" style="color: var(--color-yellow);">📍 <?= $p['location'] ?></p>
                            <p class="text-xs md:text-sm mb-3" style="color: var(--color-white-60);">
                                Complete security overhaul with advanced surveillance systems
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xs md:text-sm flex items-center gap-1" style="color: var(--color-yellow);">
                                    ✓ <?= $p['cameras'] ?> Cameras
                                </span>
                                <a href="#" class="font-semibold text-xs md:text-sm hover:underline transition-all more-details" style="color: var(--color-yellow);">View Details</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-8 md:mt-12">
        <div class="flex gap-2 md:gap-3">
            <?php 
            $totalPages = count($pages);
            for ($i = 1; $i <= $totalPages; $i++): ?>
                <button class="page-btn px-3 py-2 md:px-4 md:py-2 rounded-lg font-semibold transition-all min-w-10 cursor-pointer <?= $i === 1 ? 'active' : '' ?>" 
                        style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); color: var(--color-white);"
                        onmouseover="if(!this.classList.contains('active')) { this.style.background='rgba(255,191,53,0.1)'; this.style.borderColor='var(--color-yellow)'; }"
                        onmouseout="if(!this.classList.contains('active')) { this.style.background='rgba(255, 255, 255, 0.05)'; this.style.borderColor='rgba(255, 255, 255, 0.1)'; }"
                        data-page="<?= $i ?>"><?= $i ?></button>
            <?php endfor; ?>
        </div>
    </div>
</section>