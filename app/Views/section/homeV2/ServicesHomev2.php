<!-- ========================= SERVICES SECTION ========================= -->
<section id="services" class="relative pt-20 w-full min-h-[100vh] py-20 overflow-hidden">
  <!-- ===== Background Image ===== -->
  <div class="absolute inset-0 -z-10">
    <img 
      src="<?= base_url('SENTINEL/public_html/assets/img/servicebg.png') ?>" 
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
    <h1 class="text-4xl text-center sm:text-5xl font-extrabold leading-tight mb-10">
      <span class="text-[var(--color-white)] drop-shadow-[0_0_4px_var(--accent-red)]">
        OUR SERVICES
      </span>
    </h1>
  </div>

  <!-- ===== Services Cards Container ===== -->
  <div class="flex flex-wrap justify-center gap-10 z-10 px-6">

    <?php 
      // Load services data from JSON
      $services = json_decode(file_get_contents(APPPATH . 'Data/services.json'), true); 
      
      // Loop through each service
      foreach ($services as $index => $service): 
        $icon = $service['icon'];
        $title = $service['title'];
        $description = $service['description'];
        $features = $service['features'];
        $img = $service['img'];
    ?>

    <!-- ===== Single Service Card ===== -->
    <div 
      class="electric-border relative group max-w-md w-full sm:w-[370px] 
             rounded-2xl overflow-hidden text-[var(--color-white)] shadow-lg 
             transition-all duration-500 hover:scale-[1.04]"
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
      <div class="eb-content relative z-10 p-8 flex flex-col gap-5 bg-[color-mix(in_srgb,var(--color-black)_10%,transparent)] backdrop-blur-sm rounded-2xl">

        <!-- ==== Icon Container ==== -->
        <div class="bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] 
                    w-14 h-14 flex items-center justify-center rounded-xl shadow-md">
          <img src="<?= base_url($icon) ?>" alt="<?= esc($title) ?> Icon" class="w-7 h-7">
        </div>

        <!-- ==== Title and Description ==== -->
        <div>
          <h2 class="text-xl font-semibold"><?= esc($title) ?></h2>
          <p class="text-[var(--text-secondary)] text-sm mt-1"><?= esc($description) ?></p>
        </div>

        <!-- ==== Features List ==== -->
        <ul class="space-y-2 text-sm">
          <?php foreach($features as $feature): ?>
            <li class="flex items-center gap-2 font-medium">
              <img src="<?= base_url('SENTINEL/public_html/assets/icons/correct.png') ?>" alt="Correct Icon" class="w-4 h-4">
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
        <?php if($index === 0): ?>
          <div class="absolute top-4 right-4 bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)] 
                      text-[var(--color-black)] text-xs font-bold px-3 py-1 rounded-full shadow-lg">
            20% OFF
          </div>
        <?php endif; ?>

      </div>
    </div>

    <?php endforeach; ?>
    
  </div>

<!-- ===== Custom Package Full-Width Card ===== -->
<div class="px-4 sm:px-6">
  <div 
    class="electric-border relative group w-full max-w-5xl mx-auto mt-20 
           rounded-2xl overflow-hidden text-[var(--color-white)] shadow-lg
           transition-all duration-500 hover:scale-[1.02] px-4 sm:px-6"
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
    <div class="eb-content relative z-10 p-10 flex flex-col md:flex-row md:items-center md:justify-between 
                gap-8 bg-[color-mix(in_srgb,var(--color-black)_10%,transparent)] backdrop-blur-sm rounded-2xl">

      <!-- ==== Left Side ==== -->
      <div class="flex flex-col gap-4 md:w-1/2">
        <div class="w-full bg-[var(--bg-secondary)] rounded-2xl shadow-lg p-8 flex flex-col items-center text-center transition-transform duration-300 hover:scale-[1.02] hover:shadow-xl">
          <div class="bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)]
                      w-24 h-24 flex items-center justify-center rounded-2xl shadow-md mb-6">
            <svg fill="#000000" viewBox="0 -5.47 56.254 56.254" xmlns="http://www.w3.org/2000/svg" class="w-12 h-12">
              <path d="M494.211,354.161l1.174-1.366H482.552L469.8,367.5h12.94Zm-8.4,13.336H510.05l-6.589-7.664-5.528-6.429-8.354,9.713Zm-15.856,2.329,24.1,25.356L482.53,369.826Zm40.824,0h-2.1l-8.829,0H485.083l12.774,28.1.082.178,12.17-26.8Zm-8.94,25.322,24.057-25.32H513.337Zm24.215-27.65L513.3,352.8H500.478l12.642,14.7Z" transform="translate(-469.802 -352.795)"></path>
            </svg>
          </div>

          <h2 class="text-3xl font-bold text-[var(--text-primary)] mb-3">Custom Package</h2>
          <p class="text-[var(--text-secondary)] max-w-2xl">
            Design your own CCTV monitoring plan by selecting only the services you need —
            including <span class="font-semibold text-[var(--color-yellow)]">Live Monitoring</span>,
            <span class="font-semibold text-[var(--color-yellow)]">Two-Way Audio</span>, and
            <span class="font-semibold text-[var(--color-yellow)]">Emergency Response</span>.
            You can also specify your preferred number of cameras and screens to match your setup.
          </p>
        </div>
      </div>

      <!-- ==== Right Side: Text & Controls ==== -->
      <div class="flex flex-col gap-4 md:w-1/2 p-5 md:p-0">

        <!-- CAMERA COUNT SLIDER -->
        <div class="mt-10">
          <label for="cameraRange" class="flex items-center gap-2 font-title text-base font-medium text-[var(--text-primary)]">
            <svg fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                 class="w-9 h-9 drop-shadow-[0_0_6px_rgba(255,255,255,0.6)]">
              <path d="M18.618 7.462 6.403 2.085a1.007 1.007 0 0 0-.77-.016 1.002 1.002 0 0 0-.552.537l-3 7a1 1 0 0 0 .525 1.313L9.563 13.9 8.323 17H4v-3H2v8h2v-3h4.323c.823 0 1.552-.494 1.856-1.258l1.222-3.054 3.419 1.465a1 1 0 0 0 1.311-.518l3-6.857a1 1 0 0 0-.513-1.316zM19.93 16.372l-1.858-.742 1.998-5 1.858.741z"></path>
            </svg>
            Cameras: 
            <span id="cameraValue" class="text-[var(--color-yellow)] font-semibold ml-1">3</span>
          </label>
          <input id="cameraRange" type="range" min="3" max="100" value="3" 
                 class="w-full accent-[var(--color-yellow)] mt-2 cursor-pointer">
        </div>

        <!-- MONITOR COUNT SLIDER -->
        <div class="mt-6">
          <label for="monitorRange" class="flex items-center gap-2 font-title text-base font-medium text-[var(--text-primary)]">
            <svg viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg"
                 class="w-8 h-8 drop-shadow-[0_0_6px_rgba(255,255,255,0.6)]">
              <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M6.93417 2H17.0658C17.9523 1.99995 18.7161 1.99991 19.3278 2.08215C19.9833 2.17028 20.6117 2.36902 21.1213 2.87868C21.631 3.38835 21.8297 4.0167 21.9179 4.67221C22.0001 5.28388 22.0001 6.0477 22 6.9342V13.0658C22.0001 13.9523 22.0001 14.7161 21.9179 15.3278C21.8297 15.9833 21.631 16.6117 21.1213 17.1213C20.6117 17.631 19.9833 17.8297 19.3278 17.9179C18.7161 18.0001 17.9523 18.0001 17.0658 18L13 18V20H17C17.5523 20 18 20.4477 18 21C18 21.5523 17.5523 22 17 22H7C6.44772 22 6 21.5523 6 21C6 20.4477 6.44772 20 7 20H11V18L6.93417 18C6.04769 18.0001 5.28387 18.0001 4.67221 17.9179C4.0167 17.8297 3.38835 17.631 2.87868 17.1213C2.36902 16.6117 2.17028 15.9833 2.08215 15.3278C1.99991 14.7161 1.99995 13.9523 2 13.0658V6.93417C1.99995 6.04769 1.99991 5.28387 2.08215 4.67221C2.17028 4.0167 2.36902 3.38835 2.87868 2.87868C3.38835 2.36902 4.0167 2.17028 4.67221 2.08215C5.28387 1.99991 6.04769 1.99995 6.93417 2Z"/>
            </svg>
            Monitors: 
            <span id="monitorValue" class="text-[var(--color-yellow)] font-semibold ml-1">1</span>
          </label>
          <input id="monitorRange" type="range" min="1" max="20" value="1" 
                 class="w-full accent-[var(--color-yellow)] mt-2 cursor-pointer">
        </div>

        <!-- CHECKBOXES -->
        <div class="flex flex-col gap-3 font-title text-lg text-[var(--text-primary)]">
          <label class="flex items-center gap-3 cursor-pointer">
            <input type="checkbox" id="liveMonitoring" class="accent-[var(--accent-red)] cursor-pointer">
            <span>Live Monitoring</span>
          </label>
          <label class="flex items-center gap-3 cursor-pointer">
            <input type="checkbox" id="twoWayAudio" class="accent-[var(--accent-red)] cursor-pointer">
            <span>Two-Way Audio</span>
          </label>
          <label class="flex items-center gap-3 cursor-pointer">
            <input type="checkbox" id="emergencyResponse" class="accent-[var(--accent-red)] cursor-pointer">
            <span>Emergency Response</span>
          </label>
        </div>

        <!-- APPLY BUTTON -->
        <div class="flex justify-end mt-4 ">
          <button 
            class="px-5 py-2 border border-[var(--color-yellow)] rounded-lg
                      textlg font-semibold transition-all duration-500 ease-in-out 
                      bg-gradient-to-r from-[var(--color-yellow)] to-[var(--color-orange-dark)]
                      text-[var(--color-black)] hover:scale-105 cursor-pointer">
            Apply for Package
          </button>
        </div>
      </div>

    </div>
  </div>
</div>






  <!-- ===== Bottom Contact Title ===== -->
  <h1 class="relative z-10 text-xl sm:text-3xl font-normal leading-tight mb-6 mt-15 text-center">
    <span class="flex items-center justify-center gap-2 text-white">
      <img src="<?= base_url('SENTINEL/public_html/assets/icons/phone.png') ?>" 
           alt="Phone Icon" 
           class="w-12 h-12 inline-block">
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
