
<!-- Top of home.php -->
<?= $this->include('partials/header') ?>

<!-- Persistent Matrix background -->
<canvas id="matrixCanvas"></canvas>

<!-- Page content -->
<?= view('partials/navbar') ?>
<?= $this->include('section/aboutUsSections/heroAboutUs') ?>
<?= $this->include('section/aboutUsSections/StoryAboutUs') ?>
<?= $this->include('section/aboutUsSections/teamAboutUs') ?>
<?= $this->include('section/aboutUsSections/vandMAboutUs') ?>
<?= $this->include('section/aboutUsSections/scriptAboutUs') ?>



<?= view('partials/footer') ?>
