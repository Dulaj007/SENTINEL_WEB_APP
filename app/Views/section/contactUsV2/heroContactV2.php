<section id="hero" class="relative w-full h-screen flex items-center overflow-hidden">

  <!-- Full Background Image -->
  <div class="absolute inset-0">
    <img 
      src="<?= getenv('app.baseURL') ?>assets/img/contactHero1.png" 
      alt="Contact Us Background" 
      class="w-full h-full object-cover object-center opacity-90">
    <div class="absolute inset-0 blck md:hidden bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>
  </div>

  <!-- Hero Content -->
  <div class="relative z-10 w-full xl:w-1/2 flex flex-col justify-center px-8 lg:px-20 py-20">

    <!-- Icon (Animated Pulse Line or Mail Icon) -->
    <div class="">
      <svg xmlns="http://www.w3.org/2000/svg" 
           class="w-[15vh] xl:w-[10vh] xl:h-[10vh] h-[15vh] text-[var(--accent-red)] drop-shadow-[0_0_12px_rgba(255,59,63,0.6)] animate-float"
           viewBox="0 0 30 11" fill="currentColor">
        <path d="M12 13.065L1.8 6h20.4L12 13.065zM12 15l10-7v10H2V8l10 7z"/>
      </svg>
    </div>

    <!-- Tagline -->
    <span class="text-[var(--accent-red)] text-sm uppercase font-semibold tracking-widest mb-2 animate-pulse">
      ⬤ Get in Touch
    </span>

    <!-- Main Headline -->
    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-[var(--text-primary)] mb-4 leading-tight">
      Let's <span class="text-[var(--accent-red)]">Connect</span><br class="hidden lg:block">
      With Sentinel
    </h1>

    <!-- Subtitle -->
    <p class="text-[var(--text-secondary)] w-4/5 xl:w-3/4 text-base sm:text-xl mb-8 ml-1 leading-snug italic">
      Have a question, need support, or want a custom surveillance solution? 
      Reach out to our team we’re ready to secure what matters most to you.
    </p>

    <!-- Buttons -->
    <div class="flex flex-col sm:flex-row gap-4">
      <a href="mailto:info@sentinel.lk" 
         class="flex items-center gap-2 px-6 py-4 font-bold rounded-2xl 
                bg-gradient-to-r from-[var(--accent-red)] via-[var(--accent-shine)] to-[var(--accent-red)]
                text-[var(--bg-background)] shadow-[var(--shadow-hard)]
                bg-gradient-animate hover:opacity-90 transition transform duration-500 hover:scale-105">
        <!-- Mail Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2 4a2 2 0 012-2h12a2 2 0 012 2v0l-8 6L2 4zM2 6.236l7.684 5.763a2 2 0 002.632 0L20 6.236V16a2 2 0 01-2 2H4a2 2 0 01-2-2V6.236z"/>
        </svg>
        <h1>Send a Message</h1>
      </a>

      <a href="<?= base_url('about') ?>" 
         class="flex items-center gap-2 px-8 py-4 border border-[var(--accent-red)] rounded-2xl
                text-[var(--text-primary)] font-bold  hover:text-[var(--text-primary)]
                hover:scale-105 transform transition duration-500
                bg-gradient-animate
                hover:bg-gradient-to-r from-[var(--accent-red)] via-[var(--bg-background)] to-[var(--accent-red)]">
        <img src="<?= getenv('app.baseURL') ?>assets/icons/yellowarrow.png" class="w-5 h-5">
        <h1>About Sentinel</h1>
      </a>
    </div>
  </div>

  <!-- Floating Right Accent Element -->
  <div class="absolute right-10 bottom-10 hidden lg:flex flex-col items-center space-y-2">
    <div class="w-12 h-12 rounded-full border-2 border-[var(--accent-red)] flex items-center justify-center shadow-[var(--shadow-soft)] animate-pulse">
      <svg class="w-6 h-6 text-[var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 12H2m10-10v20" />
      </svg>
    </div>
    <span class="text-[var(--accent-red)] font-medium">Contact Us</span>
  </div>

</section>

<!-- Extra Animations -->
<style>
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-8px); }
}
.animate-float {
  animation: float 3s ease-in-out infinite;
}
.bg-gradient-animate {
  background-size: 200% 200%;
  animation: gradientFlow 4s ease infinite;
}
@keyframes gradientFlow {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
</style>
