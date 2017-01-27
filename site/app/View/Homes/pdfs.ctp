<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">
			<?php
				echo '<div class="row">';
					echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos"><span class="entypo entypo-book-open icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Jornais</h3>'). '</div>';
					echo '<hr class="hr"></div>';
				echo '</div>';

				echo '<div class="col-md-12">';
					echo '<div class="actions">';
						echo '<div class="panel panel-default">';
							echo '<div class="panel-body">';
								echo '<ul class="nav nav-pills nav-stacked">';
									foreach ($pdfs as $p) {
										echo '<li>'.$this->Html->link(
														$p['Pdf']['pdf'],
														array('action' => '../files/'.$p['Pdf']['pdf']), 
														array('escape' => false, 'target' => '_blank')).'</li>';
									}
								echo '</ul>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
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