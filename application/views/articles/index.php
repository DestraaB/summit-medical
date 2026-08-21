<section class="articles-page">

    <div class="articles-container">

        <div class="articles-header">

            <div>
                <span class="section-label">ARTIKEL</span>

                <h1>Artikel Kesehatan</h1>

                <p>
                    Informasi dan pengetahuan kesehatan dari
                    Summit Medical Center.
                </p>
            </div>

            <a href="<?= base_url('articles/create'); ?>" class="btn-primary">
                + Tambah Artikel
            </a>

        </div>


        <div class="articles-table-wrapper">

            <table class="articles-table">

                <thead>
                    <tr>
                        <th width="60">No</th>
                        <th>Judul</th>
                        <th>Slug</th>
                        <th>Tanggal</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php if (!empty($articles)): ?>

                        <?php $no = 1; ?>

                        <?php foreach ($articles as $article): ?>

                            <tr>

                                <td>
                                    <?= $no++; ?>
                                </td>

                                <td>
                                    <strong>
                                        <?= html_escape($article->title); ?>
                                    </strong>
                                </td>

                                <td>
                                    <?= html_escape($article->slug); ?>
                                </td>

                                <td>
                                    <?= date('d-m-Y', strtotime($article->created_at)); ?>
                                </td>

                                <td>

                                    <a
                                        href="<?= base_url('articles/edit/' . $article->id); ?>"
                                        class="btn-edit">
                                        Edit
                                    </a>

                                    <a
                                        href="<?= base_url('articles/delete/' . $article->id); ?>"
                                        class="btn-delete"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                        Hapus
                                    </a>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="5" class="empty-data">
                                Belum ada artikel.
                            </td>
                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</section>