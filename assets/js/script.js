jQuery(function ($) { // $はjQueryを表す

    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 600) { // 600pxスクロールしたとき
            $(".js-header").addClass("is-scroll");
        } else {
            $(".js-header").removeClass("is-scroll");
        }
    });

    jQuery(document).ready(function($) {
        // クッキーからサイズを読み込む
        let fz = localStorage.getItem('fontSize');
        if (fz) {
            // サイズ変更ボタンから背景色と文字色のCSSを外す
            $('.bl_sizeBtn').removeClass('is_active');
            // クッキーに保存されたidと一致したら適用
            if (fz == 'fz_md') { // デフォルトサイズ
                $('html').css('font-size', '');
                $('#fz_md').addClass('is_active');
            } else if (fz == 'fz_lg') {
                if ($(window).width() <= 1020) {
                    $('html').css('font-size', '85%');
                } else {
                    $('html').css('font-size', '105%');
                }
                $('#fz_lg').addClass('is_active');
            }
        }
    
        // サイズ変更時にlocalStorageへ保存
        $('.bl_sizeBtn').click(function() {
            // クリックされたbuttonのidをlocalStorage（fontSize）に保存
            localStorage.setItem('fontSize', this.id);
            // サイズ変更ボタンから背景色と文字色のCSSを外す
            $('.bl_sizeBtn').removeClass('is_active');
            // クリックされたbuttonのidと一致したら適用
            if (this.id == 'fz_md') { // デフォルトサイズ
                $('html').css('font-size', '');
                $(this).addClass('is_active');
            } else if (this.id == 'fz_lg') {
                if ($(window).width() <= 1020) {
                    $('html').css('font-size', '85%');
                } else {
                    $('html').css('font-size', '105%');
                }
                $(this).addClass('is_active');
            }
        });
    });
    
    

    jQuery(function ($) {
        $('.js-sitemap').on('click', function () {
            var $menuOpenTxt = $(this).find('.p-footer-sitemap-open__txt');
            if ($menuOpenTxt.text() === 'サイトマップを開く') {
                $menuOpenTxt.text('閉じる');
            } else {
                $menuOpenTxt.text('サイトマップを開く');
            }
            $(this).next().slideToggle();
            $(this).toggleClass('is-open');
        });
    });
    
    jQuery(function ($) {
        $('.p-footer-sitemap__lists .menu-item-has-children').on('click', function () {
            if ($(window).width() <= 768) {
                $(this).children('.sub-menu').slideToggle();
                $(this).toggleClass('is-open');
            }
        });
    });
    
    

// ハンバーガーメニュー
    jQuery(function ($) {

        $(function () {
            $(".js-hamburger").on("click", function () {
                $(this).toggleClass("is-open");
                if ($(this).hasClass("is-open")) {
                    openDrawer();
                } else {
                    closeDrawer();
                }
            });
    
            // backgroundまたはページ内リンクをクリックで閉じる
            $(".js-drawer a[href]").on("click", function () {
                closeDrawer();
            });

            // ナビ内のcloseをクリックしたらメニューを閉じる
            $(".js-close").on("click", function () {
                closeDrawer();
            });
    
            // resizeイベント
            $(window).on('resize', function() {
                if (window.matchMedia("(min-width: 768px)").matches) {
                    closeDrawer();
                }
            });
        });
    
        function openDrawer() {
            $(".js-drawer").fadeIn();
            $(".js-hamburger").addClass("is-open");
        }
    
        function closeDrawer() {
            $(".js-drawer").fadeOut();
            $(".js-hamburger").removeClass("is-open");
        }
    
        // アコーディオン
        $('.js-accordion').on('click', function (event) {
            event.preventDefault();
            
            // クリックされた要素の親要素内の .sub-menu を選択して表示・非表示を切り替える
            $(this).closest('.menu-item').find('.sub-menu').slideToggle();
            
            // クリックした要素に is-open クラスをトグル
            $(this).toggleClass('is-open');
        });
        
    });

    $(window).on('resize', function() {
        if (window.matchMedia("(min-width: 768px)").matches) {
            closeDrawer();
        }
    });

    // backgroundまたはページ内リンクをクリックで閉じる
    $(".js-search").on("click", function () {
        $(".p-header-search").fadeToggle();
    });

    jQuery(function ($) {
        const mv_swiper = new Swiper(".js-mv-swiper", {
            loop: true,
            speed: 500,
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
        });
    });

    jQuery(function ($) {
        const slider_swiper = new Swiper(".js-slider-swiper", {
            loop: true,
            slidesPerView:2.7,
            speed: 4000, // ループの時間
            allowTouchMove: false,
            autoplay: {
                delay: 0, // 途切れなくループ
              },
            breakpoints: {
              // スライドの表示枚数：768px以上の場合
              768: {
                slidesPerView: 5,
              }
            },
        });
    });

    jQuery(function ($) {
        const outpatient_swiper = new Swiper(".js-outpatient-swiper", {
            loop: true,
            autoplay:true,
            speed:500,
            spaceBetween:8.78,
            slidesPerView: 2, 
            centeredSlides: false,
            grabCursor: true,
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            breakpoints: {
              // スライドの表示枚数：768px以上の場合
              768: {
                slidesPerView: 4,
              }
            },
        });
    });

    jQuery(function ($) {
        var pageTop = $('.js-page-top');
        
        // ページトップボタンの初期状態を非表示に設定
        pageTop.hide();
    
        // スクロールイベントの監視
        $(window).scroll(function () {
            // 現在のスクロール位置を取得
            var scrollPos = $(this).scrollTop();
            
            // スクロール位置が200px以上の場合、ページトップボタンを表示
            if (scrollPos > 200) {
                pageTop.fadeIn(300); // 300ミリ秒でフェードイン
            } else {
                // スクロール位置が200px以下の場合、ページトップボタンを非表示
                pageTop.fadeOut(300); // 300ミリ秒でフェードアウト
            }
        });
    
        // ページトップボタンがクリックされたときの処理
        pageTop.on("click",function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });
	
	jQuery(document).ready(function($) {
    // ページが読み込まれた時に、ページのハッシュに応じてスクロール
    let pageHash = window.location.hash;
    if (pageHash) {
        let scrollToElement = $(pageHash);
        if (!scrollToElement.length) return;
        $(window).on('load', function() {
            history.replaceState('', '', './');
            let locationOffset = scrollToElement.offset().top;
            let navigationBarHeight = $('.p-header').innerHeight(); // ヘッダーの高さを取得
            locationOffset = locationOffset - navigationBarHeight - 105;
            $('html, body').animate({
                scrollTop: locationOffset
            }, 300, 'swing');
        });
    }

    // ページ内リンクのクリック時にスムーススクロール
    $('a[href*="#"]').on('click', function() {
        const scrollSpeed = 400;
        const navigationHeight = $(".p-header").innerHeight(); // ヘッダーの高さを取得
        const scrollToTarget = $(this.hash === '#' || '' ? 'html' : this.hash);
        if (!scrollToTarget.length) return;
        const scrollPosition = scrollToTarget.offset().top - navigationHeight - 105;
        $('html, body').animate({
            scrollTop: scrollPosition
        }, scrollSpeed, 'swing');
        return false;
    });
});
    

});
