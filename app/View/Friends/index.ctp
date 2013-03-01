<div class="friends index">
	<h2><?php echo __('Friends'); ?></h2>

</table>
<table cellpadding="0" cellspacing="0">

	<tr>
			<th><?php echo "Requête(s) envoyée(s)"; ?></th>
			<th><?php echo "Demande"; ?></th>
			<th><?php echo "Date"; ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
<?php foreach ($friends as $friend): ?>

	<?php if((AuthComponent::user('id') && ($friend['Friend']['user_id'] == AuthComponent::user('id')) ) && $friend['Friend']['valid'] == 0) : ?>
	<tr>

		<td><?php echo $this->Html->link($friend['Amis']['username'], array('controller' => 'users', 'action' => 'view', $friend['Amis']['id'])); ?>&nbsp;</td>
		<td><?php echo h($friend['Friend']['message']); ?>&nbsp;</td>
		<td><?php echo h($friend['Friend']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Voir'), array('action' => 'view', $friend['Friend']['id'])); ?>
			<?php echo $this->Form->postLink(__('Annuler'), array('action' => 'delete', $friend['Friend']['id']), null, __('Are you sure you want to delete # %s?', $friend['Friend']['id'])); ?>
		</td>
	</tr>
<?php endif; ?>
<?php endforeach; ?>
	</table>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo "Requête(s) reçue(s)"; ?></th>
			<th><?php echo "Demande"; ?></th>
			<th><?php echo "Date"; ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>

<?php foreach ($friends as $friend): ?>
<?php if((AuthComponent::user('id') && ($friend['Friend']['friend_id'] == AuthComponent::user('id')) ) && $friend['Friend']['valid'] == 0) : ?>
	<tr>
		<!-- <td><?php echo h($friend['Friend']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($friend['User']['username'], array('controller' => 'users', 'action' => 'view', $friend['User']['id'])); ?>
		</td> -->
		<td><?php echo $this->Html->link($friend['User']['username'], array('controller' => 'users', 'action' => 'view', $friend['User']['id'])); ?>&nbsp;</td>
		<td><?php echo h($friend['Friend']['message']); ?>&nbsp;</td>
		<td><?php echo h($friend['Friend']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Voir'), array('controller' => 'users', 'action' => 'view', $friend['User']['id'])); ?>
			<?php echo $this->Html->link(__('Accepter'), array('action' => 'accept', $friend['Friend']['id'])); ?>
			<?php echo $this->Form->postLink(__('Refuser'), array('action' => 'delete', $friend['Friend']['id']), null, __('Are you sure you want to delete # %s?', $friend['Friend']['id'])); ?>
		</td>
	</tr>
<?php endif; ?>
<?php endforeach; ?>
	<tr>
<!-- 			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th> -->
			<th><?php echo $this->Paginator->sort('friend_id','Amis'); ?></th>
			<th><?php echo $this->Paginator->sort('message','Demande'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>


	<?php foreach ($friends as $friend): ?>
<?php if((AuthComponent::user('id') && ($friend['Friend']['user_id'] == AuthComponent::user('id')) || $friend['Amis']['id'] == AuthComponent::user('id')) && $friend['Friend']['valid'] == 1) : ?>
<tr>
	<?php if($friend['Friend']['user_id'] == AuthComponent::user('id')) { ?>
		<td><?php echo $this->Html->link($friend['Amis']['username'], array('controller' => 'users', 'action' => 'view', $friend['Amis']['id'])); ?>&nbsp;</td>
		<td><p>Vous aviez envoyé :</p><?php echo h($friend['Friend']['message']); ?>&nbsp;</td>
	<?php }else{ ?>
		<td><?php echo $this->Html->link($friend['User']['username'], array('controller' => 'users', 'action' => 'view', $friend['User']['id'])); ?>&nbsp;</td>
		<td><p>Vous aviez reçu :</p><?php echo h($friend['Friend']['message']); }?>&nbsp;</td>
	
	
	<td><?php echo h($friend['Friend']['created']); ?>&nbsp;</td>
	<td class="actions">
		<?php echo $this->Html->link(__('Voir'), array('action' => 'view', $friend['Friend']['id'])); ?>
	<!-- 	<?php echo $this->Html->link(__('Accepter'), array('action' => 'validate', $friend['Friend']['id'])); ?> -->
		<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $friend['Friend']['id']), null, __('Are you sure you want to delete # %s?', $friend['Friend']['id'])); ?>
	</td>
</tr>
<?php endif; ?>
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
		<li><?php echo $this->Html->link(__('New Friend'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
