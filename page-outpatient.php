<?php get_header(); ?>

<div class="p-sub-page">
    <div class="p-sub-page__left">
        <h2 class="c-sub-title -orange text-left"><?php the_title(); ?>
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
            <h2 class="wp-block-heading u-desktop">こんな症状にお困りではありませんか？</h2>
            <nav class="p-sub-page-nav">
                <ul class="p-sub-page-nav__lists">
                    <?php
                        $args = array (
                            'post_type' => 'outpatients',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'outpatient-categorys', // タクソノミーを指定
                                    'field'    => 'slug', // ターム名をスラッグで指定する
                                    'terms'    => 'symptoms', // カテゴリーのスラッグを指定
                                ),
                            ),
                            'order'          => 'ASC',
                        );
                        $outpatients = new WP_Query( $args );
                            if ( $outpatients -> have_posts()):
                    ?>

                    <?php
                    while ($outpatients -> have_posts()): $outpatients -> the_post();
                    ?>
                    <li class="p-sub-page-nav__list -orange">
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
            <h2 class="wp-block-heading u-desktop">こんなときはどこに相談すればいいの？</h2>
            <nav class="p-sub-page-nav">
                <ul class="p-sub-page-nav__lists">
                    <?php
                        $args = array (
                            'post_type' => 'outpatients',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'outpatient-categorys', // タクソノミーを指定
                                    'field'    => 'slug', // ターム名をスラッグで指定する
                                    'terms'    => 'case', // カテゴリーのスラッグを指定
                                ),
                            ),
                            'order'          => 'ASC',
                        );
                        $outpatients = new WP_Query( $args );
                            if ( $outpatients -> have_posts()):
                    ?>

                    <?php
                    while ($outpatients -> have_posts()): $outpatients -> the_post();
                    ?>
                    <li class="p-sub-page-nav__list -orange">
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