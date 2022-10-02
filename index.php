<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAWAZAWA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" type="text/javaScript" charset="utf-8">
    </script> -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head() ?>
</head>

<body>
    <?php get_template_part('templates/_l-header'); ?>

    <main>



        <section class="p-home-fv">
            <div class="swiper">
                <div class="p-home-fv__slider swiper-wrapper">
                    <div class="p-home-fv__slider-image swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/スライダー1.png" alt="" />
                    </div>
                    <div class="p-home-fv__slider-image swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/スライダー2.png" alt="" />
                    </div>
                    <div class="p-home-fv__slider-image swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/スライダー3.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="p-home-fv__deco-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/FVあしらい.png" alt="" />
            </div>
            <div class="p-home-fv__title-zone">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <h1 class="p-home-fv__title"><?php echo get_the_date('Y'); ?>
                    <?php $m = get_the_date('m'); ?>
                    <?php if ($m == 3 || $m == 4 || $m == 5) : ?>
                    spring
                    <?php elseif ($m == 6 || $m == 7 || $m == 8) : ?>
                    summer
                    <?php elseif ($m == 9 || $m == 10 || $m == 11) : ?>
                    autamn
                    <?php elseif ($m == 12 || $m == 1 || $m == 2) : ?>
                    winter
                    <?php endif; ?></h1>
                <p class="p-home-fv__subtitle">
                    <?php echo get_the_date(); ?>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                </p>
                <div class="p-home-fv__btn-wrapper">
                    <button class="c-button">read more</button>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
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
                                <p class="p-home-news__card-date">
                                    2022.04,04
                                </p>
                            </div>
                            <div class="p-home-news__card-title">new cap release</div>
                            <div class="p-home-news__card-subtitle">read more</div>
                        </div>
                        <div class="p-home-news__card">
                            <div class="p-home-news__card-image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/LATEST2.png"
                                    alt="" />
                                <p class="p-home-news__card-date">
                                    2022.04,04
                                </p>
                            </div>

                            <div class="p-home-news__card-title">new bag release</div>
                            <div class="p-home-news__card-subtitle">read more</div>
                        </div>
                        <div class="p-home-news__card">
                            <div class="p-home-news__card-image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/LATEST1.png"
                                    alt="" />
                                <p class="p-home-news__card-date">
                                    2022.04,04
                                </p>
                            </div>
                            <div class="p-home-news__card-title">new cap release</div>
                            <div class="p-home-news__card-subtitle">read more</div>
                        </div>
                    </div>
                    <div class="p-home-news__title-wrapper">
                        <h2 class="p-home-news__title">latest</h2>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sankaku.svg" alt=""
                            class="p-home-news__title-image" />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sankaku.svg" alt=""
                            class="p-home-news__title-image" />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sankaku.svg" alt=""
                            class="p-home-news__title-image" />
                    </div>

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
            <a href="/category/cap/" class="p-home-category__link">
                <div class="p-home-category__card--reverse">
                    <div class="p-home-category__card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item CAP.png" alt="" />
                    </div>
                    <div class="p-home-category__card-text">
                        <div class="p-home-category__card-title">cap</div>
                        <div class="p-home-category__card-subtitle">帽子・キャップ</div>
                    </div>
                </div>
            </a>

            <a href="/category/t-shirt/" class="p-home-category__link">
                <div class="p-home-category__card">
                    <div class="p-home-category__card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item T-SHIRT.png" alt="" />
                    </div>
                    <div class="p-home-category__card-text">
                        <div class="p-home-category__card-title">t-shirt</div>
                        <div class="p-home-category__card-subtitle">t-シャツ</div>
                    </div>
                </div>
            </a>

            <a href="/category/towel/" class="p-home-category__link">
                <div class="p-home-category__card--reverse">
                    <div class="p-home-category__card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item TOWEL.png" alt="" />
                    </div>
                    <div class="p-home-category__card-text">
                        <div class="p-home-category__card-title">towel</div>
                        <div class="p-home-category__card-subtitle">タオル</div>
                    </div>
                </div>
            </a>

            <a href="/category/bag/" class="p-home-category__link">
                <div class="p-home-category__card">
                    <div class="p-home-category__card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/item BAG.png" alt="" />
                    </div>
                    <div class="p-home-category__card-text">
                        <div class="p-home-category__card-title">bag</div>
                        <div class="p-home-category__card-subtitle">バッグ・ポーチ</div>
                    </div>
                </div>
            </a>
            <a href="/category/other/" class="p-home-category__link">
                <div class="p-home-category__card--reverse">
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
    <?php get_template_part('templates/_l-footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" type="text/javaScript" charset="utf-8">
    </script>
    <?php wp_footer() ?>
</body>

</html>