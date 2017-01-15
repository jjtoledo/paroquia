<div class="container padres view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Padre / Diácono'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Actions'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Padres / Diácono'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Padre / Diácono'), array('action' => 'edit', $padre['Padre']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Excluir Padre / Diácono'), array('action' => 'delete', $padre['Padre']['id']), array('escape' => false), __('Tem certeza que deseja excluir: %s?', $padre['Padre']['nome'])); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
					<tr>
						<th><?php echo __('Nome'); ?></th>
						<td>
							<?php echo h($padre['Padre']['nome']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Texto'); ?></th>
						<td>
							<?php echo ($padre['Padre']['texto']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Foto Padre / Diácono'); ?></th>
						<td>
							<?php 
							if (!is_null($padre['Padre']['foto'])) {									
								echo '<div class="col-md-3 foto_view">';
								echo $this->Html->image($padre['Padre']['foto'], array('class' => 'img-responsive img_view')); 
								echo $this->Form->postLink('<span class="btn btn-danger" role="button">Excluir foto</span>', array('action' => 'delete_foto', $padre['Padre']['id']), array('escape' => false), __('Deseja apagar a foto?')); 
								echo '</div>';
							}
							?>
						</td>
					</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

