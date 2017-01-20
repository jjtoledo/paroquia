<?php echo $this->Element('slideshow') ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-9">
			<?php if (!empty($eventos)){
				echo '<br><br><div style="padding: 15px"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Próximos eventos</h3>');
				echo '<hr class="hr"></div>';
				foreach ($eventos as $e) {
					$i = 0;
					echo '<div class="col-md-4 col-sm-12 divNoticia">';
			    echo '<div class="noticia agenda">';
					echo $this->Html->link(
							 	$this->Html->image($fotos_ev[$i]['FotoEvento']['foto'], array('class' => 'class_img', 'width' => '100%', 'height' => '70%')),
						 		array('action' => 'eventos', $e['Evento']['id']),
						 		array('escape' => false)
							);
					echo '<h3 class="text-center menor"><b>'.$e['Evento']['nome'].'</b></h3>';
					echo '<p class="text-center menor_detalhe"><span class="entypo entypo-calendar"></span>&nbsp;'. date("d/m/Y", strtotime($e['Evento']['data'])).'</p>';
					echo '</div>';
					echo '</div>';
					$i++;
				}
			} ?>
		</div>

		<div class="col-md-3">
			<?php
				echo '<br><br><div style="padding: 15px"><span class="glyphicon glyphicon-time icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Atendimento</h3>');
				echo '<hr class="hr2"></div>';
				echo '<p class="cinza"><b>Secretaria Paroquial:</b><p>';
				echo '<p class="cinza">Segunda de 13hs às 18hs.<p>';
				echo '<p class="cinza">Terça a Sexta de 08h às 11h e de 13h às 18h.<p>';
				echo '<p class="cinza"><span class="glyphicon glyphicon-earphone"></span> (31) 3837-1766<p>';

				echo '<br><br><div style="padding: 15px"><span class="entypo entypo-book-open icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Jornal <i>O Precursor</i></h3>');
				echo '<hr class="hr2"></div>';

				echo '<br><br><div style="padding: 15px"><span class="glyphicon glyphicon-link icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Links Externos</h3>');
				echo '<hr class="hr2"></div>';
			?>
		</div>
	</div>
</div>

<?php echo $this->Element('footer'); ?>