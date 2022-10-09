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
                        <div class="p-home-fv__slider-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/スライダー1.png" alt="" />
                        </div>

                    </div>
                    <div class="p-home-fv__slider-image swiper-slide">
                        <div class="p-home-fv__slider-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/スライダー2.png" alt="" />
                        </div>
                    </div>
                    <div class="p-home-fv__slider-image swiper-slide">
                        <div class="p-home-fv__slider-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/スライダー3.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="p-home-fv__swiper-deco">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fv-deco.svg" alt="" />
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="p-home-fv__absolute-wrapper">
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

                    <h1 class="p-home-fv__title">
                        <?php echo get_the_date('Y'); ?>
                        <span class="p-home-fv__title--season">
                            <!-- <?php echo_season(); ?> -->
                            summer
                        </span>

                    </h1>
                    <div class="p-home-fv__divider"></div>
                    <p class="p-home-fv__subtitle">
                        <?php echo get_the_date(); ?>
                        新商品が入荷しました。

                    </p>
                    <div class="p-home-fv__btn-wrapper">
                        <button class="c-button">read more</button>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="p-home-about" id="about">
            <div class="c-grid-wrapper">
                <div class="p-home-about__text-wrapper">
                    <h2 class="p-home-about__title">company</h2>
                    <p class="p-home-about__subtitle">イベント・コンサートグッズ制作</p><br />
                    <p class="p-home-about__subtitle">OEM商品制作ならエムズジー</p>
                    <p class="p-home-about__desc">
                        株式会社ZAWA-ZAWAは<br />
                        商品の企画・開発・立案・製造を行っております。<br />
                        キャラクターグッズ･アーティストグッズ･アパレルグッズ･ノベルティ<br />
                        等の雑貨の製造は 弊社にお任せください。
                    </p>
                </div>
                <!-- <div class="p-home-about__image-wrapper"></div> -->
                <div class="p-home-about__image-left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company1.png" alt="" />
                </div>
                <div class="p-home-about__image-right">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/company2.png" alt="" />
                </div>
                <div class="p-home-about__deco">about us</div>

            </div>
        </section>

        <section class="p-home-news" id="news">
            <div class="c-grid-wrapper">
                <!-- <div class="p-home-news__main-contents-wrapper"></div> -->
                <div class="p-home-news__title-wrapper">
                    <h2 class="p-home-news__title">latest</h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sankaku.svg" alt=""
                        class="p-home-news__title-image" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sankaku.svg" alt=""
                        class="p-home-news__title-image" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sankaku.svg" alt=""
                        class="p-home-news__title-image" />
                </div>
                <div class="p-home-news__card-wrapper">
                    <?php
                    $posts = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );
                    $the_query = new WP_Query($posts);
                    if ($the_query->have_posts()) :
                    ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="p-home-news__card">
                        <a href="<?php echo_category_link(); ?>">
                            <div class="p-home-news__card-image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/<?php echo_category_name() ?>.png"
                                    alt="" />
                                <p class="p-home-news__card-date">
                                    <?php echo get_the_date(); ?>
                                </p>
                            </div>
                            <div class="p-home-news__card-title">new <?php echo_category_name() ?> release</div>
                            <div class="p-home-news__card-subtitle">read more</div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>



                <div class="p-home-news__btn-wrapper">
                    <button class="c-button--responsive">read more</button>
                </div>
            </div>
        </section>

        <section class="p-home-product" id="product">
            <div class="c-grid-wrapper">


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
                <div class="p-home-product__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product.png" alt="" />
                    <div class="p-home-product__btn-wrapper">
                        <button class="c-button--responsive">read more</button>
                    </div>
                </div>
                <div class="p-home-product__deco">product</div>


            </div>
        </section>


        <section class="p-home-category">
            <div class="grid10">
                <a href="/category/cap/" class="p-home-category__link">
                    <div class="p-home-category__card">
                        <div class="p-home-category__card-image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cap.png" alt="" />
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
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/t-shirt.png" alt="" />
                        </div>
                        <div class="p-home-category__card-text">
                            <div class="p-home-category__card-title">t-shirt</div>
                            <div class="p-home-category__card-subtitle">t-シャツ</div>
                        </div>
                    </div>
                </a>

                <a href="/category/towel/" class="p-home-category__link">
                    <div class="p-home-category__card">
                        <div class="p-home-category__card-image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/towel.png" alt="" />
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
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bag.png" alt="" />
                        </div>
                        <div class="p-home-category__card-text">
                            <div class="p-home-category__card-title">bag</div>
                            <div class="p-home-category__card-subtitle">バッグ・ポーチ</div>
                        </div>
                    </div>
                </a>
                <a href="/category/other/" class="p-home-category__link">
                    <div class="p-home-category__card">
                        <div class="p-home-category__card-image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/other.png" alt="" />
                        </div>
                        <div class="p-home-category__card-text">
                            <div class="p-home-category__card-title">other</div>
                            <div class="p-home-category__card-subtitle">その他</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section class="p-home-info" id="info">
            <div class="p-home-info__grid-wrapper">
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
                <div class="p-home-info__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/information.png" alt="" />
                </div>
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