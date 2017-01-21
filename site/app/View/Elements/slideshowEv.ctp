<div class="container-fluid">

	<div id="espaco">

	</div>
  
	<div class="row">
	    <div class="col-md-12">
	      	<div class="carousel carousel-showmanymoveone slide" id="carouselABC">
	        	<div class="carousel-inner">
        			<?php         			
				  		 if (!empty($fotos_ev)) {
				  			$count = 0;
				  			$active = '';
						  	foreach ($fotos_ev as $foto) {
				  				if ($count == 0) {
				  					$active = 'active';
				  				} else {
				  					$active = '';
				  				}

				  				echo '<div class="item '.$active.'">';
				  					echo '<div class="col-xs-12 col-sm-6 col-md-3">';
				  						echo $this->Html->link(
													 $this->Html->image($foto['FotoEvento']['foto'], array('class' => 'img-carousel')),
													 '../img/'.$foto['FotoEvento']['foto'],
													 array('escapeTitle' => false, 'title' => $foto['FotoEvento']['descricao'], 'data-lightbox'=> 'roadtrip', 'class' => 'class_url')
												);
				  					echo '</div>';
					    		echo '</div>';

					    		$count++;
					    	}
				  		} ?>
	        	</div>
	      	</div>
	    </div> 
	</div>
</div>