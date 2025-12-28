<!-- ============================================ -->
<!-- CUSTOM ANIMATIONS STYLE BLOCK -->
<!-- ============================================ -->
<style>
  /* Shimmer effect for gradient text */
  @keyframes shimmer {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  /* Float animation for elements */
  @keyframes float {
    0%, 100% { 
      transform: translateY(0px) rotate(0deg); 
    }
    25% { 
      transform: translateY(-10px) rotate(2deg); 
    }
    50% { 
      transform: translateY(0px) rotate(0deg); 
    }
    75% { 
      transform: translateY(-5px) rotate(-2deg); 
    }
  }

  .animate-float {
    animation: float 6s ease-in-out infinite;
  }

  /* Gradient animation for buttons */
  .bg-gradient-animate {
    background-size: 200% auto;
    transition: all 0.5s ease;
  }

  .bg-gradient-animate:hover {
    background-position: right center;
  }

  /* Card backface hidden for flip effect */
  .backface-hidden {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
  }

  /* Card 3D transform style */
  .card-3d {
    transform-style: preserve-3d;
  }

  /* Flip card hover glow */
  .flip-card:hover > div {
    box-shadow: 0 0 30px rgba(255, 191, 53, 0.5) !important;
    border-color: var(--color-yellow) !important;
  }

  /* Hover effect for secondary button */
  .services-secondary-btn:hover {
    background: linear-gradient(135deg, var(--accent-red) 0%, transparent 50%, var(--accent-red) 100%) !important;
    background-size: 200% auto !important;
  }

  /* Social icon enhancements */
  .social-icon {
    display: inline-flex;
    height: 2.5rem;
    width: 2.5rem;
    align-items: center;
    justify-content: center;
    border-radius: 9999px;
    background-color: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    color: white;
    transition: all 0.3s ease;
  }

  .social-icon:hover {
    color: var(--color-yellow);
    background-color: rgba(255,255,255,0.1);
    box-shadow: 0 0 12px var(--color-yellow);
  }

  /* Responsive adjustments */
  @media (max-width: 640px) {
    .animate-float {
      animation: none;
    }
  }
</style>


<!-- ============================================ -->
<!-- JAVASCRIPT - SCROLL ANIMATIONS -->
<!-- ============================================ -->
<script>
  // Simple AOS (Animate On Scroll) Implementation
  document.addEventListener('DOMContentLoaded', function() {
    
    // Create intersection observer
    const observerOptions = {
      threshold: 0.15,
      rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          // Get delay from data attribute
          const delay = entry.target.dataset.aosDelay || 0;
          
          setTimeout(() => {
            entry.target.classList.add('aos-animate');
          }, parseInt(delay));
          
          // Unobserve after animation
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Observe all AOS elements
    document.querySelectorAll('[data-aos]').forEach(el => {
      observer.observe(el);
    });

  });
</script>