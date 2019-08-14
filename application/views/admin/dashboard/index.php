<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php echo $pagetitle; ?>
          </div><!-- /.col -->
          <div class="col-sm-6">
						<?php echo $breadcrumb; ?>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
		<section class="content">
			<div class="container-fluid">
				<?php echo $dashboard_alert_file_install; ?>
				<!-- Small boxes (Stat box) -->
				<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">License</span>
                <span class="info-box-number">
                  Free
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">AdminLTE version</span>
                <span class="info-box-number">3.0.0-beta.2</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number"><?php echo $count_users; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Security groups</span>
                <span class="info-box-number"><?php echo $count_groups; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div><!-- /.row -->
				<div class="row">
						<div class="col-md-12">
								<div class="box">
										<div class="box-header with-border">
												<h3 class="box-title">Title</h3>
												<div class="box-tools pull-right">
														<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
												</div>
										</div>
										<div class="box-body">
												<div class="row">
														<div class="col-md-6">
																<p class="text-center"><strong>xxx</strong></p>
														</div>
														<div class="col-md-6">
																<p class="text-center text-uppercase"><strong>Resources</strong></p>
																<div class="progress-group">
																		<span class="progress-text">Disk use space</span>
																		<span class="progress-number"><strong><?php echo byte_format($disk_usespace, 2); ?></strong>/<?php echo byte_format($disk_totalspace, 2); ?></span>
																		<div class="progress">
																				<div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="<?php echo $disk_usepercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $disk_usepercent; ?>%"></div>
																		</div>
																</div>
																<div class="progress-group">
																		<span class="progress-text">Memory usage</span>
																		<span class="progress-number"><strong><?php echo byte_format($memory_usage, 2); ?></strong>/<?php echo byte_format($memory_peak_usage, 2); ?></span>
																		<div class="progress">
																				<div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="<?php echo $memory_usepercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $memory_usepercent; ?>%"></div>
																		</div>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
			</div>
		</section>
</div>
