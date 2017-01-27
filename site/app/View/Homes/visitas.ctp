<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-3">
			<?php
				echo $this->Element('atendimento');
			?>
		</div>

		<div class="col-md-6">
			<div class="col-md-12" style="margin-top: 60px">
				<div class="panel panel-warning">
				  <div class="panel-heading" style="padding: 20px">
				    <h3 class="panel-title text-center">Agende sua visita/conversa com os padres ou diácono.<br> Preencha o formulário abaixo:</h3>
				  </div>
				  <div class="panel-body" style="padding: 30px">			
			  		<?php echo $this->Form->create('Contato', array('role' => 'form')); ?>

							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Nome *', 'placeholder' => 'Informe seu nome', 'required' => 'true'));?>
							</div>
							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('email', array('class' => 'form-control', 'label' => 'Email *', 'placeholder' => 'Informe seu email', 'required' => 'true'));?>
							</div>
							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('telefone', array('class' => 'form-control', 'label' => 'Telefone *', 'placeholder' => 'Informe seu telefone para futuro contato (incluir DDD)', 'required' => 'true'));?>
							</div>
							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('endereco', array('class' => 'form-control', 'label' => 'Endereço *', 'placeholder' => 'Rua, Número e Bairro', 'required' => 'true'));?>
							</div>
							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('tipo', array('options' => $tipo, 'class' => 'form-control', 'label' => 'O que você deseja: *'));?>
							</div>
							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('lugar', array('options' => $lugar, 'class' => 'form-control', 'label' => 'Onde deseja ser atendido: *'));?>
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
