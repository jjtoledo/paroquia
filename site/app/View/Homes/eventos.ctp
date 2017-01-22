<?php echo $this->Element('slideshowEv') ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-9">
			<?php if (!empty($eventos)){

				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 1) {

						echo '<br><br><div class="col-md-12" style="padding: 15px"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Festa dos Padroeiros</h3>');
						echo '<hr class="hr"></div>';
						break;
						
					}
				}

				$count = 0;

				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 1) {

						echo '<div class="col-md-4 col-sm-12 divNoticia">';
			    			echo '<div class="noticia agenda">';
								echo '<a class="noticia_foto" href="eventos/' . $e['Evento']['id'] . '" target="_blank" escape="false">';
								 	echo $this->Html->image($fotos_ev[$count]['FotoEvento']['foto'], array('class' => 'class_img', 'width' => '100%', 'height' => '70%'));
									echo '<h3 class="text-center menor"><b>'.$e['Evento']['nome'].'</b></h3>';
									//echo '<p class="text-center menor_detalhe"><span class="entypo entypo-calendar"></span>&nbsp;'. date("d/m/Y", strtotime($eventos[$count]['Evento']['data'])).'</p>';
								echo '</a>';
							echo '</div>';
						echo '</div>';

					}

					$count++;
				}

				echo '<div class="col-md-12 text-center">' . $this->Html->link('Ver todos >>', array('action' => 'eventos'), array('class' => 'btnTodosEv btn btn-default', 'escape' => false)) . '</div>';


				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 2) {

						echo '<br><br><div class="col-md-12" style="padding: 15px"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Encontros</h3>');
						echo '<hr class="hr"></div>';
					}
				}

				$count = 0;

				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 2) {

						echo '<div class="col-md-4 col-sm-12 divNoticia">';
			    			echo '<div class="noticia agenda">';
								echo '<a class="noticia_foto" href="eventos/' . $e['Evento']['id'] . '" target="_blank" escape="false">';
								 	echo $this->Html->image($fotos_ev[$count]['FotoEvento']['foto'], array('class' => 'class_img', 'width' => '100%', 'height' => '70%'));
									echo '<h3 class="text-center menor"><b>'.$e['Evento']['nome'].'</b></h3>';
									//echo '<p class="text-center menor_detalhe"><span class="entypo entypo-calendar"></span>&nbsp;'. date("d/m/Y", strtotime($eventos[$count]['Evento']['data'])).'</p>';
								echo '</a>';
							echo '</div>';
						echo '</div>';
					}

					$count++;
				}

				echo '<div class="col-md-12 text-center">' . $this->Html->link('Ver todos >>', array('action' => 'eventos'), array('class' => 'btnTodosEv btn btn-default', 'escape' => false)) . '</div>';
					
				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 3) {

						echo '<br><br><div class="col-md-12" style="padding: 15px"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Outros eventos</h3>');
						echo '<hr class="hr"></div>';
					}
				}

				$count = 0;

				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 3) {

						echo '<div class="col-md-4 col-sm-12 divNoticia">';
			    			echo '<div class="noticia agenda">';
								echo '<a class="noticia_foto" href="eventos/' . $e['Evento']['id'] . '" target="_blank" escape="false">';
								 	echo $this->Html->image($fotos_ev[$count]['FotoEvento']['foto'], array('class' => 'class_img', 'width' => '100%', 'height' => '70%'));
									echo '<h3 class="text-center menor"><b>'.$e['Evento']['nome'].'</b></h3>';
									//echo '<p class="text-center menor_detalhe"><span class="entypo entypo-calendar"></span>&nbsp;'. date("d/m/Y", strtotime($eventos[$count]['Evento']['data'])).'</p>';
								echo '</a>';
							echo '</div>';
						echo '</div>';
					}

					$count++;
				}

				echo '<div class="col-md-12 text-center">' . $this->Html->link('Ver todos >>', array('action' => 'eventos'), array('class' => 'btnTodosEv btn btn-default', 'escape' => false)) . '</div>';
			} ?>

		</div>

		<div class="col-md-3">
			<?php

				echo '<br><br><div style="padding: 15px"><span class="entypo entypo-book-open icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Jornal <i>O Precursor</i></h3>');
				echo '<hr class="hr2"></div>';

				echo '<br><br><div style="padding: 15px"><span class="glyphicon glyphicon-link icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Links Externos</h3>');
				echo '<hr class="hr2"></div>';
			?>
		</div>
	</div>
</div>

<?php echo $this->Element('footer'); ?>