<!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>
                <div class="card-tools">
                  <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="direct-chat-messages" id="chat-box">
									<?php foreach($chatrecord as $c){date_default_timezone_set('Europe/Istanbul');?>
										<div class="direct-chat-msg <?php if($c->userId==$userid){echo 'right';}?>">
											<div class="direct-chat-infos clearfix">
												<span class="direct-chat-name float-<?php if($c->userId==$userid){echo 'right';}else{echo 'left';}?>"><?php echo $c->username;?></span>
												<span class="direct-chat-timestamp float-<?php if($c->userId==$userid){echo 'left';}else{echo 'right';}?>"><?php echo timespan(strtotime($c->updateDate),time())." ago";?></span>
											</div>
											<img class="direct-chat-img" src="<?php echo base_url($frameworks_dir . '/adminlte/img/'); ?>user3-128x128.jpg" alt="message user image">
											<div class="direct-chat-text">
												<?php echo $c->message;?>
											</div>
										</div>
									<?php } ?>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" id="chat_message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-primary btn-send-comment" data-dir="<?php echo $frameworks_dir; ?>" data-loading="<?php echo base_url($frameworks_dir . '/adminlte/img/'); ?>loadingAnimation.gif">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->