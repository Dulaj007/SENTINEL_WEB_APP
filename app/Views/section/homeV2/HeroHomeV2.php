<section id="hero" class="relative w-full min-h-screen flex items-center overflow-hidden">

  <!-- Full Background Image -->
  <div class="absolute -inset-1"> 
    <img src="<?= getenv('assets.baseURL') ?>img/newbg.png" 
         alt="Hero Background" 
         class="w-full h-full object-cover object-center">
    <div class="absolute inset-0"></div>
  </div>

  <!-- ======= Hero Main Container (Two Columns) ======= -->
  <div class="relative z-10 w-full max-w-[1400px] mx-auto flex flex-col lg:flex-row items-center lg:items-center justify-between px-6 sm:px-8 lg:px-12 xl:px-16 2xl:px-20 pt-28 sm:pt-32 lg:pt-20 pb-20 lg:pb-16 gap-10 lg:gap-6 xl:gap-10 2xl:gap-14">
    
    <!-- ====== LEFT COLUMN: Hero Content ====== -->
    <div class="w-full lg:w-[53%] xl:w-[55%] flex flex-col justify-center order-1">

      <!-- Security Camera Icon -->
      <div class="mb-1" style="animation: float 3s ease-in-out infinite;">
        <svg class="w-[12vh] h-[12vh] sm:w-[14vh] sm:h-[14vh] lg:w-[9vh] lg:h-[9vh] xl:w-[10vh] xl:h-[10vh] text-[var(--accent-red)] drop-shadow-[0_0_12px_rgba(255,59,63,0.6)]"
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
      <h1 class="text-2xl sm:text-4xl lg:text-4xl xl:text-5xl font-extrabold text-[var(--text-primary)] mb-2 leading-tight">
        &nbsp;Protect&nbsp;Your <span class="text-[var(--accent-red)]"><br class="block lg:hidden">&nbsp;World</span>
        <span class=""><br class="hidden lg:block">&nbsp;24/ 7  <br class="block lg:hidden">&nbsp;<span id="typed-words" class="text-[var(--accent-red)]"></span></span>
        <span class="absolute w-[4px] text-[var(--accent-red)] animate-blink">|</span>
      </h1>

      <!-- Subtitle -->
      <p class="text-[var(--text-secondary)] text-base sm:text-lg xl:text-xl mb-7 ml-2 leading-snug italic max-w-xl">
        Real time surveillance, instant alerts, and rapid intervention. 
        Keep your business, home, and loved ones safe with SENTINERL.
      </p>

      <!-- Buttons -->
      <div class="flex flex-col sm:flex-row gap-4">
        <a href="<?= base_url('contact') ?>" 
          class="flex items-center justify-center gap-2 px-4 py-4 font-bold rounded-2xl 
                  bg-gradient-to-r from-[var(--accent-red)] via-[var(--accent-shine)] to-[var(--accent-red)]
                  text-[var(--bg-background)] shadow-[var(--shadow-hard)]
                  bg-gradient-animate hover:opacity-90 transition transform duration-500 hover:scale-105">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 24">
            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"></path>
          </svg>
          <h1>Start Monitoring</h1>
        </a>

        <a href="<?= base_url('services') ?>" 
           class="flex items-center justify-center gap-2 px-8 py-4 border border-[var(--accent-red)] rounded-2xl
                  text-[var(--text-primary)] font-bold hover:text-[var(--text-primary)]
                  hover:scale-105 transform transition duration-500
                  bg-gradient-animate
                  hover:bg-gradient-to-r from-[var(--accent-red)] via-[var(--bg-background)] to-[var(--accent-red)]">
          <img src="<?= getenv('app.baseURL') ?>assets/icons/yellowarrow.png" class="w-5 h-5" alt="arrow">
          <h1>Watch Demo</h1>
        </a>
      </div>

      <!-- Call Us (moved here from bottom-right) -->
      <div class="mt-8 flex items-center gap-3">
        <img 
          src="<?= getenv('app.baseURL') ?>assets/icons/phone.png" 
          alt="Phone Icon"
          class="w-10 h-10 xl:w-12 xl:h-12 animate-phone-ring"
        />
        <span class="text-white text-base sm:text-lg xl:text-xl font-title tracking-wide">
          CALL US - 076 247 2477 | 076 247 2476
        </span>
      </div>
    </div>

    <!-- ====== RIGHT COLUMN: Contact Form ====== -->
    <div class="w-full lg:w-[47%] xl:w-[42%] order-2 hero-form-animate">
      <div class="relative bg-[rgba(11,12,16,0.75)] backdrop-blur-xl border border-[var(--border-color)] rounded-2xl overflow-hidden
                  shadow-[0_0_30px_rgba(255,59,63,0.08)]
                  hover:shadow-[0_0_40px_rgba(255,59,63,0.15)] transition-shadow duration-500">
        
        <!-- Red accent top line -->
        <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-[var(--accent-red)] to-transparent opacity-60"></div>
        
        <!-- Form Inner Content -->
        <div class="p-6 sm:p-7 xl:p-8">
          
          <!-- Form Header -->
          <div class="mb-5">
            <h2 class="text-xl sm:text-2xl xl:text-3xl font-bold text-[var(--color-white)] mb-2 flex items-center gap-3">
              <span class="w-8 h-8 xl:w-9 xl:h-9 rounded-lg bg-[var(--accent-red)]/20 border border-[var(--accent-red)]/30 flex items-center justify-center flex-shrink-0">
                <svg class="w-4 h-4 xl:w-5 xl:h-5 text-[var(--accent-red)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
              </span>
              Send Us a Message
            </h2>
            <p class="text-[var(--color-white-60)] text-xs sm:text-sm leading-relaxed ml-11 xl:ml-12">
              Fill out the form and our security consultants will get back to you within 24 hours.
            </p>
          </div>

          <!-- Contact Form -->
          <form id="heroContactForm" onsubmit="return validateHeroForm()" class="flex flex-col gap-3">

            <!-- Name Fields -->
            <div class="flex flex-col sm:flex-row gap-3">
              <div class="flex-1 relative group">
                <input type="text" name="first_name" placeholder="First Name *" required 
                  class="w-full p-3 rounded-lg bg-[var(--color-dark-2)] text-white text-sm
                         border border-[var(--border-color)] focus:border-[var(--accent-red)] 
                         outline-none transition-all duration-300
                         focus:shadow-[0_0_10px_rgba(255,59,63,0.15)]
                         placeholder:text-[var(--text-secondary)]" />
              </div>
              <div class="flex-1 relative group">
                <input type="text" name="last_name" placeholder="Last Name *" required 
                  class="w-full p-3 rounded-lg bg-[var(--color-dark-2)] text-white text-sm
                         border border-[var(--border-color)] focus:border-[var(--accent-red)]
                         outline-none transition-all duration-300
                         focus:shadow-[0_0_10px_rgba(255,59,63,0.15)]
                         placeholder:text-[var(--text-secondary)]" />
              </div>
            </div>

            <!-- Email -->
            <input type="email" name="email" placeholder="Email Address *" required 
              class="w-full p-3 rounded-lg bg-[var(--color-dark-2)] text-white text-sm
                     border border-[var(--border-color)] focus:border-[var(--accent-red)]
                     outline-none transition-all duration-300
                     focus:shadow-[0_0_10px_rgba(255,59,63,0.15)]
                     placeholder:text-[var(--text-secondary)]" />

            <!-- Phone -->
            <input type="tel" name="phone" placeholder="Phone Number *" required 
              class="w-full p-3 rounded-lg bg-[var(--color-dark-2)] text-white text-sm
                     border border-[var(--border-color)] focus:border-[var(--accent-red)]
                     outline-none transition-all duration-300
                     focus:shadow-[0_0_10px_rgba(255,59,63,0.15)]
                     placeholder:text-[var(--text-secondary)]" />

            <!-- Message -->
            <textarea name="message" rows="3" placeholder="Tell us about your security needs ..." required 
              class="w-full p-3 rounded-lg bg-[var(--color-dark-2)] text-white text-sm
                     border border-[var(--border-color)] focus:border-[var(--accent-red)]
                     outline-none transition-all duration-300 resize-none
                     focus:shadow-[0_0_10px_rgba(255,59,63,0.15)]
                     placeholder:text-[var(--text-secondary)]"></textarea>

            <!-- Agreement Checkbox -->
            <label class="flex items-start gap-2 text-[var(--color-white-60)] text-xs cursor-pointer select-none">
              <input type="checkbox" name="agreement" required 
                class="accent-[var(--accent-red)] mt-0.5 flex-shrink-0 w-4 h-4 cursor-pointer" />
              <span>I agree to receive communications from 24/7 SENTINEL and can unsubscribe at any time.</span>
            </label>

            <!-- Submit Button -->
            <button type="submit" 
              class="relative w-full flex items-center justify-center gap-2 px-6 py-3 mt-1
                     border border-[var(--accent-red)] rounded-2xl overflow-hidden
                     text-[var(--text-primary)] font-bold text-sm sm:text-base
                     transform transition-all duration-500 hover:scale-[1.02]
                     hover:shadow-[0_0_25px_rgba(255,59,63,0.3)]
                     bg-gradient-to-r hover:from-[var(--accent-red)] hover:via-[var(--bg-background)] hover:to-[var(--accent-red)]
                     group">
              <!-- Shine sweep on hover -->
              <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white/5 to-transparent 
                           translate-x-[-100%] group-hover:translate-x-[200%] transition-transform duration-700"></span>
              <img src="<?= getenv('app.baseURL') ?>assets/icons/se-logo.svg" alt="Send" class="w-6 h-6 relative z-10" />
              <span class="relative z-10">Send Message</span>
            </button>
          </form>

        </div>
      </div>
    </div>

  </div>
</section>

<!-- ===== Typing Effect Script ===== -->
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

// ===== Form slide-in animation on load =====
document.addEventListener("DOMContentLoaded", function() {
    const formEl = document.querySelector('.hero-form-animate');
    if (formEl) {
        formEl.style.opacity = '0';
        formEl.style.transform = 'translateX(40px)';
        formEl.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
        
        setTimeout(() => {
            formEl.style.opacity = '1';
            formEl.style.transform = 'translateX(0)';
        }, 300);
    }
});

// ===== Hero Form Validation =====
function validateHeroForm() {
    const form = document.getElementById('heroContactForm');
    const agreement = form.querySelector('input[name="agreement"]');
    
    if (!agreement.checked) {
        alert('Please agree to the terms before submitting.');
        return false;
    }
    
    // Add your form submission logic here (AJAX, etc.)
    alert('Thank you! We will contact you shortly.');
    return false; // Change to true for actual form submission
}
</script>

<!-- ===== Additional CSS for hero form ===== -->
<style>
  /* Form entrance animation */
  @keyframes heroFormSlideIn {
    0% {
      opacity: 0;
      transform: translateX(50px) scale(0.97);
    }
    100% {
      opacity: 1;
      transform: translateX(0) scale(1);
    }
  }

  /* Focus ring glow for inputs */
  #heroContactForm input:focus,
  #heroContactForm textarea:focus {
    border-color: var(--accent-red);
    box-shadow: 0 0 0 1px rgba(255, 59, 63, 0.1), 0 0 12px rgba(255, 59, 63, 0.1);
  }

  /* Ensure hero still looks great at all sizes */
  @media (max-width: 1023px) {
    #hero {
      min-height: auto;
    }
  }

  @media (min-width: 1024px) {
    #hero {
      min-height: 100vh;
    }
  }

  /* On very small phones, reduce form padding */
  @media (max-width: 380px) {
    .hero-form-animate > div > div {
      padding: 1rem;
    }
  }
</style>