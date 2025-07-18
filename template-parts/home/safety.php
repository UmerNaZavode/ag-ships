<?php
$safety = get_field("safety");
$slider = $safety["slider"];
?>

<section class="safety">
    <div class="safety__inner container">
        <div class="safety__wrapper navigation-btn">
            <button class="navigation-btn__arrow navigation-btn__arrow--prev">
                <?php echo get_template_part("template-parts/icons/icon-hero-left"); ?>
            </button>
            <div class="safety-content">

                <?php foreach ($slider as $item): ?>
                    <?php
                    $subtitle = $item['subtitle'];
                    $title = $item['title'];
                    $items = $item['items'];
                    $image = $item['image'];
                    ?>


                    <div class="safety-content__body">
                        <div class="safety-content__info">
                            <p class="safety-content__subtitle"><?php echo $subtitle; ?></p>
                            <h5 class="safety-content__title"><?php echo $title; ?></h5>
                            <ul class="safety-content__list">

                                <?php foreach ($items as $list_item): ?>
                                    <?php
                                    $description = $list_item["description"];
                                    ?>

                                    <li class="safety-content__item">
                                        <p><?php echo $description; ?></p>
                                    </li>

                                <?php endforeach; ?>

                            </ul>
                        </div>
                        <img src="<?php echo $image; ?>" width="480" height="410" alt=""
                             class="safety-content__img" loading="lazy">
                    </div>

                <?php endforeach; ?>

            </div>
            <button class="navigation-btn__arrow navigation-btn__arrow--next">
                <?php echo get_template_part("template-parts/icons/icon-hero-right"); ?>
            </button>
        </div>
    </div>
</section>

