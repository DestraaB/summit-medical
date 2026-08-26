<!-- Top Bar Info -->
<div class="py-2 d-none d-lg-block" style="background-color: #0046b8; color: white; font-size: 0.85rem;">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-4">
            <span><i class="fas fa-ambulance me-2"></i>Emergency: +62 274-123-456 - ext. 118</span>
            <span><i class="fas fa-phone-alt me-2"></i>Customer Service: +62 888-1234-567</span>
            <span><i class="fas fa-map-marker-alt me-2"></i>Alamat: Jl. Pangeran Mangkubumi No. 123, Yogyakarta</span>
        </div>
        <div>
            <select class="form-select form-select-sm bg-white border-0" style="width: 120px; font-size: 0.8rem; cursor: pointer;">
                <option value="id">Indonesian</option>
                <option value="en">English</option>
            </select>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top py-3" style="box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="<?= base_url(); ?>">
            <i class="fas fa-sun fa-2x me-2" style="color: #0046b8;"></i>
            <div style="line-height: 1.1;">
                <span style="font-weight: 800; color: #2ea64e; font-size: 1.1rem; letter-spacing: 0.5px;">SUMMIT MEDICAL</span><br>
                <span style="font-weight: 700; color: #0046b8; font-size: 1.1rem; letter-spacing: 1px;">CENTER</span><br>
                <span style="font-size: 0.45rem; color: #e63946; font-weight: 600;">PROFESIONAL, LENGKAP, MUTU, AMANAH</span>
            </div>
        </a>
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Menu Tengah -->
            <ul class="navbar-nav mx-auto fw-semibold" style="font-size: 0.95rem;">
                <li class="nav-item px-2">
                    <a class="nav-link text-dark nav-hover-line" href="<?= base_url(); ?>">Beranda</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-dark nav-hover-line" href="<?= base_url('doctors'); ?>">Jadwal Dokter</a>
                </li>
                <li class="nav-item px-2 dropdown">
                    <a class="nav-link text-dark nav-hover-line dropdown-toggle" href="#" id="navbarLayanan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarLayanan">
                        <li><a class="dropdown-item" href="<?= base_url('services'); ?>">Layanan Medis</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('facilities'); ?>">Fasilitas</a></li>
                    </ul>
                </li>
                <li class="nav-item px-2 dropdown">
                    <a class="nav-link text-dark nav-hover-line dropdown-toggle" href="#" id="navbarInfo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pusat Informasi
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarInfo">
                        <li><a class="dropdown-item" href="<?= base_url('articles'); ?>">Berita & Artikel</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('about'); ?>">Tentang Kami</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('contact'); ?>">Kontak</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Pencarian & Tombol Dashboard -->
            <div class="d-flex align-items-center mt-3 mt-lg-0">
                <form action="<?= base_url('articles'); ?>" method="get" class="me-3">
                    <div class="input-group" style="width: 250px;">
                        <span class="input-group-text bg-white border-end-0 rounded-start-pill text-muted px-3" style="border-color: #e9ecef;">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 rounded-end-pill shadow-none" placeholder="Cari sesuatu...." style="border-color: #e9ecef; font-size: 0.9rem;">
                    </div>
                </form>

                <?php if ($this->session->userdata('logged_in')) : ?>
                    <a href="<?= base_url('dashboard'); ?>" class="btn text-white rounded-pill px-4" style="background-color: #0046b8; font-weight: 500; font-size: 0.9rem;">Dashboard</a>
                <?php else: ?>
                    <!-- Opsi: Tampilkan link login kecil jika mau, atau sembunyikan -->
                    <a href="<?= base_url('auth'); ?>" class="text-muted small text-decoration-none"><i class="fas fa-user-lock"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<main class="flex-shrink-0">