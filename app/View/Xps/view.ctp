<div class="xps view">
<h2><?php  echo __('Xp'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($xp['Xp']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Xp'); ?></dt>
		<dd>
			<?php echo h($xp['Xp']['xp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Xp'), array('action' => 'edit', $xp['Xp']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Xp'), array('action' => 'delete', $xp['Xp']['id']), null, __('Are you sure you want to delete # %s?', $xp['Xp']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Xps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Xp'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($xp['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('Background'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Race Id'); ?></th>
		<th><?php echo __('Picture Id'); ?></th>
		<th><?php echo __('Xp Id'); ?></th>
		<th><?php echo __('User Pseudo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($xp['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['updated']; ?></td>
			<td><?php echo $user['background']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['race_id']; ?></td>
			<td><?php echo $user['picture_id']; ?></td>
			<td><?php echo $user['xp_id']; ?></td>
			<td><?php echo $user['user_pseudo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
