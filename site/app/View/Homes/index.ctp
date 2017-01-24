<div class="margin"></div>

<?php echo $this->Element('slideshow') ?>

<?php
	if (isset($results_com)) {
		echo debug($results_com);
	} 

	if (isset($results_ev)) {
		echo debug($results_ev);
	}
?>

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

			echo '<div class="col-md-6 teste">';

				echo $this->Html->image('dizimo.jpg', array('class' => 'col-md-8 col-sm-12 img img-responsive fotoDizimo'));

				echo '<br><br><div class="col-sm-12">';
				echo '</div>';

				echo '<p class="col-md-8 col-sm-12 txtDizimoHome" align="justify">"Dízimo é a libertação experimentada pelo dizimista em relação a toda ganância e valorização excessiva do dinheiro. Afinal não é fácil para ninguém vencer o apego aos bens, o preconceito do mundo e "abrir mão" de uma parte considerável dos seus rendimentos."</p>';  

			echo '</div>';

			echo '<div class="col-md-6 teste">';
				echo $this->Html->image('arquidiocese.png', array('class' => 'col-md-8 col-sm-12 img img-responsive fotoArq'));
			echo '</div>';
			?>
		</div>

		<div class="col-md-3 col-sm-12">
			<?php
				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><span class="glyphicon glyphicon-time icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Atendimento</h3>');
				echo '<hr class="hr2"></div>';
				echo '<p class="cinza"><b>Secretaria Paroquial:</b></p>';
				echo '<p class="cinza">Segunda de 13hs às 18hs.</p>';
				echo '<p class="cinza">Terça a Sexta de 08h às 11h e de 13h às 18h.</p>';
				echo '<p class="cinza"><span class="glyphicon glyphicon-earphone"></span> (31) 3837-1766</p>';
				echo '<p class="cinza"><span class="glyphicon glyphicon-map-marker"></span> Praça Monsenhor Gerardo Magela Pereira, 12 - Centro - Barão de Cocais, MG - CEP: 35970-000</p>';

				echo $this->Element('linksRight');
			?>
		</div>
	</div>
</div>

<?php echo $this->Element('footer'); ?>