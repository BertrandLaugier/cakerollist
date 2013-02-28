<div class="pictures form">
<?php echo $this->Form->create('Picture'); ?>
	<fieldset>
		<legend><?php echo __('Changer de photo'); ?></legend>
	<?php
		echo $this->Form->create('Picture',array('type'=>'file'));
		echo $this->Form->input('url',array('label'=>"Image (format png/jpg)","type"=>"file"));
		echo $this->Form->input('legend',array('label'=>"Légende"));
		echo $this->Form->end('Ajouter');

		?><h3>Depuis le web</h3><?php
		echo $this->Form->create('Picture');
		echo $this->Form->input('url',array('label'=>"URL de l'image"));
		echo $this->Form->input('legend',array('label'=>"Légende"));
		echo $this->Form->end('Ajouter');
	?>
	</fieldset>
</div>
