<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ①基本的metaタグ -->
    <!-- 文字コードの指定 -->
    <meta charset="utf-8">
    <!-- IEで常に標準モードで表示させる -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- viewport(レスポンシブ対応) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 電話番号の自動リンク化を無効 -->
    <meta name="format-detection" content="telephone=no">

    <!-- ②SEO対策の補助的措置 -->
    <!-- サイトのタイトル -->
    <title>アーク行政書士</title>
    <!-- キーワード -->
    <meta name="keywords" content="">
    <!-- サイトの説明 -->
    <meta name="description" content="">
    <!-- 重複するURLを一本化 -->
    <link rel="canonical" href="">

    <!-- ③SNS対策 -->
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="urlが入ります">
    <meta property="fb:app_id" content="AppID">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="Summary Card">
    <meta name="twitter:site" content="">

    <!-- ④その他の指定 -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- faviconの指定 -->
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="stylesheet" href="css/style.css">

    <!-- 外部のCSSファイル -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;800&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="global-container">
        <nav class="mobile-menu">
            <ul class="mobile-menu__main">
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo esc_url(home_url( '/' )); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arc-footer-logo.png" alt="ロゴ" class="mobile-menu__logo">
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo esc_url(home_url( '/' )); ?>#flow">
                        <span class="main-title">ご相談の流れ</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo esc_url(home_url( '/' )); ?>#service">
                        <span class="main-title">サービス & 料金</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo esc_url(home_url( '/' )); ?>#qa">
                        <span class="main-title">よくあるご質問</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo esc_url(home_url( '/' )); ?>#blog">
                        <span class="main-title">ブログ</span>
                    </a>
                </li>
                <li class="mobile-menu__item mobile-menu__item--contact">
                    <a href="tel:090-4288-9385" class="mobile-menu__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arc-icon-telephone.png" alt="電話アイコン" class="mobile-menu__subIcon">
                        <span class="mobile-menu__subText">電話をかける</span>
                    </a>
                </li>
                <li class="mobile-menu__item mobile-menu__item--contact">
                    <a href="<?php echo esc_url(home_url( '/' )); ?>#contact" class="mobile-menu__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arc-icon-mail-beige.png" alt="メールアイコン" class="mobile-menu__subIcon">
                        <span class="mobile-menu__subText">メールを送る</span>
                    </a>
                </li>
                <li class="mobile-menu__item mobile-menu__item--contact">
                    <a href="https://lin.ee/gDSsRGq" class="mobile-menu__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arc-icon-line.png" alt="LINEアイコン" class="mobile-menu__subIcon">
                        <span class="mobile-menu__subText">LINEを送る</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div id="container">
            <div class="mobile-menu__cover"></div>
            <header class="header">
                <div class="header-inner">
                    <div class="header-left">
                        <a href="<?php echo esc_url(home_url( '/' )); ?>" class="header-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/arc-footer-logo.png" alt="ロゴ" class="header-logo__icon">
                        </a>
                        <ul class="header-ul">
                            <li class="header-li">
                                <a href="<?php echo esc_url(home_url( '/' )); ?>#flow" class="header-li__item">ご相談の流れ</a>
                            </li>
                            <li class="header-li">
                                <a href="<?php echo esc_url(home_url( '/' )); ?>#service" class="header-li__item">サービス & 料金</a>
                            </li>
                            <li class="header-li">
                                <a href="<?php echo esc_url(home_url( '/' )); ?>#qa" class="header-li__item">よくあるご質問</a>
                            </li>
                            <li class="header-li">
                                <a href="<?php echo esc_url(home_url( '/' )); ?>#blog" class="header-li__item">ブログ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <div class="header-textArea">
                            <div class="header-tel">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/arc-icon-tel-brown.png" alt="電話アイコン" class="header-tel__icon">
                                <a href="tel:090-4288-9385" class="header-tel__num">090-4288-9385</a>
                            </div>
                            <p class="header-businessHour">受付時間：全日 9:00～18:00<br>土日祝・夜間対応可能</p>
                        </div>
                        <div class="header-contact">
                            <a href="<?php echo esc_url(home_url( '/' )); ?>#contact" class="btn header-contact__btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/arc-icon-mail.png" alt="メールアイコン" class="btn__icon">
                                <span class="btn__text header-contact__btnText">お問い合わせ</span>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="mobile-menu__btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </header>
            <!-- /.header -->