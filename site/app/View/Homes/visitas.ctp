<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-3">
			<?php
				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><span class="glyphicon glyphicon-time icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Atendimento</h3>');
				echo '<hr class="hr2"></div>';
				echo '<p class="cinza"><b>Escritório Paroquial:</b></p>';
				echo '<p class="cinza">Segunda de 13hs às 18hs.</p>';
				echo '<p class="cinza">Terça a Sexta de 08h às 11h e de 13h às 18h.</p>';
				echo '<p class="cinza"><span class="glyphicon glyphicon-earphone"></span> (31) 3837-1766</p>';
				echo '<p class="cinza"><span class="glyphicon glyphicon-envelope"></span> santuario_sjb@hotmail.com</p>';
				echo '<p class="cinza"><span class="glyphicon glyphicon-map-marker"></span> Praça Monsenhor Gerardo Magela Pereira, 12 - Centro - Barão de Cocais, MG - CEP: 35970-000</p>';
			?>
		</div>

		<div class="col-md-6">
			<div class="col-md-12" style="margin-top: 60px">
				<div class="panel panel-warning">
				  <div class="panel-heading" style="padding: 20px">
				    <h3 class="panel-title text-center">Agende uma visita</h3>
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
								<?php echo $this->Form->input('endereco', array('class' => 'form-control', 'label' => 'Endereço *', 'placeholder' => 'Rua, Número e Bairro'));?>
							</div>
							<div class="form-group col-md-10 col-md-offset-1">
								<?php echo $this->Form->input('mensagem', array('class' => 'form-control', 'label' => 'Mensagem *', 'type' => 'textarea', 'placeholder' => 'Informe as datas e horários preferenciais'));?>
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
