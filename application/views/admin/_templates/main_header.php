<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="<?php echo site_url('admin/dashboard'); ?>" class="nav-link"><?php echo lang('menu_dashboard'); ?></a>
			</li>
		</ul>
	  <!-- SEARCH FORM -->
		<?php if ($admin_prefs['sidebar_form'] == TRUE): ?>
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input name="q" class="form-control form-control-navbar" type="search" placeholder="<?php echo lang('menu_search'); ?>..." aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
		<?php
endif; ?>
		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
			<?php if ($admin_prefs['messages_menu'] == TRUE): ?>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url($avatar_dir . '/m_001.png'); ?>" alt="<?php echo $user_login['firstname'] . $user_login['lastname']; ?>" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php echo $user_login['firstname'] . $user_login['lastname']; ?>
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url($avatar_dir . '/m_001.png'); ?>" alt="<?php echo $user_login['firstname'] . $user_login['lastname']; ?>" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php echo $user_login['firstname'] . $user_login['lastname']; ?>
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url($avatar_dir . '/m_001.png'); ?>" alt="<?php echo $user_login['firstname'] . $user_login['lastname']; ?>" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php echo $user_login['firstname'] . $user_login['lastname']; ?>
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer"><?php echo lang('header_view_all'); ?></a>
        </div>
      </li>
			<?php
endif; ?>
			<?php echo $header_alert_file_install; ?>
		 <!-- Notifications Dropdown Menu -->
		 <?php if ($admin_prefs['notifications_menu'] == TRUE): ?>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer"><?php echo lang('header_view_all'); ?></a>
        </div>
      </li>
      <?php
endif; ?>
			<?php if ($admin_prefs['user_menu'] == TRUE): ?>
			<!-- User Account -->
			<li class="nav-item dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="hidden-xs"><?php echo $user_login['username']; ?></span>
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-2">
					
						<div class="media">
								<img src="<?php echo base_url($avatar_dir . '/m_001.png'); ?>" alt="<?php echo $user_login['firstname'] . $user_login['lastname']; ?>" class="img-size-50 img-circle mr-3">
								<p><?php echo $user_login['firstname'] . $user_login['lastname']; ?><br>
								<span class="text-sm"><?php echo lang('header_member_since'); ?> <?php echo date('d-m-Y', $user_login['created_on']); ?></span>
								</p>
						</div>
						<div class="media-body">
							 <p class="text-sm">
									 <a href="<?php echo site_url('admin/users/profile/' . $user_login['id']); ?>" class="btn btn-success btn-block"><?php echo lang('header_profile'); ?></a>
									 
									 <a href="<?php echo site_url('auth/logout/admin'); ?>" class="btn btn-danger btn-block"><?php echo lang('header_sign_out'); ?></a>
								</p>
						</div>
				</div>
			</li>
<?php
endif; ?>
    </ul>
  </nav>        