<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('background');
		echo $this->Form->input('group_id');
		echo $this->Form->input('race_id');
		echo $this->Form->input('picture_id');
		echo $this->Form->input('level');
		echo $this->Form->input('user_pseudo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
