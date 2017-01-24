<?php
	echo '<br><br><div style="padding: 15px"><span class="entypo entypo-book-open icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3jornal">Jornal <i>O Precursor</i></h3>');
	echo '<hr class="hr2"></div>';
	echo $this->Html->link(
					$this->Html->image('jornal.jpeg', array('class' => 'col-md-12 img img-responsive jornal', 'title' => 'Clique para abrir o pdf do jornal')),
					'../files/'.$pdf['0']['Pdf']['pdf'], 
					array('target' => '_blank', 'escape' => false)
				);

	echo '<div style="padding: 15px"><span class="glyphicon glyphicon-link icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Links Externos</h3>');
	echo '<hr class="hr2"></div>';
	echo $this->Element('linksExternos');
?>