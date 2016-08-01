<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading text-center"><h3>Menu</h3></div>
		<div class="panel-body">
			<?php echo $this->Html->link('Voltar', 
																		array('action' => 'index_admin'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>
		</div>
	</div>
</div>

<div class="col-md-9">
<?php echo $this->Form->create('Procedimento'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Procedimento'); ?></legend>
	<?php
		echo $this->Form->input('nome', array('class' => 'form-control'));
		echo $this->Form->input('preco', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo '<br>' . $this->Form->end(__('Adicionar')); ?>
</div>