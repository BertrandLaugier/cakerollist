<div class="userLangs view">
<h2><?php  echo __('User Lang'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userLang['UserLang']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userLang['User']['username'], array('controller' => 'users', 'action' => 'view', $userLang['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userLang['Lang']['name'], array('controller' => 'langs', 'action' => 'view', $userLang['Lang']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Lang'), array('action' => 'edit', $userLang['UserLang']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Lang'), array('action' => 'delete', $userLang['UserLang']['id']), null, __('Are you sure you want to delete # %s?', $userLang['UserLang']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Langs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Lang'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Langs'), array('controller' => 'langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lang'), array('controller' => 'langs', 'action' => 'add')); ?> </li>
	</ul>
</div>
