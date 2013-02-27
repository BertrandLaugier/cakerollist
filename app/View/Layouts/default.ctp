<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('style');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Metal+Mania');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Pirata+One');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php /*echo $this->Html->link($cakeDescription, 'http://cakephp.org');*/?>
	<header>
		<nav>
			<ul>
				<li><a href="#">Titre 1</a></li>
				<li><a href="#">Titre 2</a></li>
				<li><a href="#">Titre 3</a></li>
				<li><a href="#">Titre 4</a></li>
				<li><a href="#">Titre 5</a></li>
			</ul>
		</nav>
	</header>
	<div id="container">
		<?php if(AuthComponent::user('id')): ?>
		  <h3><?php echo $this->Html->link('Cakerollist - '.AuthComponent::user('username'), '/'); ?></h3> 
		<?php else: ?>  
		  <h3><?php echo $this->Html->link('Cakerollist', '/'); ?></h3> 
		<?php endif; ?>
		<ul class="nav">
		<?php if(AuthComponent::user('id')): ?>
		        <li><?php echo $this->Html->link(__("Ajouter un ami"), array('controller' => 'friends', 'action' => 'add')); ?></li>
		         <li><?php echo $this->Html->link(__("Envoyer un message"), array('controller' => 'messages', 'action' => 'add')); ?></li>
		          <li><?php echo $this->Html->link(__("Ma messagerie"), array('controller' => 'messages', 'action' => 'index')); ?></li>
		        <li><?php echo $this->Html->link(__("Mon profil"), array('controller' => 'users', 'action' => 'view/'.AuthComponent::user('id'))); ?></li>
		        <li><?php echo $this->Html->link(__("Voir les utilisateurs"), array('controller' => 'users', 'action' => 'index')); ?></li>
		<?php endif; ?>
		</ul>
		<ul class="nav secondary-nav">
		<?php if(AuthComponent::user('id')): ?>
		    <li><?php echo $this->Html->link(__('Se déconnecter'), array('controller' => 'users', 'action' => 'logout')); ?></li>
		    <?php if(AuthComponent::user('group_id')==1): ?>
		        <li><?php echo $this->Html->link(__('Espace admin'), array('controller' => 'admin', 'action' => 'quotes')); ?></li>
		      <?php endif; ?>
		<?php else: ?> 
		    <li><?php echo $this->Html->link(__('Se connecter'), array('controller' => 'users', 'action' => 'login')); ?></li>
		    <li><?php echo $this->Html->link("S'inscrire",array('action'=>'add','controller'=>'users')); ?></li>
		    <?php endif; ?>
		</ul>


		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div><!-- /.container-->
	<footer>
		<div class="footer-content">
			<h3>Follow us on :</h3>
			<ul>
				<li><a href="#"><img src="img/facebook.png"></a></li>
				<li><a href="#"><img src="img/twitter.png"></a></li>
				<li><a href="#"><img src="img/google.png"></a></li>
				<li><a href="#"><img src="img/youtube.png"></a></li>
				<li><a href="#"><img src="img/fluxrss.png"></a></li>
			</ul>
		</div>
	</footer>
</body>
</html>
