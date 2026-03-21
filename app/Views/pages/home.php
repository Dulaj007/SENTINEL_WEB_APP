
<!-- Top of home.php -->
<?= $this->include('partials/header') ?>

<!-- Home V2-->
<?= view('partials/navBarV2') ?>

<?= $this->include('section/homeV2/HeroHomeV2') ?>
<?= $this->include('section/homeV2/WhoWeAreHomeV2') ?>
<?= $this->include('section/homeV2/ServicesHomeV3') ?>
<?= $this->include('section//homeV2/WhyChooseHomeV2') ?>
<?= $this->include('section//homeV2/OurWorkHomeV2') ?>
<?= $this->include('section//homeV2/CallUsHomeV2') ?>
<?= $this->include('section//homeV2/ContactQuickHomeV2') ?>

<?php // echo $this->include('section//homeV2/TestimonialsHomeV2'); ?>

<?= view('section/homeV2/BGMusicPlayer') ?>
<?= view('partials/footer') ?>
<?= view('partials/bgOverlay') ?>