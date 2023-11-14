<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<section class="news-page">
    <div class="_container">
        <div class="news-page__head">
            <h1 class="title-page news-page__title"><span
                        class="title-page__text"><?php echo $arResult['NAME'] ?></span>
            </h1>
            <div class="news-page__date">25 февраля 2023</div>
        </div>
        <div class="__container-2cols">
            <div class="news-page__col news-page__content">
                <div class="news-page__block">
                    <div class="news-page__media"><img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="">
                    </div>
                </div>
                <div class="news-page__block">
                    <div class="__container-s">
                        <h3>Praesent a imperdiet ante. Nulla vel odio ut dui tincidunt egestas. Duis sodales
                            diam ligula, in commodo odio auctor non.</h3>
                        <p>Cras non quam lacus. Ut id venenatis justo. Phasellus ullamcorper, lorem eget
                            imperdiet cursus, ex quam fringilla urna, non mollis augue nunc vitae sem. Donec
                            venenatis et velit sit amet placerat. Aliquam mollis nunc a vestibulum finibus.
                            Integer id nulla sed turpis pellentesque dapibus. Ut libero tortor, viverra non
                            massa at, posuere sagittis magna. Ut tortor tellus, porttitor ac libero vitae,
                            lacinia molestie purus. Praesent a imperdiet ante. Nulla vel odio ut dui tincidunt
                            egestas. Duis sodales diam ligula, in commodo odio auctor non.</p>
                    </div>
                </div>
                <?php $APPLICATION->IncludeComponent(
                    'audiotech:analogslider',
                    '',
                ) ?>
                <div class="__container-s">
                    <div class="news-page__block">
                        <p>Vestibulum augue enim, scelerisque ac gravida ut, sodales non lectus. Nunc non
                            pretium eros. Duis ligula nisi, venenatis in dignissim et, pellentesque in enim.
                            Mauris facilisis, eros a condimentum vehicula, ex eros tincidunt massa, at mattis
                            turpis nibh in erat. Donec vehicula eros quis imperdiet pharetra. Suspendisse
                            vehicula eros ac lacus molestie, id molestie lacus tincidunt. Fusce non arcu tempus
                            odio convallis posuere. Vestibulum ante ipsum primis in faucibus orci luctus et
                            ultrices posuere cubilia curae; Nunc non enim sed lacus tincidunt euismod. Quisque
                            consequat massa urna, sed tincidunt urna faucibus sit amet.</p>
                        <div class="quote">
                            <p>Donec vehicula eros quis imperdiet pharetra. Suspendisse vehicula eros ac lacus
                                molestie, id molestie lacus tincidunt. Fusce non arcu tempus odio convallis
                                posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere cubilia curae; Nunc non enim sed lacus tincidunt euismod. </p>
                            <div class="quote__head">
                                <div class="quote__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/pic-q.jpg" alt=""></div>
                                <div class="quote__title"><span class="quote__name">Jane Cooper</span><span
                                            class="quote__subname">Medical Assistant</span></div>
                            </div>
                        </div>
                        <p>Vestibulum augue enim, scelerisque ac gravida ut, sodales non lectus. Nunc non
                            pretium eros. Duis ligula nisi, venenatis in dignissim et, pellentesque in enim.
                            Mauris facilisis, eros a condimentum vehicula, ex eros tincidunt massa, at mattis
                            turpis nibh in erat. Donec vehicula eros quis imperdiet pharetra. Suspendisse
                            vehicula eros ac lacus molestie, id molestie lacus tincidunt. Fusce non arcu tempus
                            odio convallis posuere. Vestibulum ante ipsum primis in faucibus orci luctus et
                            ultrices posuere cubilia curae; Nunc non enim sed lacus tincidunt euismod. Quisque
                            consequat massa urna, sed tincidunt urna faucibus sit amet.</p>
                    </div>
                    <div class="news__video">
                        <div class="play-video"><img src="<?= SITE_TEMPLATE_PATH ?>/img/video-back2.jpg" alt="">
                            <button class="btn-play"></button>
                        </div>
                    </div>
                    <div class="video-wrap">
                        <iframe id="video" width="820" height="440"
                                src="https://www.youtube.com/embed/LvQossUx7ss?si=pH9KasmmTG0Q50Ew&amp;controls=0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        <button class="video-wrap__close stop-video"></button>
                    </div>
                    <div class="news-page__block">
                        <h3>Nulla vel odio ut dui tincidunt egestas. Duis sodales diam ligula, in commodo odio
                            auctor non.</h3>
                        <ul>
                            <li><span>Ut libero tortor, viverra non massa at, posuere sagittis magna.</span>
                            </li>
                            <li><span>Phasellus ullamcorper, lorem eget imperdiet cursus, ex quam fringilla urna, non mollis augue nunc vitae sem. Donec venenatis et velit sit amet placerat.</span>
                            </li>
                            <li><span>Ut tortor tellus, porttitor ac libero vitae, lacinia molestie purus. Praesent a imperdiet ante. Nulla vel odio ut dui tincidunt egestas. Duis sodales diam ligula, in commodo odio auctor non.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="news-page__block">
                        <h3>Cras non quam lacus. Ut id venenatis justo. Phasellus ullamcorper, lorem eget
                            imperdiet cursus, ex quam fringilla urna, non mollis augue nunc vitae sem. Donec
                            venenatis et velit sit amet placerat.</h3>
                        <div class="columns">
                            <p>Cras non quam lacus. Ut id venenatis justo. Phasellus ullamcorper, lorem eget
                                imperdiet cursus, ex quam fringilla urna, non mollis augue nunc vitae sem. Donec
                                venenatis et velit sit amet placerat. Aliquam mollis nunc a vestibulum finibus.
                                Integer id nulla sed turpis pellentesque dapibus. Ut libero tortor, viverra non
                                massa at, posuere sagittis magna. Ut tortor tellus, porttitor ac libero vitae,
                                lacinia molestie purus. Praesent a imperdiet ante. Nulla vel odio ut dui
                                tincidunt egestas. Duis sodales diam ligula, in commodo odio auctor non.</p>
                        </div>
                    </div>
                    <div class="news-page__block">
                        <h3>Quisque consequat massa urna, sed tincidunt urna faucibus sit amet.</h3>
                        <ol>
                            <li>
                                <span>01</span><span>Ut libero tortor, viverra non massa at, posuere sagittis magna.</span>
                            </li>
                            <li><span>02</span><span>Phasellus ullamcorper, lorem eget imperdiet cursus, ex quam fringilla urna, non mollis augue nunc vitae sem. Donec venenatis et velit sit amet placerat.</span>
                            </li>
                            <li><span>03</span><span>Ut tortor tellus, porttitor ac libero vitae, lacinia molestie purus. Praesent a imperdiet ante. Nulla vel odio ut dui tincidunt egestas. Duis sodales diam ligula, in commodo odio auctor non.</span>
                            </li>
                        </ol>
                        <p>Eget nunc lobortis mattis aliquam faucibus purus in. Etiam sit amet nisl purus in
                            mollis nunc sed. Porta nibh venenatis cras sed. Sollicitudin tempor id eu nisl nunc
                            mi ipsum faucibus. Adipiscing elit ut aliquam purus sit amet. Fermentum dui faucibus
                            in ornare quam. Arcu dui vivamus arcu felis. Tincidunt tortor aliquam nulla facilisi
                            cras. Nunc id cursus metus aliquam eleifend mi in nulla. Semper auctor neque vitae
                            tempus quam pellentesque nec nam. Etiam sit amet nisl purus in mollis nunc.
                            Consectetur libero id faucibus nisl tincidunt eget nullam non nisi. Ullamcorper eget
                            nulla facilisi etiam dignissim diam quis. Enim diam vulputate ut pharetra sit amet
                            aliquam. Volutpat sed cras ornare arcu dui vivamus arcu felis. Nisl nunc mi ipsum
                            faucibus vitae aliquet. Suspendisse ultrices gravida dictum fusce ut.</p>
                        <p>In hac habitasse platea dictumst quisque sagittis purus. In mollis nunc sed id semper
                            risus. Elementum eu facilisis sed odio morbi. Dolor sit amet consectetur adipiscing.
                            Dolor sed viverra ipsum nunc aliquet bibendum enim. A diam maecenas sed enim ut sem
                            viverra. Tempor orci eu lobortis elementum nibh tellus. Ac placerat vestibulum
                            lectus mauris ultrices eros in cursus turpis. At ultrices mi tempus imperdiet nulla
                            malesuada pellentesque elit. Diam quam nulla porttitor massa id neque aliquam.
                            Aliquam malesuada bibendum arcu vitae elementum curabitur. Vitae sapien pellentesque
                            habitant morbi tristique senectus et.</p>
                    </div>
                    <?= $APPLICATION->IncludeComponent(
                        'audiotech:social',
                        '',
                    ) ?>
                </div>
            </div>
            <div class="news-page__col">
                <div class="aside-block">
                    <h2 class="aside-block__title">Подписаться на рассылку</h2>
                    <div class="input__overlay">
                        <input class="input-default" type="email" placeholder="Электронная почта">
                    </div>
                    <p class="aside-block__agree">Подписываясь, вы даете согласие на <a href="">обработку
                            персональных данных</a></p>
                    <button class="btn btn--red btn--l btn--icn" type="submit">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 8L10.89 13.26C11.2187 13.4793 11.6049 13.5963 12 13.5963C12.3951 13.5963 12.7813 13.4793 13.11 13.26L21 8M5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H5C4.46957 5 3.96086 5.21071 3.58579 5.58579C3.21071 5.96086 3 6.46957 3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19Z"
                                  stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        <span>Подписаться</span></button>
                </div>
            </div>
        </div>
        <? $APPLICATION->IncludeComponent(
            'audiotech:similarslider',
            '',
        ) ?>
        <div class="subscribe">
            <h2 class="subscribe__title">Подписаться на рассылку</h2>
            <div class="subscribe__input">
                <input class="input-default subscribe__input" type="email" placeholder="Электронная почта">
                <button class="btn btn--red btn--l btn--icn" type="submit"><span>Подписаться</span></button>
            </div>
            <p class="aside-block__agree">Подписываясь, вы даете согласие на <a href="">обработку персональных
                    данных</a></p>
        </div>
    </div>
</section>
<div class="aside-block aside-block--mobile">
    <h2 class="aside-block__title">Подписаться на рассылку</h2>
    <div class="input__overlay">
        <input class="input-default" type="email" placeholder="Электронная почта">
    </div>
    <p class="aside-block__agree">Подписываясь, вы даете согласие на <a href="">обработку персональных
            данных</a></p>
    <button class="btn btn--red btn--l btn--icn" type="submit">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 8L10.89 13.26C11.2187 13.4793 11.6049 13.5963 12 13.5963C12.3951 13.5963 12.7813 13.4793 13.11 13.26L21 8M5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H5C4.46957 5 3.96086 5.21071 3.58579 5.58579C3.21071 5.96086 3 6.46957 3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19Z"
                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span>Подписаться</span></button>
</div>