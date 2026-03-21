<!-- ========================= BACKGROUND MUSIC PLAYER ========================= -->

<!-- Audio Element (hidden) -->
<audio id="bgMusic" loop preload="auto">
  <source src="<?= getenv('app.baseURL') ?>assets/audio/bg-music.mp3" type="audio/mpeg">
</audio>

<!-- Floating Music Toggle Button (Bottom-Left) -->
<div id="musicPlayerBtn"
     class="fixed bottom-6 left-6 flex items-center gap-2 px-4 py-3 rounded-2xl cursor-pointer select-none transition-all duration-500 hover:scale-105"
     style="z-index: 999; background: rgba(11,12,16,0.85); backdrop-filter: blur(12px); border: 1px solid var(--border-color); box-shadow: 0 4px 20px rgba(0,0,0,0.4);"
     title="Toggle Music">

  <!-- Sound Bars Animation (visible when playing) -->
  <div id="musicBars" class="flex items-end gap-[3px] h-5" style="display: none;">
    <span class="music-bar w-[3px] rounded-full" style="background: var(--accent-red); height: 8px;"></span>
    <span class="music-bar w-[3px] rounded-full" style="background: var(--accent-red); height: 14px;"></span>
    <span class="music-bar w-[3px] rounded-full" style="background: var(--accent-red); height: 6px;"></span>
    <span class="music-bar w-[3px] rounded-full" style="background: var(--accent-red); height: 18px;"></span>
    <span class="music-bar w-[3px] rounded-full" style="background: var(--accent-red); height: 10px;"></span>
  </div>

  <!-- Muted Icon (visible when paused) -->
  <div id="musicIconMuted" style="display: flex;">
    <svg class="w-5 h-5" style="color: var(--text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round"
            d="M17.25 9.75L19.5 12m0 0l2.25 2.25M19.5 12l2.25-2.25M19.5 12l-2.25 2.25m-10.5-6l4.72-3.72a.75.75 0 011.28.53v14.38a.75.75 0 01-1.28.53l-4.72-3.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z"/>
    </svg>
  </div>

  <!-- Label -->
  <span id="musicLabel" class="text-xs font-semibold tracking-wide" style="color: var(--text-secondary);">
    Play Music
  </span>
</div>

<!-- First Visit: Prompt Banner -->
<div id="musicPrompt"
     class="fixed bottom-20 left-6 max-w-xs px-5 py-4 rounded-2xl transition-all duration-500"
     style="z-index: 999; background: rgba(11,12,16,0.92); backdrop-filter: blur(16px); border: 1px solid var(--border-color); box-shadow: 0 8px 30px rgba(0,0,0,0.5); display: none;">

  <!-- Close Button -->
  <button id="musicPromptClose" type="button"
          class="absolute top-2 right-2 w-6 h-6 flex items-center justify-center rounded-full cursor-pointer"
          style="background: rgba(255,255,255,0.05); border: none; outline: none;"
          title="Dismiss">
    <svg class="w-3.5 h-3.5" style="color: var(--text-secondary);" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
    </svg>
  </button>

  <div class="flex items-start gap-3">
    <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5"
         style="background: rgba(255,59,63,0.1); border: 1px solid rgba(255,59,63,0.2);">
      <svg class="w-5 h-5" style="color: var(--accent-red);" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
      </svg>
    </div>
    <div>
      <h4 class="text-sm font-bold mb-1" style="color: var(--color-white); font-family: 'Inter', sans-serif; text-transform: none;">
        🎵 Enable Background Music?
      </h4>
      <p class="text-xs mb-3" style="color: var(--text-secondary);">
        Enjoy ambient sounds while browsing our site.
      </p>
      <div class="flex items-center gap-2">
        <button id="musicPromptYes" type="button"
                class="px-4 py-1.5 rounded-lg text-xs font-bold cursor-pointer transition-all duration-300 hover:scale-105"
                style="background: var(--accent-red); color: white; border: none; outline: none;">
          Play Music
        </button>
        <button id="musicPromptNo" type="button"
                class="px-4 py-1.5 rounded-lg text-xs font-bold cursor-pointer transition-all duration-300"
                style="background: transparent; color: var(--text-secondary); border: 1px solid var(--border-color); outline: none;">
          No Thanks
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Music Player Styles -->
<style>
  /* Sound bar animation */
  @keyframes musicBarBounce1 { 0%,100%{height:8px} 50%{height:18px} }
  @keyframes musicBarBounce2 { 0%,100%{height:14px} 50%{height:6px} }
  @keyframes musicBarBounce3 { 0%,100%{height:6px} 50%{height:16px} }
  @keyframes musicBarBounce4 { 0%,100%{height:18px} 50%{height:8px} }
  @keyframes musicBarBounce5 { 0%,100%{height:10px} 50%{height:20px} }

  .music-bar:nth-child(1) { animation: musicBarBounce1 0.6s ease-in-out infinite; }
  .music-bar:nth-child(2) { animation: musicBarBounce2 0.5s ease-in-out infinite 0.1s; }
  .music-bar:nth-child(3) { animation: musicBarBounce3 0.7s ease-in-out infinite 0.05s; }
  .music-bar:nth-child(4) { animation: musicBarBounce4 0.4s ease-in-out infinite 0.15s; }
  .music-bar:nth-child(5) { animation: musicBarBounce5 0.55s ease-in-out infinite 0.08s; }

  /* Paused: no animation */
  .music-bars-paused .music-bar {
    animation: none !important;
    height: 4px !important;
    opacity: 0.4;
  }

  /* Button hover glow */
  #musicPlayerBtn:hover {
    border-color: var(--accent-red) !important;
    box-shadow: 0 0 20px rgba(255,59,63,0.15), 0 4px 20px rgba(0,0,0,0.4) !important;
  }

  /* Prompt entrance */
  @keyframes promptSlideUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  #musicPrompt.show {
    display: block !important;
    animation: promptSlideUp 0.5s ease forwards;
  }

  /* Mobile positioning */
  @media (max-width: 640px) {
    #musicPlayerBtn {
      bottom: 1rem;
      left: 1rem;
      padding: 0.6rem 0.8rem;
    }

    #musicLabel {
      display: none;
    }

    #musicPrompt {
      left: 1rem;
      right: 1rem;
      max-width: none;
      bottom: 4.5rem;
    }
  }
</style>

<!-- Music Player Script -->
<script>
(function () {
  document.addEventListener('DOMContentLoaded', function () {

    var audio = document.getElementById('bgMusic');
    var btn = document.getElementById('musicPlayerBtn');
    var bars = document.getElementById('musicBars');
    var iconMuted = document.getElementById('musicIconMuted');
    var label = document.getElementById('musicLabel');
    var prompt = document.getElementById('musicPrompt');
    var promptYes = document.getElementById('musicPromptYes');
    var promptNo = document.getElementById('musicPromptNo');
    var promptClose = document.getElementById('musicPromptClose');

    if (!audio || !btn) return;

    var isPlaying = false;
    var userChoice = localStorage.getItem('bgMusicChoice');

    // Set initial volume
    audio.volume = 0.3;

    // ===== Show prompt if first visit =====
    if (!userChoice) {
      setTimeout(function () {
        prompt.classList.add('show');
      }, 3000);
    } else if (userChoice === 'play') {
      // Returning user who chose play
      playMusic();
    }

    // ===== Prompt: Yes =====
    promptYes.addEventListener('click', function () {
      localStorage.setItem('bgMusicChoice', 'play');
      prompt.style.display = 'none';
      playMusic();
    });

    // ===== Prompt: No =====
    promptNo.addEventListener('click', function () {
      localStorage.setItem('bgMusicChoice', 'mute');
      prompt.style.display = 'none';
    });

    // ===== Prompt: Close X =====
    promptClose.addEventListener('click', function () {
      prompt.style.display = 'none';
    });

    // ===== Toggle Button =====
    btn.addEventListener('click', function () {
      if (isPlaying) {
        pauseMusic();
        localStorage.setItem('bgMusicChoice', 'mute');
      } else {
        playMusic();
        localStorage.setItem('bgMusicChoice', 'play');
      }

      // Hide prompt if open
      prompt.style.display = 'none';
    });

    // ===== Play =====
    function playMusic() {
      audio.play().then(function () {
        isPlaying = true;
        updateUI();
      }).catch(function () {
        // Autoplay blocked — need user interaction
        isPlaying = false;
        updateUI();
      });
    }

    // ===== Pause =====
    function pauseMusic() {
      audio.pause();
      isPlaying = false;
      updateUI();
    }

    // ===== Fade In =====
    function fadeIn() {
      audio.volume = 0;
      audio.play().then(function () {
        isPlaying = true;
        updateUI();

        var vol = 0;
        var fadeInterval = setInterval(function () {
          vol += 0.02;
          if (vol >= 0.3) {
            vol = 0.3;
            clearInterval(fadeInterval);
          }
          audio.volume = vol;
        }, 50);
      }).catch(function () {
        isPlaying = false;
        updateUI();
      });
    }

    // ===== Update UI =====
    function updateUI() {
      if (isPlaying) {
        bars.style.display = 'flex';
        bars.classList.remove('music-bars-paused');
        iconMuted.style.display = 'none';
        label.textContent = 'Now Playing';
        label.style.color = 'var(--accent-red)';
        btn.style.borderColor = 'rgba(255,59,63,0.3)';
      } else {
        bars.style.display = 'none';
        iconMuted.style.display = 'flex';
        label.textContent = 'Play Music';
        label.style.color = 'var(--text-secondary)';
        btn.style.borderColor = 'var(--border-color)';
      }
    }

    // ===== Pause when tab hidden, resume when visible =====
    document.addEventListener('visibilitychange', function () {
      if (!isPlaying) return;

      if (document.hidden) {
        audio.pause();
        bars.classList.add('music-bars-paused');
      } else {
        audio.play().catch(function () {});
        bars.classList.remove('music-bars-paused');
      }
    });

    // ===== Keyboard: M to toggle =====
    document.addEventListener('keydown', function (e) {
      if (e.key.toLowerCase() === 'p' && !e.ctrlKey && !e.metaKey && !e.altKey) {
        var tag = document.activeElement.tagName.toLowerCase();
        if (tag === 'input' || tag === 'textarea' || tag === 'select') return;

        if (isPlaying) {
          pauseMusic();
          localStorage.setItem('bgMusicChoice', 'mute');
        } else {
          playMusic();
          localStorage.setItem('bgMusicChoice', 'play');
        }
      }
    });

  });
})();
</script>