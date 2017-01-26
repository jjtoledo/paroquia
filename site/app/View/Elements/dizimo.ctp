<?php
	echo '<br><br><div class="col-sm-12 marginTop"><span class="glyphicon glyphicon-heart icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Dízimo</h3>');
	echo '<hr class="hr2"></div>';

	echo '<div class="col-sm-12">';

		echo $this->Html->link(
						$this->Html->image('dizimo-1.png', array('class' => 'col-md-12 col-sm-4 img img-responsive fotoDizimo opacity')),
						array('action' => 'dizimo'),
						array('escape' => false, 'title' => 'Clique para ler mais'));

		echo '<br><br><div class="col-sm-12">';
		echo '</div>';

		echo '<p class="col-md-12 col-sm-4 txtDizimoHome" align="justify">Cada um(a) dê de acordo com o seu coração, “conforme as suas próprias possibilidades” (Catecismo da Igreja Católica, §2043).</p>';  

	echo '</div>';

?>