<?php get_header(); ?>

<div class="p-sub-page">
    <div class="p-sub-page__left">
        <h2 class="c-sub-title -orange">検索結果</h2>
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/hongo.jpg" alt="no_image" />
        </div>
        <div class="p-sub-page__content">
        <?php if (have_posts()): ?>
            <h2 class="wp-block-heading">
                <?php
                if (isset($_GET['s']) && empty($_GET['s'])) {
                    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
                } else {
                    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
                }
                ?>
            </h2>
                <ul class="p-sub-search__lists">
                <?php while(have_posts()): the_post(); ?>
                <li class="p-sub-search__list">
                <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                </li>
                <?php endwhile; ?>
                </ul>
                <?php else: ?>
                検索されたキーワードにマッチする記事はありませんでした
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_template_part('parts/c-breadcrumbs'); ?>

<?php get_footer(); ?>