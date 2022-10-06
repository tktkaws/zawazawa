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
    <?php get_template_part('templates/_l-header'); ?>

    <section class="p-category-list">
        <div class="p-category-list__card-wrapper">

            <?php

            while (have_posts()) {

                the_post(); ?>


                <div class="p-category-list__card">
                    <div class="p-category-list__card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/<?php echo_category_name() ?>.png" alt="" />
                        <p class="p-category-list__card-date">
                            2022.04,04
                        </p>
                    </div>
                    <div class="p-category-list__card-title"><?php the_title(); ?></div>
                    <div class="p-category-list__card-subtitle"><?php the_content(); ?></div>
                </div>




            <?php }

            ?>
        </div>

    </section>

    <?php get_template_part('templates/_l-footer'); ?>

</body>

</html>
