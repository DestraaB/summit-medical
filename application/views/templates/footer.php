</main>
<!-- FOOTER BARU -->
<footer class="footer mt-auto py-5 bg-white border-top">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 pe-lg-5">
                <a class="navbar-brand d-flex align-items-center mb-3 text-decoration-none" href="<?= base_url(); ?>">
                    <i class="fas fa-sun fa-2x me-2" style="color: #0046b8;"></i>
                    <div style="line-height: 1.1;">
                        <span style="font-weight: 800; color: #2ea64e; font-size: 1.1rem; letter-spacing: 0.5px;">SUMMIT MEDICAL</span><br>
                        <span style="font-weight: 700; color: #0046b8; font-size: 1.1rem; letter-spacing: 1px;">CENTER</span>
                    </div>
                </a>
                <p class="text-muted small mb-4">Rumah sakit Islami dan unggul mulai dari penelitian hingga pelayanan medis berstandar tinggi.</p>
                
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; background-color: #3b5998; border: none;"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-info rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 38px; height: 38px; background-color: #00acee; border: none;"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; background-color: #c4302b; border: none;"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-4 text-dark">Navigasi</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-3"><a href="<?= base_url(); ?>" class="text-muted text-decoration-none footer-link small">Beranda</a></li>
                    <li class="mb-3"><a href="<?= base_url('doctors'); ?>" class="text-muted text-decoration-none footer-link small">Jadwal Dokter</a></li>
                    <li class="mb-3"><a href="<?= base_url('about'); ?>" class="text-muted text-decoration-none footer-link small">Sejarah Kami</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-4 text-dark">Layanan & Informasi</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-3"><a href="<?= base_url('services'); ?>" class="text-muted text-decoration-none footer-link small">Poliklinik Unggulan</a></li>
                    <li class="mb-3"><a href="<?= base_url('facilities'); ?>" class="text-muted text-decoration-none footer-link small">Fasilitas Penunjang</a></li>
                    <li class="mb-3"><a href="<?= base_url('articles'); ?>" class="text-muted text-decoration-none footer-link small">Pusat Berita</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-4 text-dark">Alamat</h6>
                <p class="text-muted small mb-0" style="line-height: 1.8;">
                    Jl. Pangeran Mangkubumi No. 123,<br>
                    Gowongan, Jetis,<br>
                    Kota Yogyakarta,<br>
                    Daerah Istimewa Yogyakarta 55232
                </p>
            </div>
        </div>
        
        <hr class="mt-5 mb-4" style="border-color: #e9ecef;">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <p class="text-muted small mb-0 fw-medium">&copy; <?= date('Y'); ?> Summit Medical Center.</p>
            <div class="mt-3 mt-md-0 fw-bold fs-5" style="color: #333; letter-spacing: -1px;">
                Lab<span style="color: #0046b8;">M</span>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Inisialisasi Script Animasi yang lebih dinamis
    AOS.init({
        duration: 1000,          // Durasi sedikit dipanjangkan agar mulus
        once: true,              // Hanya animasi sekali
        offset: 50,              // Trigger lebih cepat saat masuk layar
        easing: 'ease-out-back', // Easing 'back' memberikan efek pantulan elastis sedikit di akhir animasi
        delay: 100               // Jeda sebelum mulai
    });
</script>
</body>
</html>