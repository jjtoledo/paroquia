<div class="container pastorals index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Pastorais e Movimentos'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Nova Pastoral / Movimento'), array('action' => 'add', $comunidade['Comunidade']['id']), array('escape' => false)); ?></li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('nome'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($pastorals as $pastoral): ?>
					<tr>
						<td nowrap><?php echo h($pastoral['Pastoral']['nome']); ?>&nbsp;</td>
						<td class="actions2">
							<?php echo $this->Html->link('<span class="big glyphicon glyphicon-search" title="Detalhes"></span>', array('action' => 'view', $pastoral['Pastoral']['id'], $comunidade['Comunidade']['id']), array('escape' => false)); ?>&nbsp;&nbsp;
							<?php echo $this->Html->link('<span class="big glyphicon glyphicon-edit" title="Editar"></span>', array('action' => 'edit', $pastoral['Pastoral']['id'], $comunidade['Comunidade']['id']), array('escape' => false)); ?>&nbsp;&nbsp;
							<?php echo $this->Form->postLink('<span class="big glyphicon glyphicon-remove" title="Excluir"></span>', array('action' => 'delete', $pastoral['Pastoral']['id'], $comunidade['Comunidade']['id']), array('escape' => false), __('Tem certeza que deseja excluir: %s?', $pastoral['Pastoral']['nome'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->