<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">
			<?php
				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">Padres e Diácono</h3>'). '</div>';
				echo '<hr class="hr"></div>';

				foreach ($padres as $p) {
					echo '<div class="col-md-4">';
						echo '<div class="col-md-10 col-md-offset-1">';
							echo $this->Html->image($p['Padre']['foto'], array('width' => '100%'));
							echo '<p class="text-center" style="font-size: 24px; padding-top: 15px">'.$p['Padre']['nome'].'</p>';
							echo '<p style="font-size: 20px; padding-top: 15px">'.$p['Padre']['texto'].'</p>';
						echo '</div>';
					echo '</div>';
				}
			?>
		</div>

		<div class="col-md-3">
			<?php echo $this->Element('linksRight') ?>
			<?php echo $this->Element('dizimo') ?>
		</div>

		
	</div>
</div>

<?php echo $this->Element('footer'); ?>