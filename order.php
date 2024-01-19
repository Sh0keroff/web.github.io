<?php
include_once("db_connection.php");
include_once("functions.php");

// Получение списка пьес для выпадающего списка
$plays = getPlays();

// Обработка формы при отправке
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $playId = $_POST["play"];
    $date = $_POST["date"];
    $quantity = $_POST["quantity"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Дополнительная обработка, если необходимо

    // Запись заказа в базу данных
    if (addOrder($playId, $date, $quantity, $name, $email)) {
        // JavaScript для отображения модального окна
        echo '<script>alert("Ваш заказ успешно оформлен!");</script>';
    } else {
        echo "Ошибка при оформлении заказа.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Билеты</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
<h1>Оформление заказа</h1>

<?php
// Перед включением файла order_form.php, убедитесь, что переменная $plays определена
if (isset($plays)) {
    include_once("order_form.php");
} else {
    echo "Ошибка: Переменная \$plays не определена.";
}
?>
    <footer>
        <p>&copy; 2024 Драматический театр. Все права защищены.</p>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
