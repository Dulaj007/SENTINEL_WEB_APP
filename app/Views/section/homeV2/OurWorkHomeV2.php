<!-- ========================= OUR WORK SECTION ========================= -->
<section class="relative pb-24 px-4 md:px-4 bg-[var(--color-black)] overflow-hidden">

  <!-- Background Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/100 via-[var(--accent-glow)]/30 to-transparent z-0"></div>

  <!-- Centered Titles + Icon -->
  <div class="relative z-10 text-center mb-12 mt-8 mb:mt-2">
    <!-- Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 175" 
         class="mx-auto w-24 h-24 sm:w-32 sm:h-32 md:w-36 md:h-36  text-[var(--accent-red)] 
                drop-shadow-[0_0_15px_var(--accent-red)] fill-current">
      <path fill="currentColor" d="M105.887,79.965c0.112,1.005,0,2.196-0.261,3.312l-9.49-8.746l-8.559,9.341l9.601,8.708 
        c-1.116,0.372-2.196,0.633-3.312,0.633c-3.312,0.112-6.14-0.893-8.559-3.089c-2.419-2.307-3.721-4.987-3.833-8.299 
        c0-1.154,0.112-2.456,0.372-3.573l-2.307-2.196L65.732,63.442L42.361,89.195c-1.414,1.898-3.61,3.2-6.14,3.2 
        c-4.094,0-7.406-3.312-7.406-7.406c0-2.196,0.856-4.205,2.531-5.619l24.264-25.157L40.947,40.778 
        c-1.154,0.521-2.456,0.782-3.573,0.782c-3.312,0.112-6.14-0.893-8.559-3.089s-3.721-4.875-3.833-8.187 
        c-0.112-1.005,0-2.196,0.261-3.312l9.601,8.708l8.485-9.304l-9.601-8.708c1.005-0.372,2.196-0.633,3.312-0.633 
        c3.312-0.112,6.14,0.893,8.559,3.089c2.419,2.158,3.721,4.987,3.833,8.299c0.112,1.116,0,2.196-0.261,3.312L64.28,45.579 
        l11.053-11.946L58.81,19.082L73.807,2l42.462,37.364l-14.998,17.082l-16.97-14.96L73.621,54.101l16.598,15.184 
        c1.116-0.372,2.196-0.633,3.312-0.633c3.312-0.112,6.14,0.893,8.559,3.089C104.51,73.899,105.812,76.579,105.887,79.965z 
        M87.651,149.576c0,12.775-10.338,23.113-23.113,23.113c-12.775,0-23.113-10.338-23.113-23.113 
        c0-12.775,10.338-23.113,23.113-23.113C77.314,126.463,87.651,136.801,87.651,149.576z M73.391,149.576c0-4.853-4-8.853-8.853-8.853 
        c-4.853,0-8.853,4-8.853,8.853c0,4.853,4,8.853,8.853,8.853C69.391,158.429,73.391,154.429,73.391,149.576z M233.156,149.592 
        c0,12.775-10.338,23.113-23.113,23.113c-12.775,0-23.113-10.338-23.113-23.113c0-12.775,10.338-23.113,23.113-23.113 
        C222.818,126.479,233.156,136.817,233.156,149.592z M218.896,149.592c0-4.853-4-8.853-8.853-8.853c-4.853,0-8.853,4-8.853,8.853 
        c0,4.853,4,8.853,8.853,8.853C214.896,158.445,218.896,154.445,218.896,149.592z M2,108.799h129v36H99.924h-3.195 
        c-0.924-0.242-1.681-0.83-1.849-1.755c-2.521-14.456-15.129-24.482-30.341-24.482s-27.82,10.026-30.341,24.482 
        c-0.168,0.84-0.924,1.512-1.848,1.755H10c-4.481-0.242-8-3.874-8-8.356V108.799z M254,129.765v6.219c0,4.707-4.209,8.815-9,8.815h-3 
        c-0.924,0-1.448-0.83-1.616-1.755c-2.521-14.456-15.129-25.466-30.341-25.466s-27.82,11.01-30.341,25.466 
        c-0.168,0.84-0.777,1.755-1.702,1.755h-40v-92h27c2.437,0.084,4.482,1.514,6.163,3.195L208.565,92.4 
        c0.336,0.336,0.931,0.4,1.435,0.4h24c7.48,0,13,6.604,13,14v21h5C253.009,127.799,254,128.841,254,129.765z M192.007,89.794 
        l-27.063-25.9c-0.42-0.336-1.439-1.095-1.944-1.095h-13c-1.009,0-2,0.991-2,2v26c0,1.009,0.991,2,2,2h41 
        C192.597,92.799,193.016,91.055,192.007,89.794z"/>
    </svg>

    <!-- Title -->
    <h2 class="text-4xl sm:text-5xl  font-bold text-[var(--color-white)] 
               pt-2 drop-shadow-[0_0_6px_var(--accent-red)]">
      Our Work
    </h2>
    <p class="text-base md:text-lg font-semibold text-[var(--color-white-60)] mt-2">
      Successful security installations across various industries
    </p>
  </div>

  <!-- Cards Row -->
 <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 
            place-items-center max-w-7xl mx-auto">
  <?php foreach($workHomeData as $workHomeDataSingle): ?>
    <?= view('cards/work-card', [
        'icon' => $workHomeDataSingle['icon'],
        'title' => $workHomeDataSingle['title'],
        'description' => $workHomeDataSingle['description']
    ]) ?>
  <?php endforeach; ?>
</div>


  <!-- Discover Portfolio Button -->
  <div class="flex flex-col mt-10 sm:flex-row gap-4 justify-center relative z-10">
    <a href="<?= base_url('portfolio') ?>"
       class="flex items-center gap-2 font-title px-8 py-3 font-semibold rounded-[10px] text-[var(--color-black)]
              bg-gradient-to-r from-[var(--color-orange-dark)] via-[var(--color-yellow)] to-[var(--color-red)]
              bg-gradient-animate tracking-wide hover:opacity-90 transition transform duration-500 hover:scale-105">
      Discover full Portfolio
      <img src="<?= base_url('SENTINEL/public_html/assets/icons/se-logo-2.svg') ?>" alt="Shield Icon" class="w-6 h-6">
    </a>
  </div>

</section>
