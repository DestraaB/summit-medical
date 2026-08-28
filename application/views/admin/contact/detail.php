<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Pesan Masuk</h1>
    
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Subjek: <?= htmlspecialchars($message->subject); ?></h6>
            <?php if ($message->status != 'replied'): ?>
                <a href="<?= base_url('contact/mark_replied/' . $message->id); ?>" class="btn btn-success btn-sm"><i class="fas fa-check me-1"></i> Tandai Sudah Dibalas</a>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold text-dark">Dikirim Pada</div>
                <div class="col-md-9">: <?= date('d F Y - H:i:s', strtotime($message->created_at)); ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold text-dark">Nama Pengirim</div>
                <div class="col-md-9">: <?= htmlspecialchars($message->name); ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold text-dark">Email</div>
                <div class="col-md-9">: <a href="mailto:<?= htmlspecialchars($message->email); ?>"><?= htmlspecialchars($message->email); ?></a></div>
            </div>
            <hr>
            <div class="mt-3">
                <h6 class="font-weight-bold text-dark">Isi Pesan:</h6>
                <div class="p-3 bg-light rounded" style="min-height: 150px; font-size: 1.05rem;">
                    <?= nl2br(htmlspecialchars($message->message)); ?>
                </div>
            </div>
            
            <a href="<?= base_url('contact/admin_index'); ?>" class="btn btn-secondary mt-4">Kembali ke Daftar Pesan</a>
        </div>
    </div>
</div>