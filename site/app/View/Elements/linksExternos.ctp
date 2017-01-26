<?php
	echo $this->Html->link(
		$this->Html->image('radio.png', array('class' => 'col-md-12 col-sm-12 img img-responsive linksExternos opacity', 'title' => 'Programa A Igreja nos ensina')),
		'http://www.morrograndefm.com.br/', 
		array('target' => '_blank', 'escape' => false)
	);

	echo $this->Html->link(
		$this->Html->image('liturgia.png', array('class' => 'col-md-12 col-sm-12 img img-responsive linksExternos opacity', 'title' => 'Liturgia diária (site CNBB)')),
		'http://liturgiadiaria.cnbb.org.br/app/user/user/UserView.php', 
		array('target' => '_blank', 'escape' => false)
	);

	echo $this->Html->link(
		$this->Html->image('facebook.png', array('class' => 'col-md-12 col-sm-12 img img-responsive linksExternos opacity','title' => 'Página do Facebook')),
		'https://www.facebook.com/santuariasaojoaobatista/?fref=ts', 
		array('target' => '_blank', 'escape' => false)
	);
	
	echo $this->Html->link(
		$this->Html->image('arqdiocese.png', array('class' => 'col-md-12 col-sm-12 img img-responsive linksExternos opacity', 'title' => 'Site da Arquidiocese de Mariana')),
		'http://www.arqmariana.com.br/', 
		array('target' => '_blank', 'escape' => false)
	);

	echo $this->Html->link(
		$this->Html->image('cnbb.png', array('class' => 'col-md-12 col-sm-12 img img-responsive linksExternos opacity', 'title' => 'Site CNBB')),
		'http://www.cnbb.org.br/', 
		array('target' => '_blank', 'escape' => false)
	);
?>