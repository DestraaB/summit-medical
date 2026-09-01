<div class="contact-page">


<!-- HEADER -->
<section class="contact-header">
    <div class="contact-header-content">
        <span class="contact-eyebrow">
            <i class="fas fa-headset"></i>
            CONTACT CENTER
        </span>

        <h1>Hubungi Kami</h1>

        <p>
            Kami siap membantu menjawab pertanyaan dan memberikan
            informasi mengenai layanan kesehatan Summit Medical Center.
        </p>
    </div>
</section>


<!-- CONTENT -->
<section class="contact-content">

    <div class="contact-grid">

        <!-- =========================
             INFORMASI KONTAK
             ========================= -->
        <div class="contact-info-card">

            <div class="contact-card-heading">
                <span class="contact-heading-icon">
                    <i class="fas fa-hospital"></i>
                </span>

                <div>
                    <span>INFORMATION</span>
                    <h2>Informasi Kontak</h2>
                </div>
            </div>


            <!-- ALAMAT -->
            <div class="contact-info-item">

                <div class="contact-info-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>

                <div class="contact-info-text">
                    <span>Alamat</span>
                    <p>
                        <?= nl2br(htmlspecialchars($profile->address)); ?>
                    </p>
                </div>

            </div>


            <!-- TELEPON -->
            <div class="contact-info-item">

                <div class="contact-info-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>

                <div class="contact-info-text">
                    <span>Telepon</span>
                    <p>
                        <?= htmlspecialchars($profile->phone); ?>
                    </p>
                </div>

            </div>


            <!-- EMAIL -->
            <div class="contact-info-item">

                <div class="contact-info-icon">
                    <i class="fas fa-envelope"></i>
                </div>

                <div class="contact-info-text">
                    <span>Email</span>
                    <p>
                        <?= htmlspecialchars($profile->email); ?>
                    </p>
                </div>

            </div>


            <!-- JAM OPERASIONAL -->
            <div class="contact-operating">

                <div class="operating-heading">
                    <i class="far fa-clock"></i>
                    <span>Jam Operasional</span>
                </div>

                <div class="operating-row">
                    <span>IGD & Rawat Inap</span>
                    <strong>24 Jam</strong>
                </div>

                <div class="operating-row">
                    <span>Poliklinik</span>
                    <strong>08:00 - 20:00 WIB</strong>
                </div>

                <small>
                    Senin - Sabtu
                </small>

            </div>

        </div>


        <!-- =========================
             FORM PESAN
             ========================= -->
        <div class="contact-form-card">

            <div class="contact-card-heading">

                <span class="contact-heading-icon">
                    <i class="fas fa-paper-plane"></i>
                </span>

                <div>
                    <span>MESSAGE</span>
                    <h2>Kirim Pesan</h2>
                </div>

            </div>


            <!-- ALERT -->
            <?php if ($this->session->flashdata('success_msg')): ?>

                <div class="contact-success">
                    <i class="fas fa-check-circle"></i>

                    <span>
                        <?= $this->session->flashdata('success_msg'); ?>
                    </span>
                </div>

            <?php endif; ?>


            <form
                action="<?= base_url('contact'); ?>"
                method="POST"
                class="contact-form"
            >

                <div class="contact-form-row">

                    <div class="contact-field">

                        <label for="name">
                            Nama Lengkap
                        </label>

                        <div class="contact-input">
                            <i class="fas fa-user"></i>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Masukkan nama Anda"
                                required
                            >
                        </div>

                    </div>


                    <div class="contact-field">

                        <label for="email">
                            Alamat Email
                        </label>

                        <div class="contact-input">
                            <i class="fas fa-envelope"></i>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="nama@email.com"
                                required
                            >
                        </div>

                    </div>

                </div>


                <div class="contact-field">

                    <label for="subject">
                        Subjek
                    </label>

                    <div class="contact-input">
                        <i class="fas fa-tag"></i>

                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            placeholder="Topik pesan"
                            required
                        >
                    </div>

                </div>


                <div class="contact-field">

                    <label for="message">
                        Pesan
                    </label>

                    <div class="contact-textarea">

                        <i class="fas fa-comment-alt"></i>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="Tulis pesan Anda di sini..."
                            required
                        ></textarea>

                    </div>

                </div>


                <button
                    type="submit"
                    class="contact-submit"
                >
                    <span>Kirim Pesan</span>
                    <i class="fas fa-paper-plane"></i>
                </button>

            </form>

        </div>

    </div>

</section>


</div>
