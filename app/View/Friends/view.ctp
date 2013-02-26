<div class="friends view">
<h2><?php  echo __('Friend'); ?></h2>
	<dl>
		<dt><?php echo __('Nom ami'); ?></dt>
		<dd>
			<?php echo h($friend['Amis']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($friend['Friend']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($friend['Friend']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Friend'), array('action' => 'edit', $friend['Friend']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Friend'), array('action' => 'delete', $friend['Friend']['id']), null, __('Are you sure you want to delete # %s?', $friend['Friend']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Friends'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Friend'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
