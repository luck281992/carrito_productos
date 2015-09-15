<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('./logobebe.jpg', 'WELFARESOFT');
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
		echo $this->Html->meta('logo.ico',
    '/img/logo1.png',
    array('type' => 'icon'));

		echo $this->Html->css('estilos');
		echo $this->Html->script('jquery164');
		echo $this->Html->script('jquery102');
		echo $this->Html->script('java');
		echo $this->Html->script('jquery.easing.1.3');
		echo $this->Html->script('jquery.animate-colors-min');
		echo $this->Html->script('jquery.skitter.min');
		echo $this->Html->css('skitter.styles');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Acme');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Roboto');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Voltaire');

		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		
				
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<FOOTER>
			 <div id="abajo1">
			<iframe width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Universidad+Polit%C3%A9cnica+de+Sinaloa,+Mazatl%C3%A1n,+M%C3%A9xico&amp;aq=0&amp;oq=universidad+politecnica+de+si&amp;sll=30.079486,31.31401&amp;sspn=0.005654,0.010568&amp;ie=UTF8&amp;hq=Universidad+Polit%C3%A9cnica+de+Sinaloa,+Mazatl%C3%A1n,+M%C3%A9xico&amp;t=m&amp;ll=23.265348,-106.373998&amp;spn=0.006295,0.006979&amp;output=embed"></iframe><br /><small>Ver <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Universidad+Polit%C3%A9cnica+de+Sinaloa,+Mazatl%C3%A1n,+M%C3%A9xico&amp;aq=0&amp;oq=universidad+politecnica+de+si&amp;sll=30.079486,31.31401&amp;sspn=0.005654,0.010568&amp;ie=UTF8&amp;hq=Universidad+Polit%C3%A9cnica+de+Sinaloa,+Mazatl%C3%A1n,+M%C3%A9xico&amp;t=m&amp;ll=23.265348,-106.373998&amp;spn=0.006295,0.006979" style="color:#0000FF;text-align:left"></a></small>
			 </div>
			 <div id="abajo2">
			   <h2 id="s1">informacion</h2>
			 <p id="s2">tel: +52 669 180 0695</p>
			 <p id="s2">Carretera Municipal Libre Mazatlán, 82199</p>
			  <p id="s2">Higueras Km 3</p>
			   <p id="s2">Mazatlan, Sinaloa, México</p>
			    <br>
			    <div class="fb-like" data-href="http://tallermecanico.comxa.com/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="true" data-send="true"></div>
				</div>
			 </div>
			</FOOTER>
		</div>
	</div>
</body>
</html>
