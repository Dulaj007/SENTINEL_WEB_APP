<!-- ============================================ -->
<!-- CUSTOM ANIMATIONS - SEPARATE STYLE BLOCK -->
<!-- NO CONFLICTS WITH EXISTING CSS -->


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
          // Add stagger delay
          setTimeout(() => {
            entry.target.classList.add('aos-animate');
          }, index * 100);
          
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