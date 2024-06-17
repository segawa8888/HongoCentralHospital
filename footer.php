</main>

<footer class="p-footer">
  <nav class="p-footer-nav-lists">
  <?php
          wp_nav_menu(
            array(
              'depth' => 0,
              'theme_location' => 'footer',
              'container' => 'ul',
              'menu_class' => 'p-footer-nav-list',
            )
          );
      ?>
  </nav>

    <div class="p-footer-sitemap">
      <div class="p-footer-sitemap-open js-sitemap">
          <div class="p-footer-sitemap-open__btn">
            <span class="p-footer-sitemap-open__line"></span>
            <span class="p-footer-sitemap-open__line"></span>
            <span class="p-footer-sitemap-open__line"></span>
            <span class="p-footer-sitemap-open__line"></span>
          </div>
          <p class="p-footer-sitemap-open__txt">サイトマップを開く</p>
      </div>
        <div class="p-footer-sitemap__main">
          <?php
            wp_nav_menu(
              array(
                'depth' => 0,
                'theme_location' => 'sitemap',
                'container' => 'ul',
                'menu_class' => 'p-footer-sitemap__lists',
              )
            );
          ?>
      </div>
    </div>

      <div class="p-footer-bottom">
	    <div class="p-footer-bottom__logo-wrap">
	      <a class="p-footer-bottom__logo" href="<?php echo esc_url(home_url('/') )?>">
          <img src='<?php echo get_template_directory_uri() ?>/assets/images/common/logo.png' alt='本郷中央病院' width='' height='' decoding='async' loading='lazy'>
        </a>
	    </div>
	    <div class="p-footer-bottom__main">
	      <address class="p-footer-bottom__address">〒729-0414 広島県三原市下北方1丁目7番30号<br><a class="p-footer-bottom__tel" href="tel:0848-86-6780">TEL：(0848)-86-6780</a>　FAX：(0848)-86-4564</address>
	      <ul class="p-footer-bottom-list">
	        <li class="p-footer-bottom-list__item"><a class="p-footer-bottom-list__link" href="<?php echo esc_url(home_url('/privacy') )?>">個人情報保護方針</a></li>
	      </ul>
        <div class="p-footer-bottom__sns">
          <a href="https://www.instagram.com/hongo_central_hospital/" target="_blank">
            <span class="p-footer-bottom__sns-icon">
              <img src='http://hchp.jp/test/wp-content/uploads/2024/03/icon_Instagram-1.png' alt='本郷中央病院 公式Instagram' width='' height='' decoding='async' loading='lazy'>
            </span>
            <p class="p-footer-bottom__sns-text">公式instagram</p>
          </a>
        </div>
	    </div>
	  </div>

</footer>

<div class="l-page-top c-page-top js-page-top">top</div>

<?php wp_footer(); ?>
</div>

</body>
</html>