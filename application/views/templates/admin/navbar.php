<nav class="top-navbar">

    <div>

        <h6 class="mb-0 fw-bold text-dark">

            <?= isset($title) ? $title : 'Dashboard'; ?>

        </h6>

    </div>


    <div class="dropdown">

        <button
            class="profile-button dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown">

            <div class="profile-avatar">

                <i class="fa-solid fa-user"></i>

            </div>

            <span class="d-none d-md-inline">

                Admin

            </span>

        </button>


        <ul class="dropdown-menu dropdown-menu-end">

            <li>
                <a class="dropdown-item" href="#">

                    <i class="fa-solid fa-user me-2"></i>

                    Profile

                </a>
            </li>

            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a
                    class="dropdown-item text-danger"
                    href="<?= base_url('auth/logout'); ?>">

                    <i class="fa-solid fa-right-from-bracket me-2"></i>

                    Logout

                </a>

            </li>

        </ul>

    </div>

</nav>