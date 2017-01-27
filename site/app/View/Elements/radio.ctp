<?php
	echo '<div class="col-md-12 col-sm-6 col-xs-12" style="padding: 0">';
		echo '<br><br><div class="col-md-12 col-sm-12 espacoRadio" style="padding: 15px"><span class="glyphicon glyphicon-volume-up icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Programa na rádio</h3>');
		echo '<hr class="hr2"></div>';

		echo '<p class="pRadio" style="text-align: justify"><span class="glyphicon glyphicon-time"></span> No ar de segunda a sexta das 08h45 às 09h. Clique na imagem para escutar: </p>';

		echo $this->Html->link(
			$this->Html->image('radio4.png', array('class' => 'col-md-12 col-sm-12 margin_radio img img-responsive linksExternos opacity', 'title' => 'Clique para escutar')),
			'http://www.morrograndefm.com.br/', 
			array('target' => '_blank', 'escape' => false)
		);
	echo '</div>';
	
	echo $this->Element('linksExternos');
?>