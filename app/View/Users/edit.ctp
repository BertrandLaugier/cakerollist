<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('background');


		?>
		<?php if  ($this->request->data['Picture']['url']) :?>
		<img src="<?php echo $this->request->data['Picture']['url']; ?>" width="200px"/><br /><br />
				<?php else: ?>
		<img src="http://www.laboratoire-analyses-medicales.com/wp-content/uploads/2011/11/anonyme.png" width="200px"/><br /><br />

		<?php endif;?>

		<?php foreach ($pictures as $d):
			if ($d['Picture']['user_id'] == $this->request->data['User']['id'] && $d['Picture']['id'] != $this->request->data['User']['picture_id']): ?>
			<?php echo $this->Html->image($d['Picture']['url'], array('width' => '100', 'url' => array('controller' => 'users', 'action' => 'pick', $d['Picture']['id'],$d['User']['id']))); ?>
            <?php endif; ?>
		<?php endforeach; ?>




	</fieldset>

<?php echo $this->Html->link(__('Ajouter une photo'), array('controller' => 'pictures', 'action' => 'add')); ?>
<?php echo $this->Form->end('Submit'); ?>
		
</div>
