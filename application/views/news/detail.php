<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up" data-aos-duration="800">
            
            <!-- Breadcrumb Navigasi -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>" class="text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('news'); ?>" class="text-decoration-none">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($news->title); ?></li>
                </ol>
            </nav>

            <!-- Judul Artikel -->
            <h1 class="h2 text-primary mb-3" style="font-weight: 800; line-height: 1.3;">
                <?= htmlspecialchars($news->title); ?>
            </h1>
            
            <!-- Meta Data (Tanggal & Penulis) -->
            <div class="text-muted mb-4 pb-3 border-bottom d-flex align-items-center flex-wrap gap-3" style="font-size: 0.95rem;">
                <div>
                    <i class="far fa-calendar-alt me-2 text-primary"></i> 
                    <?= date('d F Y', strtotime($news->published_at)); ?>
                </div>
                <?php if(!empty($news->author_name)): ?>
                    <div class="d-none d-sm-block text-secondary">|</div>
                    <div>
                        <i class="far fa-user me-2 text-primary"></i> 
                        Ditulis oleh <span class="fw-semibold text-dark"><?= htmlspecialchars($news->author_name); ?></span>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Gambar Utama / Thumbnail -->
            <div class="mb-5 overflow-hidden shadow-sm" style="border-radius: 1.5rem;">
                <?php 
                    // Logika untuk menampilkan gambar thumbnail asli jika ada, jika tidak pakai gambar default
                    $image_src = !empty($news->thumbnail) ? base_url('assets/img/news/' . $news->thumbnail) : 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80'; 
                ?>
                <img src="<?= $image_src; ?>" class="img-fluid w-100 img-zoom-hover" alt="<?= htmlspecialchars($news->title); ?>" style="object-fit: cover; max-height: 450px;">
            </div>

            <!-- Isi Konten Artikel -->
            <div class="article-content" style="line-height: 1.9; color: #444; font-size: 1.1rem; text-align: justify;">
                <?= nl2br(htmlspecialchars($news->content)); ?>
            </div>

            <hr class="my-5" style="border-color: #e9ecef;">
            
            <!-- Tombol Aksi Bawah -->
            <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url('news'); ?>" class="btn btn-outline-secondary rounded-pill px-4" style="transition: all 0.3s ease;">
                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Berita
                </a>
                
                <!-- Tombol Share (Opsional - UI Only) -->
                <div class="d-flex gap-2">
                    <button class="btn btn-light text-primary rounded-circle shadow-sm" style="width: 40px; height: 40px;" title="Bagikan ke Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button class="btn btn-light text-info rounded-circle shadow-sm" style="width: 40px; height: 40px;" title="Bagikan ke Twitter">
                        <i class="fab fa-twitter"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>