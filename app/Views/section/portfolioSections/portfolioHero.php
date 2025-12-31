<section class="relative h-[90vh] flex items-center justify-center overflow-hidden">
    <img src="<?= getenv('app.baseURL') ?>assets/img/imgH1.png"
         alt="portfolio hero background"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="relative z-10 text-center px-4">
        <h1 class="portfolio-reveal text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg text-white">
            Our <span class="text-[var(--color-yellow)]">Portfolio</span>
        </h1>
        <p class="portfolio-reveal text-base md:text-lg mb-8 max-w-2xl mx-auto text-white drop-shadow-md" style="transition-delay: 0.1s;">
            Showcasing successful security installations and monitoring solutions across various industries
        </p>

        <div class="flex flex-wrap justify-center gap-8 md:gap-12 text-center mt-10">
            <div class="portfolio-reveal-scale" style="transition-delay: 0.2s;">
                <h2 class="text-2xl md:text-3xl font-bold text-[var(--color-yellow)] drop-shadow-lg">500+</h2>
                <p class="drop-shadow-md text-white">Properties Protected</p>
            </div>
            <div class="portfolio-reveal-scale" style="transition-delay: 0.3s;">
                <h2 class="text-2xl md:text-3xl font-bold text-[var(--color-yellow)] drop-shadow-lg">24/7</h2>
                <p class="drop-shadow-md text-white">Monitoring</p>
            </div>
            <div class="portfolio-reveal-scale" style="transition-delay: 0.4s;">
                <h2 class="text-2xl md:text-3xl font-bold text-[var(--color-yellow)] drop-shadow-lg">99.9%</h2>
                <p class="drop-shadow-md text-white">Uptime</p>
            </div>
        </div>
    </div>
</section>