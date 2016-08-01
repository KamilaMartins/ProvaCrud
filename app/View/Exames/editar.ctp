<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading text-center"><h3>Menu</h3></div>
		<div class="panel-body">
			<?php echo $this->Html->link('Voltar', 
																		array('action' => 'list_exames'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>
		</div>
	</div>
</div>

<div class="col-md-9">
<?php echo $this->Form->create('Exame'); ?>
	<fieldset>
		<legend><?php echo __('Editar Exame'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('data', array(
    'type' => 'date',
    'label' => 'Data prevista',
    'dateFormat' => 'DMY',
    'minYear' => date('Y'),
    'maxYear' => date('Y') + 18,
    'value' => array(
    	'day' => substr($exame['Exame']['data'], 0, 2),
    	'month' => substr($exame['Exame']['data'], 3, 5),
    	'year' => substr($exame['Exame']['data'], 6, 10)),
    'class' => 'form-control'
		));
		echo $this->Form->input('paciente_id', array('class' => 'form-control'));
		echo $this->Form->input('procedimento_id', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo '<br>' . $this->Form->end(__('Salvar')); ?>
</div>