<div class="container mt-5 mb-5">
    <div class="row mb-4 text-center">
        <div class="col-12">
            <h1 class="h2 text-primary" style="font-weight: 700;">Fasilitas Unggulan</h1>
            <p class="text-muted">Summit Medical Center dilengkapi dengan fasilitas medis modern dan memadai untuk kenyamanan Anda.</p>
        </div>
    </div>

    <div class="row">
        <?php if (!empty($facilities)) : ?>
            <?php foreach ($facilities as $f) : ?>
                <!-- Hanya tampilkan fasilitas yang statusnya Aktif (1) -->
                <?php if ($f->status == 1) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <!-- Bagian Menampilkan Gambar -->
                            <?php if (!empty($f->image)) : ?>
                                <img src="<?= base_url('uploads/facilities/' . $f->image); ?>" class="card-img-top" alt="<?= htmlspecialchars($f->name); ?>" style="height: 250px; object-fit: cover;">
                            <?php else : ?>
                                <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Default Facility" style="height: 250px; object-fit: cover;">
                            <?php endif; ?>
                            
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-dark font-weight-bold"><?= htmlspecialchars($f->name); ?></h5>
                                <p class="card-text text-muted mb-4"><?= htmlspecialchars($f->short_description); ?></p>
                                
                                <a href="<?= base_url('facilities/detail/' . $f->slug); ?>" class="btn btn-outline-primary mt-auto rounded-pill">
                                    Detail Fasilitas <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center py-5">
                <p class="text-muted">Data fasilitas belum tersedia saat ini.</p>
            </div>
        <?php endif; ?>
    </div>
</div>