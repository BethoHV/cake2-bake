<div class="produtos view">
<h2><?php echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Produto'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['nome_produto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produto['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $produto['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preco'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['preco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referencia'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['referencia']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produto'), array('action' => 'edit', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produto'), array('action' => 'delete', $produto['Produto']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $produto['Produto']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
