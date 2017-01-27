<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">			
			<?php
				echo '<div class="row">';
					echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos"><span class="glyphicon glyphicon-search icon"></span>&nbsp;&nbsp;'.__('<h3 class="h3">Resultados da busca</h3>'). '</div>';
					echo '<hr class="hr"></div>';
				echo '</div>';

				if ((!empty($results_com)) || (!empty($results_ev)) || (!empty($results_pdf)) || (!empty($results_padre)) || (!empty($results_past)) || (!empty($results_sac))) {

					if (!empty($results_com)) {
						echo '<div class="col-md-12">';
							echo '<div class="actions">';
								echo '<div class="panel panel-default">';
									echo '<div class="panel-heading">Comunidades</div>';
									echo '<div class="panel-body">';
										echo '<ul class="nav nav-pills nav-stacked">';
											foreach ($results_com as $c) {
												echo '<li>'.$this->Html->link($c['Comunidade']['nome'], array('action' => 'comunidade', $c['Comunidade']['id']), array('escape' => false)).'</li>';
											}											 
										echo '</ul>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}

					if (!empty($results_ev)) {
						echo '<div class="col-md-12">';
							echo '<div class="actions">';
								echo '<div class="panel panel-default">';
									echo '<div class="panel-heading">Eventos</div>';
									echo '<div class="panel-body">';
										echo '<ul class="nav nav-pills nav-stacked">';
											foreach ($results_ev as $c) {
												echo '<li>'.$this->Html->link($c['Evento']['nome'], array('action' => 'evento', $c['Evento']['id']), array('escape' => false)).'</li>';
											}											 
										echo '</ul>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}

					if (!empty($results_pdf)) {
						echo '<div class="col-md-12">';
							echo '<div class="actions">';
								echo '<div class="panel panel-default">';
									echo '<div class="panel-heading">Jornais</div>';
									echo '<div class="panel-body">';
										echo '<ul class="nav nav-pills nav-stacked">';
											foreach ($results_pdf as $c) {
												echo '<li>'.$this->Html->link($c['Pdf']['pdf'], array('action' => '../files/'.$c['Pdf']['pdf']), array('target', '_blank', 'escape' => false)).'</li>';
											}											 
										echo '</ul>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					} 

					if (!empty($results_padre)) {
						echo '<div class="col-md-12">';
							echo '<div class="actions">';
								echo '<div class="panel panel-default">';
									echo '<div class="panel-heading">Padres e Diácono</div>';
									echo '<div class="panel-body">';
										echo '<ul class="nav nav-pills nav-stacked">';
											foreach ($results_padre as $c) {
												echo '<li>'.$this->Html->link($c['Padre']['nome'], array('action' => 'padresediacono'), array('escape' => false)).'</li>';
											}											 
										echo '</ul>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}

					if (!empty($results_past)) {
						echo '<div class="col-md-12">';
							echo '<div class="actions">';
								echo '<div class="panel panel-default">';
									echo '<div class="panel-heading">Pastorais e Movimentos</div>';
									echo '<div class="panel-body">';
										echo '<ul class="nav nav-pills nav-stacked">';
											foreach ($results_past as $c) {
												echo '<li>'.$this->Html->link($c['Pastoral']['nome'], array('action' => 'pastoraisemov'), array('escape' => false)).'</li>';
											}											 
										echo '</ul>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					} 

					if (!empty($results_sac)) {
						echo '<div class="col-md-12">';
							echo '<div class="actions">';
								echo '<div class="panel panel-default">';
									echo '<div class="panel-heading">Sacramentos</div>';
									echo '<div class="panel-body">';
										echo '<ul class="nav nav-pills nav-stacked">';
											foreach ($results_sac as $c) {
												echo '<li>'.$this->Html->link($c['Sacramento']['nome'], array('action' => 'sacramentos'), array('escape' => false)).'</li>';
											}											 
										echo '</ul>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}
				} else {
					echo '<div class="col-md-12 col-sm-12" style="padding: 0 15px; font-size: 20px; text-align: justify">';
						echo '<p><b>Nenhum resultado encontrado para a sua pesquisa!</b> <br> Verifique sua ortografia ou tente outro termo.</p>';
					echo '</div>';
				}
			?>
		</div>

		<div class="col-md-3">
			<?php echo $this->Element('linksRight') ?>
			<?php echo $this->Element('dizimo') ?>
		</div>

		
	</div>
</div>

<?php echo $this->Element('footer'); ?>
