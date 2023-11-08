<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Лицензии");
?>
    <section class="about">
        <div class="_container">
            <h1 class="title-page">О нас</h1>
        </div>
        <div class="_container _container--mode">
            <div class="tabs">
                <div class="tabs__nav">
                    <a class="tabs__btn" href="/about/company">Компания</a>
                    <a class="tabs__btn" href="/about/specialists">Специалисты</a>
                    <a class="tabs__btn" href="/about/news">Новости</a>
                    <a class="tabs__btn active" href="/about/licenses">Лицензии</a>
                </div>
                <div class="tabs__content">
                    <div class="tabs__pane show">
                        <div class="tabs__pane-wrap">
                            <div class="licenses">
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                                <div class="licenses__item"><a class="licenses__link" href="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg"><img src="<?php echo SITE_TEMPLATE_PATH;?>/img/license1.jpg" alt=""></a></div>
                            </div>
                            <div class="license-overlay">
                                <div class="license-overlay__wrap">
                                    <button class="close-white close-white--l" id="close-license"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z" fill="#131313"/></svg></button><img id="license-full" src="" alt="">
                                </div>
                            </div>
                            <div class="pagination">
                                <div class="pagination__list"> <a class="pagination__prev" href="">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 5L4 12M4 12L11 19M4 12H20" stroke="#131313" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a><a class="pagination__page active" href="">1</a><a class="pagination__page" href="">2</a><a class="pagination__page" href="">...</a><a class="pagination__page" href="">19</a><a class="pagination__next" href=""><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 5L20 12M20 12L13 19M20 12H4" stroke="#131313" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
                                <button class="btn btn--grey btn--m">Показать ещё &nbsp;<span id="cur-page">15</span>&nbsp;из&nbsp; <span id="total-pages">100</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>