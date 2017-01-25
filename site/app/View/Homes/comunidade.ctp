<div class="margin"></div>

<?php echo $this->Element('slideshowCom', array('id' => $comunidade['Comunidade']['id'])) ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<?php
				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">Padroeiro</h3>'). '</div>';
				echo '<hr class="hr2"></div>';

				echo '<div class="col-md-12 col-sm-12" style="padding: 0 15px">';
					echo '<div class="thumbnail com">';
						echo $this->Html->image($comunidade['Comunidade']['foto_padroeiro'], array('class' => 'img img-responsive img_com'));
					echo '</div>';
					echo '<br><p class="text-center" style="font-size: 22px">'.$comunidade['Comunidade']['nome_padroeiro'].'</p>';
				echo '</div>';

				echo '<div class="col-md-12 col-sm-12" style="padding: 15px; margin-top: 50px"><span class="glyphicon glyphicon-time icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Celebrações</h3>');
				echo '<hr class="hr2"></div>';
				echo '<br><div class="col-md-12 col-sm-12" style="font-size: 22px">'.$comunidade['Comunidade']['hora_celeb'].'</div>';
			?>
		</div>

		<div class="col-md-6">
			<?php
				echo '<br><br><div class="col-md-12 col-sm-12 text-center" style="padding: 9px 15px 0 15px"><div class="linkTitulos">'.__('<h2 class="h2">'.$comunidade['Comunidade']['nome'].'</h2>'). '</div>';
				echo '<hr class="hr"></div>';

				echo '<br><div class="col-md-12 col-sm-12" style="font-size: 20px; padding-top: 0">'.$comunidade['Comunidade']['historico'].'</div>';
			?>
		</div>

		<div class="col-md-3">
			<?php echo $this->Element('linksRight') ?>
			<?php echo $this->Element('dizimo') ?>
		</div>

		
	</div>
</div>

<?php echo $this->Element('footer'); ?>