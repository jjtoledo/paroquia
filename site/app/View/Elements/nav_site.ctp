<div class="navbar navbar-default navbar-fixed-top nav_scroll nav_site">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button> 
    <?php echo $this->Html->link(
                          $this->Html->image('logo2.png', array('class' => 'logo', 'id' => 'scroll-hide')), 
                          array('controller' => 'homes', 'action' => 'index'), 
                          array('escape' => false)) 
    ?>
    <div class="espacoLeft"></div>
  </div>
  
  <div class="collapse navbar-collapse">
    <div class="espacoTopo"></div>
    <div class="col-md-8 col-md-offset-2">
      <ul class="nav navbar-nav">
        <li class="active"> <?php echo $this->Html->link('Início', array('action' => 'index')) ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            A Paróquia <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
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
    </div>         
  </div><!--/.nav-collapse -->
</div>