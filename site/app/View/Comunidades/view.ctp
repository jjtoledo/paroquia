<div class="container comunidades view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Comunidade: '.$comunidade['Comunidade']['nome']); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Ações'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Comunidades'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Comunidade'), array('action' => 'edit', $comunidade['Comunidade']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Excluir Comunidade'), array('action' => 'delete', $comunidade['Comunidade']['id']), array('escape' => false), __('Tem certeza que deseja excluir: %s?', $comunidade['Comunidade']['nome'])); ?> </li>
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
							<?php echo h($comunidade['Comunidade']['nome']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Historico'); ?></th>
						<td>
							<?php echo ($comunidade['Comunidade']['historico']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Foto Padroeiro'); ?></th>
						<td>
							<?php 
							if (!is_null($comunidade['Comunidade']['foto_padroeiro'])) {									
								echo '<div class="col-md-3 foto_view">';
								echo $this->Html->image($comunidade['Comunidade']['foto_padroeiro'],
														array('class' => 'img-responsive img_view')); 
								echo $this->Form->postLink('<span class="btn btn-danger" role="button">Excluir foto</span>', array('action' => 'delete_foto', $comunidade['Comunidade']['id']), array('escape' => false), __('Deseja apagar a foto?')); 
								echo '</div>';
							}
							?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Nome Padroeiro'); ?></th>
						<td>
							<?php echo h($comunidade['Comunidade']['nome_padroeiro']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Hora Celeb'); ?></th>
						<td>
							<?php echo ($comunidade['Comunidade']['hora_celeb']); ?>
							&nbsp;								
						</td>
					</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="container related row">
	<div class="row" style="margin-bottom: 20px">
		<div class="col-md-12">
			<h3><?php echo __('Adicionar fotos, eventos e pastorais / movimentos'); ?></h3> 
			<hr style="border-bottom: 1px solid #ddd">
		</div>

		<div class="col-md-3 menu"></div>

		<div class="col-md-2 menu">
				<div class="actions">
					<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-camera"></span>&nbsp;&nbsp;Fotos'), array('controller' => 'foto_comunidades', 'action' => 'index', $comunidade['Comunidade']['id']), array('escape' => false, 'class' => 'btn btn-default')); ?> 
				</div>
		</div>

		<div class="col-md-2 menu">
				<div class="actions">
					<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;Eventos'), array('controller' => 'eventos', 'action' => 'index', $comunidade['Comunidade']['id']), array('escape' => false, 'class' => 'btn btn-default')); ?> 
				</div>
		</div>
		

		<div class="col-md-2 menu">
			<div class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-grain"></span>&nbsp;&nbsp;Pastorais e Movimentos'), array('controller' => 'pastorals', 'action' => 'index', $comunidade['Comunidade']['id']), array('escape' => false, 'class' => 'btn btn-default')); ?> 
			</div>
		</div>	
	</div>
</div>
