<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading text-center"><h3>Menu</h3></div>
		<div class="panel-body">
			<?php echo $this->Html->link('Voltar', 
																		array('action' => 'listar'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>
		</div>
	</div>
</div>

<div class="pacientes form col-md-9">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Paciente'); ?></legend>
	<?php
		echo $this->Form->input('nome', array('class' => 'form-control'));
		echo $this->Form->input('login', array('class' => 'form-control'));
		echo $this->Form->input('senha', array('class' => 'form-control', 'type' => 'password'));
	?>
	</fieldset>
	<?php echo '<br>' . $this->Form->end(__('Adicionar')); ?>
</div>
