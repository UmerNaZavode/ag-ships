<?php
$activities = get_field('activities');
$title = $activities['title'];
$pages_items = $activities['pages_items'];
$comment_items = $activities['comment_items'];
$product = $activities['product'];
$spec_title = $activities['spec_title'];
$spec_items = $activities['spec_items'];
?>

<section class="activities">
  <div class="activities__inner container">
    <h1 class="visually-hidden">Перевозка газа</h1>
    <div class="activities__header">
      <h2 class="activities__title title--bold"><?php echo $title; ?></h2>
    </div>
  </div>
  <div class="activities__pages pages">
    <ul class="pages__list">
      <?php foreach ($pages_items as $pages) : ?>
        <?php $page = $pages["page"]; ?>

        <li class="pages__item">
          <p><?php echo $page; ?></p>
        </li>

      <?php endforeach; ?>
    </ul>
  </div>
  <div class="activities-body">
    <div class="activities-body__info">
      <div class="activities-body__comment">

        <?php foreach ($comment_items as $comments) : ?>
          <?php $comment = $comments["comment"]; ?>

          <p><?php echo $comment; ?></p>

        <?php endforeach; ?>
      </div>
      <div class="activities-body__product">
        <?php echo $product; ?>
      </div>
    </div>
    <div class="activities-projects">
      <div class="activities-projects__spec">
        <div class="activities-projects__title">
          <h4>разработка проектов</h4>
        </div>
        <dl class="activities-projects__list">
          <div class="activities-projects__item">
            <dd class="activities-projects__value">7</dd>
            <dt class="activities-projects__key">проектов реализовано и поставлено на поток</dt>
          </div>
          <div class="activities-projects__item">
            <dd class="activities-projects__value">13</dd>
            <dt class="activities-projects__key">проекта в разработке бюро строительства</dt>
          </div>
          <div class="activities-projects__item">
            <dd class="activities-projects__value">11</dd>
            <dt class="activities-projects__key">проектов реализовано и поставлено на поток</dt>
          </div>
          <div class="activities-projects__item">
            <dd class="activities-projects__value">5</dd>
            <dt class="activities-projects__key">проекта в разработке бюро строительства</dt>
          </div>
          <div class="activities-projects__item">
            <dd class="activities-projects__value">17</dd>
            <dt class="activities-projects__key">проектов реализовано и поставлено на поток</dt>
          </div>
          <div class="activities-projects__item">
            <dd class="activities-projects__value">100+</dd>
            <dt class="activities-projects__key">проекта в разработке бюро строительства</dt>
          </div>
        </dl>
      </div>
    </div>
  </div>
  </div>
</section>
