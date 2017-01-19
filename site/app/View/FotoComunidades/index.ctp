<div class="container fotoComunidades index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Fotos da Comunidade'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Ações'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp&nbsp;Detalhes Comunidade'), array('controller' => 'comunidades', 'action' => 'view', $comunidade['Comunidade']['id']), array('escape' => false)); ?> </li>													
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Novas fotos'), array('action' => 'add', $comunidade['Comunidade']['id']), array('escape' => false)); ?></li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<?php
				echo '<div class="row">';
					if (count($fotoComunidades > 0)) {
						for ($i=0; $i < count($fotoComunidades); $i++) { 
							echo '<div class="col-sm-6 col-md-4">';
								echo '<div class="thumbnail">';
									echo $this->Html->image($fotoComunidades[$i]['FotoComunidade']['foto'], array('class' => 'img-responsive img_view2'));
									echo '<div class="caption foto">';
										echo $this->Form->end(); ?>
							
										<?php echo $this->Form->postLink('<span class="btn btn-danger" role="button">Excluir</span>', array('action' => 'delete', $fotoComunidades[$i]['FotoComunidade']['id'], $fotoComunidades[$i]['FotoComunidade']['comunidade_id']), array('escape' => false), __('Tem certeza que deseja excluir?'));
										echo '&nbsp;&nbsp;<span class="btn btn-info edit" id="edit'.$fotoComunidades[$i]['FotoComunidade']['id'].'" value="'.$fotoComunidades[$i]['FotoComunidade']['id'].'">Descrição</span>';
										echo '<span style="display:none" class="btn btn-default cancel" id="cancel'.$fotoComunidades[$i]['FotoComunidade']['id'].'" value="'.$fotoComunidades[$i]['FotoComunidade']['id'].'">Cancelar</span>';

										echo '<div style="margin-top: 10px" hidden="true" id="'.$fotoComunidades[$i]['FotoComunidade']['id'].'">';
										    echo $this->Form->create('FotoComunidade', array('type' => 'post', 'class' => 'search-form', 'url' => 'edit/'.$fotoComunidades[$i]['FotoComunidade']['id'].'/'.$fotoComunidades[$i]['FotoComunidade']['comunidade_id']));
										    echo $this->Form->input('id', array('id' => 'FotoId'.$fotoComunidades[$i]['FotoComunidade']['id']));	
										    echo $this->Form->input('descricao', array('type' => 'textarea', 'label' => false, 'class' => 'form-control', 'placeholder' => 'Adicione a descrição', 'default' => $fotoComunidades[$i]['FotoComunidade']['descricao']));	
										    ?>
										    <div class="submit" style="margin-top: 10px">
										    	<input type="submit" value="Salvar" class="btn btn-success">&nbsp;
										    </div>
									    </div>
					    			<?php echo '</div>';
								echo '</div>';
							echo '</div>';
						}
					}
				echo '</div>'; 
			?>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->

	<script type="text/javascript">
		$(document).on("click", ".edit", function () {
	    // Use $(this) to reference the clicked button
	    var id = $(this).attr("value");
	   	$(this).toggle(300);
	   	$('#cancel'+id).toggle(300);
	    $("#"+id).toggle(300);
	    $("#FotoId"+id).attr('value', id);
		});

		$(document).on("click", ".cancel", function () {
	    // Use $(this) to reference the clicked button
	    var id = $(this).attr("value");
	   	$(this).toggle(300);
	   	$('#edit'+id).toggle(300);
	    $("#"+id).toggle(300);
		});
	</script>


</div><!-- end containing of content -->