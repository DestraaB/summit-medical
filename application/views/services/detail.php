<div class="service-detail-page">


<!-- =========================
     BREADCRUMB
     ========================= -->
<section class="detail-top">

    <div class="container">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb service-breadcrumb">

                <li class="breadcrumb-item">
                    <a href="<?= base_url(); ?>">
                        Beranda
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a href="<?= base_url('services'); ?>">
                        Layanan
                    </a>
                </li>

                <li class="breadcrumb-item active">
                    <?= htmlspecialchars($service->name); ?>
                </li>

            </ol>

        </nav>

    </div>

</section>


<!-- =========================
     MAIN DETAIL
     ========================= -->
<section class="detail-content">

    <div class="container">

        <div class="service-detail-card">


            <!-- IMAGE -->
            <div class="detail-image-wrapper">

                <?php if (!empty($service->image)) : ?>

                    <img
                        src="<?= base_url('uploads/services/' . $service->image); ?>"
                        alt="<?= htmlspecialchars($service->name); ?>"
                        class="detail-image"
                    >

                <?php else : ?>

                    <img
                        src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=1200&q=80"
                        alt="<?= htmlspecialchars($service->name); ?>"
                        class="detail-image"
                    >

                <?php endif; ?>


                <div class="detail-image-overlay"></div>


                <div class="detail-image-content">

                    <div class="detail-service-icon">

                        <i class="<?= htmlspecialchars($service->icon); ?>"></i>

                    </div>

                    <span>
                        SUMMIT MEDICAL CENTER
                    </span>

                    <h1>
                        <?= htmlspecialchars($service->name); ?>
                    </h1>

                </div>

            </div>


            <!-- INFORMATION -->
            <div class="detail-body">

                <div class="detail-label">
                    <i class="fas fa-circle-info"></i>
                    INFORMASI LAYANAN
                </div>

                <h2>
                    <?= htmlspecialchars($service->name); ?>
                </h2>

                <div class="detail-description">

                    <?= nl2br(htmlspecialchars($service->description)); ?>

                </div>


                <div class="detail-divider"></div>


                <!-- ACTION -->
                <div class="detail-actions">

                    <a
                        href="<?= base_url('services'); ?>"
                        class="detail-back"
                    >
                        <i class="fas fa-arrow-left"></i>
                        Kembali ke Layanan
                    </a>


                    <a
                        href="<?= base_url('contact'); ?>"
                        class="detail-contact"
                    >
                        Konsultasi Sekarang
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     BOTTOM INFO
     ========================= -->
<section class="detail-info">

    <div class="container">

        <div class="detail-info-box">

            <div class="detail-info-icon">
                <i class="fas fa-shield-heart"></i>
            </div>

            <div>

                <strong>
                    Pelayanan Berorientasi pada Pasien
                </strong>

                <p>
                    Summit Medical Center berkomitmen memberikan
                    pelayanan kesehatan yang aman, profesional,
                    dan mengutamakan kenyamanan pasien.
                </p>

            </div>

        </div>

    </div>

</section>


</div>
