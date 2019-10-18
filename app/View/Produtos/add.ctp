<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Add Produto'); ?></legend>
	<?php
		echo $this->Form->input('nome_produto');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('preco');
		echo $this->Form->input('referencia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
