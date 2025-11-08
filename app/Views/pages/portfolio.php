<!-- Header -->
<?= $this->include('partials/header') ?>


<!-- Page content -->
<?= view('partials/navbar') ?>
<?= $this->include('section/portfolioSections/portfolioHero') ?>
<?= $this->include('section/portfolioSections/portfolioFilters') ?>
<?= $this->include('section/portfolioSections/portfolioGrid') ?>


<?= $this->include('section/contactQuick') ?>
<?= $this->include('section/portfolioSections/scriptPortfolio') ?>


<?= view('partials/footer') ?>