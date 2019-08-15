<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<footer class="main-footer">
		<strong><?php echo lang('footer_copyright'); ?> &copy; 2014-<?php echo date('Y'); ?> <a href="http://almsaeedstudio.com" target="_blank">Almsaeed Studio</a> &amp; <a href="http://ulusanyazilim.com" target="_blank">Ulusan Software</a></strong> <?php echo lang('footer_all_rights_reserved'); ?>
		<div class="float-right d-none d-sm-inline-block">
			<b><?php echo lang('footer_version'); ?></b> 1.1
		</div>
	</footer>
</div>
		<!-- jQuery -->
		<script src="<?php echo base_url($plugins_dir . '/jquery/jquery.min.js'); ?>"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="<?php echo base_url($plugins_dir . '/jquery-ui/jquery-ui.min.js'); ?>"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="<?php echo base_url($plugins_dir . '/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
		<?php $consoleerror = false;
		if($consoleerror == true):/*Console ErrorMap Not Exist*/ ?>
		<script>var consoleerror=true;</script>
		<!-- ChartJS -->
		<script src="<?php echo base_url($plugins_dir . '/chart.js/Chart.min.js'); ?>"></script>
		<!-- Sparkline -->
		<script src="<?php echo base_url($plugins_dir . '/sparklines/sparkline.js'); ?>"></script>
		<!-- JQVMap -->
		<script src="<?php echo base_url($plugins_dir . '/jqvmap/jquery.vmap.min.js'); ?>"></script>
		<script src="<?php echo base_url($plugins_dir . '/jqvmap/maps/jquery.vmap.world.js'); ?>"></script>
		<!-- jQuery Knob Chart -->
		<script src="<?php echo base_url($plugins_dir . '/jquery-knob/jquery.knob.min.js'); ?>"></script>
		<?php else:?>
		<script>var consoleerror=false;</script>
		<?php endif;?>
		<!-- daterangepicker -->
		<script src="<?php echo base_url($plugins_dir . '/moment/moment.min.js'); ?>"></script>
		<script src="<?php echo base_url($plugins_dir . '/daterangepicker/daterangepicker.js'); ?>"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="<?php echo base_url($plugins_dir . '/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
		<!-- Summernote -->
		<script src="<?php echo base_url($plugins_dir . '/summernote/summernote-bs4.min.js'); ?>"></script>
		<!-- overlayScrollbars -->
		<script src="<?php echo base_url($plugins_dir . '/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url($plugins_dir . '/fastclick/fastclick.js'); ?>"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url($frameworks_dir . '/adminlte/js/adminlte.js'); ?>"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?php echo base_url($frameworks_dir . '/adminlte/js/pages/dashboard.js'); ?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo base_url($frameworks_dir . '/adminlte/js/demo.js'); ?>"></script><?php if ($this->router->fetch_class() == 'users' && ($this->router->fetch_method() == 'create' OR $this->router->fetch_method() == 'edit')): ?>
						<script src="<?php echo base_url($plugins_dir . '/pwstrength/pwstrength.min.js'); ?>"></script>
		<?php endif; ?>
		<?php if ($this->router->fetch_class() == 'groups' && ($this->router->fetch_method() == 'create' OR $this->router->fetch_method() == 'edit')): ?>
						<script src="<?php echo base_url($plugins_dir . '/tinycolor/tinycolor.min.js'); ?>"></script>
						<script src="<?php echo base_url($plugins_dir . '/colorpickersliders/colorpickersliders.min.js'); ?>"></script>
		<?php endif; ?>		
  </body>
</html>