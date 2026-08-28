<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center font-weight-bold text-primary" href="<?= base_url(); ?>">
            <i class="fas fa-hospital-symbol fa-2x me-2"></i>
            <div>
                <span class="d-block text-dark" style="font-size: 1.2rem; font-weight: 800; line-height: 1;">SUMMIT MEDICAL</span>
                <span class="d-block text-primary" style="font-size: 0.75rem; letter-spacing: 1px;">CENTER</span>
            </div>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-semibold align-items-lg-center">
                
                <!-- INFORMASI -->
                <li class="nav-item mx-1"><a class="nav-link <?= ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home') ? 'active text-primary' : ''; ?>" href="<?= base_url(); ?>">Home</a></li>
                <li class="nav-item mx-1"><a class="nav-link <?= ($this->uri->segment(1) == 'about') ? 'active text-primary' : ''; ?>" href="<?= base_url('about'); ?>">About</a></li>
                <li class="nav-item mx-1"><a class="nav-link <?= ($this->uri->segment(1) == 'services') ? 'active text-primary' : ''; ?>" href="<?= base_url('services'); ?>">Services</a></li>
                <li class="nav-item mx-1"><a class="nav-link <?= ($this->uri->segment(1) == 'schedule') ? 'active text-primary' : ''; ?>" href="<?= base_url('schedule'); ?>">Schedule</a></li>
                <li class="nav-item mx-1"><a class="nav-link <?= ($this->uri->segment(1) == 'contact') ? 'active text-primary' : ''; ?>" href="<?= base_url('contact'); ?>">Contact</a></li>

                <!-- KONTEN (Dropdown) -->
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle <?= in_array($this->uri->segment(1), ['news', 'doctors', 'facilities', 'specialties']) ? 'active text-primary' : ''; ?>" href="#" id="kontenDropdown" role="button" data-bs-toggle="dropdown">
                        Konten
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm mt-2">
                        <li><a class="dropdown-item py-2" href="<?= base_url('news'); ?>"><i class="fas fa-newspaper me-2 text-muted"></i> Articles</a></li>
                        <li><a class="dropdown-item py-2" href="<?= base_url('doctors'); ?>"><i class="fas fa-user-md me-2 text-muted"></i> Doctors</a></li>
                        <li><a class="dropdown-item py-2" href="<?= base_url('specialties'); ?>"><i class="fas fa-stethoscope me-2 text-muted"></i> Specialties</a></li>
                        <li><a class="dropdown-item py-2" href="<?= base_url('facilities'); ?>"><i class="fas fa-building me-2 text-muted"></i> Facilities</a></li>
                    </ul>
                </li>

                <!-- SYSTEM LOGIN -->
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                    <a href="<?= base_url('auth'); ?>" class="btn btn-primary rounded-pill px-4 shadow-sm">
                        <i class="fas fa-user-lock me-1"></i> Login Admin
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>