<?php
/**
 * Custom Markup for Search form
 *
 * @version 1.1
 * @package Agapanto
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'agapanto' ); ?></span>
		<input type="search" class="search-field"
			placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'agapanto' ); ?>"
			value="<?php echo esc_html( get_search_query() ); ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label', 'agapanto' ); ?>" />
	</label>
	<button type="submit" class="search-submit">
		<?php echo agapanto_get_svg( 'search' ); ?>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'agapanto' ); ?></span>
	</button>
</form>
