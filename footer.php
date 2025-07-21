<?php wp_nav_menu([
  'theme_location' => 'footer-center',
  'menu' => '',
  'container' => '',
  'container_class' => '',
  'container_id' => '',
  'menu_class' => 'footer__link',
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

<?php wp_nav_menu([
  'theme_location' => 'footer-right',
  'menu' => '',
  'container' => '',
  'container_class' => '',
  'container_id' => '',
  'menu_class' => 'footer__link',
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

<footer class="footer">
  <div class="footer__inner container">
    <a href="/" class="footer__logo">
      <img src="data:image/svg+xml,%3csvg%20width='97'%20height='30'%20viewBox='0%200%2097%2030'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M20.5542%200.00055259H25.7486V24.042H19.7829V9.02488L13.3269%2016.5691H12.4179L5.96138%209.02488V24.042H0V0.00055259H5.19055L12.8718%208.92094L20.5542%200.00055259ZM55.66%2024.042H49.2404L47.2762%2019.2827H36.5792L34.79%2024.042H28.4754L38.1214%200H45.0325L55.66%2024.042ZM41.6642%205.74622L38.1583%2015.0885H45.5232L41.6642%205.74622ZM57.5115%2028.9069C58.5293%2027.9913%2059.2996%2026.0523%2059.0889%2024.3594C57.8636%2023.8656%2057.2996%2023.0916%2057.2996%2021.7868C57.2996%2020.1657%2058.5288%2019.0013%2060.1805%2019.0013C62.2459%2019.0013%2063.6869%2020.6589%2063.6869%2023.0208C63.6869%2026.5461%2060.9507%2029.6489%2057.5109%2030L57.5115%2028.9069ZM72.5626%209.87136C73.4396%209.05971%2074.3519%208.46038%2075.2608%208.03852C76.1853%207.65893%2077.1754%207.46707%2078.1741%207.47401C80.9828%207.47401%2082.8733%208.60357%2083.9984%2010.9301C86.1046%208.49742%2087.9626%207.47401%2090.3818%207.47401C94.0665%207.47401%2096.6964%209.9084%2096.6964%2013.6095V24.0431H91.6115V14.524C91.6115%2012.199%2090.4875%2010.8948%2088.6294%2010.8948C87.1549%2010.8948%2085.7882%2011.8446%2084.6279%2013.6432V24.0426H79.5441V14.4178C79.5441%2011.775%2077.9644%2010.8942%2076.4547%2010.8942C75.1232%2010.8942%2073.7929%2011.6688%2072.5637%2013.1495V24.042H67.4744V7.79137H72.5637V9.87136H72.5626Z'%20fill='white'/%3e%3c/svg%3e" width="97" height="30" alt="" loading="lazy">
    </a>
    <div class="footer__menu">

      <?php get_template_part('/template-parts/footer/footer-menu-left'); ?>

      <div class="footer__column">
        <a href="/" class="footer__title">Инвесторам</a>
        <ul class="footer__list">
          <li class="footer__item">
            <a href="" class="footer__link">Акции</a>
          </li>
          <li class="footer__item">
            <a href="" class="footer__link">Отчеты и результаты</a>
          </li>
          <li class="footer__item">
            <a href="" class="footer__link">Раскрытие информации</a>
          </li>
          <li class="footer__item">
            <a href="" class="footer__link">Корпоративное управление</a>
          </li>
          <li class="footer__item">
            <a href="" class="footer__link">Аналитики</a>
          </li>
          <li class="footer__item">
            <a href="" class="footer__link">Контакты для инвесторов</a>
          </li>
        </ul>
      </div>
      <div class="footer-contacts">
        <div class="footer-contacts__address">
          <ul class="footer-contacts__list">
            <li class="footer-contacts__item">
              <a href="/" class="footer-contacts__link">
                <p>
                  191186, Санкт-Петербург, Невский<br>
                  переулок, д. 3, офис 10-25
                </p>
              </a>
            </li>
            <li class="footer-contacts__item">
              <a href="/" class="footer-contacts__link">
                <p>
                  125047, Москва, Покровская площадь,<br>
                  д.3, к. 5,стр 1
                </p>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-contacts__info">
          <ul class="footer-contacts__list">
            <li class="footer-contacts__item">
              <a href="/" tel:+74951234567>
                +7 (495) 123-45-67
              </a>
            </li>
            <li class="footer-contacts__item">
              <a href="/" mailto:info@lead-group.ru>
                info@lead-group.ru
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
