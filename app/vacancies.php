<?php include('partials/head.php'); ?>
<?php include('partials/header.php'); ?>

    <main class="mb120">
        <div class="container">
            <h3 class="subheader square mb40">ВАКАНСИИ</h3>
            <ul class="list">
                <a href="/vacancies-detailed.php" class="list__item body1">
                    <span>АНАЛИТИК</span>
                    <?php echo file_get_contents("img/svg/list-arrow.svg"); ?>
                </a>
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