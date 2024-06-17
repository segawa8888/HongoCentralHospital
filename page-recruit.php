<?php get_header(); ?>

<div class="p-sub-page">
    <div class="p-sub-page__left">
        <h2 class="c-sub-title -orange"><?php the_title(); ?>
        </h2>
        <nav class="c-side-menu">
            <p class="c-side-menu__label">採用情報</p>
            <?php
                wp_nav_menu(
                array(
                    'depth' => 0,
                    'theme_location' => 'recruit',
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
            <h2 class="wp-block-heading">採用情報</h2>
            <nav class="p-sub-page-nav">
                <ul class="p-sub-page-nav__lists">
                    <?php
                        $args = array (
                            'post_type' => 'recruits',
                            'posts_per_page' => -1,
                            'order'          => 'ASC',
                        );
                        $recruit = new WP_Query( $args );
                            if ( $recruit -> have_posts()):
                    ?>

                    <?php
                    while ($recruit -> have_posts()): $recruit -> the_post();
                    ?>
                    <li class="p-sub-page-nav__list -orange">
                        <?php
                            if ($field = get_field("file")) {
                                $attr = array(
                                    'id' => 'pdf',
                                );
                                echo "<a href='{$field["url"]}' target='_blank'>";
                                the_title();
                                echo "</a>";
                            }
                        ?>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; wp_reset_postdata();?>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php get_template_part('parts/c-breadcrumbs'); ?>

<?php get_footer(); ?>