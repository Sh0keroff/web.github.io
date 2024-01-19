<?php
include_once("db_connection.php");
include_once("functions.php");

////$performances = getPerformances();
//
//foreach ($performances as $performance) {
//    echo "<p>Title: {$performance['title']}</p>";
//    echo "<p>Director: {$performance['director']}</p>";
//    echo "<p>Date: {$performance['date']}</p>";
//    echo "<p>Description: {$performance['description']}</p>";
//}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Драматический театр</title>
</head>
<body>

<header>
    <nav class="fixed-nav">
        <a href="index.php">Домой</a>
        <a href="plays.php">Пьесы</a>
        <a href="schedule.php">Расписание</a>
        <a href="order.php">Билеты</a>
        <a href="tickets_list.php">Списки</a>
    </nav>
</header>

<main>
    <section class="hero">
        <h1>Искусство на сцене</h1>
        <p>Добро пожаловать в Драматический театр. Откройте для себя мир театрального искусства и наслаждайтесь уникальными представлениями.</p>
        <a href="plays.php" class="cta-button">Расписание представлений</a>
    </section>

    <section class="about">
        <h2>О нас</h2>
        <p>Драматический театр является местом, где воплощаются идеи, эмоции и искусство. Наши представления оставят незабываемые впечатления у каждого зрителя.</p>
    </section>

    <section class="gallery">
        <h2>Галерея</h2>
        <img src="img/1.jpg" class="rounded float-left" alt="...">
        <img src="img/2.jpg" class="rounded float-right" alt="...">
    </section>
</main>
<div class="wrapper">
    <div class="content"></div>
<footer>
    <p>&copy; 2024 Драматический театр. Все права защищены.</p>
</footer>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
