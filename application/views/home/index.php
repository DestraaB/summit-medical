
<!-- =========================================================
     SUMMIT MEDICAL CENTER
     HOME / INDEX
     ========================================================= -->

<!-- =========================
     HERO SECTION
     ========================= -->
<section class="container py-4 py-lg-5">

    <div class="row align-items-center g-4">

        <!-- HERO CONTENT -->
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">

            <div class="mb-3">
                <span class="badge rounded-pill px-3 py-2"
                    style="background-color: #eaf2ff; color: #0046b8; font-weight: 600;">
                    <i class="fas fa-hospital me-2"></i>
                    Summit Medical Center
                </span>
            </div>

            <h1 class="fw-bold mb-4"
                style="
                    font-size: clamp(2.5rem, 5vw, 4.5rem);
                    line-height: 1.08;
                    letter-spacing: -2px;
                    color: #102a43;
                ">
                Pelayanan Kesehatan
                <span style="color: #0046b8;">
                    Terpercaya
                </span>
                untuk Anda.
            </h1>

            <p class="text-muted mb-4"
                style="
                    font-size: 1.08rem;
                    line-height: 1.8;
                    max-width: 570px;
                ">
                Kami hadir memberikan pelayanan kesehatan yang profesional,
                aman, nyaman, dan berorientasi pada kebutuhan setiap pasien.
            </p>
    

            <!-- HERO BUTTON -->
            <div class="d-flex flex-wrap gap-2">

                <a href="<?= base_url('contact'); ?>"
                   class="btn text-white rounded-pill px-4 py-3"
                   style="background-color: #0046b8;">

                    <i class="fas fa-calendar-check me-2"></i>
                    Buat Janji
                </a>

                <a href="<?= base_url('doctors'); ?>"
                   class="btn btn-outline-primary rounded-pill px-4 py-3">

                    <i class="fas fa-user-md me-2"></i>
                    Lihat Dokter
                </a>

            </div>

        </div>


        <!-- HERO IMAGE -->
        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900">

            <div class="position-relative">

                <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1000&q=85"
                     alt="Summit Medical Center"
                     class="img-fluid w-100"
                     style="
                        height: 520px;
                        object-fit: cover;
                        border-radius: 30px;
                     ">

                <!-- FLOATING CARD -->
                <div class="position-absolute bg-white shadow-lg p-3 p-md-4"
                     style="
                        left: -20px;
                        bottom: 25px;
                        border-radius: 18px;
                        max-width: 260px;
                     ">

                    <div class="d-flex align-items-center">

                        <div class="d-flex align-items-center justify-content-center me-3"
                             style="
                                width: 50px;
                                height: 50px;
                                border-radius: 14px;
                                background-color: #eaf2ff;
                                color: #0046b8;
                             ">

                            <i class="fas fa-heartbeat fa-lg"></i>

                        </div>

                        <div>
                            <small class="text-muted d-block">
                                Pelayanan
                            </small>

                            <strong>
                                Profesional & Terpercaya
                            </strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     QUICK ACCESS
     ========================= -->
<section class="container py-4">

    <div class="row g-3">

        <div class="col-6 col-lg-3"
             data-aos="fade-up"
             data-aos-delay="100">

            <a href="<?= base_url('doctors'); ?>"
               class="text-decoration-none">

                <div class="p-4 h-100 bg-white shadow-sm"
                     style="
                        border-radius: 18px;
                        border: 1px solid #eef2f7;
                     ">

                    <i class="fas fa-user-md fa-2x mb-3"
                       style="color: #0046b8;"></i>

                    <h5 class="fw-bold text-dark">
                        Dokter
                    </h5>

                    <p class="text-muted small mb-0">
                        Temukan dokter dan jadwal pelayanan.
                    </p>

                </div>

            </a>

        </div>


        <div class="col-6 col-lg-3"
             data-aos="fade-up"
             data-aos-delay="200">

            <a href="<?= base_url('services'); ?>"
               class="text-decoration-none">

                <div class="p-4 h-100 bg-white shadow-sm"
                     style="
                        border-radius: 18px;
                        border: 1px solid #eef2f7;
                     ">

                    <i class="fas fa-stethoscope fa-2x mb-3"
                       style="color: #0046b8;"></i>

                    <h5 class="fw-bold text-dark">
                        Layanan
                    </h5>

                    <p class="text-muted small mb-0">
                        Beragam layanan kesehatan untuk Anda.
                    </p>

                </div>

            </a>

        </div>


        <div class="col-6 col-lg-3"
             data-aos="fade-up"
             data-aos-delay="300">

            <a href="<?= base_url('facilities'); ?>"
               class="text-decoration-none">

                <div class="p-4 h-100 bg-white shadow-sm"
                     style="
                        border-radius: 18px;
                        border: 1px solid #eef2f7;
                     ">

                    <i class="fas fa-hospital-alt fa-2x mb-3"
                       style="color: #0046b8;"></i>

                    <h5 class="fw-bold text-dark">
                        Fasilitas
                    </h5>

                    <p class="text-muted small mb-0">
                        Fasilitas modern untuk kenyamanan pasien.
                    </p>

                </div>

            </a>

        </div>


        <div class="col-6 col-lg-3"
             data-aos="fade-up"
             data-aos-delay="400">

            <a href="<?= base_url('contact'); ?>"
               class="text-decoration-none">

                <div class="p-4 h-100 bg-white shadow-sm"
                     style="
                        border-radius: 18px;
                        border: 1px solid #eef2f7;
                     ">

                    <i class="fas fa-phone-alt fa-2x mb-3"
                       style="color: #0046b8;"></i>

                    <h5 class="fw-bold text-dark">
                        Hubungi Kami
                    </h5>

                    <p class="text-muted small mb-0">
                        Hubungi kami untuk informasi lebih lanjut.
                    </p>

                </div>

            </a>

        </div>

    </div>

</section>


<!-- =========================
     ABOUT SECTION
     ========================= -->
<section class="container py-5 mt-4">

    <div class="row align-items-center g-5">

        <!-- IMAGE -->
        <div class="col-lg-6"
             data-aos="fade-right">

            <div class="position-relative">

                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=900&q=85"
                     alt="Pelayanan Summit Medical Center"
                     class="img-fluid w-100"
                     style="
                        height: 430px;
                        object-fit: cover;
                        border-radius: 25px;
                     ">

                <div class="position-absolute bg-white shadow p-3"
                     style="
                        right: 20px;
                        bottom: 20px;
                        border-radius: 16px;
                     ">

                    <div class="d-flex align-items-center">

                        <i class="fas fa-shield-alt fa-2x me-3"
                           style="color: #0046b8;"></i>

                        <div>
                            <strong class="d-block">
                                Aman & Terpercaya
                            </strong>

                            <small class="text-muted">
                                Mengutamakan keselamatan pasien
                            </small>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- CONTENT -->
        <div class="col-lg-6"
             data-aos="fade-left">

            <span class="badge rounded-pill px-3 py-2 mb-3"
                  style="
                    background-color: #eaf2ff;
                    color: #0046b8;
                  ">

                <i class="fas fa-asterisk me-2"></i>
                Tentang Kami

            </span>

            <h2 class="fw-bold mb-4"
                style="
                    font-size: 2.7rem;
                    line-height: 1.15;
                    color: #102a43;
                ">

                Kesehatan Anda adalah
                <span style="color:#0046b8;">
                    prioritas kami.
                </span>

            </h2>

            <p class="text-muted"
               style="line-height: 1.8;">

                Summit Medical Center berkomitmen menghadirkan pelayanan
                kesehatan yang berkualitas dengan dukungan tenaga medis
                profesional, fasilitas yang memadai, serta lingkungan yang
                nyaman bagi pasien dan keluarga.

            </p>

            <p class="text-muted mb-4"
               style="line-height: 1.8;">

                Kami terus berkembang untuk memberikan pengalaman pelayanan
                kesehatan yang lebih baik bagi masyarakat.

            </p>

            <a href="<?= base_url('about'); ?>"
               class="btn text-white rounded-pill px-4 py-3"
               style="background-color:#0046b8;">

                Tentang Rumah Sakit
                <i class="fas fa-arrow-right ms-2"></i>

            </a>

        </div>

    </div>

</section>


<!-- =========================
     SERVICES SECTION
     ========================= -->
<section class="container py-5">

    <div class="d-flex flex-column flex-md-row
                justify-content-between
                align-items-md-end
                mb-4"
         data-aos="fade-up">

        <div>

            <span class="badge rounded-pill px-3 py-2 mb-3"
                  style="
                    background-color: #eaf2ff;
                    color: #0046b8;
                  ">

                <i class="fas fa-asterisk me-2"></i>
                Layanan Kami

            </span>

            <h2 class="fw-bold mb-2"
                style="
                    font-size: 2.6rem;
                    color:#102a43;
                ">

                Layanan Kesehatan
                <br>

                <span style="color:#0046b8;">
                    untuk Kebutuhan Anda
                </span>

            </h2>

        </div>


        <div class="mt-3 mt-md-0">

            <a href="<?= base_url('services'); ?>"
               class="btn btn-outline-primary rounded-pill px-4">

                Lihat Semua Layanan
                <i class="fas fa-arrow-right ms-2"></i>

            </a>

        </div>

    </div>


    <div class="row g-4">

        <?php if (!empty($services)) : ?>

            <?php foreach (array_slice($services, 0, 6) as $index => $service) : ?>

                <div class="col-md-6 col-lg-4"
                     data-aos="fade-up"
                     data-aos-delay="<?= $index * 100; ?>">

                    <a href="<?= base_url('services/detail/' . $service->id); ?>"
                       class="text-decoration-none">

                        <div class="h-100 p-4 bg-white"
                             style="
                                border-radius: 20px;
                                border: 1px solid #edf1f7;
                                transition: all .3s ease;
                             ">

                            <div class="d-flex align-items-center
                                        justify-content-center mb-4"
                                 style="
                                    width: 60px;
                                    height: 60px;
                                    border-radius: 16px;
                                    background-color:#eaf2ff;
                                    color:#0046b8;
                                 ">

                                <i class="fas fa-stethoscope fa-lg"></i>

                            </div>

                            <h4 class="fw-bold text-dark mb-3">

                                <?= htmlspecialchars($service->name); ?>

                            </h4>

                            <p class="text-muted mb-3"
                               style="
                                    font-size:.92rem;
                                    line-height:1.7;
                               ">

                                <?= substr(
                                    htmlspecialchars($service->description),
                                    0,
                                    110
                                ); ?>

                                <?php if (strlen($service->description) > 110) : ?>
                                    ...
                                <?php endif; ?>

                            </p>

                            <span style="
                                color:#0046b8;
                                font-weight:600;
                            ">

                                Selengkapnya
                                <i class="fas fa-arrow-right ms-1"></i>

                            </span>

                        </div>

                    </a>

                </div>

            <?php endforeach; ?>

        <?php else : ?>

            <div class="col-12">

                <div class="text-center py-5">

                    <i class="fas fa-info-circle fa-2x text-muted mb-3"></i>

                    <p class="text-muted mb-0">
                        Belum ada layanan yang tersedia.
                    </p>

                </div>

            </div>

        <?php endif; ?>

    </div>

</section>


<!-- =========================
     WHY US
     ========================= -->
<section class="container py-5">

    <div class="p-4 p-md-5"
         style="
            background-color:#f5f8fc;
            border-radius:30px;
         ">

        <div class="row align-items-center g-5">

            <div class="col-lg-5"
                 data-aos="fade-right">

                <span class="badge rounded-pill px-3 py-2 mb-3"
                      style="
                        background-color:#dceaff;
                        color:#0046b8;
                      ">

                    <i class="fas fa-star me-2"></i>
                    Mengapa Kami

                </span>

                <h2 class="fw-bold mb-3"
                    style="
                        font-size:2.5rem;
                        color:#102a43;
                    ">

                    Pelayanan yang
                    <span style="color:#0046b8;">
                        mengutamakan Anda.
                    </span>

                </h2>

                <p class="text-muted"
                   style="line-height:1.8;">

                    Kami menggabungkan tenaga profesional,
                    pelayanan berempati, dan fasilitas yang mendukung
                    untuk menciptakan pengalaman kesehatan yang lebih baik.

                </p>

            </div>


            <div class="col-lg-7">

                <div class="row g-4">

                    <div class="col-md-6"
                         data-aos="fade-up">

                        <div class="bg-white p-4 h-100"
                             style="
                                border-radius:18px;
                                box-shadow:0 5px 20px rgba(0,0,0,.04);
                             ">

                            <i class="fas fa-user-md fa-2x mb-3"
                               style="color:#0046b8;"></i>

                            <h5 class="fw-bold">
                                Tenaga Profesional
                            </h5>

                            <p class="text-muted small mb-0">
                                Didukung tenaga medis yang kompeten
                                dan berpengalaman.
                            </p>

                        </div>

                    </div>


                    <div class="col-md-6"
                         data-aos="fade-up"
                         data-aos-delay="100">

                        <div class="bg-white p-4 h-100"
                             style="
                                border-radius:18px;
                                box-shadow:0 5px 20px rgba(0,0,0,.04);
                             ">

                            <i class="fas fa-heartbeat fa-2x mb-3"
                               style="color:#0046b8;"></i>

                            <h5 class="fw-bold">
                                Berorientasi Pasien
                            </h5>

                            <p class="text-muted small mb-0">
                                Setiap pelayanan berfokus pada
                                kebutuhan dan kenyamanan pasien.
                            </p>

                        </div>

                    </div>


                    <div class="col-md-6"
                         data-aos="fade-up"
                         data-aos-delay="200">

                        <div class="bg-white p-4 h-100"
                             style="
                                border-radius:18px;
                                box-shadow:0 5px 20px rgba(0,0,0,.04);
                             ">

                            <i class="fas fa-hospital fa-2x mb-3"
                               style="color:#0046b8;"></i>

                            <h5 class="fw-bold">
                                Fasilitas Memadai
                            </h5>

                            <p class="text-muted small mb-0">
                                Fasilitas kesehatan yang mendukung
                                kebutuhan pelayanan pasien.
                            </p>

                        </div>

                    </div>


                    <div class="col-md-6"
                         data-aos="fade-up"
                         data-aos-delay="300">

                        <div class="bg-white p-4 h-100"
                             style="
                                border-radius:18px;
                                box-shadow:0 5px 20px rgba(0,0,0,.04);
                             ">

                            <i class="fas fa-shield-alt fa-2x mb-3"
                               style="color:#0046b8;"></i>

                            <h5 class="fw-bold">
                                Aman & Nyaman
                            </h5>

                            <p class="text-muted small mb-0">
                                Lingkungan pelayanan yang aman,
                                nyaman, dan bersahabat.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     FACILITY SHOWCASE
     ========================= -->
<section class="container py-5">

    <div class="row align-items-center g-5">

        <div class="col-lg-6"
             data-aos="fade-right">

            <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?auto=format&fit=crop&w=1000&q=85"
                 alt="Fasilitas Rumah Sakit"
                 class="img-fluid w-100"
                 style="
                    height:420px;
                    object-fit:cover;
                    border-radius:25px;
                 ">

        </div>


        <div class="col-lg-6"
             data-aos="fade-left">

            <span class="badge rounded-pill px-3 py-2 mb-3"
                  style="
                    background-color:#eaf2ff;
                    color:#0046b8;
                  ">

                <i class="fas fa-hospital-alt me-2"></i>
                Fasilitas

            </span>

            <h2 class="fw-bold mb-4"
                style="
                    font-size:2.6rem;
                    line-height:1.15;
                    color:#102a43;
                ">

                Lingkungan nyaman
                untuk mendukung
                <span style="color:#0046b8;">
                    proses pemulihan.
                </span>

            </h2>

            <p class="text-muted mb-4"
               style="line-height:1.8;">

                Kami menyediakan fasilitas yang dirancang untuk
                memberikan kenyamanan dan mendukung kebutuhan
                pelayanan kesehatan pasien.

            </p>

            <div class="mb-3">

                <div class="d-flex align-items-center mb-3">

                    <i class="fas fa-check-circle me-3"
                       style="color:#0046b8;"></i>

                    <span>
                        Lingkungan rumah sakit yang nyaman
                    </span>

                </div>

                <div class="d-flex align-items-center mb-3">

                    <i class="fas fa-check-circle me-3"
                       style="color:#0046b8;"></i>

                    <span>
                        Fasilitas pelayanan yang memadai
                    </span>

                </div>

                <div class="d-flex align-items-center">

                    <i class="fas fa-check-circle me-3"
                       style="color:#0046b8;"></i>

                    <span>
                        Mendukung kebutuhan pasien dan keluarga
                    </span>

                </div>

            </div>

            <a href="<?= base_url('facilities'); ?>"
               class="btn text-white rounded-pill px-4 py-3 mt-3"
               style="background-color:#0046b8;">

                Lihat Fasilitas
                <i class="fas fa-arrow-right ms-2"></i>

            </a>

        </div>

    </div>

</section>


<!-- =========================
     DOCTOR CTA
     ========================= -->
<section class="container py-5">

    <div class="row align-items-center g-4"
         style="
            background-color:#0046b8;
            border-radius:30px;
            padding:45px;
         ">

        <div class="col-lg-8"
             data-aos="fade-right">

            <span class="badge rounded-pill border border-light
                         text-white px-3 py-2 mb-3">

                <i class="fas fa-user-md me-2"></i>
                Tim Medis Kami

            </span>

            <h2 class="text-white fw-bold mb-3"
                style="
                    font-size:2.5rem;
                    line-height:1.2;
                ">

                Temukan dokter yang
                sesuai dengan kebutuhan Anda.

            </h2>

            <p class="text-white mb-0"
               style="opacity:.9; max-width:650px;">

                Lihat daftar dokter dan temukan informasi
                mengenai tenaga medis yang tersedia di Summit Medical Center.

            </p>

        </div>
    </div>

</section>


<!-- =========================
     PARTNERS
     ========================= -->
<section class="container py-5">

    <div class="text-center mb-5"
         data-aos="fade-up">

        <span class="badge rounded-pill px-3 py-2 mb-3"
              style="
                background-color:#eaf2ff;
                color:#0046b8;
              ">

            <i class="fas fa-handshake me-2"></i>
            Mitra Kami

        </span>

        <h2 class="fw-bold"
            style="
                font-size:2.5rem;
                color:#102a43;
            ">

            Bersama membangun
            <span style="color:#0046b8;">
                kesehatan yang lebih baik.
            </span>

        </h2>

        <p class="text-muted">
            Kami terbuka untuk membangun kerja sama
            yang memberikan manfaat bagi masyarakat.
        </p>

    </div>


    <div class="row g-3 justify-content-center">

        <div class="col-6 col-md-4 col-lg-2"
             data-aos="fade-up">

            <div class="bg-white border rounded-4 p-4 text-center h-100">

                <i class="fas fa-shield-alt fa-2x mb-2"
                   style="color:#0046b8;"></i>

                <small class="fw-bold d-block">
                    Asuransi
                </small>

            </div>

        </div>


        <div class="col-6 col-md-4 col-lg-2"
             data-aos="fade-up"
             data-aos-delay="100">

            <div class="bg-white border rounded-4 p-4 text-center h-100">

                <i class="fas fa-heartbeat fa-2x mb-2"
                   style="color:#0046b8;"></i>

                <small class="fw-bold d-block">
                    BPJS Kesehatan
                </small>

            </div>

        </div>


        <div class="col-6 col-md-4 col-lg-2"
             data-aos="fade-up"
             data-aos-delay="200">

            <div class="bg-white border rounded-4 p-4 text-center h-100">

                <i class="fas fa-building fa-2x mb-2"
                   style="color:#0046b8;"></i>

                <small class="fw-bold d-block">
                    Mandiri Inhealth
                </small>

            </div>

        </div>


        <div class="col-6 col-md-4 col-lg-2"
             data-aos="fade-up"
             data-aos-delay="300">

            <div class="bg-white border rounded-4 p-4 text-center h-100">

                <i class="fas fa-train fa-2x mb-2"
                   style="color:#0046b8;"></i>

                <small class="fw-bold d-block">
                    KAI Medika
                </small>

            </div>

        </div>


        <div class="col-6 col-md-4 col-lg-2"
             data-aos="fade-up"
             data-aos-delay="400">

            <div class="bg-white border rounded-4 p-4 text-center h-100">

                <i class="fas fa-hands-helping fa-2x mb-2"
                   style="color:#0046b8;"></i>

                <small class="fw-bold d-block">
                    Takaful
                </small>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     FINAL CTA
     ========================= -->
<section class="container py-5 mb-5">

    <div class="text-center p-5"
         data-aos="zoom-in"
         style="
            background:
                linear-gradient(
                    135deg,
                    #003b9f 0%,
                    #005bd4 100%
                );
            border-radius:30px;
         ">

        <div class="mb-3">

            <i class="fas fa-heartbeat fa-2x text-white"></i>

        </div>

        <h2 class="text-white fw-bold mb-3"
            style="
                font-size:2.7rem;
                line-height:1.2;
            ">

            Saatnya menjaga kesehatan
            Anda dan keluarga.

        </h2>

        <p class="text-white mb-4"
           style="
                opacity:.9;
                max-width:650px;
                margin-left:auto;
                margin-right:auto;
                line-height:1.7;
           ">

            Dapatkan pelayanan kesehatan yang profesional,
            nyaman, dan terpercaya bersama Summit Medical Center.

        </p>

        <div class="d-flex flex-wrap
                    justify-content-center
                    gap-2">

            <a href="<?= base_url('contact'); ?>"
               class="btn btn-light rounded-pill px-4 py-3 fw-bold">

                <i class="fas fa-calendar-check me-2"></i>
                Buat Janji Sekarang

            </a>

            <a href="<?= base_url('services'); ?>"
               class="btn btn-outline-light rounded-pill px-4 py-3">

                Lihat Layanan

            </a>

        </div>

    </div>

</section>

