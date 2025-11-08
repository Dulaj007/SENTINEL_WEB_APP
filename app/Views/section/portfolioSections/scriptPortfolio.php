<script>
document.addEventListener("DOMContentLoaded", function(){
    const filterBtns = document.querySelectorAll(".filter-btn");
    const portfolioTrack = document.getElementById("portfolioTrack");
    const portfolioSlider = document.getElementById("portfolioSlider");
    const allCards = document.querySelectorAll(".project-card");
    const pageBtns = document.querySelectorAll(".page-btn");
    const detailsLinks = document.querySelectorAll(".more-details");
    
    let currentPage = 1;
    let currentFilter = 'all';
    let isFiltering = false;
    
    // ========== REVEAL ON SCROLL ANIMATION ==========
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
    
    function revealOnScroll() {
        revealElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight * 0.75 && elementBottom > 0) {
                element.classList.add('active');
            }
        });
    }
    
    setTimeout(revealOnScroll, 100);
    
    let scrollTimeout;
    window.addEventListener('scroll', function() {
        if (scrollTimeout) {
            window.cancelAnimationFrame(scrollTimeout);
        }
        scrollTimeout = window.requestAnimationFrame(function() {
            revealOnScroll();
        });
    });
    
    // ========== PAGINATION FUNCTIONALITY - FIXED ==========
    pageBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            currentPage = parseInt(btn.dataset.page);
            updatePagination();
            slideToPage(currentPage);
            
            setTimeout(() => {
                const currentPageCards = document.querySelectorAll(`[data-page="${currentPage}"] .reveal`);
                currentPageCards.forEach(card => {
                    card.classList.remove('active');
                });
                setTimeout(() => {
                    currentPageCards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('active');
                        }, index * 50);
                    });
                }, 50);
            }, 100);
        });
    });
    
    function slideToPage(pageNum) {
        const offset = (pageNum - 1) * -100;
        portfolioTrack.style.transform = `translateX(${offset}%)`;
    }
    
    // FIXED: Proper active state management
    function updatePagination() {
        pageBtns.forEach(btn => {
            const pageNumber = parseInt(btn.dataset.page);
            
            // Remove all active-related classes first
            btn.classList.remove('active');
            btn.style.background = 'rgba(255, 255, 255, 0.05)';
            btn.style.borderColor = 'rgba(255, 255, 255, 0.1)';
            btn.style.color = 'var(--color-white)';
            
            // Add active classes to current page
            if (pageNumber === currentPage) {
                btn.classList.add('active');
                btn.style.background = 'linear-gradient(135deg, var(--color-yellow), var(--color-orange-dark))';
                btn.style.borderColor = 'var(--color-yellow)';
                btn.style.color = 'var(--color-black)';
            }
        });
    }
    
    // ========== ENHANCED FILTER FUNCTIONALITY ==========
    filterBtns.forEach(btn => {
        btn.addEventListener("click", async () => {
            if (isFiltering) return;
            isFiltering = true;
            
            filterBtns.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
            
            currentFilter = btn.dataset.filter;
            
            portfolioSlider.classList.add('portfolio-loading', 'relative', 'overflow-hidden');
            
            const visibleCards = Array.from(allCards).filter(card => 
                card.style.display !== 'none' && card.style.opacity !== '0'
            );
            
            for (let i = 0; i < visibleCards.length; i++) {
                setTimeout(() => {
                    visibleCards[i].classList.add('hiding');
                    visibleCards[i].classList.remove('active');
                }, i * 30);
            }
            
            await new Promise(resolve => setTimeout(resolve, 300));
            
            const cardsToShow = [];
            
            allCards.forEach(card => {
                card.classList.remove('showing', 'hiding');
                
                if (currentFilter === "all" || card.dataset.category === currentFilter) {
                    cardsToShow.push(card);
                    card.style.display = "block";
                    card.style.opacity = "0";
                } else {
                    card.style.display = "none";
                    card.style.opacity = "0";
                }
            });
            
            for (let i = 0; i < cardsToShow.length; i++) {
                setTimeout(() => {
                    cardsToShow[i].classList.add('showing', 'active');
                    cardsToShow[i].style.opacity = "1";
                }, i * 50);
            }
            
            setTimeout(() => {
                portfolioSlider.classList.remove('portfolio-loading');
                isFiltering = false;
            }, 600);
            
            currentPage = 1;
            updatePagination();
            slideToPage(1);
        });
    });
    
    // ========== ENHANCED MODAL WITH IMAGE SLIDER ==========
    detailsLinks.forEach(link => {
        link.addEventListener("click", e => {
            e.preventDefault();
            const card = e.target.closest(".project-card");
            const gallery = JSON.parse(card.dataset.gallery || '[]');
            const title = card.querySelector('h3').textContent;
            const category = card.dataset.category;
            const location = card.dataset.location;
            const camerasSpan = card.querySelectorAll('span');
            let cameras = 'N/A';
            camerasSpan.forEach(span => {
                if(span.textContent.includes('Cameras')) {
                    cameras = span.textContent;
                }
            });
            
            let currentSlide = 0;
            
            const overlay = document.createElement("div");
            overlay.className = "fixed inset-0 bg-black/90 flex items-center justify-center z-50 p-2 md:p-4";
            overlay.style.animation = "fadeIn 0.3s ease";
            
   overlay.innerHTML = `
    <div class="bg-gradient-to-br from-gray-900/95 to-gray-800/95 backdrop-blur-md 
                rounded-xl md:rounded-2xl p-0 w-full max-w-4xl mx-auto relative shadow-2xl 
                border border-gray-700/50 overflow-hidden max-h-[95vh]" 
         style="animation: slideUp 0.4s ease;">
        
        <!-- Close Button -->
        <button id="closeOverlay" 
                class="absolute top-2 right-2 md:top-4 md:right-4 z-50 bg-red-500/90 hover:bg-red-600 
                       text-white rounded-full w-8 h-8 md:w-10 md:h-10 flex items-center justify-center 
                       transition-all hover:scale-110 shadow-lg">
            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        
        <div class="flex flex-col lg:flex-row h-full">
            <!-- Image Slider -->
            <div class="relative h-[250px] md:h-[350px] lg:h-[450px] lg:w-1/2 bg-black overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out h-full" id="sliderTrack">
                    ${gallery.map(img => `
                        <img src="${img}" class="min-w-full h-full object-cover" alt="Project image">
                    `).join('')}
                </div>
                
                ${gallery.length > 1 ? `
                    <button class="absolute top-1/2 -translate-y-1/2 left-2 text-black w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center transition-all hover:scale-110 z-10 text-lg md:text-xl font-bold" 
                            style="background: rgba(255, 191, 53, 0.9);"
                            onmouseover="this.style.background='var(--color-yellow)'"
                            onmouseout="this.style.background='rgba(255, 191, 53, 0.9)'"
                            id="prevBtn">‹</button>
                    <button class="absolute top-1/2 -translate-y-1/2 right-2 text-black w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center transition-all hover:scale-110 z-10 text-lg md:text-xl font-bold" 
                            style="background: rgba(255, 191, 53, 0.9);"
                            onmouseover="this.style.background='var(--color-yellow)'"
                            onmouseout="this.style.background='rgba(255, 191, 53, 0.9)'"
                            id="nextBtn">›</button>
                    
                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-1.5 z-10">
                        ${gallery.map((_, i) => `
                            <span class="dot w-2 h-2 rounded-full bg-white/50 cursor-pointer transition-all hover:bg-white ${i === 0 ? 'active' : ''}" data-slide="${i}"></span>
                        `).join('')}
                    </div>
                ` : ''}
            </div>
            
            <!-- Content -->
            <div class="flex-1 p-4 md:p-6 lg:p-8 overflow-y-auto max-h-[calc(95vh-250px)] lg:max-h-[450px]">
                <div class="mb-4">
                    <!-- Category Badge - White text on yellow background -->
                    <span class="inline-block px-3 py-1 text-white rounded-full text-xs font-semibold mb-3" 
                          style="background: rgba(255, 191, 53, 0.2); border: 1px solid rgba(255, 191, 53, 0.4);">
                        ${category.charAt(0).toUpperCase() + category.slice(1)}
                    </span>
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-2 text-white">${title}</h3>
                    
                    <!-- Location - Yellow text with yellow icon -->
                    <p class="text-sm mb-3 flex items-center gap-1" style="color: var(--color-yellow);">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" style="color: var(--color-yellow);">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        ${location}
                    </p>
                    
                    <div class="flex flex-wrap items-center gap-3 text-xs md:text-sm text-gray-400 mb-4">
                        <span class="flex items-center gap-1">
                            <svg class="w-3 h-3 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                            ${cameras}
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-3 h-3 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            24/7 Monitoring
                        </span>
                    </div>
                </div>
                
                <!-- Project Overview Section - Yellow heading -->
                <div class="border-t border-gray-700 pt-3 mb-3">
                    <h4 class="text-base md:text-lg font-semibold mb-2" style="color: var(--color-yellow);">Project Overview</h4>
                    <p class="text-xs md:text-sm text-gray-300 leading-relaxed mb-3">
                        Successfully deployed cutting-edge surveillance technology across this premier ${location} location. 
                        Our team integrated advanced AI-powered cameras with existing infrastructure, ensuring seamless 
                        24/7 monitoring capabilities while maintaining compliance with Sri Lankan security standards.
                    </p>
                </div>
                
                <!-- Info Grid Boxes -->
                <div class="grid grid-cols-2 gap-2 mb-3">
                    <div class="bg-gray-800/50 rounded-lg p-2 md:p-3 border border-gray-700">
                        <span class="text-xs text-gray-400 block">Installation</span>
                        <p class="text-white text-sm md:text-base font-semibold">2-3 weeks</p>
                    </div>
                    <div class="bg-gray-800/50 rounded-lg p-2 md:p-3 border border-gray-700">
                        <span class="text-xs text-gray-400 block">Coverage</span>
                        <p class="text-white text-sm md:text-base font-semibold">Full premises</p>
                    </div>
                    <div class="bg-gray-800/50 rounded-lg p-2 md:p-3 border border-gray-700">
                        <span class="text-xs text-gray-400 block">Service</span>
                        <p class="text-white text-sm md:text-base font-semibold">Island-wide</p>
                    </div>
                    <div class="bg-gray-800/50 rounded-lg p-2 md:p-3 border border-gray-700">
                        <span class="text-xs text-gray-400 block">Support</span>
                        <p class="text-white text-sm md:text-base font-semibold">24/7 Local</p>
                    </div>
                </div>
                
                <!-- Key Features Section - Yellow heading -->
                <div class="border-t border-gray-700 pt-3">
                    <h4 class="text-base md:text-lg font-semibold mb-2" style="color: var(--color-yellow);">Key Features</h4>
                    <ul class="space-y-1">
                        <li class="flex items-start gap-2 text-xs md:text-sm text-gray-300">
                            <svg class="w-4 h-4 md:w-5 md:h-5 text-green-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>AI-powered threat detection with instant SMS/Email alerts</span>
                        </li>
                        <li class="flex items-start gap-2 text-xs md:text-sm text-gray-300">
                            <svg class="w-4 h-4 md:w-5 md:h-5 text-green-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Local monitoring center with Sinhala/Tamil/English support</span>
                        </li>
                        <li class="flex items-start gap-2 text-xs md:text-sm text-gray-300">
                            <svg class="w-4 h-4 md:w-5 md:h-5 text-green-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Power backup systems for uninterrupted operation</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
`;
            
            document.body.appendChild(overlay);
            document.body.style.overflow = 'hidden';
            
            // Image Slider Functionality
            if (gallery.length > 1) {
                const sliderTrack = overlay.querySelector('#sliderTrack');
                const dots = overlay.querySelectorAll('.dot');
                const prevBtn = overlay.querySelector('#prevBtn');
                const nextBtn = overlay.querySelector('#nextBtn');
                
                function updateSlider() {
                    sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
                    dots.forEach((dot, i) => {
                        dot.classList.toggle('active', i === currentSlide);
                    });
                }
                
                prevBtn?.addEventListener('click', () => {
                    currentSlide = (currentSlide - 1 + gallery.length) % gallery.length;
                    updateSlider();
                });
                
                nextBtn?.addEventListener('click', () => {
                    currentSlide = (currentSlide + 1) % gallery.length;
                    updateSlider();
                });
                
                dots.forEach(dot => {
                    dot.addEventListener('click', () => {
                        currentSlide = parseInt(dot.dataset.slide);
                        updateSlider();
                    });
                });
                
                // Auto-slide
                const autoSlide = setInterval(() => {
                    currentSlide = (currentSlide + 1) % gallery.length;
                    updateSlider();
                }, 4000);
                
                [prevBtn, nextBtn].forEach(btn => {
                    btn?.addEventListener('click', () => clearInterval(autoSlide));
                });
            }
            
            // Close modal handlers
            const closeBtn = overlay.querySelector('#closeOverlay');
            closeBtn.addEventListener('click', () => {
                document.body.style.overflow = '';
                overlay.remove();
            });
            
            overlay.addEventListener('click', (e) => {
                if (e.target === overlay) {
                    document.body.style.overflow = '';
                    overlay.remove();
                }
            });
            
            const escHandler = (e) => {
                if (e.key === 'Escape') {
                    document.body.style.overflow = '';
                    overlay.remove();
                    document.removeEventListener('keydown', escHandler);
                }
            };
            document.addEventListener('keydown', escHandler);
        });
    });
});
</script>