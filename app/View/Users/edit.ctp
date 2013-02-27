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


		?>
		Photo actuelle :<br />
		<?php if  ($this->request->data['Picture']['url']) :?>
		<img src="<?php echo $this->request->data['Picture']['url']; ?>" width="100px"/><br /><br />
		<?php else:?>
			Pas encore de photos !<br /><br />
		<?php endif;?>

		Anciennes photos :<br />
		<?php foreach ($pictures as $d):
			if ($d['Picture']['user_id'] == $this->request->data['User']['id'] && $d['Picture']['id'] != $this->request->data['User']['picture_id']): ?>
                  <img src="<?php echo $d['Picture']['url']; ?>" width="100px"/><br /><br />
               <?php endif; ?>
		<?php endforeach; ?>
		


			<h3>Ajouter une image</h3>

		<?php echo $this->Form->create('Picture',array('type'=>'file')); ?>
			<?php echo $this->Form->input('url',array('label'=>"Image (format png/jpg)","type"=>"file")); ?>
			<?php echo $this->Form->input('legend',array('label'=>"Légende")); ?>
		<?php echo $this->Form->end('Ajouter'); ?>

		<h3>Depuis le web</h3>

		<?php echo $this->Form->create('Picture'); ?>
			<?php echo $this->Form->input('url',array('label'=>"URL de l'image")); ?>
			<?php echo $this->Form->input('legend',array('label'=>"Légende")); ?>
		<?php echo $this->Form->end('Insérer'); ?>


	</fieldset><?php
		echo $this->Form->input('user_pseudo');
	?>

	</fieldset>
<?php echo $this->Form->end('Submit'); ?>
</div>
