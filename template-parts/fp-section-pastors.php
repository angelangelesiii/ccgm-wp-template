<section class="pastors">

<?php 

$pastorsImage =  get_template_directory_uri().'/images/photos/pastors.jpg';
$pastorsText = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore voluptates voluptate doloribus quaerat sequi sunt porro, magni provident dignissimos!';

if (get_field('pastors_image', 'options')) $pastorsImage = get_field('pastors_image', 'options');
if (get_field('pastors_text', 'options')) $pastorsText = get_field('pastors_text', 'options');

?>

	<div class="wrapper-medium">
		<div class="row">
			<div class="column large-5 photo">
				<img src="<?php echo $pastorsImage ?>" alt="">
			</div>
			<div class="column large-7 content">
				<h1>Meet Pastors <span class="text-accent">Jun</span> and <span class="text-accent">Evelyn</span> Oliveros</h1>
				<p><?php echo $pastorsText; ?></p>
			</div>
		</div>
	</div>
</section>