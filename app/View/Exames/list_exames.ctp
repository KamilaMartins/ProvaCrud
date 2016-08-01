<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading text-center"><h3>Menu</h3></div>
		<div class="panel-body">
			<?php echo $this->Html->link('Página Inicial', 
																		array('controller' => 'pages', 
																					'action' => 'display'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

			<?php echo $this->Html->link('Listar Exames', 
																		array('action' => 'list_exames'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

			<?php echo $this->Html->link('Listar Pacientes', 
																		array('controller' => 'pacientes', 
																					'action' => 'listar'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

			<?php echo $this->Html->link('Listar Procedimentos', 
																		array('controller' => 'procedimentos',
																					'action' => 'index_admin'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

			<?php echo $this->Html->link('Total dos Exames', 
																		array('controller' => 'exames', 
																					'action' => 'total_exames'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>
		</div>
	</div>
</div>

<div class="col-md-9">
	<h2><?php echo 'Exames'; ?></h2>
	<div class="btn btn-default">
		<?php echo $this->Html->link('Novo', array('action' => 'add_admin')); ?>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th><?php echo 'Paciente'; ?></th>
				<th><?php echo 'Procedimento'; ?></th>
				<th><?php echo 'Data'; ?></th>
				<th><?php echo 'Ações'; ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($exames as $exame): ?>
			<tr>
				<td><?php echo h($exame['Paciente']['nome']); ?></td>
				<td><?php echo h($exame['Procedimento']['nome']); ?></td>
				<td><?php echo h($exame['Exame']['data']); ?></td>
				<td>
					<?php echo $this->Html->link('Editar', 
																				array('action' => 'editar', 
																							$exame['Exame']['id'])); ?>

					<?php echo $this->Form->postLink('Excluir', 
																						array('action' => 'delete', 
																									$exame['Exame']['id']), 
																									array('confirm' => 'Deseja mesmo apagar este exame?')); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
