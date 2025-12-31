<!-- ========================= SERVICES SECTION ========================= -->
<section id="services" class="relative pt-20 w-full min-h-[100vh] py-20 overflow-hidden">
  <!-- ===== Background Image ===== -->
  <div class="absolute inset-0 -z-10">
    <img 
      src="<?= getenv('app.baseURL') ?>assets/img/servicebg.png" 
      alt="Services Background" 
      class="w-full h-full object-cover object-center"
    >
  </div>

  <!-- ===== Background Gradient Overlay ===== -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-[var(--accent-glow)]/20 to-transparent z-0"></div>

  <!-- ===== Section Title ===== -->
  <div class="flex flex-col items-center justify-center mb-5">
    <!-- Live Icon (Animated-looking circular signal icon) -->
    <div>
      <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
           class="w-20 h-20 fill-[var(--accent-red)] drop-shadow-[0_0_18px_var(--accent-red)]">
        <g id="SVGRepo_iconCarrier">
          <g id="ic_fluent_live_24_filled" fill="currentColor" fill-rule="nonzero">
            <path d="M6.34277267,4.93867691 C6.73329697,5.3292012 6.73329697,5.96236618 6.34277267,6.35289047 C3.21757171,9.47809143 3.21757171,14.5450433 6.34277267,17.6702443 C6.73329697,18.0607686 6.73329697,18.6939336 6.34277267,19.0844579 C5.95224838,19.4749821 5.3190834,19.4749821 4.92855911,19.0844579 C1.02230957,15.1782083 1.02230957,8.84492646 4.92855911,4.93867691 C5.3190834,4.54815262 5.95224838,4.54815262 6.34277267,4.93867691 Z M19.0743401,4.93867691 C22.9805896,8.84492646 22.9805896,15.1782083 19.0743401,19.0844579 C18.6838158,19.4749821 18.0506508,19.4749821 17.6601265,19.0844579 C17.2696022,18.6939336 17.2696022,18.0607686 17.6601265,17.6702443 C20.7853275,14.5450433 20.7853275,9.47809143 17.6601265,6.35289047 C17.2696022,5.96236618 17.2696022,5.3292012 17.6601265,4.93867691 C18.0506508,4.54815262 18.6838158,4.54815262 19.0743401,4.93867691 Z M9.3094225,7.81205295 C9.69994679,8.20257725 9.69994679,8.83574222 9.3094225,9.22626652 C7.77845993,10.7572291 7.77845993,13.2394099 9.3094225,14.7703724 C9.69994679,15.1608967 9.69994679,15.7940617 9.3094225,16.184586 C8.91889821,16.5751103 8.28573323,16.5751103 7.89520894,16.184586 C5.58319778,13.8725748 5.58319778,10.1240641 7.89520894,7.81205295 C8.28573323,7.42152866 8.91889821,7.42152866 9.3094225,7.81205295 Z M16.267742,7.81205295 C18.5797531,10.1240641 18.5797531,13.8725748 16.267742,16.184586 C15.8772177,16.5751103 15.2440527,16.5751103 14.8535284,16.184586 C14.4630041,15.7940617 14.4630041,15.1608967 14.8535284,14.7703724 C16.384491,13.2394099 16.384491,10.7572291 14.8535284,9.22626652 C14.4630041,8.83574222 14.4630041,8.20257725 14.8535284,7.81205295 C15.2440527,7.42152866 15.8772177,7.42152866 16.267742,7.81205295 Z M12.0814755,10.5814755 C12.9099026,10.5814755 13.5814755,11.2530483 13.5814755,12.0814755 C13.5814755,12.9099026 12.9099026,13.5814755 12.0814755,13.5814755 C11.2530483,13.5814755 10.5814755,12.9099026 10.5814755,12.0814755 C10.5814755,11.2530483 11.2530483,10.5814755 12.0814755,10.5814755 Z"></path>
          </g>
        </g>
      </svg>
    </div>

    <!-- Main Title -->
    <h1 class="text-4xl text-center sm:text-5xl font-extrabold leading-tight ">
      <span class="text-[var(--color-white)] drop-shadow-[0_0_4px_var(--accent-red)]">
        OUR SERVICES
      </span>
    </h1>
  </div>

  <!-- ===== Custom Package Full-Width Card ===== -->
<div class="p-4 mb-15">
  <div 
    class="electric-border relative group w-full max-w-7xl mx-auto mt-5 
           rounded-2xl overflow-hidden text-[var(--color-white)] shadow-lg 
           transition-all duration-500 p-3"
    style="--electric-border-color:var(--bg-primary); --eb-border-width:2px;"
  >
          
    <!-- ===== Electric SVG Filter ===== -->
    <svg class="eb-svg" aria-hidden focusable="false">
      <defs>
        <filter id="electric-filter-custom" color-interpolation-filters="sRGB" x="-20%" y="-20%" width="140%" height="140%">
          <feTurbulence type="turbulence" baseFrequency="0.02" numOctaves="10" result="noise" seed="3" />
          <feDisplacementMap in="SourceGraphic" in2="noise" scale="25" xChannelSelector="R" yChannelSelector="B" />
        </filter>
      </defs>
    </svg>

    <!-- ===== Electric Glow Layers ===== -->
    <div class="eb-layers">
      <div class="eb-glow-1"></div>
      <div class="eb-glow-2"></div>
      <div class="eb-background-glow"></div>
    </div>

    <!-- ===== Card Content ===== -->
    <div class="eb-content md:p-8 relative z-10 gap-8 flex flex-col md:flex-row md:items-center md:justify-between 
                 bg-[color-mix(in_srgb,var(--color-black)_10%,transparent)] backdrop-blur-sm rounded-2xl">

      <!-- ==== Left Side ==== -->
      <div class="flex flex-col gap-4 md:w-1/2">
        <div class="w-full bg-[var(--bg-secondary)] text-base md:tex-lg rounded-2xl shadow-lg p-5 py-10 flex flex-col items-center text-center transition-transform duration-300 hover:shadow-xl">

        
          <div class="bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)]
                      w-16 h-16 md:w-24 md:h-24 flex items-center justify-center rounded-2xl shadow-md mb-4">
            <svg fill="#000000" viewBox="0 -5.47 56.254 56.254" xmlns="http://www.w3.org/2000/svg" class="w-12 h-12">
              <path d="M494.211,354.161l1.174-1.366H482.552L469.8,367.5h12.94Zm-8.4,13.336H510.05l-6.589-7.664-5.528-6.429-8.354,9.713Zm-15.856,2.329,24.1,25.356L482.53,369.826Zm40.824,0h-2.1l-8.829,0H485.083l12.774,28.1.082.178,12.17-26.8Zm-8.94,25.322,24.057-25.32H513.337Zm24.215-27.65L513.3,352.8H500.478l12.642,14.7Z" transform="translate(-469.802 -352.795)"></path>
            </svg>
          </div>

          <h2 class="text-xl md:text-3xl font-bold text-[var(--text-primary)] mb-3">Create Your Custom Package</h2>
          <p class="text-[var(--text-secondary)] max-w-2xl">
            Choose the number of cameras for your monitoring system and contact us via  
            <span class="text-green-500">WhatsApp</span> or <span class="text-yellow-500">Email</span> directly. We will get in touch with you in seconds.
          </p>
        </div>
      </div>

      <!-- ==== Right Side: Text & Controls ==== -->
      <div class="flex flex-col gap-4 md:w-1/2 p-3 md:p-0">

        <!-- ===== Input Fields ===== -->
        <div class=" space-y-6">
          <div class="flex flex-col gap-3 ">
            <input id="nameInput" type="text" placeholder="Your Name" class="p-3 rounded-lg bg-[var(--bg-secondary)] text-[var(--text-primary)]"> 
            <input id="emailInput" type="email" placeholder="Your Email" class="p-3 rounded-lg bg-[var(--bg-secondary)] text-[var(--text-primary)]">
            <input id="locationInput" type="text" placeholder="Location / Company" class="p-3 rounded-lg bg-[var(--bg-secondary)] text-[var(--text-primary)]">
          </div>

          <!-- Camera Range Slider -->
          <label for="cameraRange" class="flex items-center gap-2 font-title text-base font-medium text-[var(--text-primary)]">
            <svg fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                 class="w-9 h-9 drop-shadow-[0_0_6px_rgba(255,255,255,0.6)]">
              <path d="M18.618 7.462 6.403 2.085a1.007 1.007 0 0 0-.77-.016 1.002 1.002 0 0 0-.552.537l-3 7a1 1 0 0 0 .525 1.313L9.563 13.9 8.323 17H4v-3H2v8h2v-3h4.323c.823 0 1.552-.494 1.856-1.258l1.222-3.054 3.419 1.465a1 1 0 0 0 1.311-.518l3-6.857a1 1 0 0 0-.513-1.316zM19.93 16.372l-1.858-.742 1.998-5 1.858.741z"></path>
            </svg>
            Cameras: 
            <span id="cameraValue" class="text-[var(--color-yellow)] font-semibold ml-1">3</span>
          </label>
          <input id="cameraRange" type="range" min="1" max="100" value="0" 
                 class="w-full accent-[var(--color-yellow)] cursor-pointer">
        </div>

        <!-- ===== Feature Checkboxes ===== -->
        <div class="flex flex-col gap-3 font-title text-base md:text-lg text-[var(--text-primary)]">
          <label class="flex items-center gap-3 cursor-pointer">
            <input type="checkbox" id="liveMonitoring" class="accent-[var(--accent-red)] scale-125 cursor-pointer" checked>
            <span>Live Monitoring</span> - <span class="bg-gradient-to-r from-white/70 to-red-500
                      text-[var(--color-black)] text-sm font-bold px-2 py-1 rounded-full shadow-lg tracking-[px]">FREE</span>
          </label>
          <label class="flex items-center gap-3 cursor-pointer">
            <input type="checkbox" id="twoWayAudio" class="accent-[var(--accent-red)] scale-125  cursor-pointer" checked>
            <span>Two-Way Audio</span> - <span class="bg-gradient-to-r from-white/70 to-red-500
                      text-[var(--color-black)] text-sm font-bold px-2 py-1 rounded-full shadow-lg tracking-[px]">FREE</span>
          </label>
          <label class="flex items-center gap-3 cursor-pointer">
            <input type="checkbox" id="emergencyResponse" class="accent-[var(--accent-red)] scale-125 cursor-pointer" checked>
            <span>Emergency Response</span> - <span class="bg-gradient-to-r from-white/70 to-red-500
                      text-[var(--color-black)] text-sm font-bold px-2 py-1 rounded-full shadow-lg tracking-[px]">FREE</span>
          </label>
        </div>

        <!-- ===== Apply Buttons with Icons ===== -->
        <div class="flex justify-end mt-4 gap-4 flex-col text-base md:flex-row">
          <button 
            class="px-3 py-2 border border-green-300 rounded-lg textlg font-semibold transition-all duration-500 ease-in-out 
                   bg-gradient-to-r from-green-500 to-green-800 text-[var(--color-black)] hover:scale-105 cursor-pointer flex items-center gap-2">
            <!-- WhatsApp Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" class="w-6 h-6">
              <path d="M12.04 2.003c-5.52 0-10 4.48-10 10 0 1.767.463 3.482 1.343 4.998L2 22l5.262-1.373A9.963 9.963 0 0 0 12.04 22c5.52 0 10-4.48 10-10s-4.48-9.997-10-9.997zm5.63 14.37c-.246.688-1.44 1.332-1.994 1.412-.531.077-1.19.109-3.43-1.058-2.063-1.064-3.375-3.012-3.57-3.264-.195-.252-1.622-2.05-1.622-3.914 0-1.863 1.13-2.784 1.529-3.148.399-.363.788-.404 1.056-.404.269 0 .523 0 .751.007.242.007.566-.092.886.687.31.756 1.048 2.611 1.142 2.805.096.194.154.42.024.677-.13.252-.19.42-.386.635-.195.214-.406.476-.577.639-.19.182-.39.383-.144.757.246.375 1.074 1.767 2.31 2.86 1.597 1.375 2.312 1.566 2.655 1.747.344.182.547.154.749-.092.202-.246.867-1.002 1.094-1.345.226-.344.455-.289.767-.174.312.115 1.956.92 2.294 1.09.338.17.565.254.646.392.082.139.082.802-.164 1.489z"/>
            </svg>
            Send to WhatsApp
          </button>
          <button 
            class="px-3 py-2 border border-[var(--color-yellow)] rounded-lg textlg font-semibold transition-all duration-500 ease-in-out 
                   bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] text-[var(--color-black)] hover:scale-105 cursor-pointer flex items-center gap-2">
            <!-- Email Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" class="w-6 h-6">
              <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
            Send to Email
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- ===== Services Cards Container ===== -->
<div class="flex flex-wrap justify-center gap-10 z-10 px-6 ">
  <?php 
    $services = json_decode(file_get_contents(APPPATH . 'Data/services.json'), true); 
    foreach ($services as $index => $service): 
      $icon = $service['icon'];
      $title = $service['title'];
      $description = $service['description'];
      $features = $service['features'];
      $img = $service['img'];
  ?>
  <!-- ===== Single Service Card ===== -->
  <div 
    class="electric-border relative group max-w-4xl w-full sm:w-[370px] rounded-2xl overflow-hidden text-[var(--color-white)] shadow-lg transition-all duration-500"
    style="--electric-border-color:<?= $index % 2 === 0 ? 'var(--accent-red)' : 'var(--color-blue)' ?>; --eb-border-width:2px;"
  >

    <!-- ===== Electric Lightning SVG Filter ===== -->
    <svg class="eb-svg" aria-hidden focusable="false">
      <defs>
        <filter id="electric-filter" color-interpolation-filters="sRGB" x="-20%" y="-20%" width="140%" height="140%">
          <feTurbulence type="turbulence" baseFrequency="0.02" numOctaves="10" result="noise1" seed="1" />
          <feOffset in="noise1" dx="0" dy="0" result="offsetNoise1">
            <animate attributeName="dy" values="700;0" dur="6s" repeatCount="indefinite" calcMode="linear" />
          </feOffset>
          <feTurbulence type="turbulence" baseFrequency="0.02" numOctaves="10" result="noise2" seed="1" />
          <feOffset in="noise2" dx="0" dy="0" result="offsetNoise2">
            <animate attributeName="dy" values="0;-700" dur="6s" repeatCount="indefinite" calcMode="linear" />
          </feOffset>
          <feTurbulence type="turbulence" baseFrequency="0.02" numOctaves="10" result="noise1" seed="2" />
          <feOffset in="noise1" dx="0" dy="0" result="offsetNoise3">
            <animate attributeName="dx" values="490;0" dur="6s" repeatCount="indefinite" calcMode="linear" />
          </feOffset>
          <feTurbulence type="turbulence" baseFrequency="0.02" numOctaves="10" result="noise2" seed="2" />
          <feOffset in="noise2" dx="0" dy="0" result="offsetNoise4">
            <animate attributeName="dx" values="0;-490" dur="6s" repeatCount="indefinite" calcMode="linear" />
          </feOffset>
          <feComposite in="offsetNoise1" in2="offsetNoise2" result="part1" />
          <feComposite in="offsetNoise3" in2="offsetNoise4" result="part2" />
          <feBlend in="part1" in2="part2" mode="color-dodge" result="combinedNoise" />
          <feDisplacementMap in="SourceGraphic" in2="combinedNoise" scale="30" xChannelSelector="R" yChannelSelector="B" />
        </filter>
      </defs>
    </svg>

    <!-- ===== Electric Glow Layers (CSS-driven) ===== -->
    <div class="eb-layers">
      <div class="eb-stroke"></div>
      <div class="eb-glow-1"></div>
      <div class="eb-glow-2"></div>
      <div class="eb-background-glow"></div>
    </div>

    <!-- ===== Card Background with Image and Overlay ===== -->
    <div class="absolute inset-0 opacity-30">
      <img src="<?= base_url($img) ?>" alt="<?= esc($title) ?> Background" class="w-full h-full object-cover rounded-2xl">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-black)] via-transparent to-transparent"></div>

    <!-- ===== Main Card Content ===== -->
    <div class="eb-content relative z-10 py-10 px-5 md:px-10 flex flex-col gap-5 bg-[color-mix(in_srgb,var(--color-black)_10%,transparent)] backdrop-blur-sm rounded-2xl">

      <!-- ==== Icon Container ==== -->
      <div class="bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] w-14 h-14 flex items-center justify-center rounded-xl shadow-md ">
        <img src="<?= base_url($icon) ?>" alt="<?= esc($title) ?> Icon" class="w-7 h-7 animate-phone-ring">
      </div>

      <!-- ==== Title and Description ==== -->
      <div>
        <h2 class="text-xl font-semibold"><?= esc($title) ?></h2>
        <p class="text-[var(--text-secondary)] text-base mt-1"><?= esc($description) ?></p>
      </div>

      <!-- ==== Features List ==== -->
      <ul class="space-y-2 text-base">
        <?php foreach($features as $feature): ?>
          <li class="flex items-center gap-2 font-medium">
            <img src="<?= getenv('app.baseURL') ?>assets/icons/correct.png" alt="Correct Icon" class="w-4 h-4">
            <?= esc($feature) ?>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- ==== Discover Button ==== -->
      <div class="mt-auto flex justify-end">
        <a href="<?= base_url('services') ?>"
           class="px-5 py-2 border border-[var(--color-yellow)] text-[var(--color-yellow)] rounded-lg
                  text-sm font-medium transition-all duration-500 ease-in-out 
                  group-hover:bg-gradient-to-r group-hover:from-[var(--color-yellow)] group-hover:to-[var(--color-orange-dark)]
                  group-hover:text-[var(--color-black)]">
          Discover More
        </a>
      </div>

      <!-- ==== Promotional Badge (Shown only on first card) ==== -->
      <div class="absolute top-5 right-4 bg-gradient-to-r from-white/70 to-white
                  text-[var(--color-black)] text-sm font-bold px-3 py-1 rounded-full shadow-lg">
        FREE
      </div>

    </div>
  </div>
  <?php endforeach; ?>
</div>

<!-- ===== Bottom Contact Title ===== -->
<h1 class="relative z-10 text-base sm:text-3xl font-normal leading-tight mb-6 mt-15 text-center">
  <span class="flex items-center justify-center gap-5 md:gap-3 text-white px-3 flex-col md:flex-row ">
    <img src="<?= getenv('app.baseURL') ?>assets/icons/phone.png" 
         alt="Phone Icon" 
         class="w-16 md:w-12 w-16 md:h-12 inline-block animate-phone-ring">
    CALL US - 077 123 4567
  </span>
</h1>
</section>

<!-- ========================= ELECTRIC BORDER SCRIPT ========================= -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  // Select all cards that have the electric-border class
  const borders = document.querySelectorAll('.electric-border');

  // Update slider values dynamically
  document.addEventListener('input', (e) => {
    if (e.target.id === 'cameraRange') {
      document.getElementById('cameraValue').textContent = e.target.value;
    }
    if (e.target.id === 'monitorRange') {
      document.getElementById('monitorValue').textContent = e.target.value;
    }
  });

  borders.forEach(border => {
    const svg = border.querySelector('.eb-svg');
    const stroke = border.querySelector('.eb-stroke');
    if (!svg || !stroke) return;

    // Apply the custom SVG lightning filter
    stroke.style.filter = 'url(#electric-filter)';

    // Dynamically adjust animation range based on card size
    const updateAnim = () => {
      const width = border.clientWidth || 300;
      const height = border.clientHeight || 150;

      const dyAnims = svg.querySelectorAll('feOffset > animate[attributeName="dy"]');
      const dxAnims = svg.querySelectorAll('feOffset > animate[attributeName="dx"]');

      if (dyAnims.length >= 2) {
        dyAnims[0].setAttribute('values', `${height};0`);
        dyAnims[1].setAttribute('values', `0;-${height}`);
      }

      if (dxAnims.length >= 2) {
        dxAnims[0].setAttribute('values', `${width};0`);
        dxAnims[1].setAttribute('values', `0;-${width}`);
      }
    };

    // Use ResizeObserver to keep electric animation responsive
    new ResizeObserver(updateAnim).observe(border);
    updateAnim();
  });
});
</script>
