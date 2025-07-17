<?php
/*
 * Template Name: front-page
 */

get_header();
?>

    <div class="hero-section">
        <h1 class="visually-hidden">Перевозка газа</h1>

        <img src="/assets/ship-BIDkhd3m.jpg" alt="" width="1920" height="900" class="background-img active show">
        <img src="/assets/ship-flop-dVOqXCTX.jpg" alt="" width="1920" height="900" class="background-img">
        <?php echo get_template_part("template-parts/header/header-custom") ?>
        <div class="hero container">
            <div class="hero__body">
                <div class="hero__body-inner">
                    <h2 class="hero__body-title">
                        Первый в мире <br>
                        ледокольный газовоз
                    </h2>
                    <div class="hero__body-info">
                        <p>Et elementum penatibus lacinia eget ut amet lorem. Id lectus magna quis odio in. In
                            mi vitae ultrices et luctus eu gravida tincidunt cras. Quisque pellentesque mollis ut sed.</p>
                    </div>
                    <button class="hero__button button" type="button">Подробнее</button>
                </div>
                <div class="navigation-btn">
                    <button class="navigation-btn__arrow navigation-btn__arrow--prev">
                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.2627 13.7375L3.5377 8L9.2627 2.2625L7.5002 0.5L0.000195503 8L7.5002 15.5L9.2627 13.7375Z"
                                  fill="white" />
                        </svg>
                    </button>
                    <button class="navigation-btn__arrow navigation-btn__arrow--next">
                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.737305 13.7375L6.4623 8L0.737305 2.2625L2.4998 0.5L9.9998 8L2.4998 15.5L0.737305 13.7375Z"
                                  fill="white" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="ship-spec">
                <div class="ship-spec__content">
                    <h4 class="ship-spec__title">Танкер-газовоз СПГ «КАПИТАН ДАНИЛКИН»</h4>
                    <dl class="ship-spec__list">
                        <div class="ship-spec__item">
                            <dt class="ship-spec__key">Грузовместимость:</dt>
                            <dd class="ship-spec__value">172 600м3</dd>
                        </div>
                        <div class="ship-spec__item">
                            <dt class="ship-spec__key">Ледопроходимость:</dt>
                            <dd class="ship-spec__value">2,1 м</dd>
                        </div>
                        <div class="ship-spec__item">
                            <dt class="ship-spec__key">Ледовый класс:</dt>
                            <dd class="ship-spec__value">Arc7</dd>
                        </div>
                        <div class="ship-spec__item">
                            <dt class="ship-spec__key">Число «Азиподов»:</dt>
                            <dd class="ship-spec__value">3</dd>
                        </div>
                    </dl>
                </div>
                <img src="/assets/ship-diagram-DeZbsea4.png" alt="" class="ship-spec__img">
            </div>
        </div>
    </div>

    <main>
        <section class="news">
            <div class="news__main container">
                <header class="news__header">
                    <h3 class="news__title title">Новости</h3>
                    <a href="" class="news__link title--link">Все новости</a>
                </header>
                <div class="news__body">
                    <ul class="news__list">
                        <li class="news__item">
                            <img src="/assets/news-1-BQIvnuvI.jpg" width="306" height="330" alt="" class="news__item-img">
                            <p class="news__item-date" datetime="2022-12-29">29 декабря 2022 Г.</p>
                            <div class="news__item-body">
                                <a href="/" class="news__item-link">
                                    <h4 class="news__item-subtitle">Elementum ipsum eget venenatis at rutrum aenean. Neque gravida nunc dolor
                                        tellus ac tellus. Turpis.</h4>
                                </a>
                                <p class="news__item-description">Euismod nunc vel sit orci odio eget semper pharetra risus. Nibh pharetra
                                    neque amet enim egestas tincidunt. Eu.</p>
                            </div>
                        </li>
                        <li class="news__item">
                            <img src="/assets/news-2-JNALU3kV.jpg" width="306" height="330" alt="" class="news__item-img">
                            <p class="news__item-date" datetime="2022-12-20">20 декабря 2022 Г.</p>
                            <div class="news__item-body">
                                <a href="/" class="news__item-link">
                                    <h4 class="news__item-subtitle">Volutpat vehicula scelerisque consectetur nullam nunc vel. Sagittis enim
                                        feugiat maecenas.</h4>
                                </a>
                                <p class="news__item-description">Facilisis aliquam in velit nibh ipsum quis. Diam nulla fringilla etiam
                                    id et egestas dui odio. Lectus nam gravida.</p>
                            </div>
                        </li>
                        <li class="news__item">
                            <img src="/assets/news-3-Clb2ESyP.jpg" width="306" height="330" alt="" class="news__item-img">
                            <p class="news__item-date" datetime="2022-12-14">14 декабря 2022 Г.</p>
                            <div class="news__item-body">
                                <a href="/" class="news__item-link">
                                    <h4 class="news__item-subtitle">Etiam donec fames sed nunc senectus ut eget. Nibh felis eget.</h4>
                                </a>
                                <p class="news__item-description">Volutpat egestas porttitor duis purus quam est quam. Tempor aliquam vel
                                    arcu
                                    euismod. Mattis ullamcorper.</p>
                            </div>
                        </li>
                        <li class="news__item">
                            <img src="/assets/news-4-DJDksOPC.jpg" width="306" height="330" alt="" class="news__item-img">
                            <p class="news__item-date" datetime="2022-12-29">29 декабря 2022 Г.</p>
                            <div class="news__item-body">
                                <a href="/" class="news__item-link">
                                    <h4 class="news__item-subtitle">Amet volutpat urna vitae vitae. Varius accumsan mattis egestas sagittis
                                        arcu
                                        libero. Sit at.</h4>
                                </a>
                                <p class="news__item-description">Vestibulum ut justo sagittis eu. Tincidunt viverra odio mauris ut nec
                                    tellus
                                    ante. Sit ac etiam sed vestibulum.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="history">
            <div class="history__inner container">
                <header class="history__header">
                    <h3 class="history__title title title--alt">История компании</h3>
                </header>
                <div class="history__body">
                    <div class="history__description">
                        <div class="history__info">
                            <p>
                                Congue vel ac parturient placerat vel lectus. Turpis in interdum feugiat enim purus
                                venenatis ornare aliquam nunc. Commodo id ac amet purus tortor suscipit congue facilisis. Tempus bibendum
                                viverra est vel. Ullamcorper dignissim donec feugiat porta. Interdum neque porttitor ultrices feugiat sit
                                nulla
                                ullamcorper nibh amet. Imperdiet risus gravida tempus suspendisse nulla aliquam est. Sed quis in maecenas
                                vestibulum neque malesuada scelerisque mauris. Pharetra ipsum sapien vestibulum fames. Nisl phasellus
                                pellentesque quam risus non orci.
                            </p>
                            <p>
                                Risus magna mauris massa gravida turpis vestibulum vulputate libero scelerisque. Proin sed quam amet
                                pellentesque rhoncus semper aenean ultrices gravida. Tristique scelerisque lorem sed eget integer sed sed.
                                Leo
                                donec mi sagittis ac adipiscing diam felis quisque diam. Auctor sed vulputate odio non velit amet. At justo
                                porta gravida elementum mi. Neque tellus tellus sit etiam volutpat aliquam tincidunt semper. Nibh lobortis
                                commodo sapien sollicitudin sagittis. Turpis erat amet volutpat urna quis felis. Lorem mi amet dolor dictum.
                                Facilisis dignissim mauris tristique adipiscing molestie eget consectetur nec non. Id elementum nibh
                                faucibus
                                enim pharetra faucibus ultrices neque magnis. At cursus accumsan blandit tellus nisi tincidunt sit. Lacus
                                mattis
                                mattis nunc tincidunt vitae et.
                            </p>
                            <p>
                                Orci augue morbi bibendum ac viverra diam a fermentum. Massa eget porttitor tellus aliquam quisque turpis at
                                nunc. Ut tortor quam urna suscipit. Dictumst neque tincidunt malesuada facilisi cras urna. In nunc sed
                                ultrices
                                eu parturient aliquam. Non lorem facilisis tincidunt est aliquam hac diam. Suspendisse viverra eleifend leo
                                facilisis in. Id purus arcu cursus id. Pretium semper id sit arcu id adipiscing. Neque.
                            </p>
                        </div>
                    </div>
                    <div class="history__path">
                        <img src="/assets/history-BtHVx_hU.svg" width="638" height="406" alt="" class="history__path-img">
                        <div class="history__path-info">
                            <ul class="history__path-list">
                                <li class="history__path-item">Etiam hendrerit aliquam mattis mauris at orci.</li>
                                <li class="history__path-item">Risus integer ultrices tincidunt massa.</li>
                                <li class="history__path-item">Scelerisque lorem semper facilisi auctor metus eros in. Feugiat.</li>
                                <li class="history__path-item">Nec id diam varius laoreet volutpat arcu tempus.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="publications">
            <div class="publications__main container">
                <header class="publications__header">
                    <h3 class="publications__title title">Публикации</h3>
                    <a href="" class="publications__link title--link">Все публикации</a>
                </header>
                <ul class="publications__list">
                    <li class="publications__item">
                        <img src="/assets/pub-1-DbVM561t.jpg" class="publications__item-img" width="306" height="260" alt="">
                        <p class="publications__item-date" datetime="2022-9-6">6 сентября 2022 Г.</p>
                        <h4 class="publications__item-subtitle">Nibh lacinia venenatis bibendum eget fermentum semper amet. Sed eu
                            quis sed erat aliquam elementum nec. Pellentesque fringilla nunc.</h4>
                        <a href="/" class="publications__item-link">Et blandit volutpat sed ullamcorper massa.</a>
                    </li>
                    <li class="publications__item">
                        <img src="/assets/pub-2-ByDGkmPN.jpg" class="publications__item-img" width="306" height="260" alt="">
                        <p class="publications__item-date" datetime="2022-9-6">6 сентября 2022 Г.</p>
                        <h4 class="publications__item-subtitle">Mattis sem habitant non vitae scelerisque. Sagittis eleifend id
                            convallis posuere feugiat nibh sed risus et. Id aliquam enim ut ac nunc porttitor.</h4>
                        <a href="/" class="publications__item-link">Sollicitudin aliquet lorem sed varius a eget quis.</a>
                    </li>
                    <li class="publications__item">
                        <img src="/assets/pub-3-Hd5d2eTD.jpg" class="publications__item-img" width="306" height="260" alt="">
                        <p class="publications__item-date" datetime="2022-9-5">5 сентября 2022 Г.</p>
                        <h4 class="publications__item-subtitle">Sit quis non facilisis posuere. Nec sit auctor nibh integer lacus.
                            Posuere vel amet quam egestas pulvinar dictum nunc tellus vitae. Non amet lacus.</h4>
                        <a href="/" class="publications__item-link">In nulla non mattis facilisi sapien. In sodales.</a>
                    </li>
                    <li class="publications__item">
                        <img src="/assets/pub-4-CmiJMjvb.jpg" class="publications__item-img" width="306" height="260" alt="">
                        <p class="publications__item-date" datetime="2022-9-6">6 сентября 2022 Г.</p>
                        <h4 class="publications__item-subtitle">Lobortis vitae in tellus ac fames amet. Magna et in nunc suspendisse
                            eget. Massa ultrices velit turpis orci non gravida praesent in nibh quis.</h4>
                        <a href="/" class="publications__item-link">Sagittis consequat placerat egestas nunc.</a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="projects">
            <div class="projects__main container">
                <header class="projects__header">
                    <h3 class="projects__title title">Проекты</h3>
                    <div class="projects__navigation">
                        <a href="/" class="projects__link title--link">Все проекты</a>
                        <div class="navigation-btn navigation-btn--alt">
                            <button class="navigation-btn__arrow navigation-btn__arrow--prev">
                                <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.2627 13.7375L3.5377 8L9.2627 2.2625L7.5002 0.5L0.000195503 8L7.5002 15.5L9.2627 13.7375Z"
                                          fill="white" />
                                </svg>
                            </button>
                            <button class="navigation-btn__arrow navigation-btn__arrow--next">
                                <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.737305 13.7375L6.4623 8L0.737305 2.2625L2.4998 0.5L9.9998 8L2.4998 15.5L0.737305 13.7375Z"
                                          fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </header>
                <div class="projects__slider">
                    <div class="projects__body">
                        <div class="projects__body-main">
                            <img src="/assets/projects-DTyJv5aR.jpg" width="706" height="600" alt="" class="projects__body-img">
                            <div class="projects__body-info">
                                <h4 class="projects__body-title">Diam nulla vulputate id cum</h4>
                                <p class="projects__body-description">Fringilla eget auctor non sed viverra mattis. Lectus est est
                                    ullamcorper
                                    eu natoque vitae mi consequat. Eget ac elit viverra nec donec cras. Nec nunc nisi augue imperdiet blandit
                                    facilisis. Massa in purus ultricies libero vitae.</p>
                            </div>
                        </div>
                        <div class="projects__spec">
                            <dl class="projects__spec-list">
                                <div class="projects__spec-item">
                                    <dt class="projects__spec-value"><span class="projects__spec-value--bold">130 000</span>тон</dt>
                                    <dd class="projects__spec-key">вес бетонного основания платформы</dd>
                                </div>
                                <div class="projects__spec-item">
                                    <dt class="projects__spec-value"><span class="projects__spec-value--bold">3,3</span>узла</dt>
                                    <dd class="projects__spec-key">составила скорость буксировки платформы</dd>
                                </div>
                                <div class="projects__spec-item">
                                    <dt class="projects__spec-value"><span class="projects__spec-value--bold">15</span>судов</dt>
                                    <dd class="projects__spec-key">проектная команда</dd>
                                </div>
                                <div class="projects__spec-item">
                                    <dt class="projects__spec-value"><span class="projects__spec-value--bold">41</span>метр</dt>
                                    <dd class="projects__spec-key">высота каждой колонны</dd>
                                </div>
                            </dl>
                            <button class="projects__spec-button button button--alt" type="button">Подробнее</button>
                        </div>
                    </div>
                    <div class="projects__body">
                        <div class="projects__body-main">
                            <img src="/assets/projects-DTyJv5aR.jpg" width="706" height="600" alt="" class="projects__body-img">
                            <div class="projects__body-info">
                                <h4 class="projects__body-title">Diam nulla vulputate id cum</h4>
                                <p class="projects__body-description">Fringilla eget auctor non sed viverra mattis. Lectus est est
                                    ullamcorper
                                    eu natoque vitae mi consequat. Eget ac elit viverra nec donec cras. Nec nunc nisi augue imperdiet blandit
                                    facilisis. Massa in purus ultricies libero vitae.</p>
                            </div>
                        </div>
                        <div class="projects__spec">
                            <dl class="projects__spec-list">
                                <div class="projects__spec-item">
                                    <dt class="projects__spec-value"><span class="projects__spec-value--bold">130 000</span>тон</dt>
                                    <dd class="projects__spec-key">вес бетонного основания платформы</dd>
                                </div>
                                <div class="projects__spec-item">
                                    <dt class="projects__spec-value"><span class="projects__spec-value--bold">3,3</span>узла</dt>
                                    <dd class="projects__spec-key">составила скорость буксировки платформы</dd>
                                </div>
                                <div class="projects__spec-item">
                                    <dt class="projects__spec-value"><span class="projects__spec-value--bold">15</span>судов</dt>
                                    <dd class="projects__spec-key">проектная команда</dd>
                                </div>
                                <div class="projects__spec-item">
                                    <dt class="projects__spec-value"><span class="projects__spec-value--bold">41</span>метр</dt>
                                    <dd class="projects__spec-key">высота каждой колонны</dd>
                                </div>
                            </dl>
                            <button class="projects__spec-button button button--alt" type="button">Подробнее</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="safety">
            <div class="safety__inner container">
                <div class="safety__wrapper navigation-btn">
                    <button class="navigation-btn__arrow navigation-btn__arrow--prev">
                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.2627 13.7375L3.5377 8L9.2627 2.2625L7.5002 0.5L0.000195503 8L7.5002 15.5L9.2627 13.7375Z"
                                  fill="white" />
                        </svg>
                    </button>
                    <div class="safety-content">
                        <div class="safety-content__body">
                            <div class="safety-content__info">
                                <p class="safety-content__subtitle">Устойчивое развитие</p>
                                <h5 class="safety-content__title">Безопасность и качество</h5>
                                <ul class="safety-content__list">
                                    <li class="safety-content__item">
                                        <p>
                                            Tincidunt fames porta pretium congue orci cursus. Ut nisl ultrices elit euismod
                                            tincidunt. Vitae
                                            accumsan tellus lectus viverra id scelerisque. Pellentesque viverra in nibh a
                                            gravida vulputate mauris.
                                            Proin nibh fusce faucibus a est sit sit in.
                                        </p>
                                    </li>
                                    <li class="safety-content__item">
                                        <p>
                                            Lobortis imperdiet adipiscing commodo ipsum vulputate in at nibh. Diam velit neque
                                            nisl pellentesque
                                            nunc. Elementum lacus commodo eu sed id massa scelerisque.
                                        </p>
                                    </li>
                                    <li class="safety-content__item">
                                        <p>
                                            Lacinia nunc sagittis arcu lobortis sed arcu suspendisse imperdiet nunc. Eu nunc
                                            tempor ultrices
                                            sollicitudin orci diam
                                        </p>
                                    </li>
                                    <li class="safety-content__item">
                                        <p>
                                            Quisque hac molestie mauris nunc mus nunc. Consequat sed ac integer sed nunc ut
                                            curabitur tincidunt.
                                            Urna eget sed at tristique in scelerisque cras.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <img src="/assets/safety-D0g7E52B.jpg" width="480" height="410" alt="" class="safety-content__img" loading="lazy">
                        </div>
                        <div class="safety-content__body">
                            <div class="safety-content__info">
                                <p class="safety-content__subtitle">Устойчивое развитие</p>
                                <h5 class="safety-content__title">Безопасность и качество</h5>
                                <ul class="safety-content__list">
                                    <li class="safety-content__item">
                                        <p>
                                            Tincidunt fames porta pretium congue orci cursus. Ut nisl ultrices elit euismod
                                            tincidunt. Vitae
                                            accumsan tellus lectus viverra id scelerisque. Pellentesque viverra in nibh a
                                            gravida vulputate mauris.
                                            Proin nibh fusce faucibus a est sit sit in.
                                        </p>
                                    </li>
                                    <li class="safety-content__item">
                                        <p>
                                            Lobortis imperdiet adipiscing commodo ipsum vulputate in at nibh. Diam velit neque
                                            nisl pellentesque
                                            nunc. Elementum lacus commodo eu sed id massa scelerisque.
                                        </p>
                                    </li>
                                    <li class="safety-content__item">
                                        <p>
                                            Lacinia nunc sagittis arcu lobortis sed arcu suspendisse imperdiet nunc. Eu nunc
                                            tempor ultrices
                                            sollicitudin orci diam
                                        </p>
                                    </li>
                                    <li class="safety-content__item">
                                        <p>
                                            Quisque hac molestie mauris nunc mus nunc. Consequat sed ac integer sed nunc ut
                                            curabitur tincidunt.
                                            Urna eget sed at tristique in scelerisque cras.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <img src="/assets/safety-D0g7E52B.jpg" width="480" height="410" alt="" class="safety-content__img" loading="lazy">
                        </div>
                    </div>

                    <button class="navigation-btn__arrow navigation-btn__arrow--next">
                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.737305 13.7375L6.4623 8L0.737305 2.2625L2.4998 0.5L9.9998 8L2.4998 15.5L0.737305 13.7375Z"
                                  fill="white" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__inner container">
            <a href="/" class="footer__logo">
                <img src="data:image/svg+xml,%3csvg%20width='97'%20height='30'%20viewBox='0%200%2097%2030'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M20.5542%200.00055259H25.7486V24.042H19.7829V9.02488L13.3269%2016.5691H12.4179L5.96138%209.02488V24.042H0V0.00055259H5.19055L12.8718%208.92094L20.5542%200.00055259ZM55.66%2024.042H49.2404L47.2762%2019.2827H36.5792L34.79%2024.042H28.4754L38.1214%200H45.0325L55.66%2024.042ZM41.6642%205.74622L38.1583%2015.0885H45.5232L41.6642%205.74622ZM57.5115%2028.9069C58.5293%2027.9913%2059.2996%2026.0523%2059.0889%2024.3594C57.8636%2023.8656%2057.2996%2023.0916%2057.2996%2021.7868C57.2996%2020.1657%2058.5288%2019.0013%2060.1805%2019.0013C62.2459%2019.0013%2063.6869%2020.6589%2063.6869%2023.0208C63.6869%2026.5461%2060.9507%2029.6489%2057.5109%2030L57.5115%2028.9069ZM72.5626%209.87136C73.4396%209.05971%2074.3519%208.46038%2075.2608%208.03852C76.1853%207.65893%2077.1754%207.46707%2078.1741%207.47401C80.9828%207.47401%2082.8733%208.60357%2083.9984%2010.9301C86.1046%208.49742%2087.9626%207.47401%2090.3818%207.47401C94.0665%207.47401%2096.6964%209.9084%2096.6964%2013.6095V24.0431H91.6115V14.524C91.6115%2012.199%2090.4875%2010.8948%2088.6294%2010.8948C87.1549%2010.8948%2085.7882%2011.8446%2084.6279%2013.6432V24.0426H79.5441V14.4178C79.5441%2011.775%2077.9644%2010.8942%2076.4547%2010.8942C75.1232%2010.8942%2073.7929%2011.6688%2072.5637%2013.1495V24.042H67.4744V7.79137H72.5637V9.87136H72.5626Z'%20fill='white'/%3e%3c/svg%3e" width="97" height="30" alt="" loading="lazy">
            </a>
            <div class="footer__menu">
                <div class="footer__column">
                    <a href="/" class="footer__title">О компании</a>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="" class="footer__link">Профиль компании</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">История</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Совет директоров</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__column">
                    <a href="/" class="footer__title">флот</a>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="" class="footer__link">Виды деятельности</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Устойчивое развитие</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Безопасность и качество</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Защита окружающей среды</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Социальная ответственность</a>
                        </li>
                    </ul>
                </div>
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

<?php get_footer(); ?>