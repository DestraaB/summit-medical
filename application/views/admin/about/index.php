<div class="container-fluid">
    <!-- Judul Halaman -->
    <h1 class="h3 mb-4 text-gray-800"><?= htmlspecialchars($title); ?></h1>

    <!-- Notifikasi Sukses -->
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('success'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- Form Utama -->
    <form action="<?= base_url('about/admin_index'); ?>" method="POST">
        <div class="row">
            
            <!-- KOLOM KIRI (Informasi Utama) -->
            <div class="col-xl-8 col-lg-7">
                
                <!-- Card Informasi Dasar & Sejarah -->
                <div class="card shadow mb-4 border-left-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-hospital me-2"></i>Informasi & Sejarah Rumah Sakit</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Nama Rumah Sakit</label>
                            <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($profile->name ?? ''); ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Deskripsi (Tentang Kami)</label>
                            <textarea class="form-control" name="description" rows="5" required><?= htmlspecialchars($profile->description ?? ''); ?></textarea>
                            <small class="text-muted">Teks ini akan muncul di halaman depan (Home) dan halaman Tentang Kami.</small>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Sejarah Singkat</label>
                            <textarea class="form-control" name="history" rows="5"><?= htmlspecialchars($profile->history ?? ''); ?></textarea>
                        </div>
                    </div>
                </div>

                <!-- Card Visi & Misi -->
                <div class="card shadow mb-4 border-left-info">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info"><i class="fas fa-bullseye me-2"></i>Visi & Misi</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Visi</label>
                            <textarea class="form-control" name="vision" rows="3"><?= htmlspecialchars($profile->vision ?? ''); ?></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Misi</label>
                            <textarea class="form-control" name="mission" rows="4"><?= htmlspecialchars($profile->mission ?? ''); ?></textarea>
                            <small class="text-muted">Gunakan baris baru (Enter) untuk memisahkan setiap poin misi.</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KOLOM KANAN (Kontak & Lokasi) -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4 border-left-success">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success"><i class="fas fa-phone-alt me-2"></i>Kontak & Alamat</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Nomor Telepon</label>
                            <input type="text" class="form-control" name="phone" value="<?= htmlspecialchars($profile->phone ?? ''); ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Nomor WhatsApp</label>
                            <input type="text" class="form-control" name="whatsapp" value="<?= htmlspecialchars($profile->whatsapp ?? ''); ?>" placeholder="Contoh: 628123456789">
                            <small class="text-muted">Gunakan awalan 62 tanpa tanda + atau spasi.</small>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Email Resmi</label>
                            <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($profile->email ?? ''); ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-dark">Alamat Lengkap</label>
                            <textarea class="form-control" name="address" rows="3"><?= htmlspecialchars($profile->address ?? ''); ?></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-dark">Google Maps (Iframe)</label>
                            <textarea class="form-control" name="google_maps" rows="4"><?= htmlspecialchars($profile->google_maps ?? ''); ?></textarea>
                            <small class="text-muted">Salin kode &lt;iframe&gt; dari Google Maps dan tempel di sini.</small>
                        </div>

                        <hr>
                        
                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn btn-primary btn-block w-100 py-2 shadow-sm font-weight-bold">
                            <i class="fas fa-save me-2"></i> Simpan Semua Perubahan
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>