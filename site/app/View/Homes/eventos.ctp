<?php //echo $this->Element('slideshowEv') ?>

<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">
			<?php if (!empty($eventos)){

				$tem1 = false;
				$tem2 = false;
				$tem3 = false;

				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 1) {

						echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><a class="linkTitulos" href="eventos/1"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Festa dos Padroeiros</h3>'). '</a>';
						echo '<hr class="hr"></div>';
						$tem1 = true;
						break;
						
					}
				}

				$count = 0;

				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 1) {

						echo '<div class="col-md-4 col-sm-12 divNoticia">';
			    			echo '<div class="noticia agenda">';
								echo $this->Html->link(
								 	$this->Html->image($fotos_ev[$count]['FotoEvento']['foto'], array('class' => 'class_img', 'width' => '100%', 'height' => '70%')).' '.
									__('<h3 class="text-center menor"><b>'.$e['Evento']['nome'].'</b></h3>'),
								 	array('action' => 'evento', $e['Evento']['id']),
								 	array('escape' => false, 'class' => 'noticia_foto')
								);
									//echo '<p class="text-center menor_detalhe"><span class="entypo entypo-calendar"></span>&nbsp;'. date("d/m/Y", strtotime($eventos[$count]['Evento']['data'])).'</p>';
							echo '</div>';
						echo '</div>';

					}

					$count++;
				}

				if($tem1 == true && !isset($tipo)){

					echo '<div class="col-md-12 col-sm-12 text-center">' . $this->Html->link('Ver todos', array('action' => 'eventos', 1), array('class' => 'btnTodosEv btn btn-default', 'title' => 'Ver todos', 'escape' => false)) . '</div><br><br>';
				}


				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 2) {

						echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><a class="linkTitulos" href="eventos/2"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Encontros</h3>'). '</a>';
						echo '<hr class="hr"></div>';
						$tem2 = true;
						break;
					}
				}

				$count = 0;

				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 2) {

						echo '<div class="col-md-4 col-sm-12 divNoticia">';
			    			echo '<div class="noticia agenda">';
								echo $this->Html->link(
								 	$this->Html->image($fotos_ev[$count]['FotoEvento']['foto'], array('class' => 'class_img', 'width' => '100%', 'height' => '70%')).' '.
									__('<h3 class="text-center menor"><b>'.$e['Evento']['nome'].'</b></h3>'),
								 	array('action' => 'evento', $e['Evento']['id']),
								 	array('escape' => false, 'class' => 'noticia_foto')
								);
									//echo '<p class="text-center menor_detalhe"><span class="entypo entypo-calendar"></span>&nbsp;'. date("d/m/Y", strtotime($eventos[$count]['Evento']['data'])).'</p>';
							echo '</div>';
						echo '</div>';
					}

					$count++;
				}

				if($tem2 == true && !isset($tipo)){

					echo '<div class="col-md-12 col-sm-12 text-center">' . $this->Html->link('Ver todos', array('action' => 'eventos', 2), array('class' => 'btnTodosEv btn btn-default', 'title' => 'Ver todos', 'escape' => false)) . '</div><br><br>';
				}
					
				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 3) {

						echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><a class="linkTitulos" href="eventos/3"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Outros eventos</h3>'). '</a>';
						echo '<hr class="hr"></div>';
						$tem3 = true;
						break;
					}
				}

				$count = 0;

				foreach ($eventos as $e) {

					if($e['Evento']['tipo'] == 3) {

						echo '<div class="col-md-4 col-sm-12 divNoticia">';
			    			echo '<div class="noticia agenda">';
								echo $this->Html->link(
								 	$this->Html->image($fotos_ev[$count]['FotoEvento']['foto'], array('class' => 'class_img', 'width' => '100%', 'height' => '70%')).' '.
									__('<h3 class="text-center menor"><b>'.$e['Evento']['nome'].'</b></h3>'),
								 	array('action' => 'evento', $e['Evento']['id']),
								 	array('escape' => false, 'class' => 'noticia_foto')
								);
									//echo '<p class="text-center menor_detalhe"><span class="entypo entypo-calendar"></span>&nbsp;'. date("d/m/Y", strtotime($eventos[$count]['Evento']['data'])).'</p>';
							echo '</div>';
						echo '</div>';
					}

					$count++;
				}

				if($tem3 == true && !isset($tipo)){

					echo '<div class="col-md-12 col-sm-12 text-center">' . $this->Html->link('Ver todos', array('action' => 'eventos', 3), array('class' => 'btnTodosEv btn btn-default', 'title' => 'Ver todos', 'escape' => false)) . '</div><br><br>';
				}
			} ?>

		</div>

		<div class="col-md-3">
			<?php echo $this->Element('linksRight') ?>
			<?php echo $this->Element('dizimo') ?>
		</div>

		
	</div>
</div>

<?php echo $this->Element('footer'); ?>