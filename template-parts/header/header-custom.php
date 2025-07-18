<?php
$header = get_field("header", "option");
$phone = $header["phone"];
$email = $header["email"];
$logo = $header["logo"];
?>

<header class="header-alt ">
    <div class="header-alt__inner container">
        <div class="header-info">
            <a href="/" class="header-info__logo logo">
                <img src="<?php echo $logo["url"] ?>" class="logo__img" width="97" height="30" alt="">
            </a>
            <nav class="header-info__menu">
                <ul class="header-info__list">
                    <li class="header-info__item">
                        <a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a>
                    </li>
                    <li class="header-info__item">
                        <a href="tel:<?php echo clear_phone($phone); ?>" target="_blank"><?php echo $phone; ?></a>
                    </li>
                </ul>
            </nav>
            <div class="search">
                <button type="button" class="search__button">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M16.375 14.5H15.3875L15.0375 14.1625C16.3048 12.6925 17.0014 10.8159 17 8.875C17 7.26803 16.5235 5.69714 15.6307 4.361C14.7379 3.02485 13.469 1.98344 11.9843 1.36848C10.4997 0.75352 8.86599 0.592618 7.28989 0.906123C5.7138 1.21963 4.26606 1.99346 3.12976 3.12976C1.99346 4.26606 1.21963 5.7138 0.906123 7.28989C0.592618 8.86599 0.75352 10.4997 1.36848 11.9843C1.98344 13.469 3.02485 14.7379 4.361 15.6307C5.69714 16.5235 7.26803 17 8.875 17C10.8875 17 12.7375 16.2625 14.1625 15.0375L14.5 15.3875V16.375L20.75 22.6125L22.6125 20.75L16.375 14.5ZM8.875 14.5C5.7625 14.5 3.25 11.9875 3.25 8.875C3.25 5.7625 5.7625 3.25 8.875 3.25C11.9875 3.25 14.5 5.7625 14.5 8.875C14.5 11.9875 11.9875 14.5 8.875 14.5Z"
                                fill="white"/>
                    </svg>
                </button>
            </div>
            <div class="burger">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                            d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
                </svg>
            </div>
        </div>

        <?php wp_nav_menu([
            'theme_location' => 'menu-1',
            'menu' => '',
            'container' => '',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'header-main',
            'menu_id' => 'js-main-menu',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 0,
            'walker' => '',
        ]); ?>

        <!--        <ul class="header-main">-->
        <!--            <li class="header-main__item">-->
        <!--                <a href="/services.html" class="header-main__link">О нас</a>-->
        <!--            </li>-->
        <!--            <li class="header-main__item">-->
        <!--                <a href="/" class="header-main__link">Флот</a>-->
        <!--            </li>-->
        <!--            <li class="header-main__item">-->
        <!--                <a href="/" class="header-main__link">Инвесторам</a>-->
        <!--            </li>-->
        <!--            <li class="header-main__item">-->
        <!--                <a href="/" class="header-main__link">Карьера</a>-->
        <!--            </li>-->
        <!--            <li class="header-main__item">-->
        <!--                <a href="/" class="header-main__link">Пресс-центр</a>-->
        <!--            </li>-->
        <!--            <li class="header-main__item">-->
        <!--                <a href="/vacancies.html" class="header-main__link">Устойчивое развитие</a>-->
        <!--            </li>-->
        <!--            <li class="header-main__item">-->
        <!--                <a href="/contacts.html" class="header-main__link">Контакты</a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--        -->
    </div>
</header>

