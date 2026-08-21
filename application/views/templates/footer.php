    <!-- Footer -->
    <footer class="footer">

        <div class="footer-container">

            <!-- Tentang -->
            <div class="footer-column">
                <h3>Summit Medical Center</h3>

                <p>
                    Memberikan pelayanan kesehatan yang profesional,
                    terpercaya, dan berorientasi pada kebutuhan pasien.
                </p>
            </div>


            <!-- Navigasi -->
            <div class="footer-column">
                <h4>Navigasi</h4>

                <a href="<?= base_url(); ?>">Beranda</a>
                <a href="<?= base_url('tentang'); ?>">Tentang Kami</a>
                <a href="<?= base_url('layanan'); ?>">Layanan</a>
                <a href="<?= base_url('dokter'); ?>">Dokter</a>
                <a href="<?= base_url('fasilitas'); ?>">Fasilitas</a>
                <a href="<?= base_url('artikel'); ?>">Artikel</a>
            </div>


            <!-- Kontak -->
            <div class="footer-column">
                <h4>Hubungi Kami</h4>

                <p>📍 Summit Medical Center</p>
                <p>📞 (021) 1234-5678</p>
                <p>✉️ info@summitmedical.com</p>
            </div>

        </div>


        <!-- Copyright -->
        <div class="footer-bottom">

            <p>
                &copy; <?= date('Y'); ?> Summit Medical Center.
                All Rights Reserved.
            </p>

        </div>

    </footer>


    <!-- JavaScript Utama -->
    <script src="<?= base_url('assets/js/script.js'); ?>"></script>

</body>

</html>