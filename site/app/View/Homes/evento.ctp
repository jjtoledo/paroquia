<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">
			<?php
				echo '<div class="row">';
					echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h2 class="h2">'.$evento['Evento']['nome'].'</h2>'). '</div>';
					echo '<hr class="hr"></div>';

					echo '<div class="col-md-4 col-sm-4 col-xs-5 fotoEventoPrincipal">';
						echo '<div class="thumbnail">';
							echo $this->Html->image($evento['FotoEvento']['0']['foto'], array('class' => 'img img-responsive img_evento'));
						echo '</div>';		
					echo '</div>';
				
					echo '<p><b>Data do evento: '.date("d/m/Y", strtotime($evento['Evento']['data'])).'</b></p>';
					echo '<div class="txtEvento">'.$evento['Evento']['texto'].'</div>';
				echo '</div>';

				echo '<div class="row">';
					echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos"><span class="glyphicon glyphicon-picture icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Fotos do evento</h3>'). '</div>';
					echo '<hr class="hr"></div>';
					foreach ($evento['FotoEvento'] as $foto) {
						echo '<div class="col-xs-4 col-sm-3 col-md-3">';
							echo '<div class="thumbnail">';
								echo $this->Html->link(
										 $this->Html->image($foto['foto'], array('class' => 'img img-responsive img_view2')),
										 '../img/'.$foto['foto'],
										 array('escapeTitle' => false, 'title' => $foto['descricao'], 'data-lightbox'=> 'roadtrip', 'class' => 'class_url')
									);
							echo '</div>';
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