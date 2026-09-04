<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="doctor-schedule-page">

    <!-- =========================
         HERO
    ========================== -->
    <section class="doctor-schedule-hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <div
                        class="doctor-schedule-hero-content"
                        data-aos="fade-up"
                    >

                        <span class="doctor-schedule-label">
                            <i class="fas fa-calendar-alt"></i>
                            JADWAL PRAKTIK
                        </span>

                        <h1>
                            Jadwal Praktik
                            <span>Dokter</span>
                        </h1>

                        <p>
                            Temukan informasi jadwal praktik dokter di
                            Summit Medical Center dan rencanakan kunjungan
                            Anda dengan lebih mudah.
                        </p>

                    </div>

                </div>


                <div class="col-lg-4 d-none d-lg-block">

                    <div
                        class="doctor-schedule-hero-icon"
                        data-aos="zoom-in"
                    >

                        <div class="doctor-schedule-icon-circle">
                            <i class="fas fa-user-md"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Decorative -->
        <div class="doctor-schedule-shape shape-one"></div>
        <div class="doctor-schedule-shape shape-two"></div>

    </section>



    <!-- =========================
         MAIN CONTENT
    ========================== -->
    <section class="doctor-schedule-content">

        <div class="container">


            <!-- Heading -->
            <div
                class="doctor-schedule-heading text-center"
                data-aos="fade-up"
            >

                <span>SUMMIT MEDICAL CENTER</span>

                <h2>Jadwal Dokter Kami</h2>

                <p>
                    Informasi jadwal praktik dokter yang tersedia untuk
                    membantu Anda mempersiapkan kunjungan.
                </p>

            </div>



            <!-- =========================
                 TABLE SCHEDULE
            ========================== -->

            <?php if (!empty($schedules)) : ?>

                <div
                    class="doctor-schedule-table-wrapper"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >

                    <div class="table-responsive">

                        <table class="table doctor-schedule-table">

                            <thead>

                                <tr>

                                    <th class="text-center">No</th>

                                    <th>
                                        <i class="fas fa-user-md"></i>
                                        Nama Dokter
                                    </th>

                                    <th>
                                        <i class="fas fa-stethoscope"></i>
                                        Spesialisasi
                                    </th>

                                    <th>
                                        <i class="fas fa-calendar-day"></i>
                                        Hari Praktik
                                    </th>

                                    <th>
                                        <i class="far fa-clock"></i>
                                        Jam Praktik
                                    </th>

                                    <th class="text-center">
                                        Status
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                <?php foreach ($schedules as $index => $schedule) : ?>

                                    <tr
                                        data-aos="fade-up"
                                        data-aos-delay="<?= ($index % 5) * 80; ?>"
                                    >

                                        <!-- NOMOR -->

                                        <td class="text-center schedule-number">

                                            <?= $index + 1; ?>

                                        </td>



                                        <!-- NAMA DOKTER -->

                                        <td>

                                            <div class="schedule-doctor-name">

                                                <strong>
                                                    <?= htmlspecialchars($schedule->doctor_name); ?>
                                                </strong>

                                            </div>

                                        </td>



                                        <!-- SPESIALISASI -->

                                        <td>

                                            <span class="schedule-specialty">

                                                <i class="fas fa-stethoscope"></i>

                                                <?= !empty($schedule->specialty_name)
                                                    ? htmlspecialchars($schedule->specialty_name)
                                                    : 'Belum tersedia'; ?>

                                            </span>

                                        </td>



                                        <!-- HARI -->

                                        <td>

                                            <span class="schedule-day">

                                                <?= htmlspecialchars($schedule->day); ?>

                                            </span>

                                        </td>



                                        <!-- JAM -->

                                        <td>

                                            <div class="schedule-time">

                                                <i class="far fa-clock"></i>

                                                <span>

                                                    <?= date(
                                                        'H:i',
                                                        strtotime($schedule->start_time)
                                                    ); ?>

                                                    -

                                                    <?= date(
                                                        'H:i',
                                                        strtotime($schedule->end_time)
                                                    ); ?>

                                                    WIB

                                                </span>

                                            </div>

                                        </td>



                                        <!-- STATUS -->

                                        <td class="text-center">

                                            <span class="schedule-status">

                                                <span class="schedule-status-dot"></span>

                                                Tersedia

                                            </span>

                                        </td>

                                    </tr>

                                <?php endforeach; ?>

                            </tbody>

                        </table>

                    </div>

                </div>


            <?php else : ?>


                <!-- =========================
                     EMPTY STATE
                ========================== -->

                <div
                    class="doctor-schedule-empty"
                    data-aos="fade-up"
                >

                    <div class="doctor-schedule-empty-icon">

                        <i class="far fa-calendar-times"></i>

                    </div>

                    <h3>Jadwal Belum Tersedia</h3>

                    <p>
                        Saat ini belum ada jadwal praktik dokter yang tersedia.
                    </p>

                </div>


            <?php endif; ?>


        </div>

    </section>



    <!-- =========================
         CTA
    ========================== -->

    <section class="doctor-schedule-cta">

        <div class="container">

            <div
                class="doctor-schedule-cta-box"
                data-aos="fade-up"
            >

                <div>

                    <span>
                        BUTUH INFORMASI LEBIH LANJUT?
                    </span>

                    <h2>
                        Kami siap membantu Anda.
                    </h2>

                    <p>
                        Hubungi Summit Medical Center untuk mendapatkan
                        informasi lebih lanjut mengenai jadwal dokter
                        dan layanan kesehatan kami.
                    </p>

                </div>


                <a
                    href="<?= base_url('contact'); ?>"
                    class="doctor-schedule-cta-button"
                >

                    Hubungi Kami

                    <i class="fas fa-arrow-right"></i>

                </a>


            </div>

        </div>

    </section>


</div>