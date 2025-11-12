<!-- ========================= WHY CHOOSE US SECTION ========================= -->
<section id="why-choose" class="pt-10 relative w-full min-h-auto sm:min-h-[120vh] overflow-hidden bg-[var(--color-black)]">

  <!-- ===== Container ===== -->
  <div class="max-w-7xl mx-auto px-6 text-center relative z-10">

  
    <!-- ===== Section Title ===== -->
    <h1 class="text-4xl relative z-10 sm:text-5xl  font-extrabold mb-6">
      <span class="text-[var(--text-primary)] drop-shadow-[0_0_5px_var(--accent-red)]">WHY CHOOSE</span>
      <span class="text-[var(--accent-red)] drop-shadow-[0_0_10px_var(--accent-red)]">24/7 SENTINEL?</span>
    </h1>

    <!-- ===== Subtitle ===== -->
    <p class="relative z-10 max-w-3xl mx-auto text-[var(--text-secondary)] text-base sm:text-lg mb-8 leading-relaxed">
      We are a leading professional CCTV monitoring company dedicated to providing comprehensive security solutions 
      for residential and commercial clients. Our state-of-the-art monitoring center operates 24/7 with trained 
      security professionals keeping your world safe, always.
    </p>

<!-- ===== Feature Stats: Glass Blur Cards (on top of image) ===== -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-4 relative z-10">
  <!-- Stat Card 1 -->
  <div class="relative p-3 sm:p-6 rounded-2xl bg-[rgba(255,255,255,0.05)] backdrop-blur-md border border-[var(--border-color)] 
              shadow-[0_0_15px_var(--shadow-soft)]">
    <h2 class="text-4xl sm:text-5xl md:text-5xl  font-bold text-[var(--color-yellow)] mb-2 sm:mb-3">3+</h2>
    <p class="text-sm sm:text-base md:text-sm  text-[var(--text-primary)] font-semibold uppercase tracking-wide">Years Experience</p>
  </div>

  <!-- Stat Card 2 -->
  <div class="relative p-3 sm:p-6 rounded-2xl bg-[rgba(255,255,255,0.05)] backdrop-blur-md border border-[var(--border-color)] 
              shadow-[0_0_15px_var(--shadow-soft)]">
    <h2 class="text-4xl sm:text-5xl md:text-5xl  font-bold text-[var(--color-blue)] mb-2 sm:mb-3">500+</h2>
    <p class="text-sm sm:text-base md:text-sm  text-[var(--text-primary)] font-semibold uppercase tracking-wide">Properties Protected</p>
  </div>

  <!-- Stat Card 3 -->
  <div class="relative p-3 sm:p-6 rounded-2xl bg-[rgba(255,255,255,0.05)] backdrop-blur-md border border-[var(--border-color)] 
              shadow-[0_0_15px_var(--shadow-soft)]">
    <h2 class="text-4xl sm:text-5xl md:text-5xl  font-bold text-[var(--color-green)] mb-2 sm:mb-3">24/ 7</h2>
    <p class="text-sm sm:text-base md:text-sm  text-[var(--text-primary)] font-semibold uppercase tracking-wide">Active Monitoring</p>
  </div>

  <!-- Stat Card 4 -->
  <div class="relative p-3 sm:p-6 rounded-2xl bg-[rgba(255,255,255,0.05)] backdrop-blur-md border border-[var(--border-color)] 
              shadow-[0_0_15px_var(--shadow-soft)]">
    <h2 class="text-4xl sm:text-5xl md:text-5xl  font-bold text-[var(--color-red)] mb-2 sm:mb-3">99.9%</h2>
    <p class="text-sm sm:text-base md:text-sm  text-[var(--text-primary)] font-semibold uppercase tracking-wide">Uptime Reliability</p>
  </div>
</div>


     <!-- ===== Background Image: Absolute Behind Cards ===== -->
    <div class="opacity-40 md:opacity-100 absolute inset-x-0 top-0 flex justify-center z-0"> <!-- image behind, lower z-index -->
      <img src="assets/img/whyChoose.png" 
           alt="Why Choose Us" class="w-full max-w-6xl object-contain opacity-80 rounded-xl shadow-lg">
    </div>

  </div>
</section>
<script>
// Function to animate numbers
function animateNumber(el, endValue, duration = 2000) {
  let startValue = 0;
  let startTime = null;

  const step = (timestamp) => {
    if (!startTime) startTime = timestamp;
    const progress = timestamp - startTime;
    const current = Math.min(Math.floor((progress / duration) * endValue), endValue);
    el.textContent = current + (el.dataset.suffix || '');
    if (current < endValue) {
      requestAnimationFrame(step);
    }
  };
  requestAnimationFrame(step);
}

// Observe when cards are in viewport
const cards = document.querySelectorAll('#why-choose h2');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const endValue = parseFloat(el.textContent.replace(/[^\d.]/g, ''));
      animateNumber(el, endValue);
      observer.unobserve(el); // Only animate once
    }
  });
}, { threshold: 0.5 });

cards.forEach(card => observer.observe(card));
</script>
