<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">
			<?php
				foreach ($pastorals as $s) {
					echo '<div class="row">';
						echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">'.$s['Pastoral']['nome'].'</h3>'). '</div>';
						echo '<hr class="hr"></div>';

						echo '<div class="txtEvento">';
							echo '<div style="font-size: 20px; margin-bottom: 40px">'.$s['Pastoral']['descricao'].'</div>';
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