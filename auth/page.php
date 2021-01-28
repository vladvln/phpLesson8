<?php
session_start();
$login = $_SESSION['login'];

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница</title>
</head>
<body>
<nav>
    <?php if (isset($login)): ?>
        <a href="logout.php">Выйти</a>
    <?php else: ?>
        <a href="form.php">Войти</a>
    <?php endif; ?>
</nav>
<h2>Контент доступен всем пользователям</h2>
<div class="newArea">
</div>
    <?php if (isset($login)): ?>
        <form>
            <textarea name="text"></textarea>
            <input type="submit" value="Добавить">
        </form>
    <?php endif; ?>

<script src="js/ajax.js"></script>
</body>
</html>
