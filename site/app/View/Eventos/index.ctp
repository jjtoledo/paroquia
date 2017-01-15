<div class="container eventos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Eventos'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Ações'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp&nbsp;Detalhes Comunidade'), array('controller' => 'comunidades', 'action' => 'view', $comunidade['Comunidade']['id']), array('escape' => false)); ?> </li>													
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Adicionar festa padroeiro'), array('action' => 'add', $comunidade['Comunidade']['id'], 1), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Adicionar encontro'), array('action' => 'add', $comunidade['Comunidade']['id'], 2), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Adicionar outro'), array('action' => 'add', $comunidade['Comunidade']['id'], 3), array('escape' => false)); ?></li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<?php if (!empty($festa_pad)): ?>
				<h3>Festas do Padroeiro</h3>
				<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>
							<th nowrap><?php echo $this->Paginator->sort('nome'); ?></th>
							<th class="actions"></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($festa_pad as $evento): ?>
						<tr>
							<td nowrap><?php echo h($evento['Evento']['nome']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link('<span class="big glyphicon glyphicon-camera" title="Fotos"></span>', array('controller' => 'foto_eventos', 'action' => 'index', $evento['Evento']['id']), array('escape' => false)); ?>&nbsp;&nbsp;
								<?php echo $this->Html->link('<span class="big glyphicon glyphicon-search" title="Detalhes"></span>', array('action' => 'view', $evento['Evento']['id'], $evento['Evento']['comunidade_id']), array('escape' => false)); ?>&nbsp;&nbsp;
								<?php echo $this->Html->link('<span class="big glyphicon glyphicon-edit" title="Editar"></span>', array('action' => 'edit', $evento['Evento']['id'], $evento['Evento']['comunidade_id']), array('escape' => false)); ?>&nbsp;&nbsp;
								<?php echo $this->Form->postLink('<span class="big glyphicon glyphicon-remove" title="Excluir"></span>', array('action' => 'delete', $evento['Evento']['id'], $evento['Evento']['comunidade_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			<?php endif; ?>

			<?php if (!empty($encontros)): ?>
				<h3>Encontros em geral</h3>
				<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>
							<th nowrap><?php echo $this->Paginator->sort('nome'); ?></th>
							<th class="actions"></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($encontros as $evento): ?>
						<tr>
							<td nowrap><?php echo h($evento['Evento']['nome']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link('<span class="big glyphicon glyphicon-camera" title="Fotos"></span>', array('controller' => 'foto_eventos', 'action' => 'index', $evento['Evento']['id']), array('escape' => false)); ?>&nbsp;&nbsp;
								<?php echo $this->Html->link('<span class="big glyphicon glyphicon-search" title="Detalhes"></span>', array('action' => 'view', $evento['Evento']['id'], $evento['Evento']['comunidade_id']), array('escape' => false)); ?>&nbsp;&nbsp;
								<?php echo $this->Html->link('<span class="big glyphicon glyphicon-edit" title="Editar"></span>', array('action' => 'edit', $evento['Evento']['id'], $evento['Evento']['comunidade_id']), array('escape' => false)); ?>&nbsp;&nbsp;
								<?php echo $this->Form->postLink('<span class="big glyphicon glyphicon-remove" title="Excluir"></span>', array('action' => 'delete', $evento['Evento']['id'], $evento['Evento']['comunidade_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			<?php endif; ?>

			<?php if (!empty($outros)): ?>
				<h3>Outros eventos</h3>
				<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>
							<th nowrap><?php echo $this->Paginator->sort('nome'); ?></th>
							<th class="actions"></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($outros as $evento): ?>
						<tr>
							<td nowrap><?php echo h($evento['Evento']['nome']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link('<span class="big glyphicon glyphicon-camera" title="Fotos"></span>', array('controller' => 'foto_eventos', 'action' => 'index', $evento['Evento']['id']), array('escape' => false)); ?>&nbsp;&nbsp;
								<?php echo $this->Html->link('<span class="big glyphicon glyphicon-search" title="Detalhes"></span>', array('action' => 'view', $evento['Evento']['id'], $evento['Evento']['comunidade_id']), array('escape' => false)); ?>&nbsp;&nbsp;
								<?php echo $this->Html->link('<span class="big glyphicon glyphicon-edit" title="Editar"></span>', array('action' => 'edit', $evento['Evento']['id'], $evento['Evento']['comunidade_id']), array('escape' => false)); ?>&nbsp;&nbsp;
								<?php echo $this->Form->postLink('<span class="big glyphicon glyphicon-remove" title="Excluir"></span>', array('action' => 'delete', $evento['Evento']['id'], $evento['Evento']['comunidade_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			<?php endif; ?>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->