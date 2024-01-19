<?php
include_once("db_connection.php");
include_once("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пьесы</title>
    <link rel="stylesheet" href="style.css">
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
<h1>Список пьес</h1>

<table>
    <thead>
    <tr>
        <th>Название</th>
        <th>Режиссер</th>
        <th>Дата</th>
        <th>Описание</th>
    </tr>
    </thead>
    <tbody>
    <?php $plays = getPlays(); ?>
    <?php foreach ($plays as $play): ?>
        <tr>
            <td><?= $play['title']; ?></td>
            <td><?= $play['director']; ?></td>
            <td><?= $play['date']; ?></td>
            <td><?= $play['description']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</main>
<footer>
    <p>&copy; 2024 Драматический театр. Все права защищены.</p>
</footer>
</body>
</html>
