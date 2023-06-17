<?php include('partials/head.php'); ?>
<?php include('partials/header.php'); ?>
    <main class="main">
        <a href="/download.php" class="download-fixed">
            <img src="/img/logo-no-bg.png" alt="logo">
            <span>Скачать приложение</span>
        </a>
        <div class="container">
            <svg class="connection desktop">
                <use xlink:href="<?php echo $sprite_main; ?>#connection"></use>
            </svg>
            <div class="reverse mb100">
                <a href="#" class="button presentation" download>СКАЧАТЬ ПРЕЗЕНТАЦИЮ</a>
                <div class="video">
                    <video preload="none" poster="/img/video.jpg">
                        <source type="video/webm"
                                src="https://upload.wikimedia.org/wikipedia/commons/transcoded/5/54/Yawning_kitten.ogv/Yawning_kitten.ogv.480p.vp9.webm">
                    </video>
                    <div class="state">
                        <svg>
                            <use xlink:href="<?php echo $sprite_main; ?>#play"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mb100" id="mission">
                <h3 class="subheader square mb40">миссия</h3>
                <p class="body1">«Связь» сервис проактивного взаимодействия с пациентами. Мы создаем и развиваем
                    полезные для общества
                    IT-продукты. Наши сервисы упрощают взаимодействие с государственным здравоохранением и помогают
                    людям строить осознанные и бережные отношения со своим здоровьем.</p>
            </div>
            <div class="mb52">
                <h3 class="subheader square mb40">ПРИЛОЖЕНИЕ «СВЯЗЬ»</h3>
                <div class="app">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="app__item">
                                <img src="/img/app1.png" alt="">
                                <span class="caption">Медиа<br>о здоровье</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="app__item">
                                <img src="/img/app2.png" alt="">
                                <span class="caption">Отслеживание показателей здоровья</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="app__item">
                                <img src="/img/app3.png" alt="">
                                <span class="caption">Напоминания<br>о приеме лекарств</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="app__item">
                                <img src="/img/app4.png" alt="">
                                <span class="caption">Выписки<br>по итогам приемов </span>
                            </div>
                        </div>
                    </div>
                    <div class="app__pagination mobile"></div>
                </div>
            </div>
            <div class="download mb100 desktop">
                <img src="/img/qr.jpg" alt="Скачать приложение">
                <span class="body3">Скачать приложение</span>
            </div>
            <a href="#" class="button presentation mobile mb100" download>СКАЧАТЬ ПРЕЗЕНТАЦИЮ</a>
            <div class="mb100">
                <h3 class="subheader square mb40">ПРОДУКТЫ И РЕШЕНИЯ «СВЯЗИ»</h3>
                <p class="body3 mb40">Мы разрабатываем технологичные решения, которые трансформируют
                    устоявшиеся системы.</p>
                <?php include('partials/products-list.php'); ?>
            </div>
            <div class="mb52">
                <h3 class="subheader square mb40">КОМАНДА</h3>
                <p class="body3 mb40">«Связь» это в первую очередь люди.</p>
                <div class="team">
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team1.jpg" alt="Анастасия Антипова"></div>
                        <div class="team__name caption">Анастасия Антипова</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team2.jpg" alt="Вадим Шитов"></div>
                        <div class="team__name caption">Вадим Шитов</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team3.jpg" alt="Анастасия Бурдинская"></div>
                        <div class="team__name caption">Анастасия Бурдинская</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team4.jpg" alt="Саша Резанова"></div>
                        <div class="team__name caption">Саша Резанова</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team5.jpg" alt="Аяна"></div>
                        <div class="team__name caption">Аяна</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team6.jpg" alt="Ирина Бурмистрова"></div>
                        <div class="team__name caption">Ирина Бурмистрова</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team7.jpg" alt="София Ворошилова"></div>
                        <div class="team__name caption">София Ворошилова</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team8.jpg" alt="Реналь Сафиулин"></div>
                        <div class="team__name caption">Реналь Сафиулин</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team9.jpg" alt="Bogdan Abarikhin"></div>
                        <div class="team__name caption">Bogdan Abarikhin</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team10.jpg" alt="Ильяс Маннапов"></div>
                        <div class="team__name caption">Ильяс Маннапов</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team11.jpg" alt="Olga Makarova"></div>
                        <div class="team__name caption">Olga Makarova</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team12.jpg" alt="Лиля Хасанова"></div>
                        <div class="team__name caption">Лиля Хасанова</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team13.jpg" alt="Руфина Волкова"></div>
                        <div class="team__name caption">Руфина Волкова</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team14.jpg" alt="Рамиль Сафиуллин"></div>
                        <div class="team__name caption">Рамиль Сафиуллин</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team15.jpg" alt="Александра гаврилова"></div>
                        <div class="team__name caption">Александра гаврилова</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team16.jpg" alt="Юлия Хайбрахманова"></div>
                        <div class="team__name caption">Юлия Хайбрахманова</div>
                        <div class="team__position">Должность</div>
                    </a>
                </div>
            </div>
            <div class="mb52">
                <h3 class="subheader square mb40">АМБАССАДОРЫ</h3>
                <p class="body3 mb40">Амбассадоры «Связи» — это люди, которые создают социально-значимые проекты и
                    меняют Россию к лучшему. Они отражают наши ценности и популяризируют проект</p>
                <div class="team">
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team1.jpg" alt="Анастасия Антипова"></div>
                        <div class="team__name caption">Анастасия Антипова</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team2.jpg" alt="Вадим Шитов"></div>
                        <div class="team__name caption">Вадим Шитов</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team3.jpg" alt="Анастасия Бурдинская"></div>
                        <div class="team__name caption">Анастасия Бурдинская</div>
                        <div class="team__position">Должность</div>
                    </a>
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team4.jpg" alt="Саша Резанова"></div>
                        <div class="team__name caption">Саша Резанова</div>
                        <div class="team__position">Должность</div>
                    </a>
                </div>
            </div>
            <div class="mb52">
                <h3 class="subheader square mb40">ОСНОВАТЕЛЬ</h3>
                <div class="team">
                    <a href="/employee.php" class="team__item">
                        <div class="team__img mb20"><img src="/img/team/team1.jpg" alt="Анастасия Антипова"></div>
                        <div class="team__name caption">Анастасия Антипова</div>
                        <div class="team__position">Должность</div>
                    </a>
                </div>
            </div>
            <a href="/callback.php" class="button big mb100">СТАТЬ ЧАСТЬЮ КОМАНДЫ</a>
            <div class="mb100">
                <h3 class="subheader square mb40">ПАРТНЕРЫ</h3>
                <div class="partners">
                    <div class="partners__item">
                        <img src="/img/partners/partner1.png"
                             alt="Министерство промышленности и торговли Республики Татарстан" class="partners__img">
                        <span>Министерство<br>промышленности и торговли<br>Республики Татарстан</span>
                    </div>
                    <div class="partners__item">
                        <img src="/img/partners/partner2.png" alt="Агентство Стратегических Инициатив"
                             class="partners__img">
                        <span>Агентство<br>Стратегических Инициатив</span>
                    </div>
                    <div class="partners__item">
                        <img src="/img/partners/partner3.png"
                             alt="Министерство промышленности и торговли Республики Татарстан" class="partners__img">
                        <span>Министерство<br>Здравоохранения<br>Республики Татарстан</span>
                    </div>
                    <div class="partners__item no-text">
                        <img src="/img/partners/partner4.png" alt="Министерство Здравоохранения Республики Татарстан"
                             class="partners__img">
                    </div>
                </div>
            </div>
            <div class="mb100">
                <h3 class="subheader square mb40">О НАС ПИШУТ</h3>
                <div class="body1 mb40">Проект «Связь» отмечают<br>на самом высоком уровне</div>
                <div class="reviews">
                    <div class="reviews__item">
                        <div class="reviews__row">
                            <img src="/img/reviews/review1.png" alt="Президент России">
                            <span>Президент России</span>
                        </div>
                        <a href="#" class="reviews__link article" target="_blank">Заседание наблюдательного совета
                            Агентства
                            стратегических инициатив</a>
                    </div>
                    <div class="reviews__item">
                        <div class="reviews__row">
                            <img src="/img/reviews/review2.png" alt="Министерство Здравоохранения Республики Татарстан">
                            <span>Министерство<br>Здравоохранения<br>Республики Татарстан</span>
                        </div>
                        <a href="#" class="reviews__link article" target="_blank">Медицинский сервис<br>из Татарстана
                            попал в топ
                            инициатив форума «Сильные идеи для нового времени»</a>
                    </div>
                </div>
            </div>
            <div class="mb120">
                <h3 class="subheader square mb40">ДОСТИЖЕНИЯ</h3>
                <div class="archievements">
                    <div class="archievements__box square"><span class="body2">Топ-13 проектов форума «Сильные идеи для нового времени»</span>
                    </div>
                    <div class="archievements__box round"><span class="body2">Номинация «Начинание года 2021» на премии «Инде»</span>
                    </div>
                    <div class="archievements__box square"><span class="body2"> Номинация<br>«Digital-проекта&nbsp;года» в&nbsp;премии Enter</span>
                    </div>
                </div>
            </div>
            <div class="mb100">
                <?php include('partials/contacts.php'); ?>
            </div>
        </div>
    </main>

    <!--Slider only in main page-->

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>

<?php include('partials/footer.php'); ?>