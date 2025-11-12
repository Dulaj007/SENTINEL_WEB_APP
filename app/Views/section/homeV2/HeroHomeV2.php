<section id="hero" class="relative w-full h-screen flex items-center overflow-hidden">

  <!-- Full Background Image -->
  <div class="absolute -inset-1">
    <img src="<?= base_url('SENTINEL/public_html/assets/img/newbg.png') ?>" 
         alt="Hero Background" 
         class="w-full h-full object-cover object-center">
    <!-- Dark overlay for better text contrast -->
    <div class="absolute inset-0  "></div>
  </div>

  <!-- Hero Content (Left Aligned) -->
  <div class="relative z-10 w-full xl:w-1/2 flex flex-col justify-center px-8 lg:px-20 py-20">
       <!-- 👁️ Security Camera Icon -->
  <div class="mb-1 animate-float">
  <svg class="w-[15vh] xl:w-[10vh] xl:h-[10vh] h-[15vh] text-[var(--accent-red)] drop-shadow-[0_0_12px_rgba(255,59,63,0.6)]"
       fill="currentColor"
       viewBox="-10 -18 72 72"
       xmlns="http://www.w3.org/2000/svg"
       transform="matrix(-1, 0, 0, 1, 0, 0)">
    <g id="SVGRepo_iconCarrier">
      <title>security-camera</title>
      <polygon points="12.28 29.8 22.23 35.37 25.58 34.29 11.11 26.18 12.28 29.8"></polygon>
      <path d="M58.7,37.23v1.91h-8l-9.82-9.82L60.12,23.1a1.77,1.77,0,0,0,1.14-2.24L57.51,9.26a1.79,1.79,0,0,0-2.25-1.15L11.7,22.22a1.78,1.78,0,0,0-1.18,1.25l17.74,10,8.17-2.65L49,43.35H58.7v1.31A3.38,3.38,0,0,0,61.48,48V33.91A3.37,3.37,0,0,0,58.7,37.23ZM40.36,16.55c-.18-.55,0-1.09.31-1.2L53.3,11.27c.35-.11.77.24,1,.78s0,1.09-.31,1.2L41.31,17.33C41,17.45,40.54,17.09,40.36,16.55Z"></path>
    </g>
  </svg>
</div>

    <!-- Tagline -->
    <span class="text-[var(--accent-red)] text-sm uppercase font-semibold tracking-widest mb-2 animate-pulse">
      ⬤ CCTV Monitoring
    </span>

    <!-- Main Headline -->
    <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-[var(--text-primary)] mb-2 leading-tight">
      &nbsp;Protect&nbsp;Your <span class="text-[var(--accent-red)]"><br class="block lg:hidden">&nbsp;World</span>
      <span class=""><br class="hidden lg:block">&nbsp;24/ 7  <br class="block lg:hidden">&nbsp;<span id="typed-words" class="text-[var(--accent-red)]"></span></span>
      <span class="absolute h-[36px] lg:h-[45px] w-[4px] bg-[var(--accent-red)] animate-blink"></span>
    </h1>

    <!-- Subtitle -->
    <p class="text-[var(--text-secondary)] w-2/3  xl:w-3/3 text-base sm:text-xl mb-7 ml-2 leading-snug italic">
      Real time surveillance, instant alerts, and rapid intervention. 
      Keep your business, home, and loved ones safe with SENTINERL.
    </p>

    <!-- Buttons -->
    <div class="flex flex-col sm:flex-row gap-4">
  <a href="<?= base_url('contact') ?>" 
   class="flex items-center gap-2 px-4 py-4 font-bold rounded-2xl 
          bg-gradient-to-r from-[var(--accent-red)] via-[var(--accent-shine)] to-[var(--accent-red)]
          text-[var(--bg-background)] shadow-[var(--shadow-hard)]
          bg-gradient-animate hover:opacity-90 transition transform duration-500 hover:scale-105">

  <!-- Inline SVG Icon -->
  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 24">
    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"></path>
  </svg>

  <h1>Start Monitoring</h1>
</a>

      <a href="<?= base_url('services') ?>" 
         class="flex items-center gap-2 px-8 py-4 border border-[var(--accent-red)] rounded-2xl
                text-[var(--text-primary)] font-bold  hover:text-[var(--text-primary)]
                hover:scale-105 transform transition duration-500
                bg-gradient-animate
                hover:bg-gradient-to-r from-[var(--accent-red)] via-[var(--bg-background)] to-[var(--accent-red)]">
        <img src="<?= base_url('SENTINEL/public_html/assets/icons/yellowarrow.png') ?>" class="w-5 h-5">
        <h1>Watch Demo</h1>
      </a>
    </div>
  </div>

  <!-- Optional Floating Right Accent Elements -->
  <div class="absolute right-10 bottom-10 hidden lg:flex flex-col items-center space-y-2">
    <div class="w-12 h-12 rounded-full border-2 border-[var(--accent-red)] flex items-center justify-center shadow-[var(--shadow-soft)] animate-bounce">
      <svg class="w-6 h-6 text-[var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
      </svg>
    </div>
    <span class="text-[var(--accent-red)] font-medium">Get Started</span>
  </div>

</section>

<!-- Typing Effect Script -->
<script>
const words = ["SURVEILLANCE", "SECURITY", "PROTECTION"];
const typedElement = document.getElementById("typed-words");
let wordIndex = 0;
let charIndex = 0;
let typingDelay = 100;
let erasingDelay = 50;
let newWordDelay = 1700;

function typeWord() {
    if (charIndex < words[wordIndex].length) {
        typedElement.textContent += words[wordIndex].charAt(charIndex);
        charIndex++;
        setTimeout(typeWord, typingDelay);
    } else {
        setTimeout(eraseWord, newWordDelay);
    }
}

function eraseWord() {
    if (charIndex > 0) {
        typedElement.textContent = words[wordIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(eraseWord, erasingDelay);
    } else {
        wordIndex = (wordIndex + 1) % words.length;
        setTimeout(typeWord, typingDelay);
    }
}

document.addEventListener("DOMContentLoaded", function() {
    setTimeout(typeWord, newWordDelay);
});
</script>

<!-- Extra Animations -->
<style>
@keyframes blink {
  0%, 49% { opacity: 1; }
  50%, 100% { opacity: 0; }
}
.animate-blink { animation: blink 1s infinite; }

@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}
.animate-pulse { animation: pulse 2s infinite; }
</style>
