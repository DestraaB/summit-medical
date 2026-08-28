<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>" class="text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('services'); ?>" class="text-decoration-none">Layanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($service->name); ?></li>
                </ol>
            </nav>

            <!-- Card Konten Detail -->
            <div class="card border-0 shadow-sm" style="border-radius: 1.5rem; overflow: hidden;">
                <!-- Banner Biru -->
                <div class="p-5 text-center text-white" style="background-color: #0046b8;">
                    <i class="fas fa-stethoscope fa-4x mb-3"></i>
                    <h1 class="h2 fw-bold mb-0"><?= htmlspecialchars($service->name); ?></h1>
                </div>
                
                <!-- Deskripsi -->
                <div class="card-body p-4 p-md-5">
                    <h5 class="fw-bold mb-4 text-dark"><i class="fas fa-info-circle text-primary me-2"></i>Informasi Layanan</h5>
                    <p class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">
                        <?= nl2br(htmlspecialchars($service->description)); ?>
                    </p>
                    
                    <hr class="my-5">
                    
                    <!-- Tombol Aksi -->
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
                        <a href="<?= base_url('services'); ?>" class="btn btn-outline-secondary rounded-pill px-4 w-100 w-sm-auto">
                            <i class="fas fa-arrow-left me-2"></i> Kembali ke Daftar Layanan
                        </a>
                        <a href="<?= base_url('contact'); ?>" class="btn text-white rounded-pill px-4 w-100 w-sm-auto" style="background-color: #0046b8;">
                            Konsultasi Sekarang <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>