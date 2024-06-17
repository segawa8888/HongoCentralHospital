<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Noto+Sans+JP:wght@100..900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <!-- font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css' integrity='sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==' crossorigin='anonymous'/>
<link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <!-- meta情報 -->
  <title><?php bloginfo( 'name' ); ?></title>
  <?php if (is_home() || is_front_page()): ?>
  <meta name="description" content="<?php bloginfo('description'); ?>">
<?php elseif (is_category()): ?>
  <meta name="description" content="<?php echo category_description(); ?>">
<?php elseif (is_tag()): ?>
  <meta name="description" content="<?php echo tag_description(); ?>">
<?php elseif (is_tax()): ?>
  <meta name="description" content="<?php echo term_description(); ?>">
<?php elseif (is_post_type_archive('news')): ?>
<?php // elseif (is_post_type_archive(array('news', 'products', 'staff'))): ?>
  <meta name="description" content="<?php echo esc_html(get_post_type_object(get_post_type())->description); ?>">
<?php elseif (is_archive()): ?>
  <meta name="description" content="">
<?php elseif (is_singular()): ?>
  <!-- 『抜粋』に入力がない場合は、自動的に本文の冒頭から内容を表示（文字数はデフォルトで110文字） -->
  <meta name="description" content="<?php single_post_title('', true); ?>">
<?php endif; ?>
  <meta name="keywords" content="広島・三原・本郷・尾道・病院・総合病院・検診・健康診断・コロナ対策・インフル
エンザ・発熱外来・眼科・外科・内科・消化器、肝臓内科・糖尿病・耳鼻科・点滴・
リハビリ・介護・訪問介護・本郷中央病院・仁康会" />
  <!-- ogp -->
  <meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="https://hchp.jp/" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php temp_path(); ?>/images/common/favicon.ico" />
  <!-- Swiper -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js' integrity='sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==' crossorigin='anonymous'></script>
  <!-- jQuery -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js' integrity='sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==' crossorigin='anonymous'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <!-- Gsap -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js' integrity='sha512-7Au1ULjlT8PP1Ygs6mDZh9NuQD0A5prSrAUiPHMXpU6g3UMd8qesVnhug5X4RoDr35x5upNpx0A6Sisz1LSTXA==' crossorigin='anonymous'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js' integrity='sha512-LQQDtPAueBcmGXKdOBcMkrhrtqM7xR2bVrnMtYZ8ImAZhFlIb5xrMqQ6uZviyeSB+4mYj89ta8niiCIQM1Gj0w==' crossorigin='anonymous'></script>
<script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
<script>
  window.addEventListener('DOMContentLoaded', function () {
    new ScrollHint('.js-scrollable', {
      scrollHintIconAppendClass: 'scroll-hint-icon-white', 
      suggestiveShadow: true,
      i18n: {
        scrollable: "スクロールできます"
      }
    });
  });
</script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="l-header p-header js-header">
  <div class="p-header__inner">
      <h1 class="p-header__logo">
        <?php if ( function_exists( 'the_custom_logo' ) ) : ?>
          <?php the_custom_logo(); ?>
        <?php endif; ?>
      </h1>

      <div class="p-header__menu">
        <div class="p-header__tools">
          <div class="p-header__tool">
            <div class="p-header__tel">
              <p>お電話での<br>お問い合わせ</p>
              <a href="tel:0848-86-6780">0848-86-6780</a>
            </div>
            <div class="p-header__contact">
              <a href="<?php echo esc_url(home_url('/contact') )?>">お問い合わせ</a>
            </div>
          </div>
          <div class="p-header__tool">
            <div class="p-header-size">
              <p>文字サイズ</p>
              <div class="p-header-size__resizer">
                <span id="fz_md" class="p-header-size__resizer--md bl_sizeBtn">標準</span>
                <span id="fz_lg" class="p-header-size__resizer--lg bl_sizeBtn">拡大</span>
              </div>
            </div>
            <div class="p-header-search__top">
              <div class="p-header-search__top-form">
                <?php get_search_form(); ?>
              </div>
            </div>
          </div>
        </div>
        <nav class="p-header__nav">
          <?php
              wp_nav_menu(
                array(
                  'depth' => 0,
                  'theme_location' => 'header',
                  'container' => 'ul',
                  'menu_class' => 'p-header__nav-items',
                )
              );
            ?>
        </nav>
      </div>

      <div class="p-header__wrap">
        <div class="p-header__search js-search">
          <div class="p-header-search__btn">
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_search.png' alt='検索アイコン' width='' height='' decoding='async' loading='lazy'>
            <span class="p-header-search__txt">検索</span>
          </div>
        </div>
        <div class="p-header__hamburger js-hamburger">
          <div class="p-header__hamburger-bar">
            <span></span>
            <span></span>
            <span></span>
          </div>
      </div>

      <div class="p-header-search">
        <?php get_search_form(); ?>
      </div>

    </div>

    <div class="p-header__drawer js-drawer">
      <nav class="p-header__drawer-nav">
      <?php
        wp_nav_menu(
          array(
            'depth' => 0,
            'theme_location' => 'drawer',
            'container' => 'ul',
            'menu_class' => 'p-header__drawer-items',
          )
        );
      ?>
      <ul class="p-header__drawer-nav-lists">
        <li class="p-header__drawer-nav-list">
          <a href="<?php echo esc_url(home_url('/info') )?>">
            <span>
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_info_orange.png' alt='新着情報' width='' height='' decoding='async' loading='lazy'>
            </span>
            新着情報
          </a>
        </li>
        <li class="p-header__drawer-nav-list">
          <a href="<?php echo esc_url(home_url('/recruit') )?>">
            <span>
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_recruit.png' alt='採用情報' width='' height='' decoding='async' loading='lazy'>
            </span>
             採用情報
          </a>
        </li>
        <li class="p-header__drawer-nav-list">
          <a href="<?php echo esc_url(home_url('/contact') )?>">
            <span>
              <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_mail.png' alt='お問い合わせ' width='' height='' decoding='async' loading='lazy'>
            </span>
            お問合わせ
          </a>
        </li>
      </ul>
      <div class="p-header__drawer-tel">
        <a href="tel:0848-86-6780">
          <p>お電話での<br>お問い合わせ</p>
          <span>0848-86-6780</span>
        </a>
      </div>
      <p class="p-header__drawer-close js-close">ページを閉じる
        <span>
          <img src='<?php echo get_template_directory_uri() ?>/assets/images/icon/icon_close.png' alt='閉じるアイコン' width='' height='' decoding='async' loading='lazy'>
        </span>
      </p>
      </nav>
    </div>
  </div>
</header>

<main class="p-main">