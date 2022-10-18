<form class="search-bar--group" id="searchform" method="get" action="<?php echo esc_url(home_url()); ?>">
    <input type="text" class="search-bar--input" name="s" placeholder="" value="<?php echo get_search_query(); ?>">
    <a href="javascript:document.getElementById('searchform').submit();" class="search-bar--btn"><img src="<?php echo get_template_directory_uri(); ?>/release/image/common/search_icon.svg" alt=""></a>
</form>