<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

require 'config.php';

// Получаем информацию о пользователе
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="index.php" class="logo">Bordo<span>Auth</span></a>
                <div class="nav-links">
                    <a href="dashboard.php">Личный кабинет</a>
                    <a href="logout.php">Выйти</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <div class="dashboard-header">
                <h1>Личный кабинет</h1>
                <form action="logout.php" method="post">
                    <button type="submit" class="btn" style="width: auto;">Выйти</button>
                </form>
            </div>
            
            <div class="user-info">
                <h2>Ваши данные</h2>
                <p><strong>Имя пользователя:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                <p><strong>Дата регистрации:</strong> <?php echo htmlspecialchars($user['created_at']); ?></p>
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
