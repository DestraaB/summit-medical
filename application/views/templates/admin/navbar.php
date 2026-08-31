<!-- =========================
     ADMIN NAVBAR
     ========================= -->

<nav class="admin-navbar">

    <div class="container-fluid px-3 px-lg-4">

        <div class="d-flex align-items-center justify-content-between">

            <!-- BRAND -->
            <a
                href="<?= base_url('admin'); ?>"
                class="admin-brand text-decoration-none"
            >

                <div class="admin-brand-icon">
                    <i class="fas fa-hospital"></i>
                </div>

                <div class="admin-brand-text">

                    <span class="brand-main">
                        SUMMIT MEDICAL
                    </span>

                    <span class="brand-sub">
                        CENTER
                    </span>

                </div>

            </a>


            <!-- DESKTOP NAVIGATION -->
            <div class="admin-navigation d-none d-lg-flex align-items-center">

                <!-- DASHBOARD -->
                <a
                    href="<?= base_url('admin'); ?>"
                    class="admin-nav-link <?= ($this->uri->segment(1) == 'admin') ? 'active' : ''; ?>"
                >
                    <i class="fas fa-grid-2"></i>
                    <span>Dashboard</span>
                </a>


                <!-- CONTENT DROPDOWN -->
                <div class="dropdown">

                    <a
                        href="#"
                        class="admin-nav-link dropdown-toggle
                        <?= in_array($this->uri->segment(1), [
                            'news',
                            'doctors',
                            'specialties',
                            'schedule',
                            'services',
                            'facilities'
                        ]) ? 'active' : ''; ?>"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="fas fa-layer-group"></i>
                        <span>Content</span>
                    </a>


                    <ul class="dropdown-menu admin-dropdown">

                        <li class="dropdown-label">
                            CONTENT MANAGEMENT
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('news/admin_index'); ?>"
                            >
                                <span class="dropdown-icon">
                                    <i class="fas fa-newspaper"></i>
                                </span>

                                <span>
                                    <strong>Articles</strong>
                                    <small>Kelola berita</small>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('doctors/admin_index'); ?>"
                            >
                                <span class="dropdown-icon">
                                    <i class="fas fa-user-doctor"></i>
                                </span>

                                <span>
                                    <strong>Doctors</strong>
                                    <small>Kelola dokter</small>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('specialties/admin_index'); ?>"
                            >
                                <span class="dropdown-icon">
                                    <i class="fas fa-stethoscope"></i>
                                </span>

                                <span>
                                    <strong>Specialties</strong>
                                    <small>Spesialisasi dokter</small>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('schedule/admin_index'); ?>"
                            >
                                <span class="dropdown-icon">
                                    <i class="fas fa-calendar-days"></i>
                                </span>

                                <span>
                                    <strong>Schedule</strong>
                                    <small>Jadwal dokter</small>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('services/admin_index'); ?>"
                            >
                                <span class="dropdown-icon">
                                    <i class="fas fa-notes-medical"></i>
                                </span>

                                <span>
                                    <strong>Services</strong>
                                    <small>Layanan kesehatan</small>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('facilities/admin_index'); ?>"
                            >
                                <span class="dropdown-icon">
                                    <i class="fas fa-building"></i>
                                </span>

                                <span>
                                    <strong>Facilities</strong>
                                    <small>Fasilitas rumah sakit</small>
                                </span>
                            </a>
                        </li>

                    </ul>

                </div>


                <!-- INFORMATION DROPDOWN -->
                <div class="dropdown">

                    <a
                        href="#"
                        class="admin-nav-link dropdown-toggle
                        <?= in_array($this->uri->segment(1), [
                            'about',
                            'contact'
                        ]) ? 'active' : ''; ?>"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="fas fa-circle-info"></i>
                        <span>Information</span>
                    </a>


                    <ul class="dropdown-menu admin-dropdown">

                        <li class="dropdown-label">
                            WEBSITE INFORMATION
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('about/admin_index'); ?>"
                            >
                                <span class="dropdown-icon">
                                    <i class="fas fa-hospital"></i>
                                </span>

                                <span>
                                    <strong>About</strong>
                                    <small>Profil rumah sakit</small>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('contact/admin_index'); ?>"
                            >
                                <span class="dropdown-icon">
                                    <i class="fas fa-envelope"></i>
                                </span>

                                <span>
                                    <strong>Contact</strong>
                                    <small>Pesan pengunjung</small>
                                </span>
                            </a>
                        </li>

                    </ul>

                </div>


                <!-- VIEW WEBSITE -->
                <a
                    href="<?= base_url(); ?>"
                    target="_blank"
                    class="admin-nav-link"
                >
                    <i class="fas fa-arrow-up-right-from-square"></i>
                    <span>Website</span>
                </a>

            </div>


            <!-- USER AREA -->
            <div class="admin-user-area">

                <div class="dropdown">

                    <button
                        class="admin-user-button dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >

                        <div class="admin-avatar">
                            <i class="fas fa-user"></i>
                        </div>

                        <div class="admin-user-info d-none d-md-block">

                            <span class="admin-user-name">
                                <?= isset($user['name']) && !empty($user['name'])
                                    ? htmlspecialchars($user['name'])
                                    : 'Admin'; ?>
                            </span>

                            <span class="admin-user-role">
                                Administrator
                            </span>

                        </div>

                    </button>


                    <ul class="dropdown-menu dropdown-menu-end admin-user-dropdown">

                        <li class="user-dropdown-header">

                            <div class="admin-avatar large">
                                <i class="fas fa-user"></i>
                            </div>

                            <div>
                                <strong>
                                    <?= isset($user['name']) && !empty($user['name'])
                                        ? htmlspecialchars($user['name'])
                                        : 'Admin'; ?>
                                </strong>

                                <small>
                                    Administrator
                                </small>
                            </div>

                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('about/admin_index'); ?>"
                            >
                                <i class="fas fa-gear"></i>
                                Pengaturan
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url(); ?>"
                                target="_blank"
                            >
                                <i class="fas fa-globe"></i>
                                Lihat Website
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a
                                class="dropdown-item logout-item"
                                href="<?= base_url('auth/logout'); ?>"
                            >
                                <i class="fas fa-right-from-bracket"></i>
                                Logout
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</nav>


<!-- MOBILE NAVIGATION -->

<div class="mobile-navigation d-lg-none">

    <div class="container-fluid">

        <div class="row g-2">

            <div class="col-6">
                <a
                    href="<?= base_url('admin'); ?>"
                    class="mobile-nav-item <?= ($this->uri->segment(1) == 'admin') ? 'active' : ''; ?>"
                >
                    <i class="fas fa-grid-2"></i>
                    Dashboard
                </a>
            </div>

            <div class="col-6">

                <div class="dropdown w-100">

                    <button
                        class="mobile-nav-item w-100 dropdown-toggle"
                        data-bs-toggle="dropdown"
                    >
                        <i class="fas fa-layer-group"></i>
                        Content
                    </button>

                    <ul class="dropdown-menu admin-dropdown mobile-dropdown">

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('news/admin_index'); ?>"
                            >
                                <i class="fas fa-newspaper"></i>
                                Articles
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('doctors/admin_index'); ?>"
                            >
                                <i class="fas fa-user-doctor"></i>
                                Doctors
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('specialties/admin_index'); ?>"
                            >
                                <i class="fas fa-stethoscope"></i>
                                Specialties
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('schedule/admin_index'); ?>"
                            >
                                <i class="fas fa-calendar-days"></i>
                                Schedule
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('services/admin_index'); ?>"
                            >
                                <i class="fas fa-notes-medical"></i>
                                Services
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= base_url('facilities/admin_index'); ?>"
                            >
                                <i class="fas fa-building"></i>
                                Facilities
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class="col-6">

                <a
                    href="<?= base_url('about/admin_index'); ?>"
                    class="mobile-nav-item"
                >
                    <i class="fas fa-circle-info"></i>
                    About
                </a>

            </div>

            <div class="col-6">

                <a
                    href="<?= base_url(); ?>"
                    target="_blank"
                    class="mobile-nav-item"
                >
                    <i class="fas fa-globe"></i>
                    Website
                </a>

            </div>

        </div>

    </div>

</div>


<!-- Main Content -->
<main class="admin-main">