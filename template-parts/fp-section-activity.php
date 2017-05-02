
<section class="activity-info">
	
	<div class="wrapper-medium">

		<div class="row collapse">
			
		
			<div class="column large-6 small-12 large-push-6 schedule ">
				<div class="content">
					<h2>Schedule of <span class="text-accent">Activities</span></h2>
					<p>Come and join us on these schedules.</p>
					<table class="schedule-table">
						<thead>
							<tr>
								<td>Day</td>
								<td>Time</td>
								<td>Activity</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Sunday</td>
								<td>9:30 AM - 11:30 AM</td>
								<td>Morning Worship Celebration</td>
							</tr>
							<tr>
								<td>Sunday</td>
								<td>4:00 PM - 6:30 PM</td>
								<td>Afternoon Worship Celebration</td>
							</tr>
							<tr>
								<td>Saturday</td>
								<td>5:00 AM - 7:00 AM</td>
								<td>Prayer Gathering (PUSH)</td>
							</tr>
						</tbody>
					</table>
					<a href="#" class="btn btn-transparent-gray">View Events</a>
				</div>
		
			</div>

			<div class="column large-6 small-12 large-pull-6 location">
		
				<?php // ACF Pro location, main_location under options page.
				$location = get_field('main_location','options');
				if( !empty($location) ):
				?>
		
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat'] ?>" data-lng="<?php echo $location['lng'] ?>">
						<h1>Christ Cares Global Ministries</h1>
					</div>
				</div>
		
				<?php endif; ?>
		
			</div>
			
		</div>
	</div>


</section>