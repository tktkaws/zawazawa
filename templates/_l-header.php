<header class="l-header">
    <div class="l-header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ロゴ.svg" alt="ZAWAZAWA inc." width="447"
                height="59" />
        </a>
    </div>

    <nav class="l-header__gnav">
        <ul class="l-header__lists">
            <li class="l-header__link">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__nav-menu-link">home</a>
            </li>
            <li class="l-header__link">
                <a href="<?php echo esc_url(home_url('/')); ?>#about" class="l-header__nav-menu-link">
                    company</a>
            </li>
            <li class="l-header__link">
                <a href="<?php echo esc_url(home_url('/')); ?>#product" class="l-header__nav-menu-link">
                    product</a>
            </li>
            <li class="l-header__link">
                <a href="<?php echo esc_url(home_url('/')); ?>#news" class="l-header__nav-menu-link">
                    news</a>
            </li>
            <li class="l-header__link">
                <a href="<?php echo esc_url(home_url('/')); ?>#info" class="l-header__nav-menu-link">
                    contact</a>
            </li>
        </ul>
    </nav>

    <button class="l-header__navbtn" onClick="document.querySelector('body').classList.toggle('open')">
        <span class="l-header__navbtn-bar"></span>
        <span class="l-header__sr-only">MENU</span>
    </button>

    <nav class="l-header__nav">
        <div class="l-header__nav-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ロゴ.svg" alt="" />
            </a>
        </div>
        <ul class="l-header__nav-menu">
            <li class="l-header__nav-menu-list">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__nav-menu-link">home</a>
            </li>
            <li class="l-header__nav-menu-list">
                <a href="<?php echo esc_url(home_url('/')); ?>#about" class="l-header__nav-menu-link">
                    company</a>
            </li>
            <li class="l-header__nav-menu-list">
                <a href="<?php echo esc_url(home_url('/')); ?>#product" class="l-header__nav-menu-link">
                    product</a>
            </li>
            <li class="l-header__nav-menu-list">
                <a href="<?php echo esc_url(home_url('/')); ?>#news" class="l-header__nav-menu-link">
                    news</a>
            </li>
            <li class="l-header__nav-menu-list">
                <a href="<?php echo esc_url(home_url('/')); ?>#info" class="l-header__nav-menu-link">
                    contact</a>
            </li>
        </ul>
    </nav>
</header>