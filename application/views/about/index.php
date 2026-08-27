<div class="container mt-5 mb-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Tentang Rumah Sakit" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 px-md-5">
            <h1 class="h2 text-primary mb-3" style="font-weight: 700;">Tentang Summit Medical Center</h1>
            <p class="text-muted lead">Melayani dengan Hati, Merawat dengan Inovasi.</p>
            <p class="text-muted"><?= nl2br(htmlspecialchars($profile->about_text)); ?></p>
        </div>
    </div>

    <div class="row text-center mt-5">
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm custom-card p-4">
                <div class="card-body">
                    <i class="fas fa-eye fa-3x text-primary mb-4"></i>
                    <h4 class="card-title mb-3" style="font-weight: 700;">Visi Kami</h4>
                    <p class="card-text text-muted"><?= nl2br(htmlspecialchars($profile->vision)); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm custom-card p-4">
                <div class="card-body">
                    <i class="fas fa-bullseye fa-3x text-primary mb-4"></i>
                    <h4 class="card-title mb-3" style="font-weight: 700;">Misi Kami</h4>
                    <p class="card-text text-muted"><?= nl2br(htmlspecialchars($profile->mission)); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>