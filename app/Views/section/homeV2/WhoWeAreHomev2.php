<!-- ========================= WHO WE ARE SECTION V2 ========================= -->
<section id="who-we-are" class="relative w-full overflow-visible py-20 pt-24" style="z-index: 1;">

  <!-- ===== Background Base ===== -->
  <div class="absolute inset-0 bg-[var(--bg-background)]" style="z-index: 0;"></div>

  <!-- ===== Section Title ===== -->
  <div class="relative flex flex-col items-center justify-center mb-10 px-4" style="z-index: 2;">
    <div class="mb-2">
      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
           class="w-20 h-20 text-[var(--accent-red)] drop-shadow-[0_0_18px_var(--accent-red)]"
           fill="none" stroke="currentColor" stroke-width="1.5">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
      </svg>
    </div>
    <h1 class="text-4xl text-center sm:text-5xl font-extrabold leading-tight">
      <span class="text-[var(--color-white)] drop-shadow-[0_0_4px_var(--accent-red)]">WHO WE ARE</span>
    </h1>
    <p class="text-[var(--text-secondary)] text-base sm:text-lg mt-3 text-center max-w-2xl leading-relaxed">
      Sri Lanka's One and only remote CCTV monitoring and security solutions provider — protecting what matters most, around the clock.
    </p>
  </div>

  <!-- ===== Video Container ===== -->
  <div class="relative max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-10 xl:px-16 mb-10" style="z-index: 5;">
    <div id="wwaVideoWrapper" class="relative w-full rounded-2xl overflow-hidden" style="background:#000; isolation: isolate;">

      <!-- Accent Lines -->
      <div class="absolute top-0 left-0 w-full" style="height:3px; background:linear-gradient(to right,transparent,var(--accent-red),transparent); opacity:0.5; z-index:40;"></div>
      <div class="absolute bottom-0 left-0 w-full" style="height:3px; background:linear-gradient(to right,transparent,var(--accent-red),transparent); opacity:0.5; z-index:40;"></div>

      <!-- Video -->
      <video id="whoWeAreVideo" autoplay muted loop playsinline preload="auto"
             style="display:block; width:100%; aspect-ratio:16/9; max-height:75vh; object-fit:cover; border:none; outline:none;">
        <source src="<?= getenv('app.baseURL') ?>assets/vid/sentinel.mp4" type="video/mp4">
      </video>

      <!-- Center Play -->
      <div id="wwaCenterPlay" style="position:absolute; inset:0; display:none; align-items:center; justify-content:center; cursor:pointer; z-index:35;">
        <div style="width:72px; height:72px; border-radius:50%; background:rgba(255,59,63,0.85); display:flex; align-items:center; justify-content:center; box-shadow:0 0 40px rgba(255,59,63,0.4); transition:all .3s;">
          <svg style="width:32px; height:32px; margin-left:3px;" fill="white" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
        </div>
      </div>

      <!-- ===== Controls Bar ===== -->
      <div id="wwaControls" style="position:absolute; bottom:0; left:0; right:0; z-index:50; opacity:1; pointer-events:auto; transition:opacity .4s ease; user-select:none;">

        <!-- Gradient BG -->
        <div style="position:absolute; inset:0; background:linear-gradient(to top,#0b0c10,rgba(11,12,16,.85) 60%,transparent); pointer-events:none;"></div>

        <div style="position:relative; z-index:2; padding:48px 16px 14px 16px;">

          <!-- Progress Bar -->
          <div id="wwaProgressContainer" style="position:relative; width:100%; height:22px; display:flex; align-items:center; cursor:pointer; margin-bottom:10px;">
            <div style="position:relative; width:100%; height:4px; border-radius:9999px; background:rgba(255,255,255,.1); overflow:hidden;" id="wwaTrack">
              <div id="wwaBuffered" style="position:absolute; top:0; left:0; height:100%; background:rgba(255,255,255,.2); width:0; border-radius:9999px;"></div>
              <div id="wwaProgress" style="position:absolute; top:0; left:0; height:100%; background:#ff3b3f; width:0; border-radius:9999px;"></div>
            </div>
            <div id="wwaScrubDot" style="position:absolute; width:14px; height:14px; border-radius:50%; background:#ff3b3f; box-shadow:0 0 10px rgba(255,59,63,.6); top:50%; transform:translateY(-50%); left:0; margin-left:-7px; z-index:3;"></div>
          </div>

          <!-- Controls Row -->
          <div style="display:flex; align-items:center; justify-content:space-between; gap:4px; flex-wrap:nowrap;">

            <!-- LEFT -->
            <div style="display:flex; align-items:center; gap:2px; min-width:0; overflow:visible;">

              <!-- Play/Pause -->
              <button id="wwaPlayPause" type="button" class="wwa-btn" title="Play / Pause">
                <svg id="wwaIconPause" width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                <svg id="wwaIconPlay" width="20" height="20" fill="white" viewBox="0 0 24 24" style="display:none;"><path d="M8 5v14l11-7z"/></svg>
              </button>

              <!-- Rewind 5s -->
              <button id="wwaRewind" type="button" class="wwa-btn" title="Rewind 5s">
                <svg width="18" height="18" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2.2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9l6-6"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 9h13a5 5 0 010 10h-4"/>
                </svg>
              </button>

              <!-- Forward 5s -->
              <button id="wwaForward" type="button" class="wwa-btn" title="Forward 5s">
                <svg width="18" height="18" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2.2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l6-6-6-6"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 9H8a5 5 0 000 10h4"/>
                </svg>
              </button>

              <!-- Divider -->
              <div style="width:1px; height:20px; background:rgba(255,255,255,.15); margin:0 4px; flex-shrink:0;"></div>

              <!-- Volume Down -->
              <button id="wwaVolDown" type="button" class="wwa-btn" title="Volume Down">
                <svg width="16" height="16" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2.5">
                  <path stroke-linecap="round" d="M5 12h14"/>
                </svg>
              </button>

              <!-- Sound Toggle (mute icon) -->
              <button id="wwaSoundToggle" type="button" class="wwa-btn" title="Mute / Unmute">
                <svg id="wwaSoundOff" width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 9.75L19.5 12m0 0l2.25 2.25M19.5 12l2.25-2.25M19.5 12l-2.25 2.25m-10.5-6l4.72-3.72a.75.75 0 011.28.53v14.38a.75.75 0 01-1.28.53l-4.72-3.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z"/>
                </svg>
                <svg id="wwaSoundLow" width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2" style="display:none;">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 001.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12c0-1.56-.63-2.97-1.65-3.99"/>
                </svg>
                <svg id="wwaSoundOn" width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2" style="display:none;">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-3.72a.75.75 0 011.28.53v14.38a.75.75 0 01-1.28.53l-4.72-3.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z"/>
                </svg>
              </button>

              <!-- Volume Up -->
              <button id="wwaVolUp" type="button" class="wwa-btn" title="Volume Up">
                <svg width="16" height="16" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2.5">
                  <path stroke-linecap="round" d="M12 5v14M5 12h14"/>
                </svg>
              </button>

              <!-- Volume Slider (Desktop only) -->
              <div class="hidden sm:block" style="width:80px; margin-left:4px;">
                <input type="range" id="wwaVolumeSlider" min="0" max="100" value="0" title="Volume"
                       style="width:100%; height:4px; cursor:pointer; outline:none; -webkit-appearance:none; appearance:none; border-radius:9999px; background:linear-gradient(to right,#ff3b3f 0%,rgba(255,255,255,.1) 0%);">
              </div>

              <!-- Volume % Label -->
              <span id="wwaVolLabel" style="color:rgba(255,255,255,.5); font-size:11px; font-weight:700; min-width:28px; text-align:center; margin-left:2px;">0%</span>

              <!-- Divider -->
              <div style="width:1px; height:20px; background:rgba(255,255,255,.15); margin:0 4px; flex-shrink:0;" class="hidden sm:block"></div>

              <!-- Time -->
              <div style="color:rgba(255,255,255,.7); font-family:monospace; font-size:12px; letter-spacing:.5px; white-space:nowrap; margin-left:4px;">
                <span id="wwaCurrentTime">0:00</span>
                <span style="color:rgba(255,255,255,.3); margin:0 2px;">/</span>
                <span id="wwaDuration">0:00</span>
              </div>
            </div>

            <!-- RIGHT -->
            <div style="display:flex; align-items:center; gap:2px; flex-shrink:0;">

              <!-- Speed -->
              <button id="wwaSpeedBtn" type="button" class="wwa-btn hidden sm:inline-flex" title="Playback Speed" style="width:auto; padding:0 10px;">
                <span style="color:rgba(255,255,255,.7); font-size:12px; font-weight:700; letter-spacing:.5px;">1x</span>
              </button>

              <!-- Fullscreen -->
              <button id="wwaFullscreen" type="button" class="wwa-btn" title="Fullscreen">
                <svg id="wwaIconExpand" width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/>
                </svg>
                <svg id="wwaIconCompress" width="20" height="20" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2" style="display:none;">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 9V4.5M9 9H4.5M9 9L3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5l5.25 5.25"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- ===== CTA Buttons ===== -->
  <div class="relative max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-10 xl:px-16" style="z-index: 2;">
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-5">
      <a href="<?= base_url('about') ?>"
         class="inline-flex items-center justify-center gap-3 px-8 py-4 font-bold rounded-2xl
                bg-gradient-to-r from-[var(--accent-red)] via-[var(--accent-shine)] to-[var(--accent-red)]
                text-[var(--bg-background)] shadow-[var(--shadow-hard)]
                bg-gradient-animate hover:opacity-90 transition transform duration-500 hover:scale-105
                text-sm sm:text-base w-full sm:w-auto">
        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
        </svg>
        <span>Learn More About Us</span>
      </a>
      <a href="<?= base_url('contact') ?>"
         class="inline-flex items-center justify-center gap-3 px-8 py-4 border border-[var(--accent-red)] rounded-2xl
                text-[var(--text-primary)] font-bold hover:scale-105 transform transition duration-500
                hover:bg-[var(--accent-red)]/10 hover:shadow-[0_0_25px_rgba(255,59,63,0.15)]
                text-sm sm:text-base w-full sm:w-auto">
        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
        </svg>
        <span>Get In Touch</span>
      </a>
    </div>
  </div>
</section>

<!-- ===== Video Player Script ===== -->
<script>
(function () {
  document.addEventListener('DOMContentLoaded', function () {
    var w = document.getElementById('wwaVideoWrapper');
    var v = document.getElementById('whoWeAreVideo');
    var c = document.getElementById('wwaControls');
    if (!w || !v || !c) return;

    var els = {
      pp: document.getElementById('wwaPlayPause'),
      iPlay: document.getElementById('wwaIconPlay'),
      iPause: document.getElementById('wwaIconPause'),
      sToggle: document.getElementById('wwaSoundToggle'),
      sOff: document.getElementById('wwaSoundOff'),
      sLow: document.getElementById('wwaSoundLow'),
      sOn: document.getElementById('wwaSoundOn'),
      vSlider: document.getElementById('wwaVolumeSlider'),
      vDown: document.getElementById('wwaVolDown'),
      vUp: document.getElementById('wwaVolUp'),
      vLabel: document.getElementById('wwaVolLabel'),
      rw: document.getElementById('wwaRewind'),
      fw: document.getElementById('wwaForward'),
      speed: document.getElementById('wwaSpeedBtn'),
      fs: document.getElementById('wwaFullscreen'),
      iExp: document.getElementById('wwaIconExpand'),
      iComp: document.getElementById('wwaIconCompress'),
      center: document.getElementById('wwaCenterPlay'),
      pCont: document.getElementById('wwaProgressContainer'),
      pBar: document.getElementById('wwaProgress'),
      pBuf: document.getElementById('wwaBuffered'),
      pDot: document.getElementById('wwaScrubDot'),
      tCur: document.getElementById('wwaCurrentTime'),
      tDur: document.getElementById('wwaDuration')
    };

    var ht, seeking = false;
    var sp = [0.5, 0.75, 1, 1.25, 1.5, 2], si = 2;

    function fmt(s) {
      if (isNaN(s) || s < 0) return '0:00';
      return Math.floor(s / 60) + ':' + String(Math.floor(s % 60)).padStart(2, '0');
    }

    function show() {
      c.style.opacity = '1';
      c.style.pointerEvents = 'auto';
      w.style.cursor = 'default';
      clearTimeout(ht);
      ht = setTimeout(hide, 3000);
    }

    function hide() {
      if (v.paused) return;
      c.style.opacity = '0';
      c.style.pointerEvents = 'none';
      w.style.cursor = 'none';
    }

    function toggle() { v.paused ? v.play().catch(function () {}) : v.pause(); }

    function updPP() {
      if (v.paused) {
        els.iPlay.style.display = 'block';
        els.iPause.style.display = 'none';
        els.center.style.display = 'flex';
        show();
      } else {
        els.iPlay.style.display = 'none';
        els.iPause.style.display = 'block';
        els.center.style.display = 'none';
      }
    }

    function getVol() { return v.muted ? 0 : v.volume; }

    function setVol(val) {
      val = Math.max(0, Math.min(1, val));
      v.volume = val;
      v.muted = val === 0;
      updSound();
    }

    function updSliderBg() {
      if (!els.vSlider) return;
      var p = els.vSlider.value;
      els.vSlider.style.background = 'linear-gradient(to right,#ff3b3f ' + p + '%,rgba(255,255,255,.1) ' + p + '%)';
    }

    function updSound() {
      var vol = getVol();
      els.sOff.style.display = 'none';
      els.sLow.style.display = 'none';
      els.sOn.style.display = 'none';

      if (vol === 0) els.sOff.style.display = 'block';
      else if (vol < 0.5) els.sLow.style.display = 'block';
      else els.sOn.style.display = 'block';

      var pct = Math.round(vol * 100);
      if (els.vSlider) { els.vSlider.value = pct; updSliderBg(); }
      if (els.vLabel) els.vLabel.textContent = pct + '%';
    }

    // Events: show/hide
    w.addEventListener('mousemove', show);
    w.addEventListener('mouseenter', show);
    w.addEventListener('mouseleave', function () { clearTimeout(ht); ht = setTimeout(hide, 800); });
    w.addEventListener('touchstart', show, { passive: true });

    // Play/Pause
    els.pp.addEventListener('click', function (e) { e.stopPropagation(); toggle(); });
    els.center.addEventListener('click', function (e) { e.stopPropagation(); toggle(); });
    v.addEventListener('click', function () { toggle(); show(); });
    v.addEventListener('play', updPP);
    v.addEventListener('pause', updPP);

    // Sound toggle
    els.sToggle.addEventListener('click', function (e) {
      e.stopPropagation();
      if (v.muted || v.volume === 0) { v.muted = false; if (v.volume === 0) v.volume = 0.5; }
      else { v.muted = true; }
      updSound(); show();
    });

    // Volume Down button
    els.vDown.addEventListener('click', function (e) {
      e.stopPropagation();
      setVol(getVol() - 0.1);
      show();
    });

    // Volume Up button
    els.vUp.addEventListener('click', function (e) {
      e.stopPropagation();
      setVol(getVol() + 0.1);
      show();
    });

    // Volume slider
    if (els.vSlider) {
      els.vSlider.addEventListener('input', function (e) {
        e.stopPropagation();
        setVol(parseInt(this.value) / 100);
        show();
      });
    }

    // Rewind / Forward
    els.rw.addEventListener('click', function (e) {
      e.stopPropagation();
      v.currentTime = Math.max(0, v.currentTime - 5);
      show();
    });

    els.fw.addEventListener('click', function (e) {
      e.stopPropagation();
      v.currentTime = Math.min(v.duration || 0, v.currentTime + 5);
      show();
    });

    // Speed
    if (els.speed) {
      els.speed.addEventListener('click', function (e) {
        e.stopPropagation();
        si = (si + 1) % sp.length;
        v.playbackRate = sp[si];
        this.querySelector('span').textContent = sp[si] + 'x';
        show();
      });
    }

    // Fullscreen
    els.fs.addEventListener('click', function (e) {
      e.stopPropagation();
      if (!document.fullscreenElement && !document.webkitFullscreenElement) {
        (w.requestFullscreen || w.webkitRequestFullscreen).call(w);
      } else {
        (document.exitFullscreen || document.webkitExitFullscreen).call(document);
      }
    });

    function updFS() {
      var fs = document.fullscreenElement || document.webkitFullscreenElement;
      els.iExp.style.display = fs ? 'none' : 'block';
      els.iComp.style.display = fs ? 'block' : 'none';
    }
    document.addEventListener('fullscreenchange', updFS);
    document.addEventListener('webkitfullscreenchange', updFS);

    v.addEventListener('dblclick', function (e) {
      e.preventDefault();
      els.fs.click();
    });

    // Progress
    v.addEventListener('loadedmetadata', function () { els.tDur.textContent = fmt(v.duration); });

    v.addEventListener('timeupdate', function () {
      if (seeking || !v.duration) return;
      var p = (v.currentTime / v.duration) * 100;
      els.pBar.style.width = p + '%';
      els.pDot.style.left = 'calc(' + p + '% - 7px)';
      els.tCur.textContent = fmt(v.currentTime);
    });

    v.addEventListener('progress', function () {
      try {
        if (v.buffered.length > 0 && v.duration) {
          els.pBuf.style.width = ((v.buffered.end(v.buffered.length - 1) / v.duration) * 100) + '%';
        }
      } catch (e) {}
    });

    function doSeek(e) {
      var clientX = e.clientX != null ? e.clientX : (e.touches ? e.touches[0].clientX : 0);
      var r = els.pCont.getBoundingClientRect();
      var p = Math.max(0, Math.min(1, (clientX - r.left) / r.width));
      if (v.duration) v.currentTime = p * v.duration;
      els.pBar.style.width = (p * 100) + '%';
      els.pDot.style.left = 'calc(' + (p * 100) + '% - 7px)';
      els.tCur.textContent = fmt(v.currentTime);
    }

    els.pCont.addEventListener('click', function (e) { e.stopPropagation(); doSeek(e); });

    // Mouse drag
    els.pCont.addEventListener('mousedown', function (e) {
      seeking = true; doSeek(e);
      function mv(ev) { doSeek(ev); }
      function up() { seeking = false; document.removeEventListener('mousemove', mv); document.removeEventListener('mouseup', up); }
      document.addEventListener('mousemove', mv);
      document.addEventListener('mouseup', up);
    });

    // Touch drag
    els.pCont.addEventListener('touchstart', function (e) {
      seeking = true; doSeek(e);
      function mv(ev) { ev.preventDefault(); doSeek(ev); }
      function end() { seeking = false; document.removeEventListener('touchmove', mv); document.removeEventListener('touchend', end); }
      document.addEventListener('touchmove', mv, { passive: false });
      document.addEventListener('touchend', end);
    }, { passive: true });

    // Keyboard
    document.addEventListener('keydown', function (e) {
      var r = w.getBoundingClientRect();
      if (r.top >= window.innerHeight || r.bottom <= 0) return;
      var k = e.key.toLowerCase();
      if (k === ' ' || k === 'k') { e.preventDefault(); toggle(); }
      else if (k === 'm') { v.muted = !v.muted; if (!v.muted && v.volume === 0) v.volume = 0.5; updSound(); }
      else if (k === 'f') { els.fs.click(); }
      else if (k === 'arrowleft') { e.preventDefault(); v.currentTime = Math.max(0, v.currentTime - 5); }
      else if (k === 'arrowright') { e.preventDefault(); v.currentTime = Math.min(v.duration || 0, v.currentTime + 5); }
      else if (k === 'arrowup') { e.preventDefault(); setVol(getVol() + 0.1); }
      else if (k === 'arrowdown') { e.preventDefault(); setVol(getVol() - 0.1); }
      show();
    });

    // Hover glow on buttons
    w.querySelectorAll('.wwa-btn').forEach(function (b) {
      b.addEventListener('mouseenter', function () { this.style.background = 'rgba(255,255,255,.12)'; });
      b.addEventListener('mouseleave', function () { this.style.background = 'transparent'; });
    });

    // Autoplay
    v.play().catch(function () { v.muted = true; v.play().catch(function () {}); });

    // Viewport observer
    new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { e.isIntersecting ? v.play().catch(function () {}) : v.pause(); });
    }, { threshold: 0.1 }).observe(v);

    updPP();
    updSound();
    show();
  });
})();
</script>

<style>
  /* Button base */
  .wwa-btn {
    width: 36px;
    height: 36px;
    border: none;
    outline: none;
    background: transparent;
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background .2s;
    flex-shrink: 0;
    padding: 0;
    -webkit-tap-highlight-color: transparent;
  }

  @media (min-width: 640px) {
    .wwa-btn { width: 38px; height: 38px; }
  }

  /* Volume slider */
  #wwaVolumeSlider::-webkit-slider-thumb {
    -webkit-appearance: none;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: #ff3b3f;
    border: 2px solid #fff;
    cursor: pointer;
    box-shadow: 0 0 8px rgba(255,59,63,.5);
  }

  #wwaVolumeSlider::-moz-range-thumb {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: #ff3b3f;
    border: 2px solid #fff;
    cursor: pointer;
    box-shadow: 0 0 8px rgba(255,59,63,.5);
  }

  #wwaVolumeSlider::-moz-range-track {
    height: 4px;
    background: transparent;
    border: none;
  }

  /* Progress hover */
  #wwaProgressContainer:hover #wwaTrack { height: 6px !important; }
  #wwaProgressContainer:hover #wwaScrubDot { width: 16px !important; height: 16px !important; margin-left: -8px !important; }

  /* Hide native controls */
  #whoWeAreVideo::-webkit-media-controls,
  #whoWeAreVideo::-webkit-media-controls-enclosure,
  #whoWeAreVideo::-webkit-media-controls-panel { display: none !important; }

  /* Fullscreen */
  #wwaVideoWrapper:fullscreen,
  #wwaVideoWrapper:-webkit-full-screen { background: #000; }
  #wwaVideoWrapper:fullscreen video,
  #wwaVideoWrapper:-webkit-full-screen video { max-height: 100vh; height: 100vh; object-fit: contain; }

  /* Center play hover */
  #wwaCenterPlay > div:hover { background: rgba(255,59,63,1) !important; transform: scale(1.1); }

  /* Video sizing */
  #whoWeAreVideo { display: block; width: 100%; aspect-ratio: 16/9; max-height: 75vh; object-fit: cover; }

  @media (max-width: 640px) {
    #whoWeAreVideo { max-height: 55vh; }
    .wwa-btn { width: 32px; height: 32px; }
    .wwa-btn svg { width: 16px !important; height: 16px !important; }
    #wwaControls > div > div:last-child { padding: 40px 10px 10px 10px !important; }
    #wwaCenterPlay > div { width: 56px !important; height: 56px !important; }
    #wwaCenterPlay > div svg { width: 24px !important; height: 24px !important; }
  }

  @media (min-width: 1280px) {
    #whoWeAreVideo { max-height: 70vh; }
  }
</style>