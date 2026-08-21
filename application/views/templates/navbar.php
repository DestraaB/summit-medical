<nav class="navbar">
    <div class="navbar-container">

        <!-- Logo -->
        <a href="<?= base_url(); ?>" class="navbar-logo">

            <span class="logo-icon">✚</span>

            <span class="logo-text">
                Summit Medical
                <small>Center</small>
            </span>

        </a>


        <!-- Menu -->
        <div class="navbar-menu">

            <a href="<?= base_url(); ?>" class="active">
                Beranda
            </a>

            <a href="<?= base_url('about'); ?>">
                Tentang Kami
            </a>

            <a href="<?= base_url('services'); ?>">
                Layanan
            </a>

            <a href="<?= base_url('doctors'); ?>">
                Dokter
            </a>

            <a href="<?= base_url('facilities'); ?>">
                Fasilitas
            </a>

            <a href="<?= base_url('articles'); ?>">
                Artikel
            </a>

            <a href="<?= base_url('kontak'); ?>">
                Kontak
            </a>

        </div>


        <!-- Tombol Appointment -->
        <a href="<?= base_url('appointment'); ?>" class="navbar-button">
            Buat Janji
        </a>

    </div>
</nav>