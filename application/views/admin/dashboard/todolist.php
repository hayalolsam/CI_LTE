<div class="card">
	<div class="card-header ui-sortable-handle" style="cursor: move;">
		<h3 class="card-title">
			<i class="ion ion-clipboard mr-1"></i>
			To Do List
		</h3>

		<div class="card-tools">
			<!--ul class="pagination pagination-sm">
				<li class="page-item"><a href="#" class="page-link">«</a></li>
				<li class="page-item"><a href="#" class="page-link">1</a></li>
				<li class="page-item"><a href="#" class="page-link">2</a></li>
				<li class="page-item"><a href="#" class="page-link">3</a></li>
				<li class="page-item"><a href="#" class="page-link">»</a></li>
			</ul-->
		</div>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<ul class="todo-list ui-sortable" data-widget="todo-list">
			<?php foreach ($todos as $t):?>
			<li id="<?php echo $t->id;?>" >
				<!-- drag handle -->
				<span class="handle ui-sortable-handle">
					<i class="fas fa-ellipsis-v"></i>
					<i class="fas fa-ellipsis-v"></i>
				</span>
				<!-- checkbox -->
				<div class="icheck-primary d-inline ml-2">
					<input type="checkbox" value="" name="todo<?php echo $t->id;?>" id="todoCheck<?php echo $t->id;?>" <?php 
						if ($t->status == 1){
							echo ' checked="" ';
						}?>>
					<label for="todoCheck<?php echo $t->id;?>"></label>
				</div>
				<!-- todo text -->
				<span class="text"><?php echo htmlspecialchars($t->title, ENT_QUOTES, 'UTF-8');?> </span>
				<!-- Emphasis label -->
				<small class="badge badge-warning"><i class="far fa-clock"></i> <?php echo $t->username;?> </small>
				<small class="badge badge-danger"><i class="far fa-clock"></i> <?php 
				if($t->status == 1 AND $t->updated > 500000000){// 5 November 1985 :)
					echo timespan($t->created, $t->updated) . ' ago';
				}else{
					echo timespan($t->created, time()) . ' ago';
				}
				?> </small>
				<!-- General tools such as edit or delete-->
				<div class="tools">
					<i class="fas fa-edit" data-toggle="modal" data-target="#modal-default"></i>
					<i class="fas fa-trash"></i>
				</div>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
	<!-- /.card-body -->
	<span class="editmodal"></span>
	<div class="card-footer clearfix">
		<button type="button" id="todoadd" data-toggle="modal" data-target="#modal-todoadd" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>
	</div>
</div>
<!-- /.card -->
<!-- /.modal -->
<div class="modal fade" id="modal-todoadd">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Item</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<input id="todoaddtext" class="form-control">
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="sendtodoadd">Add</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->