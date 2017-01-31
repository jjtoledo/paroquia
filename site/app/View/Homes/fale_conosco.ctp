<div class="container-fluid margin_semSlide">
	<div class="row">

		<?php echo $this->Session->flash(); ?>
		
		<div class="col-md-3">
			<?php
				echo $this->Element('atendimento');
			?>
		</div>

		<div class="col-md-6">
			<div class="col-md-12" style="margin-top: 60px">
				<div class="panel panel-warning">
				  <div class="panel-heading" style="padding: 20px">
				    <h3 class="panel-title text-center">Fale conosco</h3>
				  </div>
				  <div class="panel-body" style="padding: 30px">			
			  		<?php echo $this->Form->create('Contato', array('role' => 'form')); ?>

							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Nome *', 'placeholder' => 'Informe seu nome', 'required' => 'true'));?>
							</div>
							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('email', array('class' => 'form-control', 'label' => 'Email *', 'placeholder' => 'Informe seu email para futuro contato', 'required' => 'true'));?>
							</div>
							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('assunto', array('class' => 'form-control', 'label' => 'Assunto *', 'placeholder' => 'ex: Sugestão', 'required' => 'true'));?>
							</div>
							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('mensagem', array('class' => 'form-control', 'label' => 'Mensagem *', 'type' => 'textarea', 'required' => 'true'));?>
							</div>
							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->button(__('Enviar <span class="glyphicon glyphicon-send"></span>'), array('type' => 'submit', 'escape' => false, 'class' => 'btn btn-warning')); ?>
							</div>

						<?php echo $this->Form->end() ?>
				  </div>
				</div>			
			</div>
		</div>

		<div class="col-md-3">
			<?php echo $this->Element('linksRight') ?>
			<?php echo $this->Element('dizimo') ?>
		</div>

		
	</div>
</div>

<?php echo $this->Element('footer'); ?>
