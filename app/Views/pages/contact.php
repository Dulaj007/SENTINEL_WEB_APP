
<!-- Top of home.php -->
<?= $this->include('partials/header') ?>

<!-- Persistent Matrix background -->
<canvas id="matrixCanvas"></canvas>

<!-- Page content -->
<?= view('partials/navbar') ?>
<?= $this->include('section/contact/heroContact') ?>

<?= $this->include('section/contact/contactusCards') ?>
<?= $this->include('section/contactQuick') ?>
<?= view('scripts/home-script') ?>

<?= view('partials/footer') ?>