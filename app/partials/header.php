<div class="header">
    <div class="container">
        <div class="header__wrap">
            <a href="/" class="header__logo"><?php echo file_get_contents("img/svg/logo.svg"); ?></a>
            <nav class="header__nav">
                <li><a href="/" class="active">Главная</a></li>
                <li><a href="/products.php">ПРОДУКТЫ И РЕШЕНИЯ</a></li>
                <li><a href="/people.php">Люди</a></li>
                <li><a href="/vacancies.php">Вакансии</a></li>
                <li><a href="/contacts.php">Контакты</a></li>
            </nav>
            <div class="header__lang">
                <input type="radio" name="lang" id="lang-ru" checked>
                <label for="lang-ru">ru</label>
                <input type="radio" name="lang" id="lang-en">
                <label for="lang-en">en</label>
                <input type="radio" name="lang" id="lang-ar">
                <label for="lang-ar">ar</label>
            </div>
        </div>
    </div>
</div>

<div class="preloader">
    <?php echo file_get_contents("img/svg/logo.svg"); ?>
</div>