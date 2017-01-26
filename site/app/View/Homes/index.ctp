<div class="margin"></div>

<?php echo $this->Element('slideshow') ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-9">
			<?php if (!empty($eventos)){
				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><a class="linkTitulos" href="homes/eventos"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Próximos eventos</h3>'). '</a>';
				echo '<hr class="hr"></div>';

				$count = 0;

				if(count($eventos) < 6) {
					for ($i=0; $i < count($eventos); $i++) { 
	      				echo '<div class="col-md-4 col-sm-12 divNoticia">';
			    			echo '<div class="noticia agenda">';
								echo '<a class="noticia_foto" href="homes/evento/' . $eventos[$count]['Evento']['id'] . '" escape="false">';
								 	echo $this->Html->image($fotos_ev[$count]['FotoEvento']['foto'], array('class' => 'class_img', 'width' => '100%', 'height' => '70%'));
									echo '<h3 class="text-center menor"><b>'.$eventos[$count]['Evento']['nome'].'</b></h3>';
									//echo '<p class="text-center menor_detalhe"><span class="entypo entypo-calendar"></span>&nbsp;'. date("d/m/Y", strtotime($eventos[$count]['Evento']['data'])).'</p>';
								echo '</a>';
							echo '</div>';
						echo '</div>';
						
						$count++;
					}
				}
				else {
	      			for ($i=0; $i < 6; $i++) { 
	      				echo '<div class="col-md-4 col-sm-12 divNoticia">';
			    			echo '<div class="noticia agenda">';
								echo '<a class="noticia_foto" href="homes/evento/' . $eventos[$count]['Evento']['id'] . '" escape="false">';
								 	echo $this->Html->image($fotos_ev[$count]['FotoEvento']['foto'], array('class' => 'class_img', 'width' => '100%', 'height' => '70%'));
									echo '<h3 class="text-center menor"><b>'.$eventos[$count]['Evento']['nome'].'</b></h3>';
									//echo '<p class="text-center menor_detalhe"><span class="entypo entypo-calendar"></span>&nbsp;'. date("d/m/Y", strtotime($eventos[$count]['Evento']['data'])).'</p>';
								echo '</a>';
							echo '</div>';
						echo '</div>';
						
						$count++;
					}
	      		}
					
			} ?>

			<?php echo '<div class="col-md-12 col-sm-12 text-center">' . $this->Html->link('Ver todos eventos', array('action' => 'eventos'), array('class' => 'btnTodosEvHome btn btn-default', 'title' => 'Ver todos', 'escape' => false)) . '</div><br><br>'; 

				echo '<br><br><div class="col-sm-12" style="padding: 15px">';
				echo '<hr class="hrDizimo"></div>';

				echo '<div class="col-md-6">';
					echo '<div class="col-md-8 col-md-offset-2">';

						echo $this->Html->link(
										$this->Html->image('dizimo-1.png', array('class' => 'col-md-12 col-sm-4 img img-responsive fotoDizimo opacity')),
										array('action' => 'dizimo'),
										array('escape' => false, 'title' => 'Clique para ler mais'));

						echo '<br><br><div class="col-sm-12">';
						echo '</div>';

						echo '<p class="col-md-12 col-sm-4 txtDizimoHome" align="justify">Cada um(a) dê de acordo com o seu coração, “conforme as suas próprias possibilidades” (Catecismo da Igreja Católica, §2043).</p>'; 					

					echo '</div>';
				echo '</div>';

			?>
		</div>

		<div class="col-md-3 col-sm-12">
			<?php
				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><span class="glyphicon glyphicon-time icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Atendimento</h3>');
				echo '<hr class="hr2"></div>';
				echo '<p class="cinza"><b>Escritório Paroquial:</b></p>';
				echo '<p class="cinza">Segunda das 13h às 18h.</p>';
				echo '<p class="cinza">Terça a sexta das 08h às 11h e das 13h às 18h.</p>';
				echo '<p class="cinza"><span class="glyphicon glyphicon-earphone"></span> (31) 3837-1766</p>';
				echo '<p class="cinza"><span class="glyphicon glyphicon-envelope"></span> santuario_sjb@hotmail.com</p>';
				echo '<p class="cinza"><span class="glyphicon glyphicon-map-marker"></span> Praça Monsenhor Gerardo Magela Pereira, 12 - Centro - Barão de Cocais, MG - CEP: 35970-000</p>';

				echo $this->Element('linksRight');
			?>
		</div>
	</div>
</div>

<?php echo $this->Element('footer'); ?>