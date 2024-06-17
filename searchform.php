<form action="<?php get_home_url() ?>" method="get" class="p-search-form">
    <input name="s" type="text" value="<?php the_search_query(); ?>" placeholder="サイト内検索"/>
    <input class="search-submit" type="submit" value="">
</form>