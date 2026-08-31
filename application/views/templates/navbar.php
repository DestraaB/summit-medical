
<!-- =========================================================
     SUMMIT MEDICAL CENTER
     PUBLIC NAVBAR
     ========================================================= -->

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top site-navbar">

    <div class="container">

        <!-- =========================
             LOGO
             ========================= -->
        <a class="navbar-brand d-flex align-items-center"
           href="<?= base_url(); ?>">

            <div class="brand-icon me-2">

                <i class="fas fa-heartbeat"></i>

            </div>

            <div class="brand-text">

                <span class="brand-title">
                    SUMMIT MEDICAL
                </span>

                <span class="brand-subtitle">
                    CENTER
                </span>

            </div>

        </a>


        <!-- =========================
             MOBILE TOGGLE
             ========================= -->
        <button
            class="navbar-toggler border-0 shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- =========================
             NAVIGATION
             ========================= -->
        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">


                <!-- HOME -->
                <li class="nav-item">

                    <a
                        class="nav-link <?= ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home') ? 'active' : ''; ?>"
                        href="<?= base_url(); ?>">

                        Home

                    </a>

                </li>


                <!-- ABOUT -->
                <li class="nav-item">

                    <a
                        class="nav-link <?= ($this->uri->segment(1) == 'about') ? 'active' : ''; ?>"
                        href="<?= base_url('about'); ?>">

                        About

                    </a>

                </li>


                <!-- SERVICES -->
                <li class="nav-item">

                    <a
                        class="nav-link <?= ($this->uri->segment(1) == 'services') ? 'active' : ''; ?>"
                        href="<?= base_url('services'); ?>">

                        Services

                    </a>

                </li>


                <!-- SCHEDULE -->
                <li class="nav-item">

                    <a
                        class="nav-link <?= ($this->uri->segment(1) == 'schedule') ? 'active' : ''; ?>"
                        href="<?= base_url('schedule'); ?>">

                        Schedule

                    </a>

                </li>


                <!-- CONTACT -->
                <li class="nav-item">

                    <a
                        class="nav-link <?= ($this->uri->segment(1) == 'contact') ? 'active' : ''; ?>"
                        href="<?= base_url('contact'); ?>">

                        Contact

                    </a>

                </li>


                <!-- =========================
                     KONTEN
                     ========================= -->
                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle <?= in_array($this->uri->segment(1), ['news', 'doctors', 'facilities', 'specialties']) ? 'active' : ''; ?>"
                        href="#"
                        id="kontenDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">

                        Konten

                    </a>


                    <ul
                        class="dropdown-menu border-0 shadow"
                        aria-labelledby="kontenDropdown">


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?= base_url('news'); ?>">

                                <span class="dropdown-icon">
                                    <i class="fas fa-newspaper"></i>
                                </span>

                                <span>
                                    Articles
                                </span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?= base_url('doctors'); ?>">

                                <span class="dropdown-icon">
                                    <i class="fas fa-user-md"></i>
                                </span>

                                <span>
                                    Doctors
                                </span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?= base_url('specialties'); ?>">

                                <span class="dropdown-icon">
                                    <i class="fas fa-stethoscope"></i>
                                </span>

                                <span>
                                    Specialties
                                </span>

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?= base_url('facilities'); ?>">

                                <span class="dropdown-icon">
                                    <i class="fas fa-hospital"></i>
                                </span>

                                <span>
                                    Facilities
                                </span>

                            </a>

                        </li>

                         <li>

                            <a
                                class="dropdown-item"
                                href="<?= base_url('auth'); ?>">

                                <span class="dropdown-icon">
                                    <i class="fas fa-user-lock me-1"></i>
                                </span>

                                <span>
                                    login Admin
                                </span>

                            </a>

                        </li>
                        

                    </ul>
                    

                </li>
                <!-- SYSTEM LOGIN -->




                <!-- =========================
                     CONTACT CTA
                     ========================= -->
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">

                    <a
                        href="<?= base_url('contact'); ?>"
                        class="navbar-cta">

                        <i class="fas fa-calendar-check me-2"></i>

                        Buat Janji

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>

