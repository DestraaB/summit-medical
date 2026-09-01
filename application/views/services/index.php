<div class="container mt-5 mb-5">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="h2 font-weight-bold text-primary">Layanan Medis Kami</h1>
            <p class="text-muted">Summit Medical Center menyediakan fasilitas dan layanan kesehatan komprehensif untuk Anda dan keluarga.</p>
        </div>
    </div>

    <div class="row">
        <?php if (!empty($services)) : ?>
            <?php foreach ($services as $service) : ?>
                <!-- Hanya tampilkan jika status layanan Aktif (1) -->
                <?php if ($service->status == 1) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 text-center custom-card">
                            
                            <!-- Bagian Gambar Layanan -->
                            <?php if (!empty($service->image)) : ?>
                                <img src="<?= base_url('uploads/services/' . $service->image); ?>" class="card-img-top" alt="<?= htmlspecialchars($service->name); ?>" style="height: 220px; object-fit: cover;">
                            <?php else : ?>
                                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Default Service" style="height: 220px; object-fit: cover;">
                            <?php endif; ?>

                            <div class="card-body d-flex flex-column p-4">
                                <!-- Bagian Ikon Dinamis -->
                                <div class="text-primary mb-3">
                                    <i class="<?= htmlspecialchars($service->icon); ?> fa-3x"></i>
                                </div>
                                
                                <h5 class="card-title font-weight-bold text-dark mb-3"><?= htmlspecialchars($service->name); ?></h5>
                                
                                <!-- Menggunakan Short Description -->
                                <p class="card-text text-muted mb-4"><?= htmlspecialchars($service->short_description); ?></p>
                                
                                <!-- Tombol Menuju Halaman Detail menggunakan Slug -->
                                <a href="<?= base_url('services/detail/' . $service->slug); ?>" class="btn btn-outline-primary mt-auto rounded-pill px-4">
                                    Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center py-5">
                <p class="text-muted" style="font-size: 1.1rem;">Belum ada data layanan yang tersedia saat ini.</p>
            </div>
        <?php endif; ?>
    </div>
</div>