<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Matrix Scroll Background</title>
<style>
html, body {
    margin: 0;
    padding: 0;
    background: black;
    color: #0ff;
    font-family: monospace;
}
canvas {
    position: fixed; /* stays behind content */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
.content {
    padding: 50px;
    line-height: 2rem;
}
</style>
</head>
<body>

<canvas id="matrixCanvas"></canvas>

<div class="content">
    <h1>Matrix Scroll Background</h1>
    <p>Scroll down to see the content, background stays.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scroll more...</p>
    <p>Keep adding paragraphs to test scrolling...</p>
    <p style="margin-bottom:2000px;">This space creates scrolling space.</p>
</div>

<script>
const canvas = document.getElementById('matrixCanvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const columns = Math.floor(canvas.width / 20);
const drops = Array(columns).fill(0);
const speed = 0.5;
const circleRadius = 6;

function draw() {
    ctx.fillStyle = 'rgba(0,0,0,0.05)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < drops.length; i++) {
        const bright = Math.random() < 0.1;
        ctx.fillStyle = bright ? '#0ff' : 'rgba(0,255,255,0.2)';
        ctx.beginPath();
        ctx.arc(i * 20 + 10, drops[i] * 20, circleRadius, 0, Math.PI * 2);
        ctx.fill();

        drops[i] += speed;
        if (drops[i] * 20 > canvas.height || Math.random() > 0.975) drops[i] = 0;
    }

    requestAnimationFrame(draw);
}

draw();

// Resize canvas on window resize
window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Matrix Scroll Background</title>
<style>
html, body {
    margin: 0;
    padding: 0;
    background: black;
    color: #0ff;
    font-family: monospace;
}
canvas {
    position: fixed; /* stays behind content */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
.content {
    padding: 50px;
    line-height: 2rem;
}
</style>
</head>
<body>

<canvas id="matrixCanvas"></canvas>

<div class="content">
    <h1>Matrix Scroll Background</h1>
    <p>Scroll down to see the content, background stays.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scroll more...</p>
    <p>Keep adding paragraphs to test scrolling...</p>
    <p style="margin-bottom:2000px;">This space creates scrolling space.</p>
</div>

<script>
const canvas = document.getElementById('matrixCanvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const columns = Math.floor(canvas.width / 20);
const drops = Array(columns).fill(0);
const speed = 0.5;
const circleRadius = 6;

function draw() {
    ctx.fillStyle = 'rgba(0,0,0,0.05)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < drops.length; i++) {
        const bright = Math.random() < 0.1;
        ctx.fillStyle = bright ? '#0ff' : 'rgba(0,255,255,0.2)';
        ctx.beginPath();
        ctx.arc(i * 20 + 10, drops[i] * 20, circleRadius, 0, Math.PI * 2);
        ctx.fill();

        drops[i] += speed;
        if (drops[i] * 20 > canvas.height || Math.random() > 0.975) drops[i] = 0;
    }

    requestAnimationFrame(draw);
}

draw();

// Resize canvas on window resize
window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});
</script>

</body>
</html>
