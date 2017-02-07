<title>
    <?php $this->assign('title', $title); ?>
</title>

<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">

			<?php

				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">Sacramentos</h3>'). '</div>';
				echo '<hr class="hr"></div>';

				echo '<div class="col-md-12 col-sm-12" style="padding: 0 15px; font-size: 20px; text-align: justify">';

					echo '<p>Os sacramentos são o centro da Sagrada Liturgia. São sinais sensíveis e eficazes que indicam uma ação de Deus em nós. Eles visam à nossa santificação, conferindo-nos a graça e preparando nosso coração para acolhê-la.</p>

					<p>A graça, dom sobrenatural de Deus, foi assim definida por Santo Agostinho: “A graça é como o prazer que nos atrai... Não há nada de duro na santa violência com que Deus nos atrai... tudo é suave e benfazejo” (Sermo 133, cap. XI).</p>

					<p>Para se comunicar conosco, nos salvar e nos possibilitar uma vida de intimidade e comunhão, Deus se tornou audível, visível e papável. Ele faz isso de muitas formas, mas de maneira mais bonita e perfeita, em Jesus Cristo.</p>

					<p>Estas formas ou sinais de Deus, da sua presença amorosa, são chamadas de Sacramento que, no latim, significa “algo que santifica”. Sendo assim, Cristo é o sacramento perfeito; a Igreja é o sacramento geral de Jesus Cristo, o seu corpo; e a liturgia, particularmente os sete sacramentos, e mais especificamente a Eucaristia, é sinal da ação de Cristo em nossa vida.</p>

					<p>Todo sacramento passa pelos sentidos, por meio de algum símbolo como o pão, o vinho, a água e óleo. Nos ajuda a fazer a experiência de algo que nos transcende e não apenas significa a graça, sobretudo, a produz.</p>

					<p>De forma resumida, podemos dizer que Jesus instituiu os sete sacramentos, como sinais da graça, para os momentos e circunstâncias mais importantes da vida:</p>';


					echo '<div class="row"><div class="col-md-12 col-sm-12" style="padding: 0; margin-top:30px; margin-bottom:15px"><div class="linkTitulos">'.__('<h3 class="h3">Sacramentos da Iniciação Cristã</h3>'). '</div>';
					echo '<hr class="hr"></div></div>';

					echo '<div class="col-md-12" style="padding: 0">';
						for ($i=0; $i < 2; $i++) {

							$id = 'sac' . $i; 

							echo '<div class="panel-group" id="accordion">
							    <div class="panel panel-default">
							      	<div class="panel-heading panel-head-sac">
							        	<h4 class="panel-title">
							          		<a class="link-sac" data-toggle="collapse" data-parent="#accordion" href="#' . $id . '">' . $sacramentos[$i]['Sacramento']['nome'] . '&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-down icon" style="color: #fff"></span></a>
							        	</h4>
							      	</div>
							      	<div id="' . $id . '" class="panel-collapse collapse">
							        	<div class="panel-body panel-sac">';

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
					echo '</div>';

					echo '<div class="row"><div class="col-md-12 col-sm-12" style="padding: 0; margin-top:30px; margin-bottom:15px"><div class="linkTitulos">'.__('<h3 class="h3">Sacramentos de Cura</h3>'). '</div>';
					echo '<hr class="hr"></div></div>';

					echo '<div class="col-md-12" style="padding: 0">';

						/*for ($i=4; $i < 6; $i++) {

							$id = 'sac' . $i; 

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

					echo '<div class="row"><div class="col-md-12 col-sm-12" style="padding: 0; margin-top:30px; margin-bottom:15px"><div class="linkTitulos">'.__('<h3 class="h3">Sacramentos do Serviço da Comunhão</h3>'). '</div>';
					echo '<hr class="hr"></div></div>';

					echo '<div class="col-md-12" style="padding: 0">';

						/*for ($i=6; $i < 8; $i++) {

							$id = 'sac' . $i; 

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

					echo '<div class="row"><div class="col-md-12 col-sm-12" style="padding: 0; margin-top:30px; margin-bottom:15px"><div class="linkTitulos">'.__('<h3 class="h3">Orientações sobre a comunhão</h3>'). '</div>';
					echo '<hr class="hr"></div></div>';

					echo '<p>É muito recomendado que os fiéis, e também o próprio sacerdote, recebam o Corpo do Senhor em hóstias consagradas na mesma Missa e participem do cálice nos casos previstos (cf. Missal Romano, 283). Quando se usam as hóstias do sacrário, evitar chamar a atenção para isso.</p>

						<p>A caminhada que fazemos para comungar (procissão) lembra o povo que caminha, e manifesta o nosso desejo de ir ao encontro do Senhor. Não é só ele que vem ao nosso encontro.</p>

						<p>Nós comungamos de pé, em sinal de adesão a Jesus Cristo, de prontidão para a missão. A comunhão nos põe a caminho. Não é proibido comungar de joelhos, porque a Igreja garante ao fiel esse direito. Mas, orientamos para que recebam de pé, evitando dar à Eucaristia o sentido de adoração, uma vez que, naquele momento, trata-se sobretudo de uma Ceia, de uma refeição. Além disso, se toda pessoa for se ajoelhar, acaba criando um transtorno e atrasa muito mais o rito da comunhão. Além de chamar a atenção para si, por fazer diferente dos outros.</p>

						<p>A Igreja aconselha a dar a comunhão sob as duas espécies mais vezes. Porém, caso a pessoa não queira, ou não possa por algum motivo, receberá apenas sob a espécie do Pão: “aos fieis que, eventualmente, queiram comungar somente sob a espécie de pão, seja-lhes oferecida a sagrada comunhão dessa forma” (Instrução Geral do Missal Romano, 284b). Em nossa paróquia, temos procurado fazer isso nas celebrações do final de semana.</p>

						<p>O canto, no momento da comunhão, é só para acompanhar a sua distribuição. Quando a última pessoa a recebeu, pode-se cessar o canto. Desta maneira, os fiéis têm um bom espaço para o silêncio e a oração pessoal.</p>

						<p>Quanto à comunhão na boca ou na mão, a Igreja orienta para que também se respeite a vontade de quem vai comungar¹. Há uma campanha, por parte de alguns movimentos, no sentido de não recebê-la na mão. Contudo, há pelo menos duas boas razões para se preferir essa forma de comungar: em primeiro lugar porque a comunhão é alimento, comida. E um alimento é tomado por cada pessoa com as próprias mãos. Só pessoas muito idosas ou doentes e criancinhas muito novas o recebem na boca. E não somos mais crianças! Jesus não colocou o pão consagrado na boca dos apóstolos. Ele disse: “Tomai e comei”. Nós tomamos e comemos, como adultos na fé. Se alguns acham que a mão é impura, é bom lembrar o que disse Jesus: “o que vem de fora não pode tornar impura a pessoa, mas o que sai dela... de dentro do coração” (cf Mc 7,18-22). A impureza está no coração, e é ele que precisa ser purificado.</p>

						<p>O outro motivo é por questão de higiene. Por mais que o padre e o ministro se esforcem, algumas pessoas acabam tocando com a língua nos seus dedos. Ao pegar outra hóstia, ele vai passar a saliva para outros. Em tempos de epidemias, a CNBB e o Ministério da Saúde praticamente proíbem a comunhão na boca, para evitar transmissão de doenças.</p>

						<p>Para receber a comunhão na mão, em nossa paróquia temos feito assim: a pessoa estende as duas mãos sobrepostas, com a esquerda por cima. A hóstia é colocada na palma esquerda. A pessoa a pega com a direita e leva à boca. Isso deve ser feito antes de se retirar, na frente do ministro.</p>

						<p>No caso da comunhão sob as duas espécies, a pessoa pega a hóstia, molha no cálice e leva à boca, colocando a mão esquerda por baixo pra evitar que possa pingar no chão. Evitamos entregar a hóstia depois de já molhada no Sangue de Cristo, porque a pessoa pode ficar sem jeito de pegar, e isso pode induzir à comunhão na boca.</p>

						<p>Pedimos a todos(as) que tenham todo cuidado na hora de comungar. Faça-o com calma e com o respeito que merece Jesus eucarístico.</p>

						<p>_________________________</p>

						<p>¹ Cf. Instrução Geral do Missal Romano, 161; CNBB. Pastoral da Eucaristia - Subsídios - (Parte I), 2; Redemptionis

						Sacramentum, 92.</p>';

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