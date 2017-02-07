<title>
    <?php $this->assign('title', $title); ?>
</title>

<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">
			<?php
				echo '<div class="row">';
					echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">Padres e Diácono</h3>'). '</div>';
					echo '<hr class="hr"></div>';

					foreach ($padres as $p) {
						echo '<div class="col-md-4 col-sm-4 col-xs-6">';
							echo '<div class="col-md-10 col-md-offset-1">';

								echo '<div class="thumbnail com">';
									echo $this->Html->image($p['Padre']['foto'], array('class' => 'img img-responsive img_padres'));
								echo '</div>';

								echo '<p class="text-center pPadre" style="font-size: 24px; padding-top: 15px">'.$p['Padre']['nome'].'</p>';
								echo '<p style="font-size: 20px; padding-top: 15px">'.$p['Padre']['texto'].'</p>';
							echo '</div>';
						echo '</div>';
					}
				echo '</div>';
				
			?>
		</div>

		<div class="col-md-3">
			<?php echo $this->Element('linksRight') ?>
			<?php echo $this->Element('dizimo') ?>
		</div>

		
	</div>
</div>

<?php echo $this->Element('footer'); ?>