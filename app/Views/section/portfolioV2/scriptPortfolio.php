<!-- ============================================ -->
<!-- PORTFOLIO STYLES & SCRIPTS -->
<!-- ============================================ -->
<style>
/* ========================================
   ANIMATIONS
======================================== */
@keyframes blink {
  0%, 49% { opacity: 1; }
  50%, 100% { opacity: 0; }
}
.animate-blink { animation: blink 1s infinite; }

@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}
.animate-float { animation: float 3s ease-in-out infinite; }

@keyframes shimmer {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

@keyframes modalFadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes modalSlideUp {
  from { 
    opacity: 0; 
    transform: translateY(50px) scale(0.9); 
  }
  to { 
    opacity: 1; 
    transform: translateY(0) scale(1); 
  }
}

/* ========================================
   FILTER BUTTONS - Red Gradient Style
======================================== */
.filter-btn {
  background: transparent;
  border: 2px solid var(--border-color);
  color: var(--text-primary);
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
}

.filter-btn::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, var(--accent-red), var(--accent-shine), var(--accent-red));
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: 0;
  border-radius: inherit;
}

.filter-btn:hover {
  border-color: var(--accent-red);
  box-shadow: 0 4px 20px rgba(255, 59, 63, 0.3);
  transform: translateY(-1px);
}

.filter-btn:hover::before {
  opacity: 0.1;
}

.filter-btn:hover span {
  color: var(--accent-red);
  transition: color 0.3s ease;
}

.filter-btn.active {
  background: linear-gradient(135deg, var(--accent-red), var(--accent-shine), var(--accent-red)) !important;
  background-size: 200% auto;
  border-color: transparent !important;
  color: var(--bg-background) !important;
  box-shadow: 0 4px 20px rgba(255, 59, 63, 0.4);
}

.filter-btn.active span {
  color: var(--bg-background) !important;
}

.filter-btn.active:hover {
  background-position: right center;
  box-shadow: 0 6px 25px rgba(255, 59, 63, 0.5);
  transform: translateY(-1px);
}

.filter-btn span {
  position: relative;
  z-index: 1;
  transition: color 0.3s ease;
}

/* ========================================
   PAGINATION BUTTONS
======================================== */
.page-btn {
  background: rgba(255, 255, 255, 0.05);
  border: 2px solid var(--border-color);
  color: var(--text-primary);
}

.page-btn:hover:not(.active) {
  border-color: var(--accent-red);
  background: rgba(255, 59, 63, 0.1);
  box-shadow: 0 0 15px rgba(255, 59, 63, 0.2);
}

.page-btn.active {
  background: linear-gradient(135deg, var(--accent-red), var(--accent-shine)) !important;
  border-color: transparent !important;
  color: var(--bg-background) !important;
  box-shadow: 0 8px 25px rgba(255, 59, 63, 0.4);
}

/* ========================================
   CARD STYLES
======================================== */
.project-card {
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.project-card:hover {
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
}

/* ========================================
   UTILITIES
======================================== */
.line-clamp-1 {
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* ========================================
   MODAL STYLES
======================================== */
.modal-overlay {
  animation: modalFadeIn 0.3s ease;
}

.modal-content {
  animation: modalSlideUp 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.modal-image-container {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 300px;
}

.modal-image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Slider Dots */
.slider-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.4);
  cursor: pointer;
  transition: all 0.3s ease;
}

.slider-dot.active {
  width: 30px;
  border-radius: 10px;
  background: var(--accent-red);
}

/* ========================================
   RESPONSIVE
======================================== */
@media (max-width: 768px) {
  .modal-content {
    flex-direction: column !important;
    max-height: 95vh;
  }
  
  .modal-image-section {
    height: 250px !important;
    min-height: 250px !important;
  }
  
  .modal-details-section {
    max-height: calc(95vh - 250px);
    overflow-y: auto;
  }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    
    // ========================================
    // ELEMENTS
    // ========================================
    const filterBtns = document.querySelectorAll(".filter-btn");
    const portfolioTrack = document.getElementById("portfolioTrack");
    const allCards = document.querySelectorAll(".project-card");
    const pageBtns = document.querySelectorAll(".page-btn");
    
    let currentPage = 1;
    let currentFilter = 'all';
    
    // ========================================
    // FILTER FUNCTIONALITY
    // ========================================
    filterBtns.forEach(btn => {
        btn.addEventListener("click", function() {
            // Update active state
            filterBtns.forEach(b => b.classList.remove("active"));
            this.classList.add("active");
            
            currentFilter = this.dataset.filter;
            
            // Animate and filter cards
            allCards.forEach((card, index) => {
                const cardCategory = card.dataset.category;
                
                // Add transition delay for stagger effect
                card.style.transitionDelay = `${index * 30}ms`;
                
                if (currentFilter === "all" || cardCategory === currentFilter) {
                    card.style.opacity = "1";
                    card.style.transform = "translateY(0) scale(1)";
                    card.style.display = "block";
                } else {
                    card.style.opacity = "0";
                    card.style.transform = "translateY(20px) scale(0.95)";
                    setTimeout(() => {
                        if (currentFilter !== "all" && cardCategory !== currentFilter) {
                            card.style.display = "none";
                        }
                    }, 300);
                }
            });
            
            // Reset pagination
            currentPage = 1;
            updatePagination();
            slideToPage(1);
        });
    });
    
    // ========================================
    // PAGINATION FUNCTIONALITY
    // ========================================
    pageBtns.forEach(btn => {
        btn.addEventListener("click", function() {
            currentPage = parseInt(this.dataset.page);
            updatePagination();
            slideToPage(currentPage);
            
            // Smooth scroll to grid
            document.getElementById('portfolio-grid').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
    
    function slideToPage(pageNum) {
        if (portfolioTrack) {
            const offset = (pageNum - 1) * -100;
            portfolioTrack.style.transform = `translateX(${offset}%)`;
        }
    }
    
    function updatePagination() {
        pageBtns.forEach(btn => {
            const pageNum = parseInt(btn.dataset.page);
            btn.classList.toggle('active', pageNum === currentPage);
        });
    }
    
    // ========================================
    // MODAL FUNCTIONALITY
    // ========================================
    allCards.forEach(card => {
        card.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get data
            const title = this.dataset.title;
            const location = this.dataset.location;
            const cameras = this.dataset.cameras;
            const category = this.dataset.category;
            const gallery = JSON.parse(this.dataset.gallery || '[]');
            const details = JSON.parse(this.dataset.details || '{}');
            
            let currentSlide = 0;
            
            // Create modal
            const modal = document.createElement("div");
            modal.className = "modal-overlay fixed inset-0 z-50 flex items-center justify-center p-4 md:p-6";
            modal.style.background = "rgba(0, 0, 0, 0.92)";
            modal.style.backdropFilter = "blur(8px)";
            
            modal.innerHTML = `
                <div class="modal-content relative w-full max-w-5xl rounded-3xl overflow-hidden flex flex-col lg:flex-row"
                     style="background: var(--color-dark-1); border: 1px solid var(--border-color); max-height: 90vh;">
                    
                    <!-- Close Button -->
                    <button class="close-modal absolute top-4 right-4 z-50 w-11 h-11 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 hover:rotate-90"
                            style="background: linear-gradient(135deg, var(--accent-red), var(--accent-shine));">
                        <svg class="w-5 h-5" style="color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    
                    <!-- Image Section -->
                    <div class="modal-image-section relative lg:w-1/2 bg-black overflow-hidden" style="min-height: 350px;">
                        <div class="modal-image-container">
                            <img id="modalMainImage" 
                                 src="${gallery[0] || ''}" 
                                 alt="${title}"
                                 class="w-full h-full object-cover">
                        </div>
                        
                        ${gallery.length > 1 ? `
                        <!-- Navigation Arrows -->
                        <button class="prev-slide absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full flex items-center justify-center text-2xl font-bold transition-all duration-300 hover:scale-110 z-20"
                                style="background: linear-gradient(135deg, var(--accent-red), var(--accent-shine)); color: white;">
                            ‹
                        </button>
                        <button class="next-slide absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full flex items-center justify-center text-2xl font-bold transition-all duration-300 hover:scale-110 z-20"
                                style="background: linear-gradient(135deg, var(--accent-red), var(--accent-shine)); color: white;">
                            ›
                        </button>
                        
                        <!-- Dots Indicator -->
                        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-20">
                            ${gallery.map((_, i) => `
                                <span class="slider-dot ${i === 0 ? 'active' : ''}" data-index="${i}"></span>
                            `).join('')}
                        </div>
                        ` : ''}
                        
                        <!-- Image Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                    
                    <!-- Details Section -->
                    <div class="modal-details-section flex-1 p-6 md:p-8 overflow-y-auto" style="max-height: 90vh;">
                        
                        <!-- Category Badge -->
                        <span class="inline-block px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4"
                              style="background: linear-gradient(135deg, var(--accent-red), var(--accent-shine)); color: white;">
                            ${category}
                        </span>
                        
                        <!-- Title -->
                        <h2 class="text-2xl md:text-3xl font-bold mb-3" style="color: var(--color-white);">
                            ${title}
                        </h2>
                        
                        <!-- Location & Cameras -->
                        <div class="flex flex-wrap items-center gap-4 mb-6" style="color: var(--color-yellow);">
                            <span class="flex items-center gap-2 text-sm font-medium">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                                ${location}
                            </span>
                            <span class="w-1.5 h-1.5 rounded-full" style="background: var(--accent-red);"></span>
                            <span class="flex items-center gap-2 text-sm font-medium">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                </svg>
                                ${cameras} Cameras
                            </span>
                        </div>
                        
                        <!-- Overview Box -->
                        <div class="mb-6 p-5 rounded-2xl" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                            <h3 class="font-bold text-lg mb-3" style="color: var(--color-white);">Project Overview</h3>
                            <p class="text-sm leading-relaxed" style="color: var(--text-secondary);">
                                ${details.overview || 'Comprehensive security solution tailored to meet specific requirements.'}
                            </p>
                        </div>
                        
                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="p-4 rounded-xl text-center" style="background: rgba(255,59,63,0.1); border: 1px solid rgba(255,59,63,0.2);">
                                <span class="text-xs block mb-1" style="color: var(--text-secondary);">Installation</span>
                                <span class="text-sm font-bold" style="color: var(--color-white);">${details.installation || 'N/A'}</span>
                            </div>
                            <div class="p-4 rounded-xl text-center" style="background: rgba(255,59,63,0.1); border: 1px solid rgba(255,59,63,0.2);">
                                <span class="text-xs block mb-1" style="color: var(--text-secondary);">Coverage</span>
                                <span class="text-sm font-bold" style="color: var(--color-white);">${details.coverage || 'N/A'}</span>
                            </div>
                            <div class="p-4 rounded-xl text-center" style="background: rgba(255,59,63,0.1); border: 1px solid rgba(255,59,63,0.2);">
                                <span class="text-xs block mb-1" style="color: var(--text-secondary);">Support</span>
                                <span class="text-sm font-bold" style="color: var(--color-white);">${details.support || 'N/A'}</span>
                            </div>
                            <div class="p-4 rounded-xl text-center" style="background: rgba(255,59,63,0.1); border: 1px solid rgba(255,59,63,0.2);">
                                <span class="text-xs block mb-1" style="color: var(--text-secondary);">Service Area</span>
                                <span class="text-sm font-bold" style="color: var(--color-white);">Island-wide</span>
                            </div>
                        </div>
                        
                        <!-- Features -->
                        <div>
                            <h3 class="font-bold text-lg mb-4" style="color: var(--color-white);">Key Features</h3>
                            <ul class="space-y-3">
                                ${(details.features || ['Advanced surveillance system', 'Real-time monitoring', '24/7 support']).map(feature => `
                                    <li class="flex items-start gap-3 text-sm" style="color: var(--text-secondary);">
                                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: var(--color-green);" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>${feature}</span>
                                    </li>
                                `).join('')}
                            </ul>
                        </div>
                        
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
            document.body.style.overflow = 'hidden';
            
            // ========================================
            // Modal Event Handlers
            // ========================================
            const closeBtn = modal.querySelector('.close-modal');
            const prevBtn = modal.querySelector('.prev-slide');
            const nextBtn = modal.querySelector('.next-slide');
            const mainImage = modal.querySelector('#modalMainImage');
            const dots = modal.querySelectorAll('.slider-dot');
            
            // Close Modal Function
            function closeModal() {
                modal.style.opacity = '0';
                setTimeout(() => {
                    document.body.style.overflow = '';
                    modal.remove();
                }, 300);
            }
            
            // Update Slider
            function updateSlider() {
                if (mainImage) {
                    mainImage.style.opacity = '0';
                    setTimeout(() => {
                        mainImage.src = gallery[currentSlide];
                        mainImage.style.opacity = '1';
                    }, 150);
                }
                dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === currentSlide);
                });
            }
            
            // Close button
            closeBtn?.addEventListener('click', closeModal);
            
            // Click outside to close
            modal.addEventListener('click', (e) => {
                if (e.target === modal) closeModal();
            });
            
            // Escape key to close
            const escHandler = (e) => {
                if (e.key === 'Escape') {
                    closeModal();
                    document.removeEventListener('keydown', escHandler);
                }
            };
            document.addEventListener('keydown', escHandler);
            
            // Slider navigation
            if (gallery.length > 1) {
                prevBtn?.addEventListener('click', (e) => {
                    e.stopPropagation();
                    currentSlide = (currentSlide - 1 + gallery.length) % gallery.length;
                    updateSlider();
                });
                
                nextBtn?.addEventListener('click', (e) => {
                    e.stopPropagation();
                    currentSlide = (currentSlide + 1) % gallery.length;
                    updateSlider();
                });
                
                // Dot navigation
                dots.forEach(dot => {
                    dot.addEventListener('click', (e) => {
                        e.stopPropagation();
                        currentSlide = parseInt(dot.dataset.index);
                        updateSlider();
                    });
                });
                
                // Auto-slide
                const autoSlideInterval = setInterval(() => {
                    currentSlide = (currentSlide + 1) % gallery.length;
                    updateSlider();
                }, 5000);
                
                // Stop auto-slide on close
                closeBtn?.addEventListener('click', () => clearInterval(autoSlideInterval));
            }
            
            // Keyboard navigation
            document.addEventListener('keydown', function keyHandler(e) {
                if (e.key === 'ArrowLeft' && gallery.length > 1) {
                    currentSlide = (currentSlide - 1 + gallery.length) % gallery.length;
                    updateSlider();
                } else if (e.key === 'ArrowRight' && gallery.length > 1) {
                    currentSlide = (currentSlide + 1) % gallery.length;
                    updateSlider();
                }
            });
        });
    });
    
    // Console log for debugging
    console.log('✅ Portfolio initialized:', {
        filterButtons: filterBtns.length,
        projectCards: allCards.length,
        pageButtons: pageBtns.length
    });
});
</script>