
<!-- Top of home.php -->
<?= $this->include('partials/header') ?>

<!-- Persistent Matrix background -->
<canvas id="matrixCanvas"></canvas>

<!-- Page content -->
<?= view('partials/navbarV2') ?>
<?= $this->include('section/aboutV2/heroAboutUs') ?>
<?= $this->include('section/aboutV2/StoryAboutUs') ?>
<?= $this->include('section/aboutV2/teamAboutUs') ?>
<?= $this->include('section/aboutV2/vandMAboutUs') ?>
<?= $this->include('section/aboutV2/scriptAboutUs') ?>



<?= view('partials/footer') ?>
