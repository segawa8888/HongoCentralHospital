<?php get_header(); ?>

<section class="p-sub-contact">
  <div class="p-sub-contact__inner">
  <h2 class="p-sub-contact__title">お問い合わせ</h2>

  <ul class="p-sub-contact-form-stepbar">
		<li class="p-sub-contact-form-stepbar__item -current">入力</li>
		<li class="p-sub-contact-form-stepbar__item -current">確認</li>
		<li class="p-sub-contact-form-stepbar__item">完了</li>
	</ul>

      <div class="p-sub-contact__content">
        <?php the_content(); ?>
      </div>
  </div>
</section>

<?php get_template_part('parts/c-breadcrumbs'); ?>

<?php get_footer(); ?>
