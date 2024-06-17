<?php get_header(); ?>

<div class="p-sub-page">
    <div class="p-sub-page__left">
        <h2 class="c-sub-title -blue"><?php the_title(); ?></h2>
        <nav class="c-side-menu">
            <p class="c-side-menu__label">診療科・部門</p>
            <?php
                wp_nav_menu(
                array(
                    'depth' => 0,
                    'theme_location' => 'department',
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
        <div class="p-sub-page__content -blue">
            <h2 class="wp-block-heading u-desktop">診療科</h2>
            <nav class="p-sub-page-nav">
                <ul class="p-sub-page-nav__lists">
                    <?php
                        $args = array (
                            'post_type' => 'departments',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'hospital_department', // タクソノミーを指定
                                    'field'    => 'slug', // ターム名をスラッグで指定する
                                    'terms'    => 'hospital-department', // カテゴリーのスラッグを指定
                                ),
                            ),
                            'order'          => 'ASC',
                        );
                        $hospital_department = new WP_Query( $args );
                            if ( $hospital_department -> have_posts()):
                    ?>

                    <?php
                    while ($hospital_department -> have_posts()): $hospital_department -> the_post();
                    ?>
                    <li class="p-sub-page-nav__list">
                        <a href="<?php the_permalink(); ?>">
                        <?php
                            if(mb_strlen($post->post_title)>20) {
                            $title= mb_substr($post->post_title,0,20) ;
                                echo $title . '...';
                            } else {
                                echo $post->post_title;
                            }
                            ?>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; wp_reset_postdata();?>
                </ul>
            </nav>
            <h2 class="wp-block-heading u-desktop">部門・センター・チーム</h2>
            <nav class="p-sub-page-nav">
                <ul class="p-sub-page-nav__lists">
                    <?php
                        $args = array (
                            'post_type' => 'departments',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'hospital_department', // タクソノミーを指定
                                    'field'    => 'slug', // ターム名をスラッグで指定する
                                    'terms'    => 'department-center-team', // カテゴリーのスラッグを指定
                                ),
                            ),
                            'order'          => 'ASC',
                        );
                        $hospital_department = new WP_Query( $args );
                            if ( $hospital_department -> have_posts()):
                    ?>

                    <?php
                    while ($hospital_department -> have_posts()): $hospital_department -> the_post();
                    ?>
                    <li class="p-sub-page-nav__list">
                        <a href="<?php the_permalink(); ?>">
                        <?php
                            if(mb_strlen($post->post_title)>20) {
                            $title= mb_substr($post->post_title,0,20) ;
                                echo $title . '...';
                            } else {
                                echo $post->post_title;
                            }
                            ?>
                        </a>
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