
<?= $this->include('partials/header') ?>



<?= view('partials/navbar') ?>

<h1>Welcome to 24/7 Sentinel</h1>
<p>Your CCTV monitoring solution.</p>
<?= view('section/services-home', ['services' => $services]) ?>
<?= view('section/work-home', ['work-home' => $workHomeData]) ?>
<?= view('section/Insights-home', ['insightsData' => $insightsData]) ?>
<?= view('section/Testimonials-home', ['testimonialsData' => $testimonialsData]) ?>


  <?= $this->include('section/getStarted-home') ?>
  
<?= $this->include('section/WhyChoose') ?>

<div class="bg-dark-3 p-6">
  <h1 class="font-display text-3xl text-yellow">Welcome to Tailwind v4+ with CodeIgniter</h1>
  <button class="btn-primary mt-4 text-red-dark">Click Me</button>
</div>

<?= view('scripts/home-script') ?>
<?= view('partials/footer') ?>
</body>
</html>
