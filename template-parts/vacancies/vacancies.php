<?php
$vacancies = get_field('vacancies');
$title = $vacancies['title'];
$page_items = $vacancies['page_items'];
$items = $vacancies['items'];
?>

<section class="vacancies">
  <h1 class="visually-hidden">Перевозка газа</h1>
  <div class="vacancies__inner container">
    <h1 class="vacancies__title"><?php echo $title; ?></h1>
    <div class="vacancies__pages pages">
      <ul class="pages__list">

        <?php foreach ($page_items as $pages) : ?>
          <?php
          $page = $pages['page'];
          ?>
          <li class="pages__item">
            <p><?php echo $page; ?></p>
          </li>
        <?php endforeach; ?>

      </ul>
    </div>
    <div class="vacancies-body">

      <?php foreach ($items as $item) : ?>
        <?php
        $body_title = $item['body_title'];
        $body_items = $item['body_items'];
        $tanker_image = $item['tanker_image'];
        $contract_image = $item['contract_image'];
        ?>

        <h2 class="vacancies-body__title"><?php echo $body_title; ?></h2>
        <div class="vacancies-body__wrapper">
          <?php foreach ($body_items as $b_item) : ?>
            <?php
            $body_subtitle = $b_item['body_subtitle'];
            $tanker = $b_item['tanker'];
            $contract = $b_item['contract'];
            $button = $b_item['button'];
            ?>

            <div class="vacancies-body__card">
              <h3 class="vacancies-body__subtitle"><?php echo $body_subtitle; ?></h3>
              <div class="vacancies-body__info">
                <div class="vacancies-body__item">
                  <span class="vacancies-body__icon"><img src="<?php echo $tanker_image; ?>" width="16" height="16" alt=""></span>
                  <span class="vacancies-body__text"><?php echo $tanker; ?></span>
                </div>
                <div class="vacancies-body__item">
                  <span class="vacancies-body__icon"><img src="<?php echo $contract_image; ?>" width="16" height="16" alt=""></span>
                  <span class="vacancies-body__text"><?php echo $contract; ?></span>
                </div>
              </div>
              <button class="vacancies-body__button" type="button"><?php echo $button; ?></button>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>

    </div>

</section>
