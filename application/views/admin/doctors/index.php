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
                                <td colspan="6" class="text-center">Data dokter belum ada.</td>
                            </tr>
                        <?php else : ?>
                            <?php $no = 1; ?>
                            <?php foreach ($doctors as $doctor) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $doctor->name; ?></td>
                                    <td><?= $doctor->education; ?></td>
                                    <td><?= $doctor->experience; ?></td>
                                    <td><?= $doctor->status; ?></td>
                                    <td>
                                        <a href="<?= base_url('doctors/edit/' . $doctor->id); ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="<?= base_url('doctors/delete/' . $doctor->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
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