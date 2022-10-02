<header class="l-header">
    <div class="l-header__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ロゴ.png" alt="" />
    </div>

    <?php
    $category = the_category();
    echo $category;
    ?>




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