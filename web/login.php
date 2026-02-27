<?php
$host = 'database'; // Nome do serviço no docker-compose
$user = 'root';
$pass = 'root';
$db   = 'yaripo_corp';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // VULNERABILIDADE AQUI: Concatenação direta de strings na query SQL
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2 style='color:green;'>Access Granted! Welcome, Yaripo Agent!.</h2>";
        echo "<p>Flag: YARIPO{SQL_INJECTION_MASTER}</p>";
    } else {
        echo "<h2 style='color:red;'>Access denied. Attempt logged.</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Yaripo Corp - Internal Login</title>
    <style>
        body { background: #000; color: #ff0000; font-family: 'Courier New', Courier, monospace; text-align: center; }
        .login-box { border: 2px solid #ff0000; display: inline-block; padding: 20px; margin-top: 50px; }
        input { background: #111; color: #0f0; border: 1px solid #ff0000; margin: 5px; padding: 10px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h1>YARIPO LOGIN</h1>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Access System">
        </form>
    </div>
</body>
</html>