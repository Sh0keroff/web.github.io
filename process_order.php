<?php
include_once("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $playId = $_POST["play"];
    $date = $_POST["date"];
    $quantity = $_POST["quantity"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Дополнительная обработка, например, проверка доступности билетов

    if (addOrder($playId, $date, $quantity, $name, $email)) {
        echo "Заказ успешно оформлен!";
    } else {
        echo "Ошибка при оформлении заказа.";
    }
}

function addOrder($playId, $date, $quantity, $name, $email) {
    global $conn;

    $sql = "INSERT INTO orders (play_id, date, quantity, customer_name, customer_email) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isiss", $playId, $date, $quantity, $name, $email);

    return $stmt->execute();
}
?>
