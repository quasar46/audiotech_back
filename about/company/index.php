<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Компания");
?>
    <section class="about">
        <div class="_container">
            <h1 class="title-page">О нас</h1>
        </div>
        <div class="_container _container--mode">
            <div class="tabs__nav">
                <a class="tabs__btn active" href="/about/company">Компания</a>
                <a class="tabs__btn" href="/about/specialists">Специалисты</a>
                <a class="tabs__btn" href="/about/news">Новости</a>
                <a class="tabs__btn" href="/about/licenses">Лицензии</a>
            </div>
            <div class="tabs__content">
                <div class="tabs__pane show">
                    <div class="tabs__pane-wrap">
                        <h2 class="section-title">Центры слуха Audiotech</h2>
                        <p class="tabs__par tabs__par--container strong">Morbi et fermentum lorem. Praesent iaculis
                            sem eu mauris ultricies dictum. Pellentesque finibus, ante sed tincidunt feugiat, dui
                            sem malesuada sem, nec elementum libero lectus sagittis nunc. Morbi et fermentum lorem.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. </p>
                        <div class="about__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet volutpat sapien.
                                Sed eu ipsum a diam placerat vulputate. Maecenas laoreet ultrices nisi id sagittis.
                                Sed metus leo, tempor non semper eu, posuere vitae quam. Sed vitae sem lorem.
                                Aliquam vestibulum elementum purus et iaculis. Nunc at maximus magna. </p>
                            <p>Praesent iaculis sem eu mauris ultricies dictum. Pellentesque finibus, ante sed
                                tincidunt feugiat, dui sem malesuada sem, nec elementum libero lectus sagittis nunc.
                                Morbi et fermentum lorem. Pellentesque habitant morbi tristique senectus et netus et
                                malesuada fames ac turpis egestas. Quisque tempor feugiat velit nec elementum.</p>
                        </div>
                        <div class="about-cifrus">
                            <h2 class="section-title section-title--w">Мы в цифрах</h2>
                            <div class="about-cifrus__wrap">
                                <ul class="about-cifrus__list">
                                    <li class="about-cifrus__item"><span class="about-cifrus__number">3</span><span
                                                class="about-cifrus__label">центра слуха </span></li>
                                    <li class="about-cifrus__item"><span class="about-cifrus__number">12</span><span
                                                class="about-cifrus__label">тысяч покупателей ежегодно</span></li>
                                    <li class="about-cifrus__item"><span
                                                class="about-cifrus__number">200</span><span
                                                class="about-cifrus__label">моделей в ассортименте</span></li>
                                    <li class="about-cifrus__item"><span class="about-cifrus__number">15</span><span
                                                class="about-cifrus__label">лет на рынке</span></li>
                                </ul>
                                <div class="about-cifrus__video">
                                    <div class="play-video"><img src="/local/templates/audiotech/img/video-back.jpg"
                                                                 alt="">
                                        <button class="btn-play"></button>
                                    </div>
                                </div>
                                <div class="video-wrap">
                                    <iframe id="video" width="1024" height="768"
                                            src="https://www.youtube.com/embed/LvQossUx7ss?si=pH9KasmmTG0Q50Ew&amp;controls=0"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    <button class="video-wrap__close stop-video"></button>
                                </div>
                            </div>
                        </div>
                        <div class="map">
                            <h2 class="section-title map__title"><span>Представительства компании</span>
                                <div class="select-place">
                                    <select class="mySelect">
                                        <option value="Алма-Ата">Алма-Ата</option>
                                        <option value="Алма-Ата">Алма-Ата</option>
                                        <option value="Алма-Ата">Алма-Ата</option>
                                    </select>
                                </div>
                            </h2>
                            <div class="map-content map-content--about" id="map-about"></div>
                        </div>
                        <div class="offers about__offers">
                            <div class="offers__wrap">
                                <div class="offers__item"><img
                                            src="/local/templates/audiotech/img/offers/icon-headphones.svg" alt="">
                                    <div class="offers__name">Проверка слуха <br> онлайн</div>
                                    <p class="offers__text">Узнайте как хорошо вы слышите с помощью быстрого и
                                        простого онлайн теста</p>
                                    <button class="btn btn--red btn--m">Пройти тест на слух</button>
                                </div>
                                <div class="offers__item"><img
                                            src="/local/templates/audiotech/img/offers/icon-test.svg" alt="">
                                    <div class="offers__name">Бесплатная<br> диагностика слуха</div>
                                    <p class="offers__text">Посетите нашего специалиста в центре слуха и получите
                                        бесплатную консультацию</p><a class="btn btn--red btn--m"
                                                                      data-target="modal-reg">Записаться на
                                        приём</a>
                                </div>
                                <div class="offers__item"><img
                                            src="/local/templates/audiotech/img/offers/icon-phone.svg" alt="">
                                    <div class="offers__name">Дистанционная<br> поддержка</div>
                                    <p class="offers__text">Посетите нашего специалиста в центре слуха и получите
                                        бесплатную консультацию</p><a class="btn btn--red btn--m"
                                                                      data-target="modal-call">Заказать звонок</a>
                                </div>
                                <div class="offers__item"><img
                                            src="/local/templates/audiotech/img/offers/icon-accessories.svg" alt="">
                                    <div class="offers__name">Купить<br> аксессуары</div>
                                    <p class="offers__text">Закажите аксессуары к слуховым аппаратам онлайн в нашем
                                        интернет-магазине</p><a class="btn btn--red btn--m" href="catalog.html">Перейти
                                        в каталог</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs__pane">
                    <div class="tabs__pane-wrap">
                        <div class="about__doctors doctors">
                            <div class="doctors__item"><img class="doctors__pic" src="img/doc1.jpg" alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна1</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">
                                    Записаться на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic" src="img/doc1.jpg" alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна2</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">
                                    Записаться на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic" src="img/doc1.jpg" alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна3</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">
                                    Записаться на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic" src="img/doc1.jpg" alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна4</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">
                                    Записаться на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic" src="img/doc1.jpg" alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна5</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">
                                    Записаться на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic" src="img/doc1.jpg" alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна6</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">
                                    Записаться на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic" src="img/doc1.jpg" alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна7</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">
                                    Записаться на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic" src="img/doc1.jpg" alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна8</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">
                                    Записаться на приём
                                </button>
                            </div>
                        </div>
                        <div class="pagination">
                            <div class="pagination__list"><a class="pagination__prev" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 5L4 12M4 12L11 19M4 12H20" stroke="#131313" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a><a class="pagination__page active" href="">1</a><a class="pagination__page"
                                                                                       href="">2</a><a
                                        class="pagination__page" href="">...</a><a class="pagination__page"
                                                                                   href="">19</a><a
                                        class="pagination__next" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 5L20 12M20 12L13 19M20 12H4" stroke="#131313" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></div>
                            <button class="btn btn--grey btn--m">Показать ещё &nbsp;<span id="cur-page">15</span>&nbsp;из&nbsp;
                                <span id="total-pages">100</span></button>
                        </div>
                    </div>
                </div>
                <div class="tabs__pane">
                    <div class="tabs__pane-wrap">
                        <div class="chips">
                            <div class="chips__inner">
                                <button class="chips__item">Все</button>
                                <button class="chips__item">Забота о слухе и диагностика</button>
                                <button class="chips__item">Акции и скидки</button>
                            </div>
                        </div>
                        <div class="news">
                            <div class="subscribe">
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
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше </a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха 8 советов, чтобы лучше понять человека с потерей слуха 8 советов,
                                    чтобы лучше понять человека с потерей слуха 8 советов, чтобы лучше понять
                                    человека с потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение. который поможет лучше
                                    понять человека с потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.Чек-лист, который поможет
                                    лучше понять человека с потерей слуха и выстроить с ним доверительное
                                    общение.Чек-лист, который поможет лучше понять человека с потерей слуха и
                                    выстроить с ним доверительное общение.Чек-лист, который поможет лучше понять
                                    человека с потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                            <div class="article-preview"><a class="article-preview__pic" href=""><img
                                            src="/local/templates/audiotech/img/pictures/pic1.jpg" alt=""></a>
                                <div class="article-preview__date">25 фев 2023</div>
                                <a class="article-preview__name" href="">8 советов, чтобы лучше понять человека с
                                    потерей слуха</a>
                                <p class="article-preview__text">Чек-лист, который поможет лучше понять человека с
                                    потерей слуха и выстроить с ним доверительное общение.</p>
                            </div>
                        </div>
                        <div class="pagination">
                            <div class="pagination__list"><a class="pagination__prev" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 5L4 12M4 12L11 19M4 12H20" stroke="#131313" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a><a class="pagination__page active" href="">1</a><a class="pagination__page"
                                                                                       href="">2</a><a
                                        class="pagination__page" href="">...</a><a class="pagination__page"
                                                                                   href="">19</a><a
                                        class="pagination__next" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 5L20 12M20 12L13 19M20 12H4" stroke="#131313" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></div>
                            <button class="btn btn--grey btn--m">Показать ещё &nbsp;<span id="cur-page">15</span>&nbsp;из&nbsp;
                                <span id="total-pages">100</span></button>
                        </div>
                    </div>
                </div>
                <div class="tabs__pane">
                    <div class="tabs__pane-wrap">
                        <div class="licenses">
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                            <div class="licenses__item"><a class="licenses__link" href="img/license1.jpg"><img
                                            src="/local/templates/audiotech/img/license1.jpg" alt=""></a></div>
                        </div>
                        <div class="license-overlay">
                            <div class="license-overlay__wrap">
                                <button class="close-white close-white--l" id="close-license">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z"
                                              fill="#131313"/>
                                    </svg>
                                </button>
                                <img id="license-full" src="" alt="">
                            </div>
                        </div>
                        <div class="pagination">
                            <div class="pagination__list"><a class="pagination__prev" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 5L4 12M4 12L11 19M4 12H20" stroke="#131313" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a><a class="pagination__page active" href="">1</a><a class="pagination__page"
                                                                                       href="">2</a><a
                                        class="pagination__page" href="">...</a><a class="pagination__page"
                                                                                   href="">19</a><a
                                        class="pagination__next" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 5L20 12M20 12L13 19M20 12H4" stroke="#131313" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></div>
                            <button class="btn btn--grey btn--m">Показать ещё &nbsp;<span id="cur-page">15</span>&nbsp;из&nbsp;
                                <span id="total-pages">100</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>