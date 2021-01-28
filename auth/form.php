<?php
session_start();
$server = $_SERVER;

if (isset($_SESSION['login'])){
    header('Location: account.php');
}

if ($server['REQUEST_METHOD'] === 'POST'){
    $post = $_POST; //  login === qwerty | password === 123
    if (trim($post['login']) === 'qwerty' && trim($post['password']) === '123'){
        $_SESSION['login'] = $post['login'];
        header('Location: account.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма авторизации</title>
</head>
<body>
    <?php if(isset($error)): ?>
    <p><?php echo $error?></p>
    <?php endif; ?>
    <form action="form.php" method="post">
        <div>
            <label>
                Введите логин <input type="text" name="login">
            </label>
        </div>
        <div>
            <label>
                Введите пароль <input type="password" name="password">
            </label>
        </div>
        <input type="submit" value="Войти">
    </form>
</body>
</html>
