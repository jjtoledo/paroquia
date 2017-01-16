    <div class="navbar navbar-default navbar-fixed-top nav_site">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
          <?php echo $this->Html->link(
                                $this->Html->image('logo-santuario.png', array('class' => 'logo')), 
                                array('controller' => 'homes', 'action' => 'index'), 
                                array('escape' => false)) 
          ?>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>            
        </div><!--/.nav-collapse -->
      </div>
    </div>