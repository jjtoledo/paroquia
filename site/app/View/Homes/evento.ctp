<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">
			<?php
				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h2 class="h2">'.$evento['Evento']['nome'].'</h2>'). '</div>';
				echo '<hr class="hr"></div>';

				echo '<div class="col-md-4 col-sm-12">';
					echo $this->Html->image($evento['FotoEvento']['0']['foto'], array('class' => 'img img-responsive'));
				echo '</div>';
				echo '<div class="txtEvento">'.$evento['Evento']['texto'].'</div>';
			?>
		</div>

		<div class="col-md-3">
			<?php echo $this->Element('linksRight') ?>
			<?php echo $this->Element('dizimo') ?>
		</div>

		
	</div>
</div>

<?php echo $this->Element('footer'); ?>