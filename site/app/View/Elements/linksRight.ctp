<?php
	echo '<br><br><div class="col-sm-12" style="padding: 15px"><span class="entypo entypo-book-open icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3jornal">Jornal <i>O Precursor</i></h3>');
	echo '<hr class="hr2"></div>';
	echo $this->Html->link(
					$this->Html->image('jornal1.png', array('class' => 'col-md-12 col-sm-12 img img-responsive jornal opacity', 'title' => 'Clique para abrir o pdf do jornal do mês')),
					'../files/'.$pdf['0']['Pdf']['pdf'], 
					array('target' => '_blank', 'escape' => false)
				);
	echo '<div class="col-md-12 col-sm-12 espacoPdf">' . $this->Html->link('Ver todos', array('action' => 'pdfs'), array('class' => 'btnTodosPdf btn btn-default', 'title' => 'Ver todos', 'escape' => false)) . '</div>';

	echo $this->Element('radio');
?>