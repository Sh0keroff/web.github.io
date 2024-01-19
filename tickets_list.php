<?php
// Подключение к базе данных
include_once("db_connection.php");

// Функция для получения всех билетов из заказов
function getAllTickets() {
    global $conn;
    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);
    return ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : array();
}

// Получение всех билетов из заказов
$allTickets = getAllTickets();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Список билетов</title>
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
    <h1>Список билетов</h1>

    <?php foreach ($allTickets as $ticket): ?>
        <section class="ticket-details">
            <h2>Билет из заказа #<?= $ticket['id']; ?></h2>
            <ul>
                <li>Пьеса: #<?= $ticket['play_id']; ?></li>
                <li>Дата: <?= $ticket['date']; ?></li>
                <li>Количество: <?= $ticket['quantity']; ?></li>
                <li>Имя клиента: <?= $ticket['customer_name']; ?></li>
                <li>Email клиента: <?= $ticket['customer_email']; ?></li>
            </ul>
        </section>
    <?php endforeach; ?>

    <?php if (empty($allTickets)): ?>
        <p>Нет заказанных билетов.</p>
    <?php endif; ?>
</main>

<footer>
    <p>&copy; 2024 Dramatic Theatre. Все права защищены.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>