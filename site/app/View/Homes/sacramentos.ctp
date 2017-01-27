<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">

			<?php

				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">Sacramentos</h3>'). '</div>';
				echo '<hr class="hr"></div>';

				echo '<div class="col-md-12 col-sm-12" style="padding: 0 15px; font-size: 20px; text-align: justify">';

					echo '<p>Os sacramentos são o centro da Sagrada Liturgia. São sinais sensíveis e eficazes que indicam uma

					ação de Deus em nós. Eles visam à nossa santificação, conferindo-nos a graça e preparando nosso

					coração para acolhê-la.</p>

					<p>A graça, dom sobrenatural de Deus, foi assim definida por Santo Agostinho: “A graça é como o

					prazer que nos atrai... Não há nada de duro na santa violência com que Deus nos atrai... tudo é

					suave e benfazejo” (Sermo 133, cap. XI).</p>

					<p>Para se comunicar conosco, nos salvar e nos possibilitar uma vida de intimidade e comunhão, Deus

					se tornou audível, visível e papável. Ele faz isso de muitas formas, mas de maneira mais bonita e

					perfeita, em Jesus Cristo.</p>

					<p>Estas formas ou sinais de Deus, da sua presença amorosa, são chamadas de Sacramento que, no

					latim, significa “algo que santifica”. Sendo assim, Cristo é o sacramento perfeito; a Igreja é o

					sacramento geral de Jesus Cristo, o seu corpo; e a liturgia, particularmente os sete sacramentos, e

					mais especificamente a Eucaristia, é sinal da ação de Cristo em nossa vida.</p>

					<p>Todo sacramento passa pelos sentidos, por meio de algum símbolo como o pão, o vinho, a água e

					óleo. Nos ajuda a fazer a experiência de algo que nos transcende e não apenas significa a graça,

					sobretudo, a produz.</p>

					<p>De forma resumida, podemos dizer que Jesus instituiu os sete sacramentos, como sinais da graça,

					para os momentos e circunstâncias mais importantes da vida:</p>

					<p><b>Sacramentos da Iniciação Cristã:</b></p>';

					for ($i=0; $i < 2; $i++) {

						$id = 'tipo' . $i; 

						echo '<div class="panel-group" id="accordion">
						    <div class="panel panel-default">
						      	<div class="panel-heading">
						        	<h4 class="panel-title">
						          		<a data-toggle="collapse" data-parent="#accordion" href="#' . $id . '">' . $sacramentos[$i]['Sacramento']['nome'] . '</a>
						        	</h4>
						      	</div>
						      	<div id="' . $id . '" class="panel-collapse collapse">
						        	<div class="panel-body">';

								  		echo '<div class="col-md-4 col-sm-4 col-xs-5 fotoSacramentoPrincipal">';
											echo '<div class="thumbnail">';
												echo $this->Html->image($sacramentos[$i]['Sacramento']['foto'], array('class' => 'img img-responsive img_sacramento'));
											echo '</div>';
										echo '</div>';

										echo '<p class="txtSac">'. $sacramentos[$i]['Sacramento']['texto'].'</p>';

						        	echo '</div>
						      </div>
						    </div>
						</div>';
					}

					echo '<br><br><p><b>Sacramentos de Cura:</b></p>';

					/*for ($i=4; $i < 6; $i++) {

						$id = 'tipo' . $i; 

						echo '<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#' . $id . '">' . $sacramentos[$i]['Sacramento']['nome'] . '</button>

					  	<div id="' . $id . '" class="collapse">';

					  		echo '<div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">'. $sacramentos[$i]['Sacramento']['nome'].'</h3>'). '</div>';
							echo '<hr class="hr"></div>';

						  	echo '<div class="col-md-4 col-sm-4 col-xs-5 fotoSacramentoPrincipal">';
								echo '<div class="thumbnail">';
									echo $this->Html->image($sacramentos[$i]['Sacramento']['foto'], array('class' => 'img img-responsive img_sacramento'));
								echo '</div>';
							echo '</div>';

							echo '<div class="txtEvento">';
								echo '<div style="font-size: 20px; margin-bottom: 40px">'. $sacramentos[$i]['Sacramento']['texto'].'</div>';
							echo '</div>';

					  	echo '</div>';
					}*/

					echo '<p><b>Sacramentos do Serviço da Comunhão:</b></p>'; 

					/*for ($i=6; $i < 8; $i++) {

						$id = 'tipo' . $i; 

						echo '<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#' . $id . '">' . $sacramentos[$i]['Sacramento']['nome'] . '</button>

					  	<div id="' . $id . '" class="collapse">';

					  		echo '<div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">'. $sacramentos[$i]['Sacramento']['nome'].'</h3>'). '</div>';
							echo '<hr class="hr"></div>';

						  	echo '<div class="col-md-4 col-sm-4 col-xs-5 fotoSacramentoPrincipal">';
								echo '<div class="thumbnail">';
									echo $this->Html->image($sacramentos[$i]['Sacramento']['foto'], array('class' => 'img img-responsive img_sacramento'));
								echo '</div>';
							echo '</div>';

							echo '<div class="txtEvento">';
								echo '<div style="font-size: 20px; margin-bottom: 40px">'. $sacramentos[$i]['Sacramento']['texto'].'</div>';
							echo '</div>';

					  	echo '</div>';
					}*/

				echo '</div>';
			?>
		</div>

		<div class="col-md-3">
			<?php echo $this->Element('linksRight') ?>
			<?php echo $this->Element('dizimo') ?>
		</div>

		
	</div>
</div>

<?php echo $this->Element('footer'); ?>