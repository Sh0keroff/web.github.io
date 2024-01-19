<?php
include_once("db_connection.php");

function getPlays() {
    global $conn;
    $sql = "SELECT * FROM plays";
    $result = $conn->query($sql);
    return ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : array();
}

function getTickets($performanceId) {
    global $conn;
    $sql = "SELECT * FROM tickets WHERE performance_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $performanceId);
    $stmt->execute();
    $result = $stmt->get_result();
    return ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : array();
}

function getSchedule() {
    global $conn;

    $sql = "SELECT title, date FROM plays";
    $result = $conn->query($sql);

    return ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : array();
}

// functions.php

function addOrder($playId, $date, $quantity, $name, $email) {
    global $conn;

    // Дополнительная обработка, если необходимо

    // Подготовленный запрос для вставки данных в таблицу orders
    $sql = "INSERT INTO orders (play_id, date, quantity, customer_name, customer_email) VALUES (?, ?, ?, ?, ?)";

    // Создаем подготовленное выражение
    $stmt = $conn->prepare($sql);

    // Привязываем параметры
    $stmt->bind_param("isiss", $playId, $date, $quantity, $name, $email);

    // Выполняем запрос
    $result = $stmt->execute();

    // Закрываем подготовленное выражение
    $stmt->close();

    // Возвращаем результат выполнения запроса
    return $result;
}


?>
