<!DOCTYPE html>
<html lang="en">
  <head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

    echo $this->Html->css('bootstrap.css');
    echo $this->Html->css('style.css');
    echo $this->Html->css('carousel.css');
    echo $this->Html->css('lightbox.css');
    //echo $this->Html->css('style2.css');
	?>

  	<!-- Latest compiled and minified JavaScript -->
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    	body{ padding: 0px 0px; }
    </style>

  </head>

  <body>

    <div class="container-fluid">
      <?php 
        if ($this->params['controller'] == 'homes' || $this->params['controller'] == 'pages') {
          echo $this->Element('nav_site');
          //echo $this->Element('nav_site2');
          echo $this->Element('nav_large'); 
          echo '<div class="margin"></div>';
        } else {
          echo $this->Element('navigation');
          echo '<div class="margin_admin"></div>';           
        }
      ?>      

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

    </div><!-- /.container -->

  </body>
</html>

<?php
  echo $this->Html->script('script.js');
  echo $this->Html->script('carousel.js');
  echo $this->Html->script('lightbox.js');
  echo $this->Html->script('mascara.js');
  echo $this->Html->script('jquery.scrollUp.min');
