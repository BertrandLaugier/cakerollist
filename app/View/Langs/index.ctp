<div class="langs index">
	<h2><?php echo __('Langs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('race_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('info'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($langs as $lang): ?>
	<tr>
		<td><?php echo h($lang['Lang']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lang['Race']['name'], array('controller' => 'races', 'action' => 'view', $lang['Race']['id'])); ?>
		</td>
		<td><?php echo h($lang['Lang']['name']); ?>&nbsp;</td>
		<td><?php echo h($lang['Lang']['info']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lang['Lang']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lang['Lang']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lang['Lang']['id']), null, __('Are you sure you want to delete # %s?', $lang['Lang']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lang'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Races'), array('controller' => 'races', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Race'), array('controller' => 'races', 'action' => 'add')); ?> </li>
	</ul>
</div>
