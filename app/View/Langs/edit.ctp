<div class="langs form">
<?php echo $this->Form->create('Lang'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lang'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('race_id');
		echo $this->Form->input('name');
		echo $this->Form->input('info');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Lang.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Lang.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Langs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Races'), array('controller' => 'races', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Race'), array('controller' => 'races', 'action' => 'add')); ?> </li>
	</ul>
</div>
