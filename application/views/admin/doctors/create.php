<div class="container-fluid">

    <h3 class="mb-4">
        Tambah Dokter
    </h3>

    <div class="card shadow-sm">

        <div class="card-body">

            <form action="<?= base_url('doctors/store'); ?>"
                  method="post"
                  enctype="multipart/form-data">

                <!-- Specialty -->
                <div class="mb-3">

                    <label class="form-label">
                        Specialty
                    </label>

                    <select name="specialty_id"
                            class="form-control"
                            required>

                        <option value="">
                            -- Pilih Specialty --
                        </option>

                        <?php foreach ($specialties as $specialty) : ?>

                            <option value="<?= $specialty->id; ?>">
                                <?= htmlspecialchars($specialty->name); ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


                <!-- Nama -->
                <div class="mb-3">

                    <label class="form-label">
                        Nama Dokter
                    </label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Masukkan nama dokter"
                           required>

                </div>


                <!-- Foto -->
                <div class="mb-3">

                    <label class="form-label">
                        Foto Dokter
                    </label>

                    <input type="file"
                           name="photo"
                           class="form-control">

                </div>


                <!-- Pendidikan -->
                <div class="mb-3">

                    <label class="form-label">
                        Pendidikan
                    </label>

                    <textarea name="education"
                              class="form-control"
                              rows="3"
                              placeholder="Masukkan pendidikan dokter"></textarea>

                </div>


                <!-- Pengalaman -->
                <div class="mb-3">

                    <label class="form-label">
                        Pengalaman
                    </label>

                    <textarea name="experience"
                              class="form-control"
                              rows="3"
                              placeholder="Masukkan pengalaman dokter"></textarea>

                </div>


                <!-- Deskripsi -->
                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="description"
                              class="form-control"
                              rows="5"
                              placeholder="Masukkan deskripsi dokter"></textarea>

                </div>


                <!-- Status -->
                <div class="mb-4">

                    <label class="form-label">
                        Status
                    </label>

                    <select name="status"
                            class="form-control"
                            required>

                        <option value="1">
                            Aktif
                        </option>

                        <option value="0">
                            Tidak Aktif
                        </option>

                    </select>

                </div>


                <!-- Button -->
                <button type="submit"
                        class="btn btn-primary">

                    <i class="fas fa-save"></i>
                    Simpan Dokter

                </button>

                <a href="<?= base_url('doctors'); ?>"
                   class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>