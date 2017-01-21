<?php echo $this->Element('slideshowEv') ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-9">
			<?php if (!empty($eventos)){
				echo '<br><br><div style="padding: 15px"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Festa dos Padroeiros</h3>');
				echo '<hr class="hr"></div>';

				echo $this->Html->link('Ver todos >>', array('action' => 'eventos'), array('class' => 'btnTodosEv btn btn-default', 'escape' => false)); 

				echo '<br><br><div style="padding: 15px"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Encontros</h3>');
				echo '<hr class="hr"></div>';

				echo $this->Html->link('Ver todos >>', array('action' => 'eventos'), array('class' => 'btnTodosEv btn btn-default', 'escape' => false)); 

				echo '<br><br><div style="padding: 15px"><span class="glyphicon glyphicon-calendar icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Outros eventos</h3>');
				echo '<hr class="hr"></div>';

				echo $this->Html->link('Ver todos >>', array('action' => 'eventos'), array('class' => 'btnTodosEv btn btn-default', 'escape' => false)); 
					
			} ?>

		</div>

		<div class="col-md-3">
			<?php

				echo '<br><br><div style="padding: 15px"><span class="entypo entypo-book-open icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Jornal <i>O Precursor</i></h3>');
				echo '<hr class="hr2"></div>';

				echo '<br><br><div style="padding: 15px"><span class="glyphicon glyphicon-link icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Links Externos</h3>');
				echo '<hr class="hr2"></div>';
			?>
		</div>
	</div>
</div>

<?php echo $this->Element('footer'); ?>