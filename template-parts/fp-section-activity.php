
<section class="activity-info">
	
	<div class="wrapper-medium">

		<h2>Come and <span class="text-accent">join us</span></h2>

		<div class="row collapse">
			
		
			<div class="column large-6 small-12 large-push-6 schedule ">
				<div class="content">
					
					<p>We'd love to see you one of these days!</p>

					<?php 
					if(have_rows('schedule_of_services', 'options')) :
					?>

					<table class="schedule-table">
						<thead>
							<tr>
								<td>Day</td>
								<td>Time</td>
								<td>Activity</td>
							</tr>
						</thead>

						<tbody>

						<?php 
						while(have_rows('schedule_of_services', 'options')) : the_row();
						?>

						<tr>
							<td><?php the_sub_field('day'); ?></td>
							<td><?php the_sub_field('start_time'); ?> - <?php the_sub_field('end_time'); ?></td>
							<td><?php the_sub_field('activity'); ?></td>
						</tr>

						<?php endwhile; ?>

						</tbody>
					</table>

					<?php endif; ?>

					<a href="<?php the_field('link_to_events_page', 'options'); ?>" class="btn btn-transparent-gray">View Events</a>
				</div>
		
			</div>

			<div class="column large-6 small-12 large-pull-6 location">
		
				<?php // ACF Pro location, main_location under options page.
				$location = get_field('main_location','options');
				if( !empty($location) ):
				?>
		
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat'] ?>" data-lng="<?php echo $location['lng'] ?>">
						<h3>Christ Cares Global Ministries</h3>
						<p>
						<?php 
						if(get_field('footer_address', 'options')) :
							the_field('footer_address', 'options');
						else:
							echo $location['address'];
						endif;
						?>
						</p>
					</div>
				</div>
		
				<?php endif; ?>
		
			</div>
			
		</div>
	</div>


</section>