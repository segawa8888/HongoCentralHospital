<?php get_header(); ?>

<div class="p-sub-page">
    <div class="p-sub-page__left">
        <h2 class="c-sub-title -orange"><?php the_title(); ?></h2>
        <nav class="c-side-menu">
            <p class="c-side-menu__label">メニュー</p>
            <?php
                wp_nav_menu(
                array(
                    'depth' => 0,
                    'theme_location' => 'side',
                    'container' => 'ul',
                    'menu_class' => 'c-side-nav-items',
                )
                );
            ?>
        </nav>
    </div>
    <div class="p-sub-page__right">
        <div class="p-sub-page__thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
            <?php else : ?>
                <img src="http://hchp.jp/test/wp-content/uploads/2024/03/noimage_gray-1.jpg" alt="no_image" />
            <?php endif; ?>
        </div>
        <div class="p-sub-page__content">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_template_part('parts/c-breadcrumbs'); ?>

<?php get_footer(); ?>