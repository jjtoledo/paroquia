<?php
	echo '<br><br><div class="col-sm-12 col-xs-12 espacoDizimo"><span class="glyphicon glyphicon-heart icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Dízimo</h3>');
	echo '<hr class="hr2"></div>';

	echo '<div class="col-sm-12 col-sm-offset-0 col-xs-6 col-xs-offset-3">';

		echo $this->Html->link(
						$this->Html->image('dizimo-1.png', array('class' => 'col-md-12 col-md-offset-0 col-sm-4 col-sm-offset-4 img img-responsive fotoDizimo opacity')),
						array('action' => 'dizimo'),
						array('escape' => false, 'title' => 'Clique para ler mais'));

		echo '<br><br><div class="col-sm-12">';
		echo '</div>';

		echo '<p class="col-md-12 col-md-offset-0 col-sm-4 col-sm-offset-4 txtDizimoHome text-center">Cada um(a) dê de acordo com o seu coração, “conforme as suas próprias possibilidades” (Catecismo da Igreja Católica, §2043).</p>';  

	echo '</div>';

?>