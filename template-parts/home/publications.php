<?php
$publications = get_field("publications");
$title = $publications["title"];
$link = $publications["link"];
$items = $publications["items"];
?>

<section class="publications">
    <div class="publications__main container">
        <header class="publications__header">
            <h3 class="publications__title title"><?php echo $title; ?></h3>
            <a href="" class="publications__link title--link"><?php echo $link; ?></a>
        </header>
        <ul class="publications__list">

            <?php foreach ($items as $item): ?>
                <?php
                $date = $item["date"];
                $image = $item["image"];
                $subtitle = $item["subtitle"];
                $link = $item["link"];
                ?>


                <li class="publications__item">
                    <img src="<?php echo $image; ?>" class="publications__item-img" width="306" height="260"
                         alt="">
                    <p class="publications__item-date" datetime="2022-9-6"><?php echo $date; ?></p>
                    <h4 class="publications__item-subtitle"><?php echo $subtitle; ?></h4>
                    <a href="/" class="publications__item-link"><?php echo $link; ?></a>
                </li>

            <?php endforeach; ?>

        </ul>
    </div>
</section>

