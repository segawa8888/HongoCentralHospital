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
            <h2 class="wp-block-heading">新着情報一覧</h2>
            <ul class="p-top-info__lists">
                <?php
                $queryarg = [
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ];
                $query = new WP_Query($queryarg);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $terms = get_the_terms($post->ID, 'info-categorys');
                        if ($terms) :
                            foreach ($terms as $term) :
                                $cat_link = get_category_link($term->term_id);
                                $cat_name = $term->name;
                                $cat_id = $term->term_id;
                                $cat_color = 'category_' . $cat_id;
                                $back_color = get_field('ca_color', $cat_color);
                                $font_color = get_field('fo_color', $cat_color);
                                ?>
                                <li class="p-top-info__list">
                                    <a href="<?php echo esc_url(get_permalink()); ?>">
                                        <div class="p-top-info__list-wrap">
                                            <span class="p-top-info__list_category" style="background-color: <?php echo $back_color; ?>; color: <?php echo $font_color; ?>;">
                                                <?php echo $cat_name; ?>
                                            </span>
                                            <p class="p-top-info__list-date"><?php echo get_the_date(); ?></p>
                                        </div>
                                        <p class="p-top-info__list-title"><?php the_title(); ?></p>
                                    </a>
                                </li>
                        <?php
                            endforeach;
                        endif;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ul>
        </div>
    </div>
</div>

<?php get_template_part('parts/c-breadcrumbs'); ?>

<?php get_footer(); ?>