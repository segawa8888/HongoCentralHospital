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
            <?php the_content(); ?>
            <?php if (get_field('physician_referral')): ?>
                <div class="p-sub-page__referral">
                    <h2 class="wp-block-heading">医師紹介</h2>
                    <div class="p-sub-page__referral-content">
                        <div class="p-sub-page__referral-img">
                            <?php if(get_field('doctor_image')): ?>
                                <img src="<?php the_field('doctor_image'); ?>" >
                            <?php else: ?>
                                <img src="http://hchp.jp/test/wp-content/uploads/2024/03/noimage_gray-1.jpg">
                            <?php endif; ?>
                        </div>
                        <div class="p-sub-page__referral-wrap">
                            <h3 class="p-sub-page__referral-title">
                                <span><?php the_field('doctor_position'); ?></span>
                                <?php the_field('doctor_name'); ?>
                            </h3>
                            <p class="p-sub-page__referral-comment"><?php the_field('doctor_comment') ?></p>
                            <p class="p-sub-page__referral-special">
                                <span>専門分野</span>
                                <?php the_field('special_field'); ?></p>
                            <p class="p-sub-page__referral-qualifications">
                                <span>資格</span>
                                <?php the_field('qualifications'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php else: ?>
            <?php endif; ?>

            <?php if (get_field('physician_referral_2')): ?>
                <div class="p-sub-page__referral">
                    <div class="p-sub-page__referral-content">
                        <div class="p-sub-page__referral-img">
                            <?php if(get_field('doctor_image_2')): ?>
                                <img src="<?php the_field('doctor_image_2'); ?>" >
                            <?php else: ?>
                                <img src="http://hchp.jp/test/wp-content/uploads/2024/03/noimage_gray-1.jpg">
                            <?php endif; ?>
                        </div>
                        <div class="p-sub-page__referral-wrap">
                            <h3 class="p-sub-page__referral-title">
                                <span><?php the_field('doctor_position_2'); ?></span>
                                <?php the_field('doctor_name_2'); ?>
                            </h3>
                            <p class="p-sub-page__referral-comment"><?php the_field('doctor_comment_2') ?></p>
                            <p class="p-sub-page__referral-special">
                                <span>専門分野</span>
                                <?php the_field('special_field_2'); ?></p>
                            <p class="p-sub-page__referral-qualifications">
                                <span>資格</span>
                                <?php the_field('qualifications_2'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php else: ?>
            <?php endif; ?>

            <?php if (get_field('physician_referral_3')): ?>
                <div class="p-sub-page__referral">
                    <div class="p-sub-page__referral-content">
                        <div class="p-sub-page__referral-img">
                            <?php if(get_field('doctor_image_3')): ?>
                                <img src="<?php the_field('doctor_image_3'); ?>" >
                            <?php else: ?>
                                <img src="http://hchp.jp/test/wp-content/uploads/2024/03/noimage_gray-1.jpg">
                            <?php endif; ?>
                        </div>
                        <div class="p-sub-page__referral-wrap">
                            <h3 class="p-sub-page__referral-title">
                                <span><?php the_field('doctor_position_3'); ?></span>
                                <?php the_field('doctor_name_3'); ?>
                            </h3>
                            <p class="p-sub-page__referral-comment"><?php the_field('doctor_comment_3') ?></p>
                            <p class="p-sub-page__referral-special">
                                <span>専門分野</span>
                                <?php the_field('special_field_3'); ?></p>
                            <p class="p-sub-page__referral-qualifications">
                                <span>資格</span>
                                <?php the_field('qualifications_3'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php else: ?>
            <?php endif; ?>

            <?php if (get_field('physician_referral_4')): ?>
                <div class="p-sub-page__referral">
                    <div class="p-sub-page__referral-content">
                        <div class="p-sub-page__referral-img">
                            <?php if(get_field('doctor_image_4')): ?>
                                <img src="<?php the_field('doctor_image_4'); ?>" >
                            <?php else: ?>
                                <img src="http://hchp.jp/test/wp-content/uploads/2024/03/noimage_gray-1.jpg">
                            <?php endif; ?>
                        </div>
                        <div class="p-sub-page__referral-wrap">
                            <h3 class="p-sub-page__referral-title">
                                <span><?php the_field('doctor_position_4'); ?></span>
                                <?php the_field('doctor_name_4'); ?>
                            </h3>
                            <p class="p-sub-page__referral-comment"><?php the_field('doctor_comment_4') ?></p>
                            <p class="p-sub-page__referral-special">
                                <span>専門分野</span>
                                <?php the_field('special_field_4'); ?></p>
                            <p class="p-sub-page__referral-qualifications">
                                <span>資格</span>
                                <?php the_field('qualifications_4'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php else: ?>
            <?php endif; ?>

            <?php if (get_field('physician_referral_5')): ?>
                <div class="p-sub-page__referral">
                    <div class="p-sub-page__referral-content">
                        <div class="p-sub-page__referral-img">
                            <?php if(get_field('doctor_image_5')): ?>
                                <img src="<?php the_field('doctor_image_5'); ?>" >
                            <?php else: ?>
                                <img src="http://hchp.jp/test/wp-content/uploads/2024/03/noimage_gray-1.jpg">
                            <?php endif; ?>
                        </div>
                        <div class="p-sub-page__referral-wrap">
                            <h3 class="p-sub-page__referral-title">
                                <span><?php the_field('doctor_position_5'); ?></span>
                                <?php the_field('doctor_name_5'); ?>
                            </h3>
                            <p class="p-sub-page__referral-comment"><?php the_field('doctor_comment_5') ?></p>
                            <p class="p-sub-page__referral-special">
                                <span>専門分野</span>
                                <?php the_field('special_field_5'); ?></p>
                            <p class="p-sub-page__referral-qualifications">
                                <span>資格</span>
                                <?php the_field('qualifications_5'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php else: ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_template_part('parts/c-breadcrumbs'); ?>

<?php get_footer(); ?>