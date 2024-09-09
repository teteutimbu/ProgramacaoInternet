<?php
    // Inicia a sessão para contar as visitas
    session_start();

    // Verifica se já existe uma contagem de visitas, se não, inicia com 1
    if (!isset($_SESSION['visits'])) {
        $_SESSION['visits'] = 1;
    } else {
        $_SESSION['visits']++;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, World!</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>Você visitou esta página <?php echo $_SESSION['visits']; ?> vez(es).</p>
</body>
</html>