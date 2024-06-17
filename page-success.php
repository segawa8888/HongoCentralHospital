<?php get_header(); ?>

<section class="p-sub-contact">
  <div class="p-sub-contact__inner">
  <h2 class="p-sub-contact__title">お問い合わせ</h2>

  <ul class="p-sub-contact-form-stepbar">
		<li class="p-sub-contact-form-stepbar__item -current">入力</li>
		<li class="p-sub-contact-form-stepbar__item -current">確認</li>
		<li class="p-sub-contact-form-stepbar__item -current">完了</li>
	</ul>

      <div class="p-sub-contact__content">
        <p class="p-sub-contact__complete">メッセージの送信が完了しました。</p>
        <a href="<?php echo esc_url(home_url('/') )?>" class="p-sub-contact__success">トップページへ</a>
      </div>
  </div>
</section>

<?php get_template_part('parts/c-breadcrumbs'); ?>

<?php get_footer(); ?>
