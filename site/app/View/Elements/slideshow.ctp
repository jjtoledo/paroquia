<div class="container-fluid">

	<div id="espaco">

	</div>
  
	<div class="row">
	    <div class="col-md-12">
	      	<div class="carousel carousel-showmanymoveone slide" id="carouselABC">
	        	<div class="carousel-inner">
        			<?php         			
				  		 if (!empty($fotos_com)) {
				  			$count = 0;
				  			$active = '';
						  	foreach ($fotos_com as $foto) {
				  				if ($count == 0) {
				  					$active = 'active';
				  				} else {
				  					$active = '';
				  				}

				  				echo '<div class="item '.$active.'">';
				  					echo '<div class="col-xs-12 col-sm-6 col-md-3">';
				  						echo $this->Html->link(
													 $this->Html->image($foto['FotoComunidade']['foto'], array('class' => 'img-carousel')),
													 '../img/'.$foto['FotoComunidade']['foto'],
													 array('escapeTitle' => false, 'title' => $foto['FotoComunidade']['descricao'], 'data-lightbox'=> 'roadtrip', 'class' => 'class_url')
												);
				  					echo '</div>';
					    		echo '</div>';

					    		$count++;
					    	}
				  		} 
				  	?>
	        	</div>
	        	<a class="left carousel-control" href="#carouselABC" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        		<a class="right carousel-control" href="#carouselABC" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
	      	</div>
	    </div> 
	</div>
</div>