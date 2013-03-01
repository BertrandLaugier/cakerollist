<div class="races view">
<h2><?php  echo __('Race'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($race['Race']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($race['Race']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($race['Race']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Race'), array('action' => 'edit', $race['Race']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Race'), array('action' => 'delete', $race['Race']['id']), null, __('Are you sure you want to delete # %s?', $race['Race']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Races'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Race'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Langs'), array('controller' => 'langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lang'), array('controller' => 'langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Langs'); ?></h3>
	<?php if (!empty($race['Lang'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Race Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Info'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($race['Lang'] as $lang): ?>
		<tr>
			<td><?php echo $lang['id']; ?></td>
			<td><?php echo $lang['race_id']; ?></td>
			<td><?php echo $lang['name']; ?></td>
			<td><?php echo $lang['info']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'langs', 'action' => 'view', $lang['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'langs', 'action' => 'edit', $lang['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'langs', 'action' => 'delete', $lang['id']), null, __('Are you sure you want to delete # %s?', $lang['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lang'), array('controller' => 'langs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($race['User'])): ?>
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
		<th><?php echo __('User_lang Id'); ?></th>
		<th><?php echo __('Picture Id'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th><?php echo __('User Pseudo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($race['User'] as $user): ?>
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
			<td><?php echo $user['user_lang_id']; ?></td>
			<td><?php echo $user['picture_id']; ?></td>
			<td><?php echo $user['level']; ?></td>
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
