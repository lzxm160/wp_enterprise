<?php
/**
 * default search form
 */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap">
    	<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'enterprise-lite' ); ?></label>
        <input type="search" placeholder="<?php echo esc_attr( 'Search...', 'enterprise-lite' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
        <input class="screen-reader-text" type="submit" id="search-submit" value="<?php esc_attr_e( 'Search', 'enterprise-lite' ); ?>" />
    </div>
</form>