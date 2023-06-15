<?php include('partials/head.php'); ?>
<?php include('partials/header.php'); ?>

    <main>
        <div class="container">
            <h3 class="subheader mb20 square">СТАНЬ ЧАСТЬЮ КОМАНДЫ</h3>
            <div class="body3 mb40">
                Расскажите о себе,<br>
                мы свяжемся, чтобы назначить собеседование
            </div>

            <?php include('partials/form.php'); ?>

            <h3 class="subheader mb40 square">ИЩЕМ ПРЯМО СЕЙЧАС</h3>
            <ul class="list mb120">
                <a href="/vacancies-detailed.php" class="list__item body1">
                    <span>HEAD OF PR</span>
                    <?php echo file_get_contents("img/svg/list-arrow.svg"); ?>
                </a>
                <a href="/vacancies-detailed.php" class="list__item body1">
                    <span>HR МЕНЕДЖЕР</span>
                    <?php echo file_get_contents("img/svg/list-arrow.svg"); ?>
                </a>
                <a href="/vacancies-detailed.php" class="list__item body1">
                    <span>КОНТЕНТ МЕНЕДЖЕР</span>
                    <?php echo file_get_contents("img/svg/list-arrow.svg"); ?>
                </a>
                <a href="/vacancies-detailed.php" class="list__item body1">
                    <span>ГРАФИЧЕСКИЙ ДИЗАЙНЕР</span>
                    <?php echo file_get_contents("img/svg/list-arrow.svg"); ?>
                </a>
            </ul>
        </div>
    </main>

<?php include('partials/footer.php'); ?>