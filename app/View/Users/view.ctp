<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($user['User']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Background'); ?></dt>
		<dd>
			<?php echo h($user['User']['background']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Race'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Race']['name'], array('controller' => 'races', 'action' => 'view', $user['Race']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Niveau'); ?> <?php echo $user['User']['xp_id']; ?></dt>
		<dd>
		<div id="page">
		<?php
		// Déclaration des paliers pour chaque niveau
		$levels = array(0,100,150,220,350,500,1000);
		// Récupère le nombre d'xp de l'utilisateur et l'xp nécessaire pour level up 
		$xp = $user['User']['xp_nb'];
		$level = $user['User']['xp_id'];
		$level_up = $levels[$level];
		/*calcule le pourcentage*/
		$percent = (($xp*100)/$level_up);
		?>
		<!-- Barre d'xp -->
		<span class="bar">
		<span class="niveau"><?php echo $user['User']['xp_nb']; ?> xp / <?php echo $level_up; ?>xp</span>
		<span class="progression" style="width: <?php echo $percent ?>%">
		<span title="<?php echo $percent ?>%" class="precent"></span>
		</span>
		</span>
		</div>
		<dt><?php echo __('Langue'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Lang']['name'], array('controller' => 'langs', 'action' => 'view', $user['Lang']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<img src="<?php echo h($user['Picture']['url']); ?>" width="100px"/>
			&nbsp;
		</dd>
		<dt><?php echo __('User Pseudo'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_pseudo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Races'), array('controller' => 'races', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Race'), array('controller' => 'races', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures'), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture'), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Demande d\'ami'), array('controller' => 'friends', 'action' => 'add')); ?> </li>
	</ul>
</div>
