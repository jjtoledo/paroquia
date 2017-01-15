<div class="container padres form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Adicionar Padre / Diácono'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-menu-left"></span>&nbsp;&nbsp;'.__('Voltar'), array('action' => 'index'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Padre', array('role' => 'form', 'type' => 'file')); ?>

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
					<?php echo $this->Form->submit(__('Adicionar'), array('class' => 'btn btn-primary')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
