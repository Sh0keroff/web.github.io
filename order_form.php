<!-- order_form.php -->
<?php
// Проверяем, определена ли переменная $plays
if (isset($plays)) {
    ?>
    <form method="post" action="">
        <label for="play">Выберите пьесу:</label>
        <select name="play" id="play" required>
            <?php foreach ($plays as $play): ?>
                <option value="<?= $play['id']; ?>"><?= $play['title']; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="date">Выберите дату:</label>
        <input type="date" name="date" id="date" required>

        <label for="quantity">Выберите количество билетов:</label>
        <input type="number" name="quantity" id="quantity" min="1" required>

        <label for="name">Ваше имя:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Ваши контактные данные (email):</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Оформить заказ</button>
    </form>
    <?php
} else {
    echo "Ошибка: Переменная \$plays не определена.";
}
?>
