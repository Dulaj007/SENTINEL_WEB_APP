<section class="">
<div class="absolute inset-0 bg-gradient-to-b from-black/100 via-black/40 to-transparent z-0"></div>
<section id="get-started" class="bg-transparent text-center py-12 md:py-16 px-4 md:px-6 opacity-0">
  
  <!-- Title -->
  <h2 class="text-2xl md:text-4xl font-bold text-[var(--color-white)] mb-3 z-1">
    Getting Started is Easy
  </h2>
  <p class="text-[var(--color-white-80)] text-sm md:text-lg max-w-2xl mx-auto mb-10 md:mb-12 z-1">
    Secure your property in 3 simple steps with The 24/7 Sentinel process – designed to keep your home and business safe.
  </p>

  <!-- Steps -->
  <div class="flex flex-col md:grid md:grid-cols-3 gap-8 md:gap-12 max-w-6xl mx-auto">
    <!-- Step 1 -->
    <div class="flex flex-col items-center text-center bg-[var(--color-dark-2)] rounded-xl md:rounded-2xl p-4 md:p-6 shadow-md md:shadow-lg hover:shadow-xl transition duration-300 ">
      <div class="w-14 h-14 md:w-20 md:h-20 flex items-center justify-center rounded-full bg-gradient-to-b from-[var(--color-yellow)] to-[var(--color-orange-dark)] text-[var(--color-black)] text-lg md:text-2xl font-bold shadow-lg mb-4 md:mb-6">
        1
      </div>
      <h3 class="text-base md:text-xl font-semibold text-[var(--color-white)] mb-2 md:mb-3">Contact Us</h3>
      <p class="text-[var(--color-white-60)] text-xs md:text-base leading-relaxed">
        Reach out via WhatsApp, Email, or our website form. Tell us what you need – it’s quick and easy.
      </p>
    </div>

    <!-- Step 2 -->
    <div class="flex flex-col items-center text-center bg-[var(--color-dark-2)] rounded-xl md:rounded-2xl p-4 md:p-6 shadow-md md:shadow-lg hover:shadow-xl transition duration-300">
      <div class="w-14 h-14 md:w-20 md:h-20 flex items-center justify-center rounded-full bg-gradient-to-b from-[var(--color-yellow)] to-[var(--color-orange-dark)] text-[var(--color-black)] text-lg md:text-2xl font-bold shadow-lg mb-4 md:mb-6">
        2
      </div>
      <h3 class="text-base md:text-xl font-semibold text-[var(--color-white)] mb-2 md:mb-3">Get Your Custom Plan</h3>
      <p class="text-[var(--color-white-60)] text-xs md:text-base leading-relaxed">
        We’ll design a CCTV monitoring plan tailored for you with real-time surveillance and emergency response options.
      </p>
    </div>

    <!-- Step 3 -->
    <div class="flex flex-col items-center text-center bg-[var(--color-dark-2)] rounded-xl md:rounded-2xl p-4 md:p-6 shadow-md md:shadow-lg hover:shadow-xl transition duration-300">
      <div class="w-14 h-14 md:w-20 md:h-20 flex items-center justify-center rounded-full bg-gradient-to-b from-[var(--color-yellow)] to-[var(--color-orange-dark)] text-[var(--color-black)] text-lg md:text-2xl font-bold shadow-lg mb-4 md:mb-6">
        3
      </div>
      <h3 class="text-base md:text-xl font-semibold text-[var(--color-white)] mb-2 md:mb-3">Stay Protected 24/7</h3>
      <p class="text-[var(--color-white-60)] text-xs md:text-base leading-relaxed">
        We’ll install and activate your system so you enjoy round-the-clock protection and total peace of mind.
      </p>
    </div>
  </div>
</section>
</section>
<!-- GSAP + ScrollTrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
  gsap.registerPlugin(ScrollTrigger);

  // Animate section fade-in with delay
  gsap.fromTo("#get-started",
    { opacity: 0, y: 50 },
    {
      opacity: 1,
      y: 0,
      duration: 1.4,
      delay: 0.5,
      ease: "power2.out",
      scrollTrigger: {
        trigger: "#get-started",
        start: "top 85%",
        end: "bottom 20%",
        toggleActions: "play reverse play reverse"
      }
    }
  );

  // Stagger fade-in for cards
  gsap.fromTo("#get-started .flex",
    { opacity: 0, y: 40 },
    {
      opacity: 1,
      y: 0,
      duration: 1.2,
      delay: 0.5,
      stagger: 0.25,
      ease: "power2.out",
      scrollTrigger: {
        trigger: "#get-started",
        start: "top 85%",
      }
    }
  );
</script>
