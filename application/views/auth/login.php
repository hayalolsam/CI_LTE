<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<div class="login-logo">
		<a href="#"><b>Admin</b><?php echo $title_lg; ?></a>
</div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo lang('auth_sign_session'); ?></p>
			<?php echo $message;?>
      <?php echo form_open('auth/login');?>
        <div class="input-group mb-3">
          <?php echo form_input($identity);/*,'admin@admin.com'*/?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <?php echo form_input($password);/*,'admin@admin.com'*/?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
              <label for="remember">
                <?php echo lang('auth_remember_me'); ?>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <?php echo form_submit('submit', lang('auth_login'), array('class' => 'btn btn-primary btn-block btn-flat'));?>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close();?>

      <?php if ($auth_social_network == TRUE): ?>
		<div class="social-auth-links text-center mb-3">
				<p>- <?php echo lang('auth_or'); ?> -</p>
				<?php echo anchor('#', '<i class="fa fa-facebook"></i>' . lang('auth_sign_facebook'), array('class' => 'btn btn-block btn-social btn-facebook btn-flat')); ?>
				<?php echo anchor('#', '<i class="fa fa-google-plus"></i>' . lang('auth_sign_google'), array('class' => 'btn btn-block btn-social btn-google btn-flat')); ?>
		</div>
      <!-- /.social-auth-links -->
<?php endif; ?>
<?php if ($forgot_password == TRUE): ?>
		 <p class="mb-1"><?php echo anchor('#', lang('auth_forgot_password')); ?></p>
<?php endif; ?>
<?php if ($new_membership == TRUE): ?>
		<p class="mb-0"><?php echo anchor('#', lang('auth_new_member')); ?></p>
<?php endif; ?>
    </div>
    <!-- /.login-card-body -->
  </div>
	
