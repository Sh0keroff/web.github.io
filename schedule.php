<?php
include_once("db_connection.php");
include_once("functions.php");

$schedule = getSchedule();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Расписание пьес</h1>
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
        <table>
        <thead>
        <tr>
            <th>Название</th>
            <th>Дата</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($schedule as $performance): ?>
            <tr>
                <td><?= $performance['title']; ?></td>
                <td><?= $performance['date']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </body>
</main>
<div class="wrapper">
    <div class="content"></div>
<footer>
    <p>&copy; 2024 Драматический театр. Все права защищены.</p>
</footer>
</div>
</body>
</html>
