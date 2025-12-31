<section id="contact-us" class="bg-[var(--color-dark-2)] py-16 px-4 md:px-8">
   <div class="absolute inset-0 bg-gradient-to-b from-black/100 via-black/40 to-transparent z-0"></div>
  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-black/40 to-transparent z-0"></div>

  <div class="relative max-w-[1200px] mx-auto flex flex-col lg:flex-row gap-8 justify-between z-5">
    
    <!-- Form Section -->
    <div class="flex-1 w-full lg:w-auto bg-[var(--color-dark-1)] p-8 shadow-lg rounded-xl">
      <h2 class="text-3xl md:text-4xl font-bold text-[var(--color-white)] mb-4">Send Us a Message</h2>
      <p class="text-[var(--color-white-60)] text-sm md:text-base mb-6">
        Fill out the form below and our security consultants will get back to you within 24 hours with a customized solution for your needs.
      </p>
      
      <form id="contactForm" onsubmit="return validateForm()" class="flex flex-col gap-4">
        <div class="flex flex-col sm:flex-row gap-4">
          <input type="text" name="first_name" placeholder="First Name *" required class="flex-1 p-3 rounded-lg bg-[var(--color-dark-2)] text-white border border-[var(--color-dark-1)] focus:border-[var(--color-yellow)] outline-none" />
          <input type="text" name="last_name" placeholder="Last Name *" required class="flex-1 p-3 rounded-lg bg-[var(--color-dark-2)] text-white border border-[var(--color-dark-1)] focus:border-[var(--color-yellow)] outline-none" />
        </div>

        <input type="email" name="email" placeholder="Email Address *" required class="w-full p-3 rounded-lg bg-[var(--color-dark-2)] text-white border border-[var(--color-dark-1)] focus:border-[var(--color-yellow)] outline-none" />
        <input type="tel" name="phone" placeholder="Phone Number *" required pattern="^\+\d{2}\s\d{2,3}\s\d{4,5}$" class="w-full p-3 rounded-lg bg-[var(--color-dark-2)] text-white border border-[var(--color-dark-1)] focus:border-[var(--color-yellow)] outline-none" />
        
        <select name="service" class="w-full p-3 rounded-lg bg-[var(--color-dark-2)] text-white border border-[var(--color-dark-1)] focus:border-[var(--color-yellow)] outline-none appearance-none">
          <option value="">Select Service Type</option>
          <option value="Live Monitoring">Live Monitoring</option>
          <option value="Alarm Response">Alarm Response</option>
          <option value="Security Assessment">Security Assessment</option>
        </select>

        <textarea name="message" rows="4" placeholder="Tell us about your security needs ..." required class="w-full p-3 rounded-lg bg-[var(--color-dark-2)] text-white border border-[var(--color-dark-1)] focus:border-[var(--color-yellow)] outline-none"></textarea>

        <label class="flex items-center gap-2 text-[var(--color-white-60)] text-sm">
          <input type="checkbox" name="agreement" required class="accent-[var(--color-yellow)]" />
          I agree to receive communications from 24/7 SENTINEL and can unsubscribe at any time.
        </label>

        <button type="submit" 
            class="flex items-center justify-center gap-2 bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] text-white font-bold px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105 hover:bg-white hover:text-[var(--color-yellow)]">
          <img src="<?= getenv('app.baseURL') ?> assets/icons/se-logo.svg') ?>" alt="Send" class="w-7 h-7" />
          Send Message
        </button>
      </form>
    </div>

    <!-- Contact Info Section -->
    <div class="flex-1 w-full lg:w-auto flex flex-col gap-4">
      <iframe 
        src="https://www.google.com/maps?q=Horana+Road,+Wekada,+Panadura,+Sri+Lanka&output=embed" 
        class="w-full h-52 rounded-xl border-0 mb-4 shadow-lg"
        allowfullscreen>
      </iframe>

      <h3 class="text-2xl font-bold text-[var(--color-white)] ">Get In Touch</h3>
      <p class="text-[var(--color-white-60)] text-sm mb-2">Contact us for a free consultation</p>

      <div class="flex items-center gap-3 mb-2 ml-4">
        <img src="<?= getenv('app.baseURL') ?>assets/icons/fb-logo.png" alt="Facebook" class="w-6 h-6" />
        <p class="text-[var(--color-white)] font-medium">Follow us on Facebook</p>
      </div>

      <div class="flex items-center gap-3 mb-2 ml-4">
        <img src="<?= getenv('app.baseURL') ?>assets/icons/loc-logo.svg" alt="Location" class="w-6 h-6" />
        <p class="text-[var(--color-white-80)]">Horana Road, Wekada, Panadura, Sri Lanka</p>
      </div>

      <div class="flex items-center gap-3 mb-2 ml-4">
        <img src="<?= getenv('app.baseURL') ?>assets/icons/em-logo.png" alt="Email" class="w-6 h-6" />
        <p class="text-[var(--color-white-80)]">info@24-7sentinel.com</p>
      </div>

      <div class="flex items-center gap-3 mb-2 ml-4">
        <img src="<?= getenv('app.baseURL') ?>assets/icons/call-logo.png" alt="Phone" class="w-6 h-6" />
        <p class="text-[var(--color-white-80)]">+1 (555) 123-4567</p>
      </div>
    </div>

  </div>
</section>
