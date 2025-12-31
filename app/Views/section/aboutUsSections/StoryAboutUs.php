<!-- Our Story -->
<section class="h-screeen bg-[var(--color-black)]">
  <div class="max-w-7xl mx-auto py-20 px-6 grid md:grid-cols-2 gap-10 items-center reveal">
    
    <!-- Story Text -->
    <div>
      <h2 class="text-3xl font-bold mb-6">Our Story</h2>
      <p class="text-[var(--color-white-80)] mb-4">
        Founded in 2025, 24/7 SENTINEL emerged from a vision: to revolutionize security monitoring by combining advanced technology and human expertise.
      </p>
      <p class="text-[var(--color-white-80)] mb-4">
        Today, we protect over 500 properties across industries. Our monitoring is 24/7, with certified professionals trained to respond to any situation.
      </p>
      <div class="flex gap-6 mt-6 font-bold text-[var(--color-yellow)]">
        <div>
          <span class="text-2xl">99.9%</span>
          <p class="text-[var(--color-white)] text-sm">Uptime</p>
        </div>
        <div>
          <span class="text-2xl">24/7</span>
          <p class="text-[var(--color-white)] text-sm">Monitoring</p>
        </div>
        <div>
          <span class="text-2xl">100%</span>
          <p class="text-[var(--color-white)] text-sm">Satisfaction</p>
        </div>
      </div>
    </div>

    <!-- Story Image -->
    <div>
      <img src="<?= getenv('app.baseURL') ?>assets/img/imgStory.png" 
           alt="Monitoring Room" 
           class="rounded-xl shadow-lg">
    </div>

  </div>
</section>
