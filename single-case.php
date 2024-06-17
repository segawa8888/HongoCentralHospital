<div class="p-sub-page">
    <div class="p-sub-page__left">
        <h2 class="c-sub-title -orange text-left">こんなときは<br>どこに相談すればいいの？
        </h2>
        <nav class="c-side-menu">
            <p class="c-side-menu__label">外来の症状について</p>
            <?php
                wp_nav_menu(
                array(
                    'depth' => 0,
                    'theme_location' => 'outpatient',
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
            <h2 class="wp-block-heading">お困りごと</h2>
            <p class="wp-symptoms-title"><?php the_title(); ?></p>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_template_part('parts/c-breadcrumbs'); ?>