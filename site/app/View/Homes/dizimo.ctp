<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-12" id="myDialog"></div>
		<div class="col-md-3">
			<?php echo '<br><br>'.$this->Html->link(
										$this->Html->image('dizimo.jpeg', array('class' => 'img img-responsive', 'id' => 'img_imprimir')),
										array(),
										array('escape' => false, 'id' => 'btn_imprimir')) ?>
		</div>

		<div class="col-md-6">
			<?php
				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">Dízimo: Por quê e para quê?</h3>'). '</div>';
				echo '<hr class="hr"></div>';

				echo '<div class="col-md-12 col-sm-12" style="padding: 0 15px; font-size: 22px; text-align: justify">';
					echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;Em nossas lutas e caminhadas, ouvimos sempre algumas palavras de ordem: água, saúde, educação e energia não são mercadorias. Têm coisas que são essenciais à vida humana. Saúde e educação, por exemplo, não deveriam ser fonte de lucro. Não podem virar comércio. Religião também não.</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Os quatro evangelistas nos deixam claro que uma das poucas vezes em que Jesus perdeu a paciência e, literalmente, ‘chutou o pau da barraca’ foi quando encontrou gente fazendo comércio no Templo, explorando a fé do povo simples e ganhando dinheiro com a religião (cf. Mt 21,12-13; Mc 11,15-17; Lc 19,45; Jo 2,16). A fé não pode ser fonte de lucro, mas ferramenta de partilha. </p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Por isso, para se manter, evangelizar, fazer seu trabalho pastoral, promover a vida e exercer a caridade, a Igreja precisa de recursos. Necessita de bens para fazer o bem. É esta a razão das ofertas e do dízimo. </p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Como você sabe, não cobramos nada para exercer nossa missão. Não há taxas para casamentos, batizados, missas, atendimento aos doentes, visitas às casas. Tudo isso só é possível graças à sua participação livre e generosa como dizimista. Mesmo a pessoa que não contribui com o dízimo terá o mesmo atendimento. Outros ‘pagarão’ por ela.</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Além disso, o dízimo é um sinal bonito de gratidão a Deus que nos dá tanto: a vida, a terra que produz os alimentos, a inteligência, a capacidade de trabalhar. É uma forma de devolver a Ele, através da comunidade, um pouco do muito que recebemos. E mais. O Dízimo educa para a partilha, a solidariedade, o desapego, o compromisso. É um gesto de fé, de amor, de confiança na providência divina.</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;“Façam a experiência do dízimo, diz o Senhor, e vocês verão se não abro as comportas do céu, se não derramo sobre vocês as minhas bênçãos” (Malaquias 3,10).</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Cada um(a) dê de acordo com o seu coração, “conforme as suas próprias possibilidades” (Catecismo da Igreja Católica, §2043). E que não seja de qualquer jeito, resmungando, achando ruim, mas com alegria e gratidão. Quem semeia pouco, colhe pouco. Quem semeia muito colhe muito (cf. 2Cor 9,6-7).</p>';
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