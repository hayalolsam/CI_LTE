<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<aside class="main-sidebar sidebar-dark-primary elevation-4">    <!-- Brand Logo -->
    <a href="<?php echo site_url('admin/dashboard'); ?>" class="brand-link">
      <img src="<?php echo base_url($frameworks_dir . '/adminlte/img/AdminLTELogo.png');?>" alt="<?php echo $title; ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $title; ?></span>
    </a>
    <!-- Sidebar -->
		<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
			<?php if ($admin_prefs['user_panel'] == TRUE): ?>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url($avatar_dir . '/m_001.png'); ?>" class="img-circle elevation-2" alt="<?php echo $user_login['firstname'].$user_login['lastname']; ?>">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user_login['firstname'].$user_login['lastname']; ?></a>
					<a href="#"><i class="nav-icon fa fa-circle text-success"></i> <?php echo lang('menu_online'); ?></a>
        </div>
      </div>
			<?php endif; ?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
										 with font-awesome or any other icon font library -->
					<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('/'); ?>">
									<i class="nav-icon fa fa-home text-primary"></i> <?php echo lang('menu_access_website'); ?>
							</a>
					</li>
					<li class="nav-header text-uppercase"><?php echo lang('menu_main_navigation'); ?></li>
					<li class="nav-item <?php echo active_link_controller('dashboard'); ?>">
							<a class="nav-link" href="<?php echo site_url('admin/dashboard'); ?>">
									<i class="nav-icon fas fa-tachometer-alt"></i> <?php echo lang('menu_dashboard'); ?>
							</a>
					</li>
					<li class="nav-header text-uppercase"><?php echo lang('menu_administration'); ?></li>
					
					<li class="nav-item <?php echo active_link_controller('users'); ?>">
							<a class="nav-link" href="<?php echo site_url('admin/users'); ?>">
									<i class="nav-icon fa fa-user"></i> <?php echo lang('menu_users'); ?>
							</a>
					</li>
					<li class="nav-item <?php echo active_link_controller('groups'); ?>">
							<a class="nav-link" href="<?php echo site_url('admin/groups'); ?>">
									<i class="nav-icon nav-icon fas fa-chart-pie"></i> <?php echo lang('menu_security_groups'); ?>
							</a>
					</li>
					<li class="nav-item has-treeview <?php echo active_link_controller('prefs'); ?>">
							<a class="nav-link" href="#">
									<i class="nav-icon fa fa-cogs"></i> <p>
									<?php echo lang('menu_preferences'); ?>
									<i class="nav-icon fa fa-angle-left right"></i>
									</p>
							</a>
							<ul class="nav-item nav-treeview">
									<li class="nav-item <?php echo active_link_function('interfaces'); ?>">
										<a class="nav-link" href="<?php echo site_url('admin/prefs/interfaces/admin'); ?>">
											<i class="nav-icon fas fa-copy text-danger"></i> <?php echo lang('menu_interfaces'); ?></a>
									</li>
							</ul>
					</li>
					<li class="nav-item <?php echo active_link_controller('files'); ?>">
							<a class="nav-link" href="<?php echo site_url('admin/files'); ?>">
									<i class="nav-icon fa fa-file"></i> <?php echo lang('menu_files'); ?>
							</a>
					</li>
					<li class="nav-item <?php echo active_link_controller('database'); ?>">
							<a class="nav-link" href="<?php echo site_url('admin/database'); ?>">
									<i class="nav-icon fa fa-database"></i> <?php echo lang('menu_database_utility'); ?>
							</a>
					</li>
					<li class="nav-header text-uppercase"><?php echo $title; ?></li>
					<li class="nav-item <?php echo active_link_controller('license'); ?>">
							<a class="nav-link" href="<?php echo site_url('admin/license'); ?>">
									<i class="nav-icon fas fa-edit"></i> <?php echo lang('menu_license'); ?>
							</a>
					</li>
					<li class="nav-item <?php echo active_link_controller('resources'); ?>">
							<a class="nav-link" href="<?php echo site_url('admin/resources'); ?>">
									<i class="nav-icon fa fa-cubes"></i> <?php echo lang('menu_resources'); ?>
							</a>
					</li>
				</ul>
			</nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
