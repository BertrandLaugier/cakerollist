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
		
		?><img src="<?php echo $pictures; ?>" width="100px"/><br />
		Mes anciennes photos : <br />
			<?php if(count($pictures) >1 ){
				foreach ($pictures as $d) { 
				if($d != $pictures[1]){ ?>
					<img src="<?php echo $d; ?>" width="100px"/>
					<?php
				}	
			}

			}
		echo $this->Form->input('Uploader une nouvelle photo ', array('type' => 'file'));
		echo $this->Form->input('user_pseudo');
	?>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
