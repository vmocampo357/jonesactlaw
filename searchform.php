<!--<form role="search" action="<?php echo home_url( '/' ); ?>" method="get" >



    <input name="s" id="s" type="text" placeholder="<?php _e('Search...','WEBNUS_TEXT_DOMAIN'); ?>" class="search-side" />

    <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'Search' ); ?>" />



</form>-->

    <form role="search" action="<?php echo home_url( '/' ); ?>" method="get" class="col-md-2">

      <input name="s" id="s" type="text" placeholder="<?php _e('Search...','WEBNUS_TEXT_DOMAIN'); ?>" class="form-control" style="float:left;" />
      <input type="image" alt="Search" src="<?php echo site_url(); ?>/wp-content/uploads/2016/01/search.png" class="magnifying_glss">

        <!--<button class="my_button_search" type="submit">Search</button>-->

    </form>