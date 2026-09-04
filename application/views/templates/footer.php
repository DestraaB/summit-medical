
<!-- =========================================================
     SUMMIT MEDICAL CENTER
     FOOTER
     ========================================================= -->

</main>


<footer class="site-footer">

    <div class="container">

        <div class="row g-5">


            <!-- =========================
                 BRAND
                 ========================= -->
            <div class="col-lg-4 col-md-6">

                <a
                    href="<?= base_url(); ?>"
                    class="footer-brand d-inline-flex align-items-center text-decoration-none mb-4">

                    <div class="footer-brand-icon me-3">

                        <i class="fas fa-heartbeat"></i>

                    </div>

                    <div>

                        <span class="footer-brand-title">
                            SUMMIT MEDICAL
                        </span>

                        <span class="footer-brand-subtitle">
                            CENTER
                        </span>

                    </div>

                </a>


                <p class="footer-description">

                    Summit Medical Center berkomitmen memberikan
                    pelayanan kesehatan yang profesional, aman,
                    nyaman, dan berorientasi pada kebutuhan pasien.

                </p>


                <!-- SOCIAL MEDIA -->
                <div class="footer-social">

                    <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F%3Flocale%3Did_ID"
                       aria-label="Facebook">

                        <i class="fab fa-facebook-f"></i>

                    </a>


                    <a href="https://www.instagram.com/dstrab_"
                       aria-label="Instagram">

                        <i class="fab fa-instagram"></i>

                    </a>


                    <a href="https://www.youtube.com/@TirtaPengPengPeng"
                       aria-label="YouTube">

                        <i class="fab fa-youtube"></i>

                    </a>


                    <a href="https://x.com/?lang=id"
                       aria-label="Twitter">

                        <i class="fab fa-twitter"></i>

                    </a>

                </div>

            </div>


            <!-- =========================
                 NAVIGASI
                 ========================= -->
            <div class="col-lg-2 col-md-6">

                <h6 class="footer-heading">
                    Navigasi
                </h6>

                <ul class="footer-links">

                    <li>
                        <a href="<?= base_url(); ?>">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('about'); ?>">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('services'); ?>">
                            Services
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('contact'); ?>">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>


            <!-- =========================
                 LAYANAN
                 ========================= -->
            <div class="col-lg-3 col-md-6">

                <h6 class="footer-heading">
                    Informasi
                </h6>

                <ul class="footer-links">

                    <li>
                        <a href="<?= base_url('doctors'); ?>">
                            Jadwal Dokter
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('services'); ?>">
                            Layanan Kesehatan
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('facilities'); ?>">
                            Fasilitas
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('news'); ?>">
                            Artikel
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('specialties'); ?>">
                            Spesialisasi
                        </a>
                    </li>

                </ul>

            </div>


            <!-- =========================
                 KONTAK
                 ========================= -->
            <div class="col-lg-3 col-md-6">

                <h6 class="footer-heading">
                    Hubungi Kami
                </h6>


                <div class="footer-contact-item">

                    <div class="footer-contact-icon">

                        <i class="fas fa-map-marker-alt"></i>

                    </div>

                    <p>
                        Jl. Pangeran Mangkubumi No. 123,
                        Gowongan, Jetis,
                        Kota Yogyakarta,
                        DI Yogyakarta 55232
                    </p>

                </div>


                <div class="footer-contact-item">

                    <div class="footer-contact-icon">

                        <i class="fas fa-phone"></i>

                    </div>

                    <p>
                        Informasi & Pelayanan
                    </p>

                </div>


                <div class="footer-contact-item">

                    <div class="footer-contact-icon">

                        <i class="fas fa-envelope"></i>

                    </div>

                    <p>
                        Email Rumah Sakit
                    </p>

                </div>

            </div>

        </div>


        <!-- =========================
             FOOTER BOTTOM
             ========================= -->
        <div class="footer-bottom">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <p class="mb-0">

                        &copy; <?= date('Y'); ?>
                        Summit Medical Center.

                        All rights reserved.

                    </p>

                </div>


                <div class="col-md-6 text-md-end mt-2 mt-md-0">

                    <span class="footer-tagline">

                        Caring with Professionalism

                    </span>

                </div>

            </div>

        </div>

    </div>

</footer>


<!-- =========================
     BOOTSTRAP JS
     ========================= -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- =========================
     AOS
     ========================= -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>

    AOS.init({

        duration: 800,

        once: true,

        offset: 60,

        easing: 'ease-out-cubic'

    });

</script>


</body>

</html>

