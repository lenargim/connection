<?php include('partials/head.php'); ?>
<?php include('partials/header.php'); ?>

    <!--Buttons availability-->
<?php
$has_inst = true;
$has_playlist = true;
?>

    <main class="employee">
        <div class="container">
            <div class="breadcrumbs">
                <a href="/people.php">Люди</a>
                <a href="/employee.php">Волкова Руфина</a>
            </div>
            <div class="employee__top">
                <div>
                    <h3 class="subheader square mb20">ВОЛКОВА РУФИНА</h3>
                    <h3 class="subheader round mb20">HR</h3>
                    <div class="mobile-only mb20">
                        <img class="employee__img" src="/img/employee.jpg" alt="ВОЛКОВА РУФИНА">
                    </div>
                    <p class="body1">Я в «Связи»,
                        потому&nbsp;что это
                        важно&nbsp;и&nbsp;ценно
                        для&nbsp;настоящего
                        и&nbsp;будущего.</p>
                </div>
                <div class="mobile-hide">
                    <img class="employee__img" src="/img/employee.jpg" alt="ВОЛКОВА РУФИНА">
                </div>
            </div>
            <?php if ($has_inst && $has_playlist): ?>
                <div class="buttons">
                    <a href="#" class="button big" target="_blank">МОЙ ПЛЕЙЛИСТ</a>
                    <a href="#" class="button big" target="_blank">INSTAGRAM</a>
                </div>
            <?php elseif ($has_inst): ?>
                <a href="#" class="button big">INSTAGRAM</a>
            <?php endif; ?>
            <div class="employee__bottom">
                <h3 class="subheader square mb40">МЕСТА</h3>
                <p class="body1 mb40">Места Казани которые меня вдохновляют делать то, что я делаю в Связи.</p>
                <div class="employee__twin">
                    <div>
                        <h3 class="subheader round mb10">СКУРАТОВ НА ЩАПОВА</h3>
                        <p class="body3">Эти ребята каждый день делают настроение нашей команды лучше, знают всех по
                            именам
                            и вкусовым предпочтениям. Мы уже задумываемся делать второй офис за одним из столиков
                            кофейни.</p>
                    </div>
                    <div>
                        <h3 class="subheader round mb10">ДОМ УШАКОВОЙ</h3>
                        <p class="body3">Для меня это воплощение любви и роскошного убранства. Там продумано всё до
                            мелочей. Раньше, там находилась национальная библиотека Татарстана, сейчас же проводят
                            экскурсии и собираются делать гостиницу.</p>
                    </div>
                </div>
                <a href="/callback.php" class="button big mb120" target="_blank">СТАТЬ ЧАСТЬЮ КОМАНДЫ</a>
            </div>
        </div>
    </main>

<?php include('partials/footer.php'); ?>