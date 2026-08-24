<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="<?= base_url(); ?>">
            <i class="fas fa-hospital-symbol me-2"></i>Summit Medical
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('services'); ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('doctors'); ?>">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('articles'); ?>">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact'); ?>">Contact</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <?php if ($this->session->userdata('logged_in')) : ?>
                        <a href="<?= base_url('dashboard'); ?>" class="btn btn-light btn-sm text-primary px-3 rounded-pill">Dashboard Admin</a>
                    <?php else : ?>
                        <a href="<?= base_url('auth'); ?>" class="btn btn-outline-light btn-sm px-3 rounded-pill">Login Admin</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="flex-shrink-0">