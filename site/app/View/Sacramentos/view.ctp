<div class="sacramentos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Sacramento'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Sacramento'), array('action' => 'edit', $sacramento['Sacramento']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Sacramento'), array('action' => 'delete', $sacramento['Sacramento']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $sacramento['Sacramento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Sacramentos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Sacramento'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Comunidades'), array('controller' => 'comunidades', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Comunidade'), array('controller' => 'comunidades', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($sacramento['Sacramento']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($sacramento['Sacramento']['nome']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Texto'); ?></th>
		<td>
			<?php echo h($sacramento['Sacramento']['texto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Foto'); ?></th>
		<td>
			<?php echo h($sacramento['Sacramento']['foto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comunidade'); ?></th>
		<td>
			<?php echo $this->Html->link($sacramento['Comunidade']['id'], array('controller' => 'comunidades', 'action' => 'view', $sacramento['Comunidade']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

