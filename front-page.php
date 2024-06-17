<?php get_header(); ?>

<section class="p-top-mv">
    <div class="p-top-mv__inner">
      <div class="p-top-mv__title-wrap">
        <h2 class="p-top-mv__main-title"><span>地域とともに</span><br class="u-mobile"><span>歩む病院</span></h2>
      </div>
      <div class="p-top-mv__swiper swiper js-mv-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-img">
              <img class="u-desktop" src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_mv_01.jpg' alt='ファーストビュー' width='' height='' decoding='async' loading='easer'>
              <img class="u-mobile" src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_mv_01_sp.jpg' alt='ファーストビュー' width='' height='' decoding='async' loading='easer'>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
            <img class="u-desktop" src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_mv_02.jpg' alt='ファーストビュー' width='' height='' decoding='async' loading='easer'>
            <img class="u-mobile" src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_mv_02_sp.jpg' alt='ファーストビュー' width='' height='' decoding='async' loading='easer'>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
            <img class="u-desktop" src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_mv_03.jpg' alt='ファーストビュー' width='' height='' decoding='async' loading='easer'>
            <img class="u-mobile" src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_mv_03_sp.jpg' alt='ファーストビュー' width='' height='' decoding='async' loading='easer'>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
            <img class="u-desktop" src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_mv_04.jpg' alt='ファーストビュー' width='' height='' decoding='async' loading='easer'>
            <img class="u-mobile" src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_mv_04_sp.jpg' alt='ファーストビュー' width='' height='' decoding='async' loading='easer'>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
            <img class="u-desktop" src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_mv_05.jpg' alt='ファーストビュー' width='' height='' decoding='async' loading='easer'>
            <img class="u-mobile" src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_mv_05_sp.jpg' alt='ファーストビュー' width='' height='' decoding='async' loading='easer'>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="p-top-menu">
  <div class="p-top-menu__inner l-inner">
    <div class="p-top-menu__contents">
      <div class="p-top-menu__content">
        <ul class="p-top-menu__lists">
          <li class="p-top-menu__list">
            <a href="<?php echo esc_url(home_url('/initial') )?>">
              <div class="p-top-menu__list-icon">
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_hospital.png' alt='病院アイコン' width='' height='' decoding='async' loading='lazy'>
              </div>
              <p class="p-top-menu__list-title">外来のご案内</p>
            </a>
          </li>
          <li class="p-top-menu__list">
            <a href="<?php echo esc_url(home_url('/initial/#i-4') )?>">
              <div class="p-top-menu__list-icon">
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_health.png' alt='聴診器のアイコン' width='' height='' decoding='async' loading='lazy'>
              </div>
              <p class="p-top-menu__list-title">健診<br class="u-mobile">センターの<br>ご案内</p>
            </a>
          </li>
          <li class="p-top-menu__list">
            <a href="<?php echo esc_url(home_url('/initial/#i-3') )?>">
              <div class="p-top-menu__list-icon">
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_bed.png' alt='ベッドのアイコン' width='' height='' decoding='async' loading='lazy'>
              </div>
              <p class="p-top-menu__list-title">入院のご案内</p>
            </a>
          </li>
          <li class="p-top-menu__list">
            <a href="<?php echo esc_url(home_url('/access') )?>">
              <div class="p-top-menu__list-icon">
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_root.png' alt='レイヤーのアイコン' width='' height='' decoding='async' loading='lazy'>
              </div>
              <p class="p-top-menu__list-title">交通アクセス</p>
            </a>
          </li>
          <li class="p-top-menu__list">
            <a href="<?php echo esc_url(home_url('/outpatients') )?>">
              <div class="p-top-menu__list-icon">
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_happening.png' alt='ハプニングがおきたアイコン' width='' height='' decoding='async' loading='lazy'>
              </div>
              <p class="p-top-menu__list-title">こんな症状にお困りではありませんか？</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="p-top-menu__content">
        <p class="p-top-menu__calender-title">受付時間・診療時間のご案内</p>
        <div class="p-top-menu__calender">
          <?php get_template_part('parts/c-time-table'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="p-top-info">
  <div class="p-top-info__inner l-inner">
    <div class="p-top-info__content">
      <h3 class="c-title -info">新着情報</h3>
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
      <a href="<?php echo esc_url(home_url('/info') )?>" class="p-top-info__btn c-top-btn">新着情報一覧はこちら</a>
    </div>
  </div>
</section>

<section class="p-top-slider">
  <div class="p-top-slider__inner">
    <div class="p-top-slider__content">
      <div class="swiper-container">
        <div class="p-top-slider__swiper swiper js-slider-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_info_01.jpg' alt='スライド画像' width='' height='' decoding='async' loading='lazy'>
            </div>
            <div class="swiper-slide">
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_info_02.jpg' alt='スライド画像' width='' height='' decoding='async' loading='lazy'>
            </div>
            <div class="swiper-slide">
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_info_03.jpg' alt='スライド画像' width='' height='' decoding='async' loading='lazy'>
            </div>
            <div class="swiper-slide">
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_info_04.jpg' alt='スライド画像' width='' height='' decoding='async' loading='lazy'>
            </div>
            <div class="swiper-slide">
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_info_05.jpg' alt='スライド画像' width='' height='' decoding='async' loading='lazy'>
            </div>
            <div class="swiper-slide">
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_info_01.jpg' alt='スライド画像' width='' height='' decoding='async' loading='lazy'>
            </div>
            <div class="swiper-slide">
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_info_02.jpg' alt='スライド画像' width='' height='' decoding='async' loading='lazy'>
            </div>
            <div class="swiper-slide">
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_info_03.jpg' alt='スライド画像' width='' height='' decoding='async' loading='lazy'>
            </div>
            <div class="swiper-slide">
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_info_04.jpg' alt='スライド画像' width='' height='' decoding='async' loading='lazy'>
            </div>
            <div class="swiper-slide">
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_info_05.jpg' alt='スライド画像' width='' height='' decoding='async' loading='lazy'>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="p-top-guide">
  <div class="p-top-guide__inner l-inner">
    <ul class="p-top-guide__lists">
      <li class="p-top-guide__list">
        <a href="<?php echo esc_url(home_url('/departments') )?>">
        <div class="p-top-guide__list-img">
          <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_guide_01.png' alt='診療している先生の画像' width='' height='' decoding='async' loading='lazy'>
        </div>
        <div class="p-top-guide__list-content">
          <p class="p-top-guide__list-title">診療科案内</p>
          <span class="p-top-guide__list-icon">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_arrow_right_transparent.png' alt='右向きの矢印' width='' height='' decoding='async' loading='lazy'>
          </span>
        </div>
        </a>
      </li>
      <li class="p-top-guide__list">
        <a href="<?php echo esc_url(home_url('/departments') )?>">
        <div class="p-top-guide__list-img">
          <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_guide_02.png' alt='薬剤師' width='' height='' decoding='async' loading='lazy'>
        </div>
        <div class="p-top-guide__list-content">
          <p class="p-top-guide__list-title">部門案内</p>
          <span class="p-top-guide__list-icon">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_arrow_right_transparent.png' alt='右向きの矢印' width='' height='' decoding='async' loading='lazy'>
          </span>
        </div>
        </a>
      </li>
      <li class="p-top-guide__list">
        <a href="<?php echo esc_url(home_url('/initial/#i-4') )?>">
        <div class="p-top-guide__list-img">
          <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_guide_03.png' alt='目の検査' width='' height='' decoding='async' loading='lazy'>
        </div>
        <div class="p-top-guide__list-content">
          <p class="p-top-guide__list-title">健康診断</p>
          <span class="p-top-guide__list-icon">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_arrow_right_transparent.png' alt='右向きの矢印' width='' height='' decoding='async' loading='lazy'>
          </span>
        </div>
        </a>
      </li>
      <li class="p-top-guide__list">
        <a href="<?php echo esc_url(home_url('/care') )?>">
        <div class="p-top-guide__list-img">
          <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_guide_04.jpg' alt='介護' width='' height='' decoding='async' loading='lazy'>
        </div>
        <div class="p-top-guide__list-content">
          <p class="p-top-guide__list-title">介護施設</p>
          <span class="p-top-guide__list-icon">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_arrow_right_transparent.png' alt='右向きの矢印' width='' height='' decoding='async' loading='lazy'>
          </span>
        </div>
        </a>
      </li>
    </ul>
  </div>
</section>

<section class="p-top-outpatient">
  <div class="p-top-outpatient__inner l-inner">
    <div class="p-top-outpatient__content">
      <h3 class="p-top-outpatient__title">こんな時はご相談ください</h3>
        <div class="swiper-container p-top-outpatient__swiper-container">
          <div class="swiper p-top-outpatient__swiper js-outpatient-swiper">
            <div class="swiper-wrapper p-top-outpatient__cards">
              <?php
                  $queryarg = [
                    'post_type' => 'outpatients',
                    'posts_per_page' => 12,
                  ];
                  $query = new WP_Query($queryarg);
                  if($query->have_posts()): 
                    while($query->have_posts()): $query->the_post();
                  ?>
                  <div class="swiper-slide p-top-outpatient__card">
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                      <div class="p-top-outpatient__card-icon">
                      <?php if( get_field('outpatient_icon') ): ?>
                        <img src="<?php the_field('outpatient_icon'); ?>"  alt="専門外来アイコン"/>
                        <?php else : ?>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_transparent.png' alt='お悩み' width='' height='' decoding='async' loading='lazy'>
                      <?php endif; ?>
                      </div>
                      <p class="p-top-outpatient__card-title"><?php the_title(); ?></p>
                    </a>
                  </div>
                <?php
                  endwhile;
                  wp_reset_postdata();
                endif;
                ?>
            </div>
          </div>
          <div class="swiper-button-prev p-top-outpatient__card-arrow p-top-outpatient__card-arrow-prev">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_arrow_left_orange.png' alt='' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="swiper-button-next p-top-outpatient__card-arrow p-top-outpatient__card-arrow-next">
          <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_arrow_right_orange2.png' alt='' width='' height='' decoding='async' loading='lazy'>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/outpatients') )?>" class="p-top-outpatient__btn c-top-btn">詳しく見る</a>
      </div>
    </div>
</section>

<section class="p-top-care">
  <div class="p-top-care__inner l-inner">
    <h3 class="c-title -blue">医療介護連携先</h3>
    <ul class="p-top-care__lists">
      <li class="p-top-care__list">
        <a href="https://koizumi-hp.jp/" target="_blank">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/koizumi.jpg' alt='小泉病院' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">小泉病院</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
      <li class="p-top-care__list">
        <a href="<?php echo esc_url(home_url('/care#i-3') )?>">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/seseragi.jpg' alt='訪問看護ステーションせせらぎ' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">訪問看護ステーション<br>せせらぎ</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
      <li class="p-top-care__list">
        <a href="https://www.jinkokai.jp/seseragi/detail.php?cat=3&id=37&vnum=0" target="_blank">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/helpercenter_seseragi.jpg' alt='ヘルパーセンターせせらぎ' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">ヘルパーセンター<br>せせらぎ</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
      <li class="p-top-care__list">
        <a href="https://koizumi-hp.jp/facilities/detail.php?khid=6" target="_blank">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/rinasa.jpg' alt='サービス付高齢者住宅 りなさの森' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">サービス付高齢者住宅<br>りなさの森</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
      <li class="p-top-care__list">
        <a href="https://www.jinkokai.jp/sakura/" target="_blank">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/sakura.jpg' alt='就労継続支援B型事業所 ワークハウスさくら草' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">就労継続支援B型事業所<br>ワークハウスさくら草</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
      <li class="p-top-care__list u-desktop">
      </li>
      <li class="p-top-care__list">
        <a href="https://koizumi-hp.jp/facilities/detail.php?khid=23" target="_blank">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/st_koizumi.jpg' alt='訪問看護ステーション こいずみ' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">訪問看護ステーション<br>こいずみ</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
      <li class="p-top-care__list">
        <a href="https://www.jinkokai.jp/minato/" target="_blank">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/minatomachi.jpg' alt='港町クリニック' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">港町クリニック</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
      <li class="p-top-care__list">
        <a href="https://www.jinkokai.jp/tougen/" target="_blank">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/togenkyo.jpg' alt='桃源の郷' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">桃源の郷</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
      <li class="p-top-care__list">
        <a href="https://www.jinkokai.jp/seseragi/" target="_blank">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/dreamseseragi.jpg' alt='ドリームせせらぎ' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">ドリームせせらぎ</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
      <li class="p-top-care__list">
        <a href="<?php echo esc_url(home_url('/care#i-4') )?>">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/nadeshiko.jpg' alt='ケアプランセンター なでしこ' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">ケアプランセンター<br>なでしこ</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
      <li class="p-top-care__list">
        <a href="<?php echo esc_url(home_url('/care#i-6') )?>">
          <div class="p-top-care__list-img">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/care/osora.jpg' alt='三原市西部地域 包括支援センター 大空' width='' height='' decoding='async' loading='lazy'>
          </div>
          <div class="p-top-care__list-content">
            <p class="p-top-care__list-title">三原市西部地域<br>包括支援センター 大空</p>
            <p class="p-top-care__list-link">詳しくはこちら</p>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>

<section class="p-top-recruit">
  <div class="p-top-recruit__inner l-inner">
    <div class="p-top-recruit__content">
      <h3 class="p-top-recruit__title">採用情報</h3>
      <div class="p-top-recruit__banner">
        <a href="<?php echo esc_url(home_url('/recruit') )?>">
        <div class="p-top-recruit__banner-img">
          <img src='<?php echo get_template_directory_uri() ?>/assets/images/top/top_recruit.jpg' alt='採用情報' width='' height='' decoding='async' loading='lazy'>
        </div>
        <p class="p-top-recruit__banner-link">
          <span class="p-top-recruit__banner-icon">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_arrow_right_transparent.png' alt='右向きの矢印' width='' height='' decoding='async' loading='lazy'>
          </span>
          詳しくはこちら
        </p>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>