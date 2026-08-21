<section class="page-header">
    <div class="container">

        <span class="section-label">TIM MEDIS</span>

        <h1>
            Dokter
            <span>Profesional Kami</span>
        </h1>

        <p>
            Didukung oleh dokter dan tenaga medis profesional
            yang berkomitmen memberikan pelayanan kesehatan terbaik.
        </p>

    </div>
</section>


<section class="doctors-section">
    <div class="container">

        <div class="doctors-grid">

            <?php if (!empty($doctors)): ?>

                <?php foreach ($doctors as $doctor): ?>

                    <div class="doctor-card">

                        <div class="doctor-image">

                            <?php if (!empty($doctor->photo)): ?>

                                <img
                                    src="<?= base_url('uploads/doctors/' . $doctor->photo); ?>"
                                    alt="<?= htmlspecialchars($doctor->name); ?>">

                            <?php else: ?>

                                <div class="doctor-placeholder">
                                    👨‍⚕️
                                </div>

                            <?php endif; ?>

                        </div>

                        <div class="doctor-info">

                            <span class="doctor-specialty">
                                Dokter Profesional
                            </span>

                            <h3>
                                <?= htmlspecialchars($doctor->name); ?>
                            </h3>

                            <p>
                                <?= htmlspecialchars($doctor->description); ?>
                            </p>

                            <!-- TOMBOL DETAIL -->
                            <a
                                href="<?= site_url('doctors/detail/' . $doctor->id); ?>"
                                class="doctor-detail-btn">

                                Lihat Profil Dokter →

                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>

            <?php else: ?>

                <p>Data dokter belum tersedia.</p>

            <?php endif; ?>

        </div>

    </div>
</section>