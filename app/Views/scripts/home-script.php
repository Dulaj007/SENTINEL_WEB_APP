<!-- Matrix Effect Script -->
<script>
const canvas = document.getElementById('matrixCanvas');
const ctx = canvas.getContext('2d');

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
resizeCanvas();
window.addEventListener('resize', resizeCanvas);

const columns = Math.floor(canvas.width / 25);
const drops = Array(columns).fill(0);

const circleRadius = 4;
const speed = 0.35;
const fps = 30;

function draw() {
    // dark fade trail
    ctx.fillStyle = 'rgba(18, 18, 18, 0.08)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < drops.length; i++) {
        // 80% dim orange, 20% bright yellow
        const bright = Math.random() < 0.2;
        ctx.fillStyle = bright
            ? 'rgba(255, 191, 53, 0.9)'   // yellow
            : 'rgba(175, 122, 8, 0.6)';   // orange-dark

        ctx.beginPath();
        ctx.arc(i * 25 + 12, drops[i] * 20, circleRadius, 0, Math.PI * 2);
        ctx.fill();

        drops[i] += speed;
        if (drops[i] * 20 > canvas.height || Math.random() > 0.985) {
            drops[i] = 0;
        }
    }
}

setInterval(draw, 1000 / fps);
</script>