<?php
$hero_section = get_field("hero_section");
$title = $hero_section["title"];
$background_images = $hero_section["background_images"];
$text = $hero_section["text"];
$button_text = $hero_section["button_text"];
$spec_title = $hero_section["spec_title"];
$spec_items = $hero_section["spec_items"];
?>
<div class="hero-section">
    <h1 class="visually-hidden hero-section__title">Перевозка газа</h1>

    <?php foreach ($background_images as $k => $image_url): ?>
        <img src="<?php echo $image_url; ?>" alt="" width="1920" height="900"
             class="background-img <?php echo $k === 0 ? 'active show' : ''; ?>">
    <?php endforeach; ?>

    <?php echo get_template_part("template-parts/header/header-custom") ?>

    <div class="hero container">
        <div class="hero__body">
            <div class="hero__body-inner">
                <h2 class="hero__body-title"><?php echo $title; ?></h2>
                <div class="hero__body-info">
                    <p><?php echo $text; ?></p>
                </div>
                <button class="hero__button button" type="button"><?php echo $button_text; ?></button>
            </div>
            <div class="navigation-btn">
                <button class="navigation-btn__arrow navigation-btn__arrow--prev">
                    <?php echo get_template_part("template-parts/icons/icon-hero-left"); ?>
                </button>
                <button class="navigation-btn__arrow navigation-btn__arrow--next">
                    <?php echo get_template_part("template-parts/icons/icon-hero-right"); ?>
                </button>
            </div>
        </div>
        <div class="ship-spec">
            <div class="ship-spec__content">
                <h4 class="ship-spec__title"><?php echo $spec_title; ?></h4>
                <dl class="ship-spec__list">
                    <?php foreach ($spec_items as $item): ?>
                        <?php
                        $label = $item["label"];
                        $value = $item["value"];
                        ?>
                        <div class="ship-spec__item">
                            <dt class="ship-spec__key"><?php echo $label; ?></dt>
                            <dd class="ship-spec__value"><?php echo $value; ?></dd>
                        </div>
                    <?php endforeach; ?>
                </dl>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/ship-diagram-DeZbsea4.png" alt=""
                 class="ship-spec__img">
        </div>
    </div>
</div>

