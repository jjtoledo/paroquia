<div class="container-fluid margin_semSlide">
	<div class="row">
		<div class="col-md-9">
			<?php
				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">Comunidades Urbanas</h3>'). '</div>';
				echo '<hr class="hr"></div>';

				echo $this->Element('menuComunidades', array('tipo' => 1));

				echo '<br><br><div class="col-md-12 col-sm-12" style="padding: 15px"><div class="linkTitulos">'.__('<h3 class="h3">Comunidades Rurais</h3>'). '</div>';
				echo '<hr class="hr"></div>';
				
				echo $this->Element('menuComunidades', array('tipo' => 2));	
			?>
		</div>

		<div class="col-md-3">
			<?php echo $this->Element('linksRight') ?>
			<?php echo $this->Element('dizimo') ?>
		</div>

		
	</div>
</div>

<?php echo $this->Element('footer'); ?>