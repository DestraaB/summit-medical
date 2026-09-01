<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Dokter</h6>
            <a href="<?= base_url('doctors/create'); ?>" class="btn btn-sm btn-primary">Tambah Dokter</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <!-- Tambahan Header Foto -->
                            <th class="text-center">Foto</th>
                            <th>Nama Dokter</th>
                            <th>Pendidikan</th>
                            <th>Pengalaman</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($doctors)) : ?>
                            <tr>
                                <!-- colspan diubah dari 6 menjadi 7 karena ada penambahan kolom foto -->
                                <td colspan="7" class="text-center">Data dokter belum ada.</td>
                            </tr>
                        <?php else : ?>
                            <?php $no = 1; ?>
                            <?php foreach ($doctors as $doctor) : ?>
                                <tr>
                                    <td class="align-middle"><?= $no++; ?></td>
                                    
                                    <!-- Tambahan Kolom Data Foto -->
                                    <td class="align-middle text-center">
                                        <?php if (!empty($doctor->photo)) : ?>
                                            <!-- Asumsi file tersimpan di assets/uploads/doctors/ atau uploads/doctors/ -->
                                            <!-- Sesuaikan path ini dengan settingan upload Anda -->
                                            <img src="<?= base_url('uploads/doctors/' . $doctor->photo); ?>" alt="Foto <?= $doctor->name; ?>" width="60" height="60" style="object-fit: cover; border-radius: 5px; border: 1px solid #ddd;">
                                        <?php else : ?>
                                            <!-- Tampilan jika dokter belum punya foto -->
                                            <span class="badge badge-secondary p-2">No Image</span>
                                        <?php endif; ?>
                                    </td>
                                    
                                    <td class="align-middle"><?= $doctor->name; ?></td>
                                    <td class="align-middle"><?= $doctor->education; ?></td>
                                    <td class="align-middle"><?= $doctor->experience; ?></td>
                                    <td class="align-middle">
                                        <?php if ($doctor->status == 'Active' || $doctor->status == 'Aktif') : ?>
                                            <span class="badge badge-success"><?= $doctor->status; ?></span>
                                        <?php else : ?>
                                            <span class="badge badge-danger"><?= $doctor->status; ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= base_url('doctors/edit/' . $doctor->id); ?>" class="btn btn-sm btn-warning mb-1"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="<?= base_url('doctors/delete/' . $doctor->id); ?>" class="btn btn-sm btn-danger mb-1" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="fas fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>