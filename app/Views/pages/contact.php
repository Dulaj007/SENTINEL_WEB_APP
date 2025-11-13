
<!-- Top of home.php -->
<?= $this->include('partials/header') ?>
<!-- Page content -->
<?= view('partials/navbarV2') ?>
<?= $this->include('section/contactUsV2/heroContactV2') ?>

<?= $this->include('section/contactUsV2/contactusCardsV2') ?>
<?= $this->include('section/homeV2/ContactQuickHomeV2') ?>
<?= view('scripts/home-script') ?>

<?= view('partials/footer') ?>