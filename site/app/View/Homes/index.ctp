<title>
    <?php $this->assign('title', $title); ?>
</title>

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
								 	echo $this->Html->image($fotos_ev[$count]['FotoEvento']['foto'], array('class' => 'class_img'));
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
								 	echo $this->Html->image($fotos_ev[$count]['FotoEvento']['foto'], array('class' => 'class_img'));
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

				echo '<div class="row">';					
					echo '<br><br><div class="col-sm-12" style="padding: 15px">';
					echo '<hr class="hrDizimo"></div>';

					echo '<div class="col-md-6">';
						echo '<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-6 col-xs-offset-3 imgDizimoHome">';

							echo $this->Html->link(
											$this->Html->image('dizimo-1.png', array('class' => 'col-md-12 col-sm-4 img img-responsive fotoDizimo opacity')),
											array('action' => 'dizimo'),
											array('escape' => false, 'title' => 'Clique para ler mais'));

							echo '<br><br><div class="col-sm-12">';
							echo '</div>';

							echo '<p class="col-md-12 col-sm-4 txtDizimoHome text-center">Cada um(a) dê de acordo com o seu coração, “conforme as suas próprias possibilidades” (Catecismo da Igreja Católica, §2043).</p>'; 					

						echo '</div>';
					echo '</div>';
				echo '</div>';
			?>
		</div>

		<div class="col-md-3 col-sm-12">
			<?php
				echo $this->Element('atendimento');
				echo $this->Element('linksRight');
			?>
		</div>
	</div>
</div>

<?php echo $this->Element('footer'); ?>