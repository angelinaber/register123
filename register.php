<?php
require 'config.php';

$errors = [];
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ... (остальной PHP код остается таким же как в предыдущей версии)
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
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
                <h1>Регистрация</h1>
                
                <?php if (!empty($errors)): ?>
                    <div class="error-message">
                        <?php foreach ($errors as $error): ?>
                            <p><?php echo $error; ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($success): ?>
                    <div class="success-message">
                        <p><?php echo $success; ?></p>
                    </div>
                <?php else: ?>
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label for="username">Имя пользователя:</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Подтвердите пароль:</label>
                            <input type="password" id="confirm_password" name="confirm_password" required>
                        </div>
                        <button type="submit" class="btn">Зарегистрироваться</button>
                    </form>
                    
                    <div class="auth-links">
                        <p>Уже зарегистрированы? <a href="login.php">Войти</a></p>
                    </div>
                <?php endif; ?>
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
