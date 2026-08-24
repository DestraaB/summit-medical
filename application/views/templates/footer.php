</main>
<footer class="footer mt-auto py-4 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <h5 class="text-primary font-weight-bold"><i class="fas fa-hospital-symbol me-2"></i>Summit Medical Center</h5>
                <p class="text-muted small mb-0">Memberikan pelayanan kesehatan paripurna dengan standar kualitas tinggi, berfokus pada kenyamanan dan kesembuhan pasien.</p>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <h6 class="text-uppercase font-weight-bold mb-3">Tautan Cepat</h6>
                <ul class="list-unstyled small text-muted">
                    <li><a href="<?= base_url('services'); ?>" class="text-decoration-none text-muted">Layanan Medis</a></li>
                    <li><a href="<?= base_url('doctors'); ?>" class="text-decoration-none text-muted">Jadwal Dokter</a></li>
                    <li><a href="<?= base_url('articles'); ?>" class="text-decoration-none text-muted">Artikel Kesehatan</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="text-uppercase font-weight-bold mb-3">Kontak Darurat</h6>
                <p class="small text-muted mb-1"><i class="fas fa-phone-alt me-2 text-primary"></i> (0274) 123456</p>
                <p class="small text-muted"><i class="fas fa-envelope me-2 text-primary"></i> info@summitmedical.com</p>
            </div>
        </div>
        <hr class="border-secondary my-3">
        <div class="text-center text-muted small">
            &copy; <?= date('Y'); ?> Summit Medical Center. Hak Cipta Dilindungi.
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>