<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('success'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row">
        <!-- Kolom Kiri: Form Tambah Jadwal -->
        <div class="col-lg-4">
            <div class="card shadow mb-4 border-left-primary">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Jadwal Baru</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('schedule/admin_index'); ?>" method="POST">
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Pilih Dokter</label>
                            <select name="doctor_id" class="form-control" required>
                                <option value="">-- Pilih Dokter --</option>
                                <?php foreach($doctors as $d): ?>
                                    <option value="<?= $d->id; ?>"><?= htmlspecialchars($d->name); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Hari</label>
                            <select name="day" class="form-control" required>
                                <option value="">-- Pilih Hari --</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group mb-4">
                                <label class="font-weight-bold">Jam Mulai</label>
                                <input type="time" name="start_time" class="form-control" required>
                            </div>
                            <div class="col-6 form-group mb-4">
                                <label class="font-weight-bold">Jam Selesai</label>
                                <input type="time" name="end_time" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100"><i class="fas fa-plus"></i> Simpan Jadwal</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Tabel Daftar Jadwal -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Jadwal Praktik</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokter</th>
                                    <th>Hari</th>
                                    <th>Jam Praktik</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($schedules)): ?>
                                    <?php $i=1; foreach($schedules as $s): ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td class="font-weight-bold"><?= htmlspecialchars($s->doctor_name ?? 'Dokter Dihapus'); ?></td>
                                        <td><?= htmlspecialchars($s->day); ?></td>
                                        <td><?= date('H:i', strtotime($s->start_time)); ?> - <?= date('H:i', strtotime($s->end_time)); ?></td>
                                        <td>
                                            <a href="<?= base_url('schedule/delete/'.$s->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jadwal ini?');">
                                                <i class="fas fa-trash"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr><td colspan="5" class="text-center text-muted">Belum ada jadwal.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>