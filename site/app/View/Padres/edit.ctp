<div class="container padres form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar Padre / Diácono'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;'.__('Detalhes Padre / Diácono'), array('controller' => 'padres', 'action' => 'view', $padre['Padre']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('Listar Padres / Diácono'), array('action' => 'index'), array('escape' => false)); ?></li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;'.__('Excluir'), array('action' => 'delete', $this->Form->value('Padre.id')), array('escape' => false), __('Tem certeza que deseja excluir: %s?', $this->Form->value('Padre.nome'))); ?></li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Padre', array('role' => 'form', 'type' => 'file')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nome', array('class' => 'form-control', 'placeholder' => 'Nome'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Tinymce->input('Padre.texto', $options = array('label' => 'Informações'), $tinyoptions = array(), $preset = null) ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('foto', array('class' => 'form', 'type' => 'file'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-primary')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
