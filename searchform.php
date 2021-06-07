<form class="p-search-form" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
    <input class="p-search-form__keyword" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="&#xf002">
    <input class="p-search-form__submit" id="s" type="submit" value="検索">
</form>