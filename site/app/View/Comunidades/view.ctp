<div class="comunidades view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Comunidade'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Comunidade'), array('action' => 'edit', $comunidade['Comunidade']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Comunidade'), array('action' => 'delete', $comunidade['Comunidade']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $comunidade['Comunidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Comunidades'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Comunidade'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Eventos'), array('controller' => 'eventos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Evento'), array('controller' => 'eventos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Padres'), array('controller' => 'padres', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Padre'), array('controller' => 'padres', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pastorals'), array('controller' => 'pastorals', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pastoral'), array('controller' => 'pastorals', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Sacramentos'), array('controller' => 'sacramentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Sacramento'), array('controller' => 'sacramentos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($comunidade['Comunidade']['id']); ?>
			&nbsp;
		</td>
</tr>
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
			<?php echo h($comunidade['Comunidade']['historico']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Foto Padroeiro'); ?></th>
		<td>
			<?php echo h($comunidade['Comunidade']['foto_padroeiro']); ?>
			&nbsp;
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
			<?php echo h($comunidade['Comunidade']['hora_celeb']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Eventos'); ?></h3>
	<?php if (!empty($comunidade['Evento'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Comunidade Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($comunidade['Evento'] as $evento): ?>
		<tr>
			<td><?php echo $evento['id']; ?></td>
			<td><?php echo $evento['tipo']; ?></td>
			<td><?php echo $evento['texto']; ?></td>
			<td><?php echo $evento['comunidade_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'eventos', 'action' => 'view', $evento['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'eventos', 'action' => 'edit', $evento['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'eventos', 'action' => 'delete', $evento['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $evento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Evento'), array('controller' => 'eventos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Padres'); ?></h3>
	<?php if (!empty($comunidade['Padre'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Comunidade Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($comunidade['Padre'] as $padre): ?>
		<tr>
			<td><?php echo $padre['id']; ?></td>
			<td><?php echo $padre['nome']; ?></td>
			<td><?php echo $padre['texto']; ?></td>
			<td><?php echo $padre['foto']; ?></td>
			<td><?php echo $padre['comunidade_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'padres', 'action' => 'view', $padre['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'padres', 'action' => 'edit', $padre['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'padres', 'action' => 'delete', $padre['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $padre['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Padre'), array('controller' => 'padres', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Pastorals'); ?></h3>
	<?php if (!empty($comunidade['Pastoral'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Comunidade Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($comunidade['Pastoral'] as $pastoral): ?>
		<tr>
			<td><?php echo $pastoral['id']; ?></td>
			<td><?php echo $pastoral['nome']; ?></td>
			<td><?php echo $pastoral['descricao']; ?></td>
			<td><?php echo $pastoral['comunidade_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'pastorals', 'action' => 'view', $pastoral['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'pastorals', 'action' => 'edit', $pastoral['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'pastorals', 'action' => 'delete', $pastoral['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pastoral['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pastoral'), array('controller' => 'pastorals', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Sacramentos'); ?></h3>
	<?php if (!empty($comunidade['Sacramento'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Comunidade Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($comunidade['Sacramento'] as $sacramento): ?>
		<tr>
			<td><?php echo $sacramento['id']; ?></td>
			<td><?php echo $sacramento['nome']; ?></td>
			<td><?php echo $sacramento['texto']; ?></td>
			<td><?php echo $sacramento['foto']; ?></td>
			<td><?php echo $sacramento['comunidade_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'sacramentos', 'action' => 'view', $sacramento['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'sacramentos', 'action' => 'edit', $sacramento['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'sacramentos', 'action' => 'delete', $sacramento['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $sacramento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Sacramento'), array('controller' => 'sacramentos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
