<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="index.php" class="logo">Bordo<span>Auth</span></a>
                <div class="nav-links">
                    <a href="register.php">Регистрация</a>
                    <a href="login.php">Вход</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <div class="auth-container">
                <h1>Добро пожаловать</h1>
                <p style="text-align: center; margin-bottom: 20px;">Пожалуйста, зарегистрируйтесь или войдите в систему</p>
                <div style="display: flex; gap: 20px;">
                    <a href="register.php" class="btn" style="text-align: center;">Регистрация</a>
                    <a href="login.php" class="btn" style="text-align: center;">Вход</a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 BordoAuth. Все права защищены.</p>
        </div>
    </footer>
</body>
</html>
