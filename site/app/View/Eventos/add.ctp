<div class="container eventos form">

<script>	

jQuery(function($){	
  $('#EventoData').mask("99/99/9999"); 

  $("#save").click(function(){
    var data = $("#EventoData").val();
    if (isValidDate(data)) {
    	var parts = data.split("/");
		  var day = parseInt(parts[0], 10);
		  var month = parseInt(parts[1], 10);
		  var year = parseInt(parts[2], 10);
		  var d = year + '-' + month + '-' + day;
		  $("#EventoData").val(d);
    } else {
    	alert("Data inválida");
    	$("#EventoAddForm").submit(function(event) {
    		return false;
    	});
    }
	});
});

function isValidDate(dateString) {
  // First check for the pattern
  if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
      return false;

  // Parse the date parts to integers
  var parts = dateString.split("/");
  var day = parseInt(parts[0], 10);
  var month = parseInt(parts[1], 10);
  var year = parseInt(parts[2], 10);

  // Check the ranges of month and year
  if(year < 1000 || year > 3000 || month == 0 || month > 12)
      return false;

  var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

  // Adjust for leap years
  if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
      monthLength[1] = 29;

  // Check the range of the day
  return day > 0 && day <= monthLength[month - 1];
}
	
</script>

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Adicionar Evento'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Ações'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-menu-left"></span>&nbsp;&nbsp;'.__('Voltar'), array('action' => 'index', $comunidade['Comunidade']['id']), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Evento', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('nome', array('class' => 'form-control', 'placeholder' => 'Nome'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('data', array('class' => 'form-control', 'type' => 'text'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Tinymce->input('Evento.texto', $options = array('label' => 'Descrição'), $tinyoptions = array(), $preset = null) ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Adicionar'), array('class' => 'btn btn-primary', 'id' => 'save')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
