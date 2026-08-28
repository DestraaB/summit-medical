<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Pengirim</th>
                            <th>Subjek</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($messages as $msg) : ?>
                        <tr style="<?= $msg->status == 'unread' ? 'background-color: #f8f9fc; font-weight: bold;' : ''; ?>">
                            <td><?= $i++; ?></td>
                            <td><?= date('d-m-Y H:i', strtotime($msg->created_at)); ?></td>
                            <td><?= htmlspecialchars($msg->name); ?></td>
                            <td><?= htmlspecialchars($msg->subject); ?></td>
                            <td>
                                <?php if ($msg->status == 'unread'): ?>
                                    <span class="badge bg-danger text-white">Belum Dibaca</span>
                                <?php elseif ($msg->status == 'read'): ?>
                                    <span class="badge bg-info text-white">Sudah Dibaca</span>
                                <?php else: ?>
                                    <span class="badge bg-success text-white">Telah Dibalas</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('contact/detail/' . $msg->id); ?>" class="btn btn-primary btn-sm">Buka</a>
                                <a href="<?= base_url('contact/delete/' . $msg->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus pesan ini?');">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>