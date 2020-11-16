<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-yellow-indosat">
    <!-- Brand Logo -->
    <!-- <a href="#" class="brand-link text-center"> -->
    <!--        <img src="-->
    <?//= base_url('assets/admin-LTE3/dist/img/AdminLTELogo.png') ?>
    <!--" alt="AdminLTE Logo"-->
    <!--             class="brand-image img-circle elevation-3"-->
    <!--             style="opacity: .8">-->
    <ul class=" nav nav-pills nav-sidebar flex-column nav-child-indent">
        <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
        <!-- <li class="nav-header">MULTI LEVEL EXAMPLE</li> -->
        <li class="nav-item brand-link" style="padding-bottom: 0px;">
            <a href="#" class="nav-link bg-red-indosat">
                <i class="fas fa-bars nav-icon"></i>
                <p class="brand-text font-weight-light  font-weight-bold">
                    Indosat Ooredoo
                </p>

            </a>
        </li>
    </ul>
    <!-- <span class="brand-text font-weight-light text-center font-weight-bold"><i class=""></i></span> -->

    <!-- </a> -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                <!-- <li class="nav-header">MULTI LEVEL EXAMPLE</li> -->
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link bg-red-indosat">
                        <i class="fab fa-slack nav-icon"></i>
                        <p>
                            Daily Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('CeiController') ?>" class="nav-link bg-red-indosat">
                        <i class="fas fa-poll nav-icon"></i>
                        <p>
                            CEI Analysis
                        </p>
                    </a>
                </li>

                <!-- 
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-red-indosat">
                        <i class="fas fa-poll nav-icon"></i>
                        <p>
                            Report
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('CeiController') ?>" class="nav-link bg-red-indosat">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CEI Analysis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Ip_block/index_oam') ?>" class="nav-link bg-red-indosat">
                                <i class="far fa-circle nav-icon"></i>
                                <p>IP Block</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Ip_manager/index_oam') ?>" class="nav-link bg-red-indosat">
                                <i class="far fa-circle nav-icon"></i>
                                <p>IP Manager</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Dashboard/index_oam') ?>" class="nav-link bg-red-indosat">
                                <i class="far fa-circle nav-icon"></i>
                                <p>IP Statistics</p>
                            </a>
                        </li>

                    </ul>
                </li> -->

                <!-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-red-indosat">
                        <i class="fas fas fa-rss nav-icon"></i>
                        <p>
                            Service
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Hostname_manager') ?>" class="nav-link bg-red-indosat">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hostname Manager</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Ip_block') ?>" class="nav-link bg-red-indosat">
                                <i class="far fa-circle nav-icon"></i>
                                <p>IP Block</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Ip_manager') ?>" class="nav-link bg-red-indosat">
                                <i class="far fa-circle nav-icon"></i>
                                <p>IP Manager</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Dashboard') ?>" class="nav-link bg-red-indosat">
                                <i class="far fa-circle nav-icon"></i>
                                <p>IP Statistics</p>
                            </a>
                        </li>

                    </ul>
                </li> -->

                <!-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-red-indosat">
                        <i class="fas fa-podcast nav-icon"></i>
                        <p>
                            Router
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Hostname_manager/index_loopback') ?>" class="nav-link bg-red-indosat">
                                <i class="far fa-circle nav-icon"></i>
                                <p>IP Loopback</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <!-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-red-indosat">
                        <i class="fas fa-search nav-icon"></i>
                        <p>
                            Finder
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li> -->
                <?php if ($role == 'Admin') : ?>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('Admin/user_administrator') ?>" class="nav-link bg-red-indosat">
                            <i class="fas fa-cog nav-icon"></i>
                            <p>
                                User Adiministration
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                <?php else : ?>
                <?php endif; ?>

                <!-- <li class="nav-header">MULTI LEVEL EXAMPLE</li> -->

                <!-- <li class="nav-header">MULTI LEVEL EXAMPLE</li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>