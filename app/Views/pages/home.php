
<!-- Top of home.php -->
<?= $this->include('partials/header') ?>

<!-- Persistent Matrix background -->
<canvas id="matrixCanvas"></canvas>

<!-- Page content -->
<?= view('partials/navbar') ?>
<?= $this->include('section/heroHome') ?>
<?= view('section/services-home', ['services' => $services]) ?>
<?= $this->include('section/WhyChoose') ?>

<?php /* <?= view('section/Insights-home', ['insightsData' => $insightsData]) ?> */ ?>


<?= view('section/work-home', ['work-home' => $workHomeData]) ?>
<?= $this->include('section/getStarted-home') ?>
<?= $this->include('section/callUs') ?>
<?= view('section/Testimonials-home', ['testimonialsData' => $testimonialsData]) ?>
<?= $this->include('section/contactQuick') ?>
<?= view('scripts/home-script') ?>

<?= view('partials/footer') ?>



