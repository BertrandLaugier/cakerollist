<div class="races form">
<?php echo $this->Form->create('Race'); ?>
	<fieldset>
		<legend><?php echo __('Edit Race'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Race.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Race.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Races'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Langs'), array('controller' => 'langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lang'), array('controller' => 'langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
