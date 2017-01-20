<?php echo $this->Element('slideshow') ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-9">
			<?php if (!empty($eventos)){
				echo '<br><br><br><div style="padding: 15px"><h3 class="h3">Próximos eventos</h3>';
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
					echo '<h3 class="text-center menor">'.$e['Evento']['nome'].'</h3>';
					echo '<p class="text-center menor_detalhe">'.date("d/m/Y", strtotime($e['Evento']['data'])).'</p>';
					echo '</div>';
					echo '</div>';
					$i++;
				}
			} ?>
		</div>

		<div class="col-md-3">
			<?php
				echo '<br><br><br><div style="padding: 15px"><h3 class="h3">Atendimento ao público</h3>';
				echo '<hr class="hr"></div>';
				echo '<p class="cinza">Segunda de 13hs ás 18hs.<p>';
				echo '<p class="cinza">Terça a Sexta feria de 08h as 11h e de 13h as 18h.<p>';
				echo '<p class="cinza"><b>Inclusive para atendimento por telefone:</b><p>';
				echo '<p class="cinza">Tel. (031) 3837-1766<p>';
			?>
		</div>
	</div>
</div>

<?php echo $this->Element('footer'); ?>