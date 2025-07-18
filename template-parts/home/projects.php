<?php
$projects = get_field("projects");
d($projects);
$title = $projects["title"];
$link = $projects["link"];
$slider = $projects["slider"];
?>

<section class="projects">
    <div class="projects__main container">
        <header class="projects__header">
            <h3 class="projects__title title"><?php echo $title; ?></h3>
            <div class="projects__navigation">
                <a href="/" class="projects__link title--link"><?php echo $link; ?></a>
                <div class="navigation-btn navigation-btn--alt">
                    <button class="navigation-btn__arrow navigation-btn__arrow--prev">
                        <?php echo get_template_part("template-parts/icons/icon-hero-left"); ?>
                    </button>
                    <button class="navigation-btn__arrow navigation-btn__arrow--next">
                        <?php echo get_template_part("template-parts/icons/icon-hero-right"); ?>
                    </button>
                </div>
            </div>
        </header>
        <div class="projects__slider">
            <div class="projects__body">

                <?php foreach ($slider as $item): ?>
                    <?php
                    $image = $item["image"];
                    $subtitle = $item["subtitle"];
                    $description = $item["description"];
                    $button = $item["button"];
                    $items = $item["items"];
                    ?>


                    <div class="projects__body-main">
                        <img src="<?php echo $image; ?>" width="706" height="600" alt=""
                             class="projects__body-img">
                        <div class="projects__body-info">
                            <h4 class="projects__body-title"><?php echo $subtitle; ?></h4>
                            <p class="projects__body-description"><?php echo $description; ?></p>
                        </div>
                    </div>

                <?php endforeach; ?>

                <div class="projects__body-main">
                    <img src="" width="706" height="600" alt=""
                         class="projects__body-img">
                    <div class="projects__body-info">
                        <h4 class="projects__body-title">Diam nulla vulputate id cum</h4>
                        <p class="projects__body-description">
                            Fringilla eget auctor non sed viverra mattis. Lectus est est ullamcorper eu natoque vitae mi
                            consequat. Eget ac elit viverra nec donec cras. Nec nunc nisi augue imperdiet blandit
                            facilisis. Massa in purus ultricies libero vitae.
                        </p>
                    </div>
                </div>

                <div class="projects__spec">
                    <dl class="projects__spec-list">
                        <div class="projects__spec-item">
                            <dt class="projects__spec-value"><span>130 000</span>тон
                            </dt>
                            <dd class="projects__spec-key">вес бетонного основания платформы</dd>
                        </div>
                        <div class="projects__spec-item">
                            <dt class="projects__spec-value"><span>3,3</span>узла
                            </dt>
                            <dd class="projects__spec-key">составила скорость буксировки платформы</dd>
                        </div>
                        <div class="projects__spec-item">
                            <dt class="projects__spec-value"><span>15</span>судов
                            </dt>
                            <dd class="projects__spec-key">проектная команда</dd>
                        </div>
                        <div class="projects__spec-item">
                            <dt class="projects__spec-value"><span>41</span>метр
                            </dt>
                            <dd class="projects__spec-key">высота каждой колонны</dd>
                        </div>
                    </dl>
                    <button class="projects__spec-button button button--alt" type="button">Подробнее</button>
                </div>

            </div>
            <div class="projects__body">
                <div class="projects__body-main">
                    <img src="/assets/projects-DTyJv5aR.jpg" width="706" height="600" alt=""
                         class="projects__body-img">
                    <div class="projects__body-info">
                        <h4 class="projects__body-title">Diam nulla vulputate id cum</h4>
                        <p class="projects__body-description">
                            Fringilla eget auctor non sed viverra mattis. Lectus est est ullamcorper eu natoque vitae mi
                            consequat. Eget ac elit viverra nec donec cras. Nec nunc nisi augue imperdiet blandit
                            facilisis. Massa in purus ultricies libero vitae.
                        </p>
                    </div>
                </div>
                <div class="projects__spec">
                    <dl class="projects__spec-list">
                        <div class="projects__spec-item">
                            <dt class="projects__spec-value"><span class="projects__spec-value--bold">130 000</span>тон
                            </dt>
                            <dd class="projects__spec-key">вес бетонного основания платформы</dd>
                        </div>
                        <div class="projects__spec-item">
                            <dt class="projects__spec-value"><span class="projects__spec-value--bold">3,3</span>узла
                            </dt>
                            <dd class="projects__spec-key">составила скорость буксировки платформы</dd>
                        </div>
                        <div class="projects__spec-item">
                            <dt class="projects__spec-value"><span class="projects__spec-value--bold">15</span>судов
                            </dt>
                            <dd class="projects__spec-key">проектная команда</dd>
                        </div>
                        <div class="projects__spec-item">
                            <dt class="projects__spec-value"><span class="projects__spec-value--bold">41</span>метр
                            </dt>
                            <dd class="projects__spec-key">высота каждой колонны</dd>
                        </div>
                    </dl>
                    <button class="projects__spec-button button button--alt" type="button">Подробнее</button>
                </div>
            </div>
        </div>
    </div>
</section>

