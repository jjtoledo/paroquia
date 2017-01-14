<div class="container pastorals view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Pastoral / Movimento: '.$pastoral['Pastoral']['nome']); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Pastorais / Movimentos'), array('action' => 'index', $comunidade['Comunidade']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Pastoral / Movimento'), array('action' => 'edit', $id, $comunidade['Comunidade']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Excluir Pastoral / Movimento'), array('action' => 'delete', $id), array('escape' => false), __('Tem certeza que deseja apagar: %s?', $id)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp&nbsp;Detalhes Comunidade'), array('controller' => 'comunidades', 'action' => 'view', $comunidade['Comunidade']['id']), array('escape' => false)); ?> </li>
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
								<?php echo h($pastoral['Pastoral']['nome']); ?>
								&nbsp;
							</td>
					</tr>
					<tr>
							<th><?php echo __('Descricao'); ?></th>
							<td>
								<?php echo ($pastoral['Pastoral']['descricao']); ?>
								&nbsp;
							</td>
					</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

