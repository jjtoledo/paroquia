<?php
	echo '<div class="container cresce col-lg-8 col-lg-offset-2" id="cidades">';
		foreach ($comunidades as $c) {
			if ($c['Comunidade']['tipo'] == $tipo) {				
				echo '<div class="col-lg-4 col-sm-6 col-xs-12">';
					echo $this->Html->link('<span class="glyphicon glyphicon-home"></span> ' . $c['Comunidade']['nome'], array('action' => 'comunidade', $c['Comunidade']['id']), array('class' => 'listMenu', 'escape' => false));
				echo '</div>';
			}
		}
	echo '</div>';
?>