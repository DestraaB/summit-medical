<div class="container">

    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-md-6 col-lg-5">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4 p-md-5">

                    <!-- Logo -->
                    <div class="text-center mb-4">

                        <div
                            class="mx-auto mb-3 d-flex align-items-center justify-content-center"
                            style="
                                width: 65px;
                                height: 65px;
                                border-radius: 16px;
                                background: #e0f2fe;
                                color: #0284c7;
                                font-size: 28px;
                            ">

                            <i class="fa-solid fa-hospital"></i>

                        </div>

                        <h3 class="fw-bold mb-1">
                            Summit Medical Center
                        </h3>

                        <p class="text-muted mb-0">
                            Admin Panel
                        </p>

                    </div>


                    <!-- Flash Message -->
                    <?php if ($this->session->flashdata('error')) : ?>

                        <div class="alert alert-danger">

                            <i class="fa-solid fa-circle-exclamation me-2"></i>

                            <?= $this->session->flashdata('error'); ?>

                        </div>

                    <?php endif; ?>


                    <!-- Validation Error -->
                    <?php if (validation_errors()) : ?>

                        <div class="alert alert-danger">

                            <?= validation_errors(); ?>

                        </div>

                    <?php endif; ?>


                    <!-- Login Form -->
                    <form
                        action="<?= base_url('auth/login'); ?>"
                        method="post">

                        <!-- Email -->
                        <div class="mb-3">

                            <label
                                for="email"
                                class="form-label fw-semibold">

                                Email

                            </label>

                            <div class="input-group">

                                <span class="input-group-text bg-white">

                                    <i class="fa-solid fa-envelope"></i>

                                </span>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="admin@summitmedical.com"
                                    value="<?= set_value('email'); ?>"
                                    autocomplete="email">

                            </div>

                        </div>


                        <!-- Password -->
                        <div class="mb-4">

                            <label
                                for="password"
                                class="form-label fw-semibold">

                                Password

                            </label>

                            <div class="input-group">

                                <span class="input-group-text bg-white">

                                    <i class="fa-solid fa-lock"></i>

                                </span>

                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    placeholder="Masukkan password"
                                    autocomplete="current-password">

                            </div>

                        </div>


                        <!-- Submit -->
                        <button
                            type="submit"
                            class="btn btn-primary w-100 py-2 fw-semibold">

                            <i class="fa-solid fa-right-to-bracket me-2"></i>

                            Login

                        </button>

                    </form>


                    <!-- Footer Text -->
                    <div class="text-center mt-4">

                        <small class="text-muted">

                            Summit Medical Center
                            <br>
                            Administrator Access

                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>