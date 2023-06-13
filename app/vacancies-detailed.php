<?php include('partials/head.php'); ?>
<?php include('partials/header.php'); ?>

    <main>
        <div class="container">
            <div class="breadcrumbs">
                <a href="/vacancies.php">Вакансии</a>
                <a href="/vacancies-detailed.php">Аналитик</a>
            </div>
            <h3 class="subheader mb40 square">Аналитик</h3>
            <div class="list-text caption mb40">
                <div class="list-text__row">
                    <span>Локация</span><span>г. Казань</span>
                </div>
                <div class="list-text__row">
                    <span>Требуемый опыт</span><span>от 1 года в роли аналитика</span>
                </div>
            </div>
            <h3 class="subheader mb20 round">О ПРОЕКТЕ</h3>
            <div class="body1 mb40">
                Сейчас у нас есть уникальный в России сервис слежения за здоровьем для пациентов и врачей. Наш проект
                применяется в государственном здравоохранении, но строим мы сервис для людей, в духе стартапа, строго по
                Agile! В команду нам нужен человек, который помог бы нам с постановками для разработки, с
                документированием, а также с анализом метрических данных.
            </div>
            <h3 class="subheader mb20 round">ЧЕМ БУДЕШЬ ЗАНИМАТЬСЯ</h3>
            <div class="body3 mb52">
                <p>Писать постановки к задачам, проводить их техническое согласование с&nbsp;разработчиками и оформлять
                    в таск-трекере;</p>
                <p>Курировать свои задачи в течение спринта;</p>
                <p>Участвовать на встречах со стейкхолдерами;</p>
                <p>Работать с продуктовым дизайнером (поставить задачу на создание макетов, согласовать и принять
                    макеты);</p>
                <p>Проводить анализ в рамках проекта, работать с метриками;</p>
                <p>Обновлять базу знаний по продукту.</p>
            </div>
            <h3 class="subheader mb20 round">НАШИ ОЖИДАНИЯ</h3>
            <div class="body3 mb52">
                <p>Понимание процесса разработки и умение объяснить его на простых примерах;</p>
                <p>Понимание баз данных, понимание что такое SQL, запросы;</p>
                <p>Понимание что такое API, что такое запрос и ответ на запрос, что такое тело запроса, JSON, умение
                    привести примеры типов запросов;</p>
                <p>Базовое понимание и умение простыми словами объяснить: Agile, Scrum, Задача, История, планирование,
                    ретроспектива, Jira, Confluence, BitBucket, GIT;</p>
                <p>JS, Python, VueJS, React, Django, FastAPI – иметь общее представление, для&nbsp;чего это существует,
                    что выполняется на сервере, что на клиенте, что такое бэкенд и что такое фронтенд;</p>
                <p>Уметь работать с метрическими данными и проводить аналитику по метрикам.</p>
            </div>
            <h3 class="subheader mb20 round">БУДЕТ ПЛЮСОМ</h3>
            <div class="body3 mb52">
                <p>Понимание основ архитектуры информационных систем (отличия микросервисной архитектуры от монолитной,
                    SOA, ESB, event-streaming) и&nbsp;7-уровневой модели сетевых протоколов OSI</p>
                <p>Понимание азов ООП и навыки UML-моделирования для проектирования процессов и систем;</p>
                <p>Понимание протоколов и интерфейсов интеграции систем RESTful API, форматов данных (JSON, YML, XML,
                    XSD и пр.).</p>
            </div>
            <h3 class="subheader mb20 round">МЫ ПРЕДЛАГАЕМ</h3>
            <div class="body3 mb100">
                <p>Нормированный 5-дневный рабочий график, со всеми официальными праздниками и выходными.</p>
                <p>Частичное возмещение затрат на спорт, юридические консультации и&nbsp;психолога.</p>
                <p>Уютный и красивый офис в центре Казани.</p>
                <p>Возможность частичной дистанционной работы (все процессы налажены для удобства удаленщиков).</p>
                <p>Гибридный график после испытательного срока. На старте важно погрузиться в процессы и проекты, далее,
                    можно свободно выстраивать свой график на частичной удаленке. У нас есть очные совещания в офисе,
                    очные мероприятия и просто внутрикорпоративные ивенты. В остальном, мы отлично наладили удаленную
                    коммуникацию, и часть рабочей недели можно находиться там, где тебе комфортно.</p>
                <p>Красивый и комфортный офис в центре города с отличной транспортной развязкой и кучей заведений для
                    бизнес-ланча.</p>
                <p>Молодой гибкий коллектив, который всегда готов к внедрению более эффективных инструментов и
                    бизнес-процессов.</p>
                <p>Свободу творчества и профессиональной реализации.</p>
                <p>Частые клевые корпоративные активности. Есть идея, как классно отдохнуть с пользой или ради
                    удовольствия?) Предлагай! поддержим!)</p>
            </div>
            <h3 class="subheader mb40 square">ВАКАНСИЯ АНАЛИТИКА</h3>
            <form action="#" class="form mb100" autocomplete="off" name="vacancy">
                <div class="form__rows mb20">
                    <div class="form__row">
                        <input type="text" placeholder="ИМЯ*" name="name" class="required lang">
                        <div class="error">Введите имя на русском языке</div>
                    </div>
                    <div class="form__row">
                        <input type="text" placeholder="ТЕЛЕФОН*" class="tel required" name="phone">
                        <div class="error">Введите корректный номер телефона</div>
                    </div>
                    <div class="form__row">
                        <input type="text" placeholder="ПОЧТА*" name="email" class="required email">
                        <div class="error">Введите корректный email</div>
                    </div>
                    <div class="form__row">
                        <input type="text" placeholder="ССЫЛКА НА РЕЗЮМЕ*" name="link" class="required url">
                        <div class="error">Введите корректную ссылку</div>
                    </div>
                    <div class="form__row">
                        <textarea name="about" id="about" placeholder="РАССКАЖИТЕ О СЕБЕ"></textarea>
                    </div>
                </div>
                <div class="form__after mb52 body5">*поля обязательны для заполнения</div>
                <button class="button big" type="submit">ОТПРАВИТЬ</button>
            </form>
            <h3 class="subheader mb40 square">ТАКЖЕ ИЩЕМ ПРЯМО СЕЙЧАС</h3>
            <ul class="list mb120">
                <a href="/vacancies-detailed.php" class="list__item body1">
                    <span>HEAD OF PR</span>
                    <svg>
                        <use xlink:href="<?php echo $sprite; ?>#list-arrow"></use>
                    </svg>
                </a>
                <a href="/vacancies-detailed.php" class="list__item body1">
                    <span>HR МЕНЕДЖЕР</span>
                    <svg>
                        <use xlink:href="<?php echo $sprite; ?>#list-arrow"></use>
                    </svg>
                </a>
                <a href="/vacancies-detailed.php" class="list__item body1">
                    <span>КОНТЕНТ МЕНЕДЖЕР</span>
                    <svg>
                        <use xlink:href="<?php echo $sprite; ?>#list-arrow"></use>
                    </svg>
                </a>
                <a href="/vacancies-detailed.php" class="list__item body1">
                    <span>ГРАФИЧЕСКИЙ ДИЗАЙНЕР</span>
                    <svg>
                        <use xlink:href="<?php echo $sprite; ?>#list-arrow"></use>
                    </svg>
                </a>
            </ul>
        </div>
    </main>

<?php include('partials/footer.php'); ?>