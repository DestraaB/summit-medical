<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Logo -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-hospital-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN PANEL</div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- MANAGE -->
            <div class="sidebar-heading mt-3 text-uppercase">Manage</div>

            <li class="nav-item <?= ($this->uri->segment(1) == 'news') ? 'active' : ''; ?>">
                <a class="nav-link py-2" href="<?= base_url('news/admin_index'); ?>">
                    <i class="fas fa-fw fa-newspaper"></i> <span>Articles</span>
                </a>
            </li>
            <li class="nav-item <?= ($this->uri->segment(1) == 'doctors') ? 'active' : ''; ?>">
                <a class="nav-link py-2" href="<?= base_url('doctors/admin_index'); ?>">
                    <i class="fas fa-fw fa-user-md"></i> <span>Doctors</span>
                </a>
            </li>
            <li class="nav-item <?= ($this->uri->segment(1) == 'specialties') ? 'active' : ''; ?>">
                <a class="nav-link py-2" href="<?= base_url('specialties/admin_index'); ?>">
                    <i class="fas fa-fw fa-stethoscope"></i> <span>Specialties</span>
                </a>
            </li>
            <li class="nav-item <?= ($this->uri->segment(1) == 'schedule') ? 'active' : ''; ?>">
                <a class="nav-link py-2" href="<?= base_url('schedule/admin_index'); ?>">
                    <i class="fas fa-fw fa-calendar-alt"></i> <span>Schedule</span>
                </a>
            </li>
            <li class="nav-item <?= ($this->uri->segment(1) == 'services') ? 'active' : ''; ?>">
                <a class="nav-link py-2" href="<?= base_url('services/admin_index'); ?>">
                    <i class="fas fa-fw fa-notes-medical"></i> <span>Services</span>
                </a>
            </li>
            <li class="nav-item <?= ($this->uri->segment(1) == 'facilities') ? 'active' : ''; ?>">
                <a class="nav-link py-2" href="<?= base_url('facilities/admin_index'); ?>">
                    <i class="fas fa-fw fa-building"></i> <span>Facilities</span>
                </a>
            </li>
            <li class="nav-item <?= ($this->uri->segment(1) == 'about') ? 'active' : ''; ?>">
                <a class="nav-link py-2" href="<?= base_url('about/admin_index'); ?>">
                    <i class="fas fa-fw fa-info-circle"></i> <span>About</span>
                </a>
            </li>
            <li class="nav-item <?= ($this->uri->segment(1) == 'contact') ? 'active' : ''; ?>">
                <a class="nav-link py-2" href="<?= base_url('contact/admin_index'); ?>">
                    <i class="fas fa-fw fa-envelope"></i> <span>Contact</span>
                </a>
            </li>

            <hr class="sidebar-divider mt-2">

            <!-- SYSTEM -->
            <div class="sidebar-heading text-uppercase">System</div>

            <li class="nav-item <?= ($this->uri->segment(1) == 'admin') ? 'active' : ''; ?>">
                <a class="nav-link py-2" href="<?= base_url('admin'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-2" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i> <span>Logout</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block mt-3">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->