<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up">
            
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>" class="text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('facilities'); ?>" class="text-decoration-none">Fasilitas</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($facility->name); ?></li>
                </ol>
            </nav>

            <div class="card border-0 shadow-sm mb-4" style="border-radius: 1.5rem; overflow: hidden;">
                
                <!-- === BAGIAN GAMBAR YANG DITAMBAHKAN === -->
                <?php if (!empty($facility->image)) : ?>
                    <img src="<?= base_url('uploads/facilities/' . $facility->image); ?>" class="card-img-top" alt="<?= htmlspecialchars($facility->name); ?>" style="width: 100%; max-height: 450px; object-fit: cover;">
                <?php else : ?>
                    <!-- Gambar default jika fasilitas belum punya foto -->
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="Default Facility" style="width: 100%; max-height: 450px; object-fit: cover;">
                <?php endif; ?>
                <!-- ======================================= -->

                <div class="p-4 text-center text-white" style="background-color: #0046b8;">
                    <h1 class="h3 mb-0 fw-bold"><?= htmlspecialchars($facility->name); ?></h1>
                </div>
                
                <div class="card-body p-4 p-md-5">
                    <h5 class="mb-4 text-dark fw-bold"><i class="fas fa-info-circle text-primary me-2"></i>Informasi Fasilitas</h5>
                    <p class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">
                        <?= nl2br(htmlspecialchars($facility->description)); ?>
                    </p>
                    
                    <hr class="my-5">
                    
                    <a href="<?= base_url('facilities'); ?>" class="btn btn-outline-secondary rounded-pill px-4">
                        <i class="fas fa-arrow-left me-2"></i> Kembali ke Daftar Fasilitas
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>