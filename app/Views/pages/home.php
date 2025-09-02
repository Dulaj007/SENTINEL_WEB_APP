
<?= $this->include('partials/header') ?><html lang="en">



<?= view('partials/navbar') ?>

<h1>Welcome to 24/7 Sentinel</h1>
<p>Your CCTV monitoring solution.</p>
<?= view('section/services-home', ['services' => $services]) ?>
<?= view('section/work-home', ['work-home' => $workHomeData]) ?>
<?= view('section/Insights-home', ['insightsData' => $insightsData]) ?>


<div class="bg-dark-3 p-6">
  <h1 class="font-display text-3xl text-yellow">Welcome to Tailwind v4+ with CodeIgniter</h1>
  <button class="btn-primary mt-4 text-red-dark">Click Me</button>
</div>

<?= view('partials/footer') ?>
</body>
</html>
