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
		<script src="<?php echo base_url($frameworks_dir . '/adminlte/js/adminlte.min.js'); ?>"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?php echo base_url($frameworks_dir . '/adminlte/js/Widget.js'); ?>"></script>
		<script src="<?php echo base_url($frameworks_dir . '/adminlte/js/pages/dashboard.js'); ?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo base_url($frameworks_dir . '/adminlte/js/demo.js'); ?>"></script><?php if ($this->router->fetch_class() == 'users' && ($this->router->fetch_method() == 'create' OR $this->router->fetch_method() == 'edit')): ?>
						<script src="<?php echo base_url($plugins_dir . '/pwstrength/pwstrength.min.js'); ?>"></script>
		<?php endif; ?>
		<?php if ($this->router->fetch_class() == 'groups' && ($this->router->fetch_method() == 'create' OR $this->router->fetch_method() == 'edit')): ?>
						<script src="<?php echo base_url($plugins_dir . '/tinycolor/tinycolor.min.js'); ?>"></script>
						<script src="<?php echo base_url($plugins_dir . '/colorpickersliders/colorpickersliders.min.js'); ?>"></script>
		<?php endif; ?>	
		<script>
		$(document).ready(function(){ // on document ready
			$(".todo-list * input").change(function(e){
				isChecked = $(this).prop('checked');
				id = $(this).attr("id");
				if(confirm('Are you sure?')) {
					$.ajax({
						type: "POST",
						url: "ajax/todolist",
						data: "is="+ encodeURIComponent(isChecked)+"&id="+id+"&user=<?php echo @$userid;?>",
						dataType: 'json',
						complete: function(z){}
					});
				}else{
					if(isChecked==true){
						$(this).parent().parent().toggleClass("done");
						$(this).prop('checked', false);
					}else{
						$(this).parent().parent().toggleClass("done");
						$(this).prop('checked', true);
					}
				}
			});
			$(".todo-list * .tools .fas").click(function(e){
				$('.editmodal').html('');
				if($(this).attr('class') == "fas fa-edit"){//Edit
					
					$(this).parent().parent().parent().append(modal);
					var modal='<div class="modal fade" id="modal-default">'+
					'<div class="modal-dialog">'+
					'<div class="modal-content">'+
					'<div class="modal-header">'+
					'<h4 class="modal-title">Edit Todo-List #'+$(this).parent().parent().attr("id")+'</h4>'+
					'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
					'<span aria-hidden="true">&times;</span>'+
					'</button>'+
					'</div>'+
					'<div class="modal-body">'+
					'<input class="form-control" value="'+ $(this).parent().parent().find('.text').html() +'" id="'+$(this).parent().parent().attr("id")+'">'+
					'</div>'+
					'<div class="modal-footer justify-content-between">'+
					'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
					'<button type="button" class="btn btn-primary">Save</button>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>';
					$('.editmodal').html(modal);
				}
				if($(this).attr('class') == "fas fa-trash"){//Delete
					if(confirm('Are you sure you want to delete this item?')) {
						$.ajax({
							type: "POST",
							url: "ajax/tododel",
							data: "&id="+$(this).parent().parent().attr("id"),
							dataType: 'json',
							complete: function(z) {
								$.ajax({url: "",context: document.body,success: function(s,x){$(this).html(s);}});//reload
							}
						});
					}
				}
			});
			
			$('.editmodal').on('click', '.btn-primary', function() {
				text = $(this).parent().parent().find('input').val();
				id = $(this).parent().parent().find('input').attr('id');
				$.ajax({
					type: "POST",
					url: "ajax/todoup",
					data: "text="+ text+"&id="+id,
					dataType: 'json',
					complete: function(z) {
						$.ajax({url: "",context: document.body,success: function(s,x){$(this).html(s);}});//reload
					}
				});
			});
			$('#sendtodoadd').click(function(){
				$.ajax({
					type: "POST",
					url: "ajax/todoadd",
					data: "text="+$('#todoaddtext').val()+"&user=<?php echo @$userid;?>",
					dataType: 'json',
					complete: function(z) {
						$.ajax({url: "",context: document.body,success: function(s,x){$(this).html(s);}});//reload
					}
				});
			});
			function reloadchat(message, clearChat) {
					var model = $(".btn-send-comment").data("model");
					var dir = $(".btn-send-comment").data("dir");
					$.ajax({
							url: "ajax/chat",
							type: "POST",
							data: {message: message, dir: dir},
							success: function (html) {
									if (clearChat == true) {
											$("#chat_message").val("");
									}
									$("#chat-box").html(html);
							}
					});
			}
			setInterval(function () {
					reloadchat('', false);
			}, 2000);
			$(".btn-send-comment").on("click", function () {
					var message = $("#chat_message").val();
					reloadchat(message, true);
			});

		});
		</script>
  </body>
</html>