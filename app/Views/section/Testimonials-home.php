<section id="testimonials" class="py-12 md:py-16 relative opacity-0">
    <!-- Section line at start -->
    <div class="w-full h-px bg-[var(--color-white-60)] mt-12"></div>

    <div class="w-full max-w-6xl mx-auto text-center mb-12 pt-10">
        <h2 class="text-3xl md:text-4xl font-bold text-[var(--color-white)]">
            Client <span class="text-[var(--color-yellow)]">Testimonials</span>
        </h2>
    </div>

    <div class="grid gap-2 md:grid-cols-4 px-4 md:px-0">
        <?php foreach ($testimonialsData as $testimonial): ?>
            <?= view('cards/Testimonials-card', ['testimonial' => $testimonial]); ?>
        <?php endforeach; ?>
    </div>

    <!-- Section line at end -->
    <div class="w-full h-px bg-[var(--color-white-60)] mt-12"></div>
</section>

<!-- GSAP + ScrollTrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
  gsap.registerPlugin(ScrollTrigger);

  // Animate section fade-in
  gsap.fromTo("#testimonials",
    { opacity: 0, y: 50 },
    {
      opacity: 1,
      y: 0,
      duration: 1.4,
      delay: 0.5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: "#testimonials",
        start: "top 85%",
        end: "bottom 20%",
        toggleActions: "play reverse play reverse"
      }
    }
  );

  // Stagger fade-in for testimonial cards
  gsap.fromTo("#testimonials .grid > *",
    { opacity: 0, y: 40 },
    {
      opacity: 1,
      y: 0,
      duration: 1.2,
      delay: 0.5,
      stagger: 0.25,
      ease: "power2.out",
      scrollTrigger: {
        trigger: "#testimonials",
        start: "top 85%",
      }
    }
  );
</script>
