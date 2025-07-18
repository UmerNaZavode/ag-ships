<?php
$news = get_field("news");
$title = $news["title"];
$link = $news["link"];
$items = $news["items"];
?>

<section class="news">
    <div class="news__main container">
        <header class="news__header">
            <h3 class="news__title title"><?php echo $title; ?></h3>
            <a href="" class="news__link title--link"><?php echo $link; ?></a>
        </header>
        <div class="news__body">
            <ul class="news__list">

                <?php foreach($items as $item): ?>
                  <?php
                      $image = $item["image"];
                      $date = $item["date"];
                      $subtitle = $item["subtitle"];
                      $description = $item["description"];
                  ?>

                    <li class="news__item">
                        <img src="<?php echo $image; ?>" width="306" height="330" alt=""
                             class="news__item-img">
                        <p class="news__item-date" datetime="2022-12-29"><?php echo $date; ?></p>
                        <div class="news__item-body">
                            <a href="/" class="news__item-link">
                                <h4 class="news__item-subtitle"><?php echo $subtitle; ?></h4>
                            </a>
                            <p class="news__item-description"><?php echo $description; ?></p>
                        </div>
                    </li>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

