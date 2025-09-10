<section id="testimonials" class=" md:py-16 relative opacity-0">
  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-black/40 to-transparent z-0"></div>

    <div class="w-full max-w-6xl mx-auto text-center mb-12 pt-10 z-5">
        <h2 class="text-3xl md:text-4xl font-bold text-[var(--color-white)]">
            Client <span class="text-[var(--color-yellow)]">Testimonials</span>
        </h2>
    </div>

    <div class="grid gap-2 md:grid-cols-3 px-4 lg:px-28 z-5">
        <?php foreach ($testimonialsData as $testimonial): ?>
            <?= view('cards/Testimonials-card', ['testimonial' => $testimonial]); ?>
        <?php endforeach; ?>
    </div>


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
