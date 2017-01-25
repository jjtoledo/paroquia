<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">
			<?php
				foreach ($sacramentos as $s) {
					echo '<div class="row">';
						echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">'.$s['Sacramento']['nome'].'</h3>'). '</div>';
						echo '<hr class="hr"></div>';

						echo '<div class="col-md-4 col-sm-12 fotoEventoPrincipal">';
							echo '<div class="thumbnail">';
								echo $this->Html->image($s['Sacramento']['foto'], array('class' => 'img img-responsive img_sacramento'));
							echo '</div>';
						echo '</div>';

						echo '<div class="txtEvento">';
							echo '<div style="font-size: 20px; margin-bottom: 40px">'.$s['Sacramento']['texto'].'</div>';
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