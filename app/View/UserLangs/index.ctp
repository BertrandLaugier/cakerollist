<div class="userLangs index">
	<h2><?php echo __('User Langs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lang_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userLangs as $userLang): ?>
	<tr>
		<td><?php echo h($userLang['UserLang']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userLang['User']['username'], array('controller' => 'users', 'action' => 'view', $userLang['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userLang['Lang']['name'], array('controller' => 'langs', 'action' => 'view', $userLang['Lang']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userLang['UserLang']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userLang['UserLang']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userLang['UserLang']['id']), null, __('Are you sure you want to delete # %s?', $userLang['UserLang']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Lang'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Langs'), array('controller' => 'langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lang'), array('controller' => 'langs', 'action' => 'add')); ?> </li>
	</ul>
</div>
