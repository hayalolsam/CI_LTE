<div class="card-body">
	<ul class="todo-list ui-sortable" data-widget="todo-list">
				<?php foreach ($todos as $t):?>
					<li 
					<?php if ($t->status == 1){
						echo 'class="done"';
					}
					echo 'id="'.$t->id.'"';
					?>>
						<!-- drag handle -->
						<span class="handle ui-sortable-handle">
							<i class="fas fa-ellipsis-v"></i>
							<i class="fas fa-ellipsis-v"></i>
						</span>
						<!-- checkbox -->
						<div class="icheck-primary d-inline ml-2">
							<input type="checkbox" value="" name="todo<?php echo $t->id;?>" id="todoCheck<?php echo $t->id;?>" <?php 
								if ($t->status == 1){
									echo 'checked=""';
								}?>>
							<label for="todoCheck<?php echo $t->id;?>"></label>
						</div>
						<!-- todo text -->
						<span class="text"><?php echo htmlspecialchars($t->title, ENT_QUOTES, 'UTF-8');?></span>
						<!-- Emphasis label -->
						<small class="badge badge-danger"><i class="far fa-clock"></i> <?php echo $t->created;?></small>
						<small class="badge badge-danger"><i class="far fa-clock"></i> <?php echo $t->user_id;?></small>
						<!-- General tools such as edit or delete-->
						<div class="tools">
							<i class="fas fa-edit"></i>
							<i class="fas fa-trash-o"></i>
						</div>
					</li>
		<?php endforeach;?>
	</ul>
</div>