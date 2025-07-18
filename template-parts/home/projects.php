<?php
$projects = get_field("projects");
//d($projects);
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
            <?php foreach ($slider as $item): ?>
                <?php
                $image = $item["image"];
                $subtitle = $item["subtitle"];
                $description = $item["description"];
                $button = $item["button"];
                $items = $item["items"];
                ?>

                <div class="projects__body">

                    <div class="projects__body-main">
                        <img src="<?php echo $image; ?>" width="706" height="600" alt=""
                             class="projects__body-img">
                        <div class="projects__body-info">
                            <h4 class="projects__body-title"><?php echo $subtitle; ?></h4>
                            <p class="projects__body-description"><?php echo $description; ?></p>
                        </div>
                    </div>
                    <div class="projects__spec">
                        <dl class="projects__spec-list">
                            <?php foreach ($items as $list_item): ?>
                                <?php
                                $key = $list_item["key"];
                                $value = $list_item["value"];
                                ?>

                                <div class="projects__spec-item">
                                    <dt class="projects__spec-value"><?php echo $key; ?></dt>
                                    <dd class="projects__spec-key"><?php echo $value; ?></dd>
                                </div>

                            <?php endforeach; ?>

                        </dl>
                        <button class="projects__spec-button button button--alt" type="button">
                            <?php echo $button; ?>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>