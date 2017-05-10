
<section class="welcome">

<?php 

$welcomeText = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente, ab dolore amet nulla totam beatae dolorum quaerat. Optio dolore nemo aperiam nihil, assumenda saepe, repudiandae magni, dolor a ipsa perspiciatis.';
$welcomeLinkText = 'Know more about Christ';
$welcomeLinkUrl = '#';

if (get_field('welcome_text', 'options')) $welcomeText = get_field('welcome_text', 'options');
if (get_field('welcome_button_text', 'options')) $welcomeLinkText = get_field('welcome_button_text', 'options');
if (get_field('welcome_button_link', 'options')) $welcomeLinkUrl = get_field('welcome_button_link', 'options');

?>

	<div class="content wrapper">
		<h2 class="welcome-text"><span class="Christ">Christ</span> <span class="changing"></span></h2>
		<div class="context"><?php echo $welcomeText; ?></div>
		<a href="<?php echo $welcomeLinkUrl ?>" class="btn btn-transparent-gray btn-expanding"><?php echo $welcomeLinkText ?></a>
	</div>
</section>