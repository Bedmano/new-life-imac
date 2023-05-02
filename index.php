<?php
/*
Template Name: Шаблон для страницы "Новая жизнь вашего iMac"
*/
get_header();
?>
<!-- здесь тело страницы -->


<main class="promo-main">

    <section class="promo-header">
        <div class="header-figure-right"></div>
        <div class="promo-container">
            <div class="header-figure-top"></div>
            <h1 class="main-title">НОВАЯ ЖИЗНЬ<br>
                <strong class="title-slogan">ВАШЕГО СТАРОГО<br>
                    <small>i</small><big>Mac</big></strong>
            </h1>
            <a href="#offer-programs" class="promo-link scroll-to-anchor" title="Заполнить форму обратной связи и подарить своему iMac новую жизнь">Хочу! &#10132;</a>
        </div>
    </section>

    <!-- Блок с мыслями  -->
    <section class="thoughts">
        <div class="thoughts-figure-left"></div>
        <div class="thoughts-figure-right"></div>
        <div class="thoughts-figure-right-2"></div>
        <div class="promo-container clouds">
            <div class="cloud cloud-1">
                <p class="cloud-text">Ваш аймак выглядит так же роскошно, как в первый день после
                    покупки — но
                    работать стал медленнее?</p>
            </div>
            <div class="cloud cloud-2">
                <p class="cloud-text">Пять вкладок в браузере еще ок, а шестую уже хочется открыть на
                    айфоне?</p>
            </div>
            <div class="cloud cloud-3">
                <p class="cloud-text">Еще год назад компьютер был бесшумным, а сейчас гудит
                    вентиляторами даже без
                    особой нагрузки?</p>
            </div>
            <div class="cloud cloud-4">
                <p class="cloud-text">После обновления на последнюю версию MacOS загрузка стала
                    занимать не одну
                    минуту, а все десять?</p>
            </div>
            <div class="cloud cloud-5">
                <p class="cloud-text">А, может быть, все ок — но хочется еще быстрее, мощнее и
                    бесшумнее?</p>
            </div>
            <img class="men" width="512" height="523" data-counter= "0" src="<?php echo get_stylesheet_directory_uri() ?>/img/tpl_mac-new-life/men_0.svg" alt="">

        </div> 
        <a href="#offer-programs" class="promo-link hidden scroll-to-anchor" title="Заполнить форму обратной связи и подарить своему iMac новую жизнь">Исправить!</a>
    </section>
    <!-- блок с программами апгрейда -->
    <section class="offer">
        <div class="promo-container">
            <h3 class="offer-title">Для вас мы подготовили три способа решить все эти проблемы<br>
                и наполнить ваш старый iMac новыми силами — </h3>
            <p class="offer-slogan">всего за один день!</p>
            <p class="offer-text">Привозите ваш iMac завтра утром — и уже вечером почувствуете себя за новым
                компьютером.</p>
            <div class="offer-program" id="offer-programs">
                <!-- Программа базовый  -->
                <div class="program">
                    <h3 class="program-title">Базовый</h3>
                   <img class="program-image" src="<?php echo get_stylesheet_directory_uri() ?>/img/tpl_mac-new-life/men_price_1.svg" alt="">
                    <ul class="program-stages">
                        <li>полностью разбираем аймак, снимаем дисплей, чистим все узлы и кулеры сжатым воздухом;
                        </li>
                        <li>меняем термопасту на процессоре;</li>
                        <li>переустанавливаем Mac OS (по согласованию с клиентом ставим любую версию);</li>
                        <li>устанавливаем необходимое ПО*;</li>
                    </ul>
                    <div class="program-transition">
                        <p class="program-subtitle">Что получаем:</p>
                        <button type="button" class="show-more">подробнее</button>
                    </div>
                    <div class="program-result has-mask">
                        <div>
                        <ul>
                            <li>процессор и видеочип больше не греются, вентиляторы работают бесшумно на минимальных
                                оборотах;</li>
                            <li>после полной переустановки ОС пропадают все ошибки, из-за которых
                                компьютер работал
                                медленно;</li>
                            <li>программы, оптимизированные для данной ОС и установленные "начисто"
                                работают быстро и
                                без сбоев.</li>
                        </ul>               
                        <div class="program-tip">
                            <p>* — установка программного
                                обеспечения, предоставляемого по платным лицензиям, возможна только при
                                наличии у пользователя такой лицензии.</p>
                        </div>
                        </div>

                    </div>
                    <a href="#section-feedback" class="scroll-to-anchor program-price" title="Заполнить форму обратной связи и подарить своему iMac новую жизнь">4 999 р</a>
                </div>
                <!-- Программа стандарт  -->
                <div class="program">
                    <h3 class="program-title">Стандарт</h3>
                    <img class="program-image" src="<?php echo get_stylesheet_directory_uri() ?>/img/tpl_mac-new-life/men_price_2.svg" alt="">
                    <ul class="program-stages">
                        <li>полностью разбираем аймак, снимаем дисплей, чистим все узлы и кулеры сжатым воздухом;
                        </li>
                        <li>меняем термопасту на процессоре;</li>
                        <li>переустанавливаем Mac OS (по согласованию с клиентом ставим любую версию);</li>
                        <li>устанавливаем необходимое ПО*;</li>
                        <li class="special">увеличиваем оперативную память с 8 до 16 Гб;</li>
                        <li class="special">заменяем штатный жесткий диск HDD на быстрый современный SSD объемом 240
                            Гб (либо FusionDrive 1120 Гб).</li>
                    </ul>
                    <div class="program-transition">
                        <p class="program-subtitle">Что получаем:</p>
                        <button type="button" class="show-more">подробнее</button>
                    </div>
                    <div class="program-result has-mask">
                    <div>
                    <ul>
                            <li>процессор и видеочип больше не греются, вентиляторы работают бесшумно на минимальных
                                оборотах;</li>
                            <li>после полной переустановки ОС пропадают все ошибки, из-за которых
                                компьютер работал
                                медленно;</li>
                            <li>программы, оптимизированные для данной ОС и установленные "начисто"
                                работают быстро и
                                без сбоев;</li>
                            <li>благодаря SSD-диску скорость загрузки ОС, запуска программ и
                                копирования файлов
                                увеличивается почти в 10 раз;</li>
                            <li>за счет увеличенного объема памяти программы работают намного
                                быстрее:
                                браузер больше не тормозит, когда открыто много вкладок, Word не "висит"
                                на многостраничных документах, а Excel справляется даже с очень
                                большими таблицами.</li>
                        </ul>
                        <div class="program-tip">
                            <p>* — установка программного
                                обеспечения, предоставляемого по платным лицензиям, возможна только при
                                наличии у пользователя такой лицензии.</p>
                       </div>
                    </div>

                    </div>


                    <a href="#section-feedback" class="scroll-to-anchor program-price" title="Заполнить форму обратной связи и подарить своему iMac новую жизнь">15 999 р</a>
                </div>
                <!-- Программа максимум  -->
                <div class="program">
                    <h3 class="program-title">Максимум</h3>
                    <img class="program-image" src="<?php echo get_stylesheet_directory_uri() ?>/img/tpl_mac-new-life/men_price_3.svg" alt="Программа максимум для обновления аймак в mac77">
                    <ul class="program-stages">
                        <li>полностью разбираем аймак, снимаем дисплей, чистим все узлы и кулеры сжатым воздухом;
                        </li>
                        <li>меняем термопасту на процессоре;</li>
                        <li>переустанавливаем Mac OS (по согласованию с клиентом ставим любую версию);</li>
                        <li>устанавливаем необходимое ПО*;</li>
                        <li class="special">увеличиваем оперативную память до 32 Гб**;</li>
                        <li class="special">заменяем штатный жесткий диск HDD на SSD объемом 1000 Гб (либо
                            FusionDrive 1240 Гб).</li>
                    </ul>
                    <div class="program-transition">
                        <p class="program-subtitle">Что получаем:</p>
                        <button type="button" class="show-more">подробнее</button>
                    </div>
                    <div class="program-result has-mask">
                        <div>
                        <ul>
                            <li>процессор и видеочип больше не греются, вентиляторы работают бесшумно на минимальных
                                оборотах;</li>
                            <li>после полной переустановки ОС пропадают все ошибки, из-за которых
                                компьютер работал
                                медленно;</li>
                            <li>программы, оптимизированные для данной ОС и установленные "начисто"
                                работают быстро и
                                без сбоев;</li>
                            <li>благодаря SSD-диску скорость загрузки ОС, запуска программ и
                                копирования файлов
                                увеличивается почти в 10 раз;</li>
                            <li>за счет увеличенного объема памяти программы работают намного
                                быстрее:
                                браузер больше не тормозит, когда открыто много вкладок, Word не "висит"
                                на многостраничных документах, а Excel справляется даже с очень
                                большими таблицами.</li>
                        </ul>

                        <div class="program-tip">
                            <p>* — установка программного
                                обеспечения, предоставляемого по платным лицензиям, возможна только при
                                наличии у пользователя такой лицензии.</p>
                            <p>** — увеличение ОЗУ до 32 Гб возможно во всех iMac 27", а также в iMac 21,5" с дисплеем
                                4K Retina</p>
                        </div>
                        </div>

                    </div>

                    <a href="#section-feedback" class="scroll-to-anchor program-price" title="Заполнить форму обратной связи и подарить своему iMac новую жизнь">29 999 р</a>
                </div>
            </div>
        </div>
    </section>

    <section class="questions">

        <div class="promo-container">
            <img class="questions-imac-image" src="<?php echo get_stylesheet_directory_uri() ?>/img/tpl_mac-new-life/iMac_change.png" alt="изображение аймака">
            <div class="questions-figure-right"></div>
            <div class="questions-figure-left"></div>
            <h3 class="questions-title">
                <strong>Вы хотите что-то изменить</strong><br>
                в любом из предложенных<br>
                вариантов?
            </h3>
            <p class="questions-text"><a href="tel:84951751477" aria-label="позвоните нам по номеру 84951751477">Позвоните</a>
                или <a href="mailto:info@mac77.ru?subject=Новая жизнь старого мака" aria-label="напишите нам на почту info@mac77.ru">напишите нам!</a><br>
                Вместе подберем оптимальную<br>
                конфигурацию и рассчитаем стоимость
            </p>
        </div>
    </section>

    <section class="feedback">
        <div class="feedback-rocket"></div>
        <div class="promo-container">
             <h2 id="section-feedback" class="feedback-slogan">Ускорить работу iMac<br>
            </h2>
            <p id="tarif-value-text"></p>
            <?php echo do_shortcode( '[contact-form-7 id="6922" title="Новая жизнь вашего iMac"]' ); ?>
        </div>
    </section>
</main>




<? get_footer(); ?>
<script>
    $(".feedback-phone input").mask("8-999-999-9999");
</script>