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
        <li class="active"><?php echo $this->Html->link('Início', array('action' => 'index')) ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            A Paróquia <span class="caret" style="color: white"></span>
          </a>
          <ul class="dropdown-menu white">
            <li><?php echo $this->Html->link('Comunidades', array('action' => '#')) ?></li>
            <li><?php echo $this->Html->link('Eventos', array('action' => '#')) ?></li>
            <li><?php echo $this->Html->link('Padres e Diácono', array('action' => '#')) ?></li>
            <li><?php echo $this->Html->link('Sacramentos', array('action' => '#')) ?></li>
            <li><?php echo $this->Html->link('Pastorais e Movimentos', array('action' => '#')) ?></li>
          </ul>
        </li>
        <li><?php echo $this->Html->link('Fale Conosco', array('action' => '#')) ?></li>
        <li><?php echo $this->Html->link('Agendar Visita', array('action' => '#')) ?></li>
      </ul>           
    </div><!--/.nav-collapse -->
  </div>
</div>