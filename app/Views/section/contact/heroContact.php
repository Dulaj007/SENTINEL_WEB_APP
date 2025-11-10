<section id="hero" class="relative w-full h-[90vh] flex items-center justify-center text-white overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0 opacity-100">
        <img src="<?= base_url('SENTINEL/public_html/assets/img/hero.png') ?>"
             alt="Hero Background"
             class="w-full h-full object-cover object-right md:opacity-100">
        <div class="absolute inset-0 bg-[var(--color-dark-1)]/60"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 flex flex-col items-center text-center px-6 md:px-16 max-w-3xl mx-auto">
        <!-- Animated Title -->
        <h1 class="text-4xl sm:text-5xl md:text-5xl font-extrabold leading-tight mb-3">
            <span class="text-white">Get In</span>  
            <span 
                class=" bg-clip-text text-transparent bg-[var(--color-yellow)] to-[var(--color-red)]">
                Touch
            </span>

             
        </h1>

        <!-- Subtitle -->
        <p class="text-base sm:text-lg md:text-xl text-[var(--color-white)] leading-relaxed mb-3 italic">
            Ready to secure your property with professional 24/7 monitoring? 
            <span class="hidden sm:inline"><br></span>
            Our security experts are here to help you find the perfect solution.
        </p>

        <!-- Buttons -->

            <!-- Start Monitoring Button -->
              <div class="grid grid-cols-3 gap-4 mb-4 text-[var(--color-yellow)] font-bold text-lg">
                <div class="flex flex-col items-center">
                    <span class="text-4xl">500+</span>
                    <span class="text-[var(--color-white-60)] text-sm">Propeties Protected</span>
                </div>

                <div class="flex flex-col items-center">
                    <span class="text-4xl">24/7</span>
                    <span class="text-[var(--color-white-60)] text-sm">Monitoring</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-4xl">99%</span>
                    <span class="text-[var(--color-white-60)] text-sm">Uptime</span>
                </div>
               
            </div>
            

          
        </div>
    </div>

    <!-- Scroll indicator: mouse + dot + chevrons -->
 <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-10 flex flex-col items-center opacity-80">
  <!-- mouse with gradient border -->
  <div class="p-[2px] rounded-full bg-gradient-to-b from-[var(--color-yellow)] to-[var(--color-orange-dark)]">
    <div class="w-6 h-10 rounded-full flex items-start justify-center overflow-hidden bg-[var(--color-dark-1)]">
      <!-- dot -->
      <div class="w-2 h-2 rounded-full bg-gradient-to-b from-[var(--color-yellow)] to-[var(--color-orange-dark)]"
           style="animation: scroll-dot 3s infinite ease-in-out;"></div>
    </div>
  </div>

  <!-- chevron -->
  <div class="mt-2 flex flex-col items-center space-y-0.5">
    <span class="text-2xl animate-bounce bg-gradient-to-b from-[var(--color-yellow)] to-[var(--color-orange-dark)] bg-clip-text text-transparent"
          style="animation-duration:1s; animation-iteration-count:infinite; animation-delay:0.2s;">⌄</span>
  </div>
</div>
</div>


</section>

  <!-- Typing effect script -->
    <script>
    const words = ["PROTECTION", "SECURITY", "CCTV MONITORING", "SURVEILLANCE"];
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

    // start the typing effect
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(typeWord, newWordDelay);
    });
    </script>

