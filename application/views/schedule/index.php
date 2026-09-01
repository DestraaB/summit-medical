<div class="schedule-page">

```
<!-- =========================
     HERO / PAGE HEADER
     ========================= -->

<section class="schedule-hero">

    <div class="container">

        <div class="schedule-hero-content text-center">

            <span class="schedule-eyebrow">
                <i class="fas fa-calendar-check me-2"></i>
                SUMMIT MEDICAL CENTER
            </span>

            <h1>
                Jadwal Praktik Dokter
            </h1>

            <p>
                Temukan jadwal praktik dokter kami dan
                rencanakan kunjungan Anda dengan lebih mudah.
            </p>

        </div>

    </div>

</section>


<!-- =========================
     SCHEDULE CONTENT
     ========================= -->

<section class="schedule-section">

    <div class="container">

        <?php if (!empty($schedules)) : ?>

            <div class="schedule-intro">

                <div>
                    <span class="section-eyebrow">
                        PRACTICE SCHEDULE
                    </span>

                    <h2>
                        Jadwal Dokter
                    </h2>
                </div>

                <p>
                    Berikut adalah jadwal praktik dokter
                    yang tersedia di Summit Medical Center.
                </p>

            </div>


            <!-- =========================
                 SCHEDULE GRID
                 ========================= -->

            <div class="schedule-grid">

                <?php foreach ($schedules as $schedule) : ?>

                    <div class="schedule-card">

                        <!-- Doctor Icon -->

                        <div class="schedule-doctor">

                            <div class="doctor-avatar">
                                <i class="fas fa-user-doctor"></i>
                            </div>

                            <div class="doctor-info">

                                <span>
                                    DOKTER
                                </span>

                                <h3>
                                    <?= htmlspecialchars($schedule->doctor_name); ?>
                                </h3>

                            </div>

                        </div>


                        <!-- Schedule Details -->

                        <div class="schedule-details">

                            <div class="schedule-detail">

                                <div class="detail-icon">
                                    <i class="fas fa-calendar-day"></i>
                                </div>

                                <div>
                                    <span>
                                        Hari Praktik
                                    </span>

                                    <strong>
                                        <?= htmlspecialchars($schedule->day); ?>
                                    </strong>
                                </div>

                            </div>


                            <div class="schedule-detail">

                                <div class="detail-icon">
                                    <i class="fas fa-clock"></i>
                                </div>

                                <div>
                                    <span>
                                        Jam Praktik
                                    </span>

                                    <strong>
                                        <?= htmlspecialchars($schedule->start_time); ?>
                                        -
                                        <?= htmlspecialchars($schedule->end_time); ?>
                                    </strong>
                                </div>

                            </div>

                        </div>


                        <!-- Status -->

                        <div class="schedule-status">

                            <span>
                                <i class="fas fa-circle"></i>
                                Jadwal Tersedia
                            </span>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>


        <?php else : ?>

            <!-- =========================
                 EMPTY STATE
                 ========================= -->

            <div class="schedule-empty">

                <div class="empty-icon">
                    <i class="fas fa-calendar-xmark"></i>
                </div>

                <h3>
                    Jadwal Belum Tersedia
                </h3>

                <p>
                    Saat ini belum terdapat jadwal praktik dokter
                    yang dapat ditampilkan.
                </p>

                <a
                    href="<?= base_url('contact'); ?>"
                    class="btn btn-primary rounded-pill px-4"
                >
                    <i class="fas fa-phone me-2"></i>
                    Hubungi Kami
                </a>

            </div>

        <?php endif; ?>

    </div>

</section>


<!-- =========================
     INFORMATION BANNER
     ========================= -->

<section class="schedule-information">

    <div class="container">

        <div class="schedule-info-card">

            <div class="info-icon">
                <i class="fas fa-circle-info"></i>
            </div>

            <div class="info-content">

                <span>
                    INFORMASI
                </span>

                <h3>
                    Perhatikan jadwal sebelum berkunjung
                </h3>

                <p>
                    Jadwal praktik dapat berubah sewaktu-waktu.
                    Untuk mendapatkan informasi terbaru mengenai
                    jadwal dokter, silakan menghubungi Summit Medical Center.
                </p>

            </div>

            <a
                href="<?= base_url('contact'); ?>"
                class="info-button"
            >
                Hubungi Kami
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>
```

</div>

<!-- =========================
     SCHEDULE PAGE CSS
     ========================= -->

<style>

.schedule-page {
    background: #f7f9fc;
}


/* =========================
   HERO
   ========================= */

.schedule-hero {
    position: relative;
    overflow: hidden;
    background:
        linear-gradient(
            135deg,
            #0046b8 0%,
            #075bc9 55%,
            #0b6fd8 100%
        );
    padding: 80px 0 90px;
    color: #ffffff;
}

.schedule-hero::before {
    content: '';
    position: absolute;
    width: 420px;
    height: 420px;
    border-radius: 50%;
    background: rgba(255,255,255,0.07);
    top: -220px;
    right: -100px;
}

.schedule-hero::after {
    content: '';
    position: absolute;
    width: 280px;
    height: 280px;
    border-radius: 50%;
    background: rgba(255,255,255,0.05);
    bottom: -180px;
    left: -80px;
}

.schedule-hero-content {
    position: relative;
    z-index: 2;
    max-width: 750px;
    margin: auto;
}

.schedule-eyebrow {
    display: inline-flex;
    align-items: center;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 2px;
    opacity: 0.85;
    margin-bottom: 18px;
}

.schedule-hero h1 {
    font-size: clamp(2rem, 5vw, 3.2rem);
    font-weight: 800;
    margin-bottom: 18px;
}

.schedule-hero p {
    max-width: 620px;
    margin: auto;
    font-size: 1.05rem;
    line-height: 1.8;
    opacity: 0.9;
}


/* =========================
   CONTENT
   ========================= */

.schedule-section {
    padding: 75px 0;
}

.schedule-intro {
    display: flex;
    justify-content: space-between;
    align-items: end;
    gap: 40px;
    margin-bottom: 35px;
}

.section-eyebrow {
    display: block;
    color: #0046b8;
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 2px;
    margin-bottom: 8px;
}

.schedule-intro h2 {
    margin: 0;
    font-size: 2rem;
    font-weight: 800;
    color: #172033;
}

.schedule-intro p {
    max-width: 420px;
    margin: 0;
    color: #6c757d;
    line-height: 1.7;
}


/* =========================
   GRID
   ========================= */

.schedule-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 22px;
}


/* =========================
   CARD
   ========================= */

.schedule-card {
    background: #ffffff;
    border: 1px solid #e8edf5;
    border-radius: 20px;
    padding: 26px;
    transition: all 0.35s ease;
    position: relative;
    overflow: hidden;
}

.schedule-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: #0046b8;
}

.schedule-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 45px rgba(0, 54, 130, 0.10);
    border-color: #dbe6f7;
}


/* =========================
   DOCTOR
   ========================= */

.schedule-doctor {
    display: flex;
    align-items: center;
    gap: 16px;
    padding-bottom: 22px;
    border-bottom: 1px solid #edf0f5;
}

.doctor-avatar {
    width: 58px;
    height: 58px;
    border-radius: 16px;
    background: #eaf2ff;
    color: #0046b8;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    flex-shrink: 0;
}

.doctor-info span {
    display: block;
    font-size: 0.68rem;
    letter-spacing: 1.5px;
    font-weight: 800;
    color: #8a94a6;
    margin-bottom: 4px;
}

.doctor-info h3 {
    margin: 0;
    font-size: 1.15rem;
    font-weight: 750;
    color: #172033;
}


/* =========================
   DETAILS
   ========================= */

.schedule-details {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
    padding: 22px 0;
}

.schedule-detail {
    display: flex;
    align-items: center;
    gap: 11px;
}

.detail-icon {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    background: #f1f6fd;
    color: #0046b8;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.schedule-detail span {
    display: block;
    font-size: 0.72rem;
    color: #8993a4;
    margin-bottom: 4px;
}

.schedule-detail strong {
    display: block;
    color: #273247;
    font-size: 0.9rem;
}


/* =========================
   STATUS
   ========================= */

.schedule-status {
    padding-top: 16px;
    border-top: 1px solid #edf0f5;
}

.schedule-status span {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: #23844d;
    background: #edf9f2;
    border-radius: 30px;
    padding: 7px 12px;
    font-size: 0.72rem;
    font-weight: 700;
}

.schedule-status i {
    font-size: 0.45rem;
}


/* =========================
   EMPTY
   ========================= */

.schedule-empty {
    text-align: center;
    background: #ffffff;
    border: 1px solid #e8edf5;
    border-radius: 22px;
    padding: 70px 30px;
}

.empty-icon {
    width: 75px;
    height: 75px;
    margin: 0 auto 20px;
    border-radius: 22px;
    background: #edf3fc;
    color: #0046b8;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
}

.schedule-empty h3 {
    font-weight: 800;
    color: #172033;
}

.schedule-empty p {
    color: #6c757d;
    max-width: 500px;
    margin: 10px auto 25px;
}


/* =========================
   INFORMATION
   ========================= */

.schedule-information {
    padding: 0 0 75px;
}

.schedule-info-card {
    background: #ffffff;
    border: 1px solid #e4ebf5;
    border-radius: 22px;
    padding: 28px 30px;
    display: flex;
    align-items: center;
    gap: 22px;
}

.info-icon {
    width: 55px;
    height: 55px;
    border-radius: 16px;
    background: #eaf2ff;
    color: #0046b8;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    flex-shrink: 0;
}

.info-content {
    flex: 1;
}

.info-content span {
    font-size: 0.68rem;
    letter-spacing: 1.5px;
    color: #0046b8;
    font-weight: 800;
}

.info-content h3 {
    font-size: 1.05rem;
    font-weight: 800;
    color: #172033;
    margin: 4px 0 5px;
}

.info-content p {
    margin: 0;
    color: #6c757d;
    font-size: 0.86rem;
    line-height: 1.6;
}

.info-button {
    flex-shrink: 0;
    background: #0046b8;
    color: #ffffff;
    padding: 11px 19px;
    border-radius: 30px;
    text-decoration: none;
    font-size: 0.82rem;
    font-weight: 700;
    transition: all 0.3s ease;
}

.info-button:hover {
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,70,184,0.22);
}

.info-button i {
    margin-left: 7px;
}


/* =========================
   RESPONSIVE
   ========================= */

@media (max-width: 991px) {

    .schedule-grid {
        grid-template-columns: 1fr;
    }

    .schedule-intro {
        align-items: start;
        flex-direction: column;
        gap: 12px;
    }

}

@media (max-width: 767px) {

    .schedule-hero {
        padding: 60px 0 70px;
    }

    .schedule-section {
        padding: 55px 0;
    }

    .schedule-details {
        grid-template-columns: 1fr;
    }

    .schedule-info-card {
        align-items: flex-start;
        flex-direction: column;
    }

    .info-button {
        width: 100%;
        text-align: center;
    }

}

@media (max-width: 480px) {

    .schedule-card {
        padding: 21px;
    }

    .schedule-doctor {
        gap: 12px;
    }

    .doctor-avatar {
        width: 50px;
        height: 50px;
    }

}

</style>
