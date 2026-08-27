<aside class="sidebar">

    <!-- Brand -->
    <a href="<?= base_url('admin'); ?>" class="sidebar-brand">

        <i class="fa-solid fa-hospital me-2"></i>

        <strong>
            Summit <span>Medical</span>
        </strong>

    </a>


    <!-- Menu -->
    <div class="sidebar-menu">

        <div class="menu-title">
            Main Menu
        </div>

        <!-- Dashboard -->
        <a href="<?= base_url('admin'); ?>" class="active">

            <i class="fa-solid fa-chart-line"></i>

            <span>Dashboard</span>

        </a>


        <!-- Articles -->
        <a href="<?= base_url('articles'); ?>">

            <i class="fa-solid fa-newspaper"></i>

            <span>Articles</span>

        </a>


        <div class="menu-title">
            Hospital
        </div>


        <!-- Doctors -->
        <a href="#">

            <i class="fa-solid fa-user-doctor"></i>

            <span>Doctors</span>

        </a>


        <!-- Services -->
        <a href="#">

            <i class="fa-solid fa-stethoscope"></i>

            <span>Services</span>

        </a>


        <!-- Facilities -->
        <a href="#">

            <i class="fa-solid fa-building"></i>

            <span>Facilities</span>

        </a>

        <li class="nav-item">
    <a class="nav-link" href="<?= base_url('about/admin_index'); ?>">
        <i class="fas fa-fw fa-info-circle"></i>
        <span>Kelola About</span>
    </a>
</li>


        <!-- Departments -->
        <a href="#">

            <i class="fa-solid fa-hospital-user"></i>

            <span>Departments</span>

        </a>


        <!-- Schedule -->
        <a href="#">

            <i class="fa-solid fa-calendar-days"></i>

            <span>Schedules</span>

        </a>


        <div class="menu-title">
            System
        </div>


        <!-- Settings -->
        <a href="#">

            <i class="fa-solid fa-gear"></i>

            <span>Settings</span>

        </a>

        <!-- logout -->
        <a href="<?= base_url('auth/logout'); ?>">

            <i class="fa-solid fa-right-from-bracket"></i>

            <span>Logout</span>

        </a>

    </div>

</aside>