<?php
	echo $this->Html->link(
		$this->Html->image('radio.png', array('class' => 'col-md-12 col-sm-12 img img-responsive linksExternos', 'title' => 'Programa A Igreja nos ensina')),
		'http://www.morrograndefm.com.br/', 
		array('target' => '_blank', 'escape' => false)
	);

	echo $this->Html->link(
		$this->Html->image('liturgia.png', array('class' => 'col-md-12 col-sm-12 img img-responsive linksExternos', 'title' => 'Liturgia diária (site CNBB)')),
		'http://liturgiadiaria.cnbb.org.br/app/user/user/UserView.php', 
		array('target' => '_blank', 'escape' => false)
	);

	echo $this->Html->link(
		$this->Html->image('facebook.png', array('class' => 'col-md-12 col-sm-12 img img-responsive linksExternos','title' => 'Página do Facebook')),
		'https://www.facebook.com/pages/Santuario-S%C3%A3o-Jo%C3%A3o-Batista/400969540020527', 
		array('target' => '_blank', 'escape' => false)
	);
	
	echo $this->Html->link(
		$this->Html->image('arqdiocese.png', array('class' => 'col-md-12 col-sm-12 img img-responsive linksExternos', 'title' => 'Site da Arquidiocese de Mariana')),
		'http://www.arqmariana.com.br/', 
		array('target' => '_blank', 'escape' => false)
	);



	echo $this->Html->link(
		$this->Html->image('cnbb.png', array('class' => 'col-md-12 col-sm-12 img img-responsive linksExternos', 'title' => 'Site CNBB')),
		'http://www.cnbb.org.br/', 
		array('target' => '_blank', 'escape' => false)
	);
?>