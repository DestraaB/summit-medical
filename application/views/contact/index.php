<div class="container mt-5 mb-5">
    <div class="row mb-5 text-center">
        <div class="col-12">
            <h1 class="h2 font-weight-bold text-primary">Hubungi Kami</h1>
            <p class="text-muted">Kami siap melayani dan menjawab pertanyaan Anda terkait layanan kesehatan di Summit Medical Center.</p>
        </div>
    </div>

    <div class="row">
        <!-- Informasi Kontak -->
        <div class="col-md-5 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="font-weight-bold mb-4 text-dark">Informasi Kontak</h4>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="text-primary me-3 mt-1">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div>
                            <h6 class="font-weight-bold mb-1">Alamat</h6>
                            <p class="text-muted mb-0"><?= nl2br(htmlspecialchars($profile->address)); ?></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="text-primary me-3 mt-1">
                            <i class="fas fa-phone-alt fa-2x"></i>
                        </div>
                        <div>
                            <h6 class="font-weight-bold mb-1">Telepon</h6>
                            <p class="text-muted mb-0"><?= htmlspecialchars($profile->phone); ?></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="text-primary me-3 mt-1">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <div>
                            <h6 class="font-weight-bold mb-1">Email</h6>
                            <p class="text-muted mb-0"><?= htmlspecialchars($profile->email); ?></p>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <h6 class="font-weight-bold mb-3 text-dark">Jam Operasional</h6>
                    <ul class="list-unstyled text-muted small">
                        <li class="mb-2 d-flex justify-content-between"><span>IGD & Rawat Inap:</span> <span class="font-weight-bold text-primary">24 Jam</span></li>
                        <li class="d-flex justify-content-between"><span>Poliklinik (Senin-Sabtu):</span> <span>08:00 - 20:00 WIB</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Form Pesan -->
        <div class="col-md-7 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="font-weight-bold mb-4 text-dark">Kirim Pesan</h4>
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" class="form-control bg-light border-0" id="name" placeholder="Masukkan nama Anda">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-semibold">Alamat Email</label>
                                <input type="email" class="form-control bg-light border-0" id="email" placeholder="nama@email.com">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label fw-semibold">Subjek</label>
                            <input type="text" class="form-control bg-light border-0" id="subject" placeholder="Topik pesan">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label fw-semibold">Pesan</label>
                            <textarea class="form-control bg-light border-0" id="message" rows="5" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <button type="button" class="btn btn-primary px-4 rounded-pill">Kirim Pesan <i class="fas fa-paper-plane ms-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>