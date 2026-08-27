<div class="container mt-5 mb-5">
    <div class="row mb-5 text-center" data-aos="fade-down">
        <div class="col-12">
            <h1 class="h2 text-primary" style="font-weight: 700;">Fasilitas Rumah Sakit</h1>
            <p class="text-muted">Fasilitas medis modern dan lengkap untuk menunjang kenyamanan serta kesembuhan pasien.</p>
        </div>
    </div>
    <div class="row g-4">
        <?php if (!empty($facilities)) : ?>
            <?php foreach ($facilities as $fac) : ?>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card h-100 border-0 shadow-sm" style="border-radius: 1rem; overflow: hidden;">
                        <div class="img-zoom-wrapper" style="height: 200px;">
                            <?php $img_src = !empty($fac->image) ? base_url('assets/img/facilities/' . $fac->image) : 'https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80'; ?>
                            <img src="<?= $img_src; ?>" class="card-img-top img-zoom-hover h-100 w-100" alt="<?= htmlspecialchars($fac->name); ?>" style="object-fit: cover;">
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <h4 class="mb-2" style="font-weight: 700;"><?= htmlspecialchars($fac->name); ?></h4>
                            <p class="text-muted small mb-4"><?= htmlspecialchars($fac->short_description); ?></p>
                            <a href="<?= base_url('facilities/detail/' . $fac->slug); ?>" class="btn btn-outline-primary btn-sm rounded-pill mt-auto align-self-start">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center"><p class="text-muted">Belum ada data fasilitas.</p></div>
        <?php endif; ?>
    </div>
</div>