<?php
	echo '<div class="col-sm-12" style="padding: 15px"><span class="glyphicon glyphicon-link icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Links Externos</h3>');
	echo '<hr class="hr2"></div>';

	echo '<div class="row">';
		echo $this->Html->link(
			$this->Html->image('liturgia2.png', array('class' => 'col-md-12 col-sm-6 col-xs-12 img img-responsive linksExternos fixo opacity', 'title' => 'Liturgia diária (site CNBB)')),
			'http://liturgiadiaria.cnbb.org.br/app/user/user/UserView.php', 
			array('target' => '_blank', 'escape' => false)
		);

		echo $this->Html->link(
			$this->Html->image('facebook.png', array('class' => 'col-md-12 col-sm-6 col-xs-12 img img-responsive linksExternos fixo opacity','title' => 'Página do Facebook')),
			'https://www.facebook.com/santuariosaojoaobatista/?fref=ts', 
			array('target' => '_blank', 'escape' => false)
		);
		
		echo $this->Html->link(
			$this->Html->image('arqdiocese.png', array('class' => 'col-md-12 col-sm-6 col-xs-12 img img-responsive linksExternos fixo opacity', 'title' => 'Site da Arquidiocese de Mariana')),
			'http://www.arqmariana.com.br/', 
			array('target' => '_blank', 'escape' => false)
		);

		echo $this->Html->link(
			$this->Html->image('cnbb.png', array('class' => 'col-md-12 col-sm-6 col-xs-12 img img-responsive linksExternos fixo opacity', 'title' => 'Site CNBB')),
			'http://www.cnbb.org.br/', 
			array('target' => '_blank', 'escape' => false)
		);
	echo '</div>';
?>