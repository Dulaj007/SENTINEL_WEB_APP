<canvas id="page-particles" class="absolute top-0 left-0 w-full z-5 pointer-events-none"></canvas>

<script>
const canvas = document.getElementById("page-particles");
const ctx = canvas.getContext("2d");

let particles = [];
const particleCount = 200;

// Initialize canvas size
function setCanvasSize() {
  canvas.width = window.innerWidth;
  // Use scrollHeight to cover full page content
  canvas.height = Math.max(document.body.scrollHeight, window.innerHeight);
}

// Initialize particles
function initParticles() {
  particles = [];
  for (let i = 0; i < particleCount; i++) {
    particles.push({
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      radius: Math.random() * 2 + 1,
      speedX: (Math.random() - 0.5) * 0.3,
      speedY: (Math.random() - 0.5) * 0.3,
      alpha: Math.random() * 0.5 + 0.2
    });
  }
}

// Reset particles if canvas height changes drastically
function resizeParticles(oldWidth, oldHeight, newWidth, newHeight) {
  const widthRatio = newWidth / oldWidth;
  const heightRatio = newHeight / oldHeight;
  particles.forEach(p => {
    p.x *= widthRatio;
    p.y *= heightRatio;
    // Ensure particles don't go outside canvas
    if (p.x > newWidth) p.x = Math.random() * newWidth;
    if (p.y > newHeight) p.y = Math.random() * newHeight;
  });
}

// Initial setup
setCanvasSize();
initParticles();

// Handle window resize
window.addEventListener("resize", () => {
  const oldWidth = canvas.width;
  const oldHeight = canvas.height;

  setCanvasSize();
  resizeParticles(oldWidth, oldHeight, canvas.width, canvas.height);
});

// Draw particles
function drawParticles() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  particles.forEach(p => {
    ctx.beginPath();
    ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
    ctx.fillStyle = `rgba(255, 59, 63, ${p.alpha})`;
    ctx.fill();

    // Move particles
    p.x += p.speedX;
    p.y += p.speedY;

    // Wrap around within full canvas
    if (p.x < 0) p.x = canvas.width;
    if (p.x > canvas.width) p.x = 0;
    if (p.y < 0) p.y = canvas.height;
    if (p.y > canvas.height) p.y = 0;
  });

  requestAnimationFrame(drawParticles);
}

drawParticles();
</script>
