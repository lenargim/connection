<div class="header">
    <div class="container">
        <div class="header__wrap">
            <a href="/" class="header__logo"><?php echo file_get_contents("img/svg/logo.svg"); ?></a>
            <nav class="header__nav desktop">
                <li><a href="/" class="active">Главная</a></li>
                <li><a href="/products.php">ПРОДУКТЫ И РЕШЕНИЯ</a></li>
                <li><a href="/people.php">Люди</a></li>
                <li><a href="/vacancies.php">Вакансии</a></li>
                <li><a href="/contacts.php">Контакты</a></li>
            </nav>
            <div class="header__lang desktop">
                <input type="radio" name="lang" id="lang-ru" checked>
                <label for="lang-ru">ru</label>
                <input type="radio" name="lang" id="lang-en">
                <label for="lang-en">en</label>
                <input type="radio" name="lang" id="lang-ar">
                <label for="lang-ar">ar</label>
            </div>
            <div class="mobile mobile-header__top">
                <?php echo file_get_contents("img/svg/connection.svg"); ?>
                <div class="burger"><span></span></div>
            </div>
        </div>
        <div class="mobile-menu">
            <nav class="header__nav">
                <li><a href="/" class="active">Главная</a></li>
                <li><a href="/products.php">ПРОДУКТЫ И РЕШЕНИЯ</a></li>
                <li><a href="/people.php">Люди</a></li>
                <li><a href="/vacancies.php">Вакансии</a></li>
                <li><a href="/contacts.php">Контакты</a></li>
            </nav>
            <div class="header__lang">
                <input type="radio" name="lang-mobile" id="lang-ru-mobile" checked>
                <label for="lang-ru-mobile">ru</label>
                <input type="radio" name="lang-mobile" id="lang-en-mobile">
                <label for="lang-en-mobile">en</label>
                <input type="radio" name="lang-mobile" id="lang-ar-mobile">
                <label for="lang-ar-mobile">ar</label>
            </div>
            <a href="/download.php" class="mobile-menu__download">
                <img src="/img/logo-no-bg.png" alt="logo">
                <span>Скачать<br>приложение</span>
            </a>
        </div>
    </div>
</div>

<div class="preloader">
    <?php echo file_get_contents("img/svg/logo.svg"); ?>
</div>