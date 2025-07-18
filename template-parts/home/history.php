<?php
$history = get_field("history");
$title = $history["title"];
$description = $history["description"];
$path_image = $history["path_image"];
$path_info = $history["path_info"];
?>

<section class="history">
    <div class="history__inner container">
        <header class="history__header">
            <h3 class="history__title title title--alt"><?php echo $title; ?></h3>
        </header>
        <div class="history__body">
            <div class="history__description">
                <div class="history__info">

                    <?php foreach ($description as $item): ?>
                        <?php
                        $info = $item["info"];
                        ?>
                        <p><?php echo $info; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="history__path">
                <img src="<?php echo $path_image; ?>" width="638" height="406" alt=""
                     class="history__path-img">
                <div class="history__path-info">
                    <ul class="history__path-list">
                        <?php foreach ($path_info as $item): ?>
                            <?php
                            $info = $item["info"];
                            ?>
                            <li class="history__path-item"><?php echo $info; ?></li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

