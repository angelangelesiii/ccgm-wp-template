<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="searchbox" placeholder="Search for anything..." />
	<button id="searchsubmit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
</form>