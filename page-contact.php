<?php get_header(); ?>

<section class="p-sub-contact">
  <div class="p-sub-contact__inner">
  <h2 class="p-sub-contact__title">お問い合わせ</h2>
  <div class="p-sub-contact__read">
    <strong>必ずお読みください</strong>
    <p>
      ・お送りいただく個人情報は、お問い合わせ・ご質問への回答、情報提供のためのみに使用させていただきます。<br>
      ・お問い合わせの内容によっては、電子メール以外の方法で回答を差し上げる場合がございます。<br>
      ・回答までに時間を要する場合がございます。<br>
      ・診療内容、疾患に関する内容については、返答いたしかねます。<br>
      ・診療の予約、予約変更、キャンセルについては、こちらのフォームからはお受けすることができません。<br>
      ・メールアドレスがない場合は、お電話（TEL：0848-86-6780）でご連絡ください。
    </p>
  </div>

  <ul class="p-sub-contact-form-stepbar">
		<li class="p-sub-contact-form-stepbar__item -current">入力</li>
		<li class="p-sub-contact-form-stepbar__item">確認</li>
		<li class="p-sub-contact-form-stepbar__item">完了</li>
	</ul>
  <p class="p-sub-contact-form__text"><span class="-require">必須</span>がついている項目は必須入力です</p>
      <div class="p-sub-contact__content">
        <?php the_content(); ?>
      </div>
  </div>
</section>

<?php get_template_part('parts/c-breadcrumbs'); ?>

<?php get_footer(); ?>
