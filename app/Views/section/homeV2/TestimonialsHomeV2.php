<section id="testimonials" class="relative w-full bg-[var(--color-black)] py-24 h-screen px-4 md:px-8">
    <!-- Section Title -->
    <div class="text-center mb-16">
        <h2 class="text-4xl sm:text-5xl  font-extrabold text-[var(--text-primary)] drop-shadow-[0_0_5px_var(--accent-red)]">
            What Our Clients Say
        </h2>
        <p class="text-[var(--color-white-60)] text-base md:text-lg mt-4 max-w-3xl mx-auto">
            Real feedback from businesses that trust 24/7 SENTINEL for their security needs.
        </p>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 max-w-4xl  mx-auto relative z-10">
        <?php foreach($testimonialsData as $testimonial): ?>
            <?= view('cards/Testimonials-card', ['testimonial' => $testimonial]) ?>
        <?php endforeach; ?>
    </div>
</section>
