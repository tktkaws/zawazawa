<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>はじめてのGulp</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
</head>

<body>
    <header class="l-header">
        <div class="l-header__logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ロゴ.png" alt="" />
        </div>
        <nav class="l-header__gnav">
            <ul class="l-header__lists">
                <li class="l-header__list">
                    <a href="" class="l-header__link">home</a>
                </li>
                <li class="l-header__list">
                    <a href="" class="l-header__link">company</a>
                </li>
                <li class="l-header__list">
                    <a href="" class="l-header__link">product</a>
                </li>
                <li class="l-header__list">
                    <a href="" class="l-header__link">news</a>
                </li>
                <li class="l-header__list">
                    <a href="" class="l-header__link">contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="p-home-fv">
            <div class="p-home-fv__slider">
                <div class="p-home-fv__slider-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/スライダー1.png" alt="" />
                </div>
                <div class="p-home-fv__slider-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/スライダー2.png" alt="" />
                </div>
                <div class="p-home-fv__slider-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/スライダー3.png" alt="" />
                </div>
            </div>

            <div class="p-home-fv__deco-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/FVあしらい.png" alt="" />
            </div>
            <div class="p-home-fv__title-zone">
                <h1 class="p-home-fv__title">2022 summer</h1>
                <p class="p-home-fv__subtitle">2022.04/04　新商品入荷しました。</p>
                <div class="p-home-fv__btn-wrapper">
                    <button class="c-button">read more</button>
                </div>
            </div>
        </section>
        <div class="c-wrapper">
            <section class="p-home-about">
                <div class="p-home-about__deco">about us</div>
                <div class="p-home-about__text-wrapper">
                    <h2 class="p-home-about__title">company</h2>
                    <p class="p-home-about__subtitle">イベント・コンサートグッズ制作</p>
                    <p class="p-home-about__subtitle">OEM商品制作ならエムズジー</p>
                    <p class="p-home-about__desc">
                        株式会社ZAWA-ZAWAは<br />
                        商品の企画・開発・立案・製造を行っております。<br />
                        キャラクターグッズ･アーティストグッズ･アパレルグッズ･ノベルティ<br />
                        等の雑貨の製造は 弊社にお任せください。
                    </p>
                </div>
                <div class="p-home-about__image-wrapper">
                    <div class="p-home-about__image-left">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company1.png" alt="" />
                    </div>
                    <div class="p-home-about__image-right">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company2.png" alt="" />
                    </div>
                </div>
            </section>

            <section class="p-home-news">
                <div class="p-home-news__main-contents-wrapper">
                    <div class="p-home-news__card-wrapper">
                        <div class="p-home-news__card">
                            <div class="p-home-news__card-image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/LATEST1.png"
                                    alt="" />
                            </div>
                            <div class="p-home-news__card-title">new cap release</div>
                            <div class="p-home-news__card-subtitle">read more</div>
                        </div>
                        <div class="p-home-news__card">
                            <div class="p-home-news__card-image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/LATEST2.png"
                                    alt="" />
                            </div>
                            <div class="p-home-news__card-title">new bag release</div>
                            <div class="p-home-news__card-subtitle">read more</div>
                        </div>
                        <div class="p-home-news__card">
                            <div class="p-home-news__card-image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/LATEST1.png"
                                    alt="" />
                            </div>
                            <div class="p-home-news__card-title">new cap release</div>
                            <div class="p-home-news__card-subtitle">read more</div>
                        </div>
                    </div>
                    <h2 class="p-home-news__title">latest</h2>
                </div>
                <div class="p-home-news__btn-wrapper">
                    <button class="c-button--large">read more</button>
                </div>
            </section>

            <section class="p-home-product">
                <div class="p-home-product__main-contents-wrapper">
                    <div class="p-home-product__deco">product</div>
                    <div class="p-home-product__text-wrapper">
                        <h2 class="p-home-product__title">
                            BASIC,MANISH,<br />
                            TREND,AND<br />
                            QUALITY.
                        </h2>
                        <p class="p-home-product__desc">
                            株式会社ZAWA-ZAWAはカルチャーとファッ<br />
                            ションを楽しみ、提供する会社です。<br />
                            Ｔシャツ・タオル・バッグやポーチなど様々<br />
                            なアイテムを取り扱っています。
                        </p>
                    </div>
                    <div class="p-home-product__image-wrapper">
                        <div class="p-home-product__image-left">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product.png" alt="" />
                        </div>
                        <div class="p-home-product__image-right"></div>
                    </div>
                </div>
                <div class="p-home-product__btn-wrapper">
                    <button class="c-button--large">read more</button>
                </div>
            </section>
        </div>

        <section class="p-home-category">
            <a href="" class="p-home-category__link">
                <div class="p-home-category__card">
                    <div class="p-home-category__card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item CAP.png" alt="" />
                    </div>
                    <div class="p-home-category__card-text">
                        <div class="p-home-category__card-title">cap</div>
                        <div class="p-home-category__card-subtitle">帽子・キャップ</div>
                    </div>
                </div>
            </a>

            <a href="" class="p-home-category__link">
                <div class="p-home-category__card--reverse">
                    <div class="p-home-category__card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item T-SHIRT.png" alt="" />
                    </div>
                    <div class="p-home-category__card-text">
                        <div class="p-home-category__card-title">t-shirt</div>
                        <div class="p-home-category__card-subtitle">t-シャツ</div>
                    </div>
                </div>
            </a>

            <a href="" class="p-home-category__link">
                <div class="p-home-category__card">
                    <div class="p-home-category__card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item TOWEL.png" alt="" />
                    </div>
                    <div class="p-home-category__card-text">
                        <div class="p-home-category__card-title">towel</div>
                        <div class="p-home-category__card-subtitle">タオル</div>
                    </div>
                </div>
            </a>

            <a href="" class="p-home-category__link">
                <div class="p-home-category__card--reverse">
                    <div class="p-home-category__card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item BAG.png" alt="" />
                    </div>
                    <div class="p-home-category__card-text">
                        <div class="p-home-category__card-title">bag</div>
                        <div class="p-home-category__card-subtitle">バッグ・ポーチ</div>
                    </div>
                </div>
            </a>
            <a href="" class="p-home-category__link">
                <div class="p-home-category__card">
                    <div class="p-home-category__card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item OTHER.png" alt="" />
                    </div>
                    <div class="p-home-category__card-text">
                        <div class="p-home-category__card-title">other</div>
                        <div class="p-home-category__card-subtitle">その他</div>
                    </div>
                </div>
            </a>
        </section>
        <section class="p-home-info">
            <div class="p-home-info__aside-left">
                <div class="p-home-info__deco">INFORMATION</div>
            </div>
            <div class="p-home-info__main-wrapper">
                <h2 class="p-home-info__title">INFORMATION</h2>
                <p class="p-home-info__desc">
                    ADDRESS：東京都目黒区中目黒1-1-1 ZAWAビル5F<br />
                    TEL：03-1234-5678<br />
                    GROUP COMPANY：ZAWA-ZAWA PLUSZAWA-ZAWA PLUS
                </p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1005.6845038036867!2d139.70179582325187!3d35.64631198066507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b460592c975%3A0xf2a9cb11c524b408!2z44CSMTUzLTAwNjEg5p2x5Lqs6YO955uu6buS5Yy65Lit55uu6buS77yR5LiB55uu77yR4oiS77yR!5e0!3m2!1sja!2sjp!4v1664070224925!5m2!1sja!2sjp"
                    width="562" height="497" style="border: 0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="p-home-info__map"></iframe>
            </div>
            <div class="p-home-info__aside-right">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/information.png" alt=""
                    class="p-home-info__image" />
            </div>
        </section>
    </main>
    <footer class="l-footer">
        <p class="l-footer__text">©2022 ZAWA-ZAWA Inc.</p>
    </footer>
</body>

</html>