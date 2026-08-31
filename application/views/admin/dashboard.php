<div class="dashboard-page">

    <!-- =========================
         WELCOME HEADER
         ========================= -->

    <section class="dashboard-header">

        <div>

            <span class="dashboard-eyebrow">
                <i class="fas fa-sparkles"></i>
                ADMINISTRATION
            </span>

            <h1>
                Selamat datang kembali,
                <span>
                    <?= isset($user['name']) && !empty($user['name'])
                        ? htmlspecialchars($user['name'])
                        : 'Admin'; ?>
                </span>
            </h1>

            <p>
                Kelola informasi dan konten Summit Medical Center
                dari satu tempat.
            </p>

        </div>


        <div class="dashboard-date">

            <div class="date-icon">
                <i class="far fa-calendar"></i>
            </div>

            <div>

                <span>
                    Hari ini
                </span>

                <strong>
                    <?= date('d F Y'); ?>
                </strong>

            </div>

        </div>

    </section>


    <!-- =========================
         HERO DASHBOARD
         ========================= -->

    <section class="dashboard-hero">

        <div class="dashboard-hero-content">

            <span class="hero-label">
                SUMMIT MEDICAL CENTER
            </span>

            <h2>
                Kelola website rumah sakit
                <br>
                dengan lebih mudah.
            </h2>

            <p>
                Perbarui informasi dokter, layanan kesehatan,
                fasilitas, artikel, dan informasi rumah sakit
                melalui panel administrasi ini.
            </p>


            <div class="hero-actions">

                <a
                    href="<?= base_url('news/admin_index'); ?>"
                    class="hero-primary-button"
                >
                    <i class="fas fa-newspaper"></i>
                    Kelola Konten
                    <i class="fas fa-arrow-right"></i>
                </a>

                <a
                    href="<?= base_url(); ?>"
                    target="_blank"
                    class="hero-secondary-button"
                >
                    <i class="fas fa-arrow-up-right-from-square"></i>
                    Lihat Website
                </a>

            </div>

        </div>


        <div class="dashboard-hero-decoration">

            <div class="hero-circle circle-one"></div>
            <div class="hero-circle circle-two"></div>

            <div class="hero-medical-icon">
                <i class="fas fa-heart-pulse"></i>
            </div>

            <div class="hero-plus plus-one">
                +
            </div>

            <div class="hero-plus plus-two">
                +
            </div>

        </div>

    </section>


    <!-- =========================
         OVERVIEW
         ========================= -->

    <section class="dashboard-section">

        <div class="section-heading">

            <div>

                <span>
                    OVERVIEW
                </span>

                <h2>
                    Website Overview
                </h2>

            </div>

            <p>
                Ringkasan pengelolaan website
                Summit Medical Center.
            </p>

        </div>


        <div class="overview-grid">


            <!-- ARTICLES -->

            <a
                href="<?= base_url('news/admin_index'); ?>"
                class="overview-item"
            >

                <div class="overview-icon article-icon">
                    <i class="fas fa-newspaper"></i>
                </div>

                <div class="overview-content">

                    <span>
                        ARTICLES
                    </span>

                    <strong>
                        <?= isset($total_articles)
                            ? $total_articles
                            : 0; ?>
                    </strong>

                    <small>
                        Artikel tersedia
                    </small>

                </div>

                <div class="overview-arrow">
                    <i class="fas fa-arrow-up-right-from-square"></i>
                </div>

            </a>


            <!-- DOCTORS -->

            <a
                href="<?= base_url('doctors/admin_index'); ?>"
                class="overview-item"
            >

                <div class="overview-icon doctor-icon">
                    <i class="fas fa-user-doctor"></i>
                </div>

                <div class="overview-content">

                    <span>
                        DOCTORS
                    </span>

                    <strong class="overview-action">
                        Kelola
                    </strong>

                    <small>
                        Profil dokter
                    </small>

                </div>

                <div class="overview-arrow">
                    <i class="fas fa-arrow-up-right-from-square"></i>
                </div>

            </a>


            <!-- SERVICES -->

            <a
                href="<?= base_url('services/admin_index'); ?>"
                class="overview-item"
            >

                <div class="overview-icon service-icon">
                    <i class="fas fa-notes-medical"></i>
                </div>

                <div class="overview-content">

                    <span>
                        SERVICES
                    </span>

                    <strong class="overview-action">
                        Kelola
                    </strong>

                    <small>
                        Layanan kesehatan
                    </small>

                </div>

                <div class="overview-arrow">
                    <i class="fas fa-arrow-up-right-from-square"></i>
                </div>

            </a>


            <!-- FACILITIES -->

            <a
                href="<?= base_url('facilities/admin_index'); ?>"
                class="overview-item"
            >

                <div class="overview-icon facility-icon">
                    <i class="fas fa-building"></i>
                </div>

                <div class="overview-content">

                    <span>
                        FACILITIES
                    </span>

                    <strong class="overview-action">
                        Kelola
                    </strong>

                    <small>
                        Fasilitas rumah sakit
                    </small>

                </div>

                <div class="overview-arrow">
                    <i class="fas fa-arrow-up-right-from-square"></i>
                </div>

            </a>


        </div>

    </section>


    <!-- =========================
         MANAGEMENT AREA
         ========================= -->

    <section class="dashboard-management">

        <!-- CONTENT MANAGEMENT -->

        <div class="management-card">

            <div class="management-card-header">

                <div>

                    <span>
                        CONTENT
                    </span>

                    <h3>
                        Content Management
                    </h3>

                </div>

                <div class="management-header-icon">
                    <i class="fas fa-layer-group"></i>
                </div>

            </div>


            <p class="management-description">
                Kelola seluruh konten yang ditampilkan
                pada website publik Summit Medical Center.
            </p>


            <div class="management-links">

                <a
                    href="<?= base_url('news/admin_index'); ?>"
                >
                    <div class="management-link-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>

                    <div>
                        <strong>Articles</strong>
                        <small>Berita & informasi</small>
                    </div>

                    <i class="fas fa-arrow-right"></i>
                </a>


                <a
                    href="<?= base_url('doctors/admin_index'); ?>"
                >
                    <div class="management-link-icon">
                        <i class="fas fa-user-doctor"></i>
                    </div>

                    <div>
                        <strong>Doctors</strong>
                        <small>Profil tenaga medis</small>
                    </div>

                    <i class="fas fa-arrow-right"></i>
                </a>


                <a
                    href="<?= base_url('specialties/admin_index'); ?>"
                >
                    <div class="management-link-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>

                    <div>
                        <strong>Specialties</strong>
                        <small>Spesialisasi dokter</small>
                    </div>

                    <i class="fas fa-arrow-right"></i>
                </a>


                <a
                    href="<?= base_url('schedule/admin_index'); ?>"
                >
                    <div class="management-link-icon">
                        <i class="fas fa-calendar-days"></i>
                    </div>

                    <div>
                        <strong>Schedule</strong>
                        <small>Jadwal dokter</small>
                    </div>

                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </div>


        <!-- WEBSITE INFORMATION -->

        <div class="management-card">

            <div class="management-card-header">

                <div>

                    <span>
                        INFORMATION
                    </span>

                    <h3>
                        Website Information
                    </h3>

                </div>

                <div class="management-header-icon">
                    <i class="fas fa-circle-info"></i>
                </div>

            </div>


            <p class="management-description">
                Atur informasi utama rumah sakit yang
                ditampilkan kepada pengunjung website.
            </p>


            <div class="management-links">

                <a
                    href="<?= base_url('services/admin_index'); ?>"
                >
                    <div class="management-link-icon">
                        <i class="fas fa-notes-medical"></i>
                    </div>

                    <div>
                        <strong>Services</strong>
                        <small>Layanan kesehatan</small>
                    </div>

                    <i class="fas fa-arrow-right"></i>
                </a>


                <a
                    href="<?= base_url('facilities/admin_index'); ?>"
                >
                    <div class="management-link-icon">
                        <i class="fas fa-building"></i>
                    </div>

                    <div>
                        <strong>Facilities</strong>
                        <small>Fasilitas rumah sakit</small>
                    </div>

                    <i class="fas fa-arrow-right"></i>
                </a>


                <a
                    href="<?= base_url('about/admin_index'); ?>"
                >
                    <div class="management-link-icon">
                        <i class="fas fa-hospital"></i>
                    </div>

                    <div>
                        <strong>About</strong>
                        <small>Profil rumah sakit</small>
                    </div>

                    <i class="fas fa-arrow-right"></i>
                </a>


                <a
                    href="<?= base_url('contact/admin_index'); ?>"
                >
                    <div class="management-link-icon">
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div>
                        <strong>Contact</strong>
                        <small>Pesan pengunjung</small>
                    </div>

                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </section>


    <!-- =========================
         BOTTOM MESSAGE
         ========================= -->

    <section class="dashboard-bottom">

        <div class="bottom-icon">
            <i class="fas fa-shield-heart"></i>
        </div>

        <div>

            <strong>
                Summit Medical Center
            </strong>

            <p>
                Pastikan informasi yang ditampilkan
                kepada pasien selalu akurat dan terbaru.
            </p>

        </div>

        <a
            href="<?= base_url(); ?>"
            target="_blank"
        >
            Buka Website
            <i class="fas fa-arrow-right"></i>
        </a>

    </section>

</div>