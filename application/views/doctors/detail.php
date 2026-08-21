<section class="page-header">
    <div class="container">

        <span class="section-label">TIM MEDIS</span>

        <h1>
            Profil
            <span>Dokter</span>
        </h1>

        <p>
            Informasi mengenai dokter profesional
            Summit Medical.
        </p>

    </div>
</section>


<section class="doctor-detail-section">

    <div class="container">

        <div class="doctor-detail">

            <!-- FOTO DOKTER -->
            <div class="doctor-detail-image">

                <?php if (!empty($doctor->photo)): ?>

                    <img
                        src="<?= base_url('uploads/doctors/' . $doctor->photo); ?>"
                        alt="<?= htmlspecialchars($doctor->name); ?>">

                <?php else: ?>

                    <div class="doctor-detail-placeholder">
                        👨‍⚕️
                    </div>

                <?php endif; ?>

            </div>


            <!-- INFORMASI DOKTER -->
            <div class="doctor-detail-info">

                <span class="doctor-specialty">
                    Dokter
                </span>

                <h2>
                    <?= htmlspecialchars($doctor->name); ?>
                </h2>


                <?php if (!empty($doctor->education)): ?>

                    <div class="doctor-detail-item">

                        <strong>Pendidikan</strong>

                        <p>
                            <?= nl2br(htmlspecialchars($doctor->education)); ?>
                        </p>

                    </div>

                <?php endif; ?>


                <?php if (!empty($doctor->experience)): ?>

                    <div class="doctor-detail-item">

                        <strong>Pengalaman</strong>

                        <p>
                            <?= nl2br(htmlspecialchars($doctor->experience)); ?>
                        </p>

                    </div>

                <?php endif; ?>


                <?php if (!empty($doctor->description)): ?>

                    <div class="doctor-detail-item">

                        <strong>Tentang Dokter</strong>

                        <p>
                            <?= nl2br(htmlspecialchars($doctor->description)); ?>
                        </p>

                    </div>

                <?php endif; ?>


                <a
                    href="<?= base_url('doctors'); ?>"
                    class="doctor-back">

                    ← Kembali ke Daftar Dokter

                </a>

            </div>

        </div>

    </div>

</section>