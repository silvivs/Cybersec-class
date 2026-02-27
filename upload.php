<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    // Se a pasta não existir, cria ela
    if (!file_exists($target_dir)) { mkdir($target_dir, 0777, true); }

    $target_file = $target_dir . basename($_FILES["cv"]["name"]);

    // VULNERABILIDADE: Nenhuma verificação de extensão!
    if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
        echo "<p style='color:green;'>Resume successfully submitted! Please wait for contact from Yarupi HR..</p>";
        echo "<p>File path: " . $target_file . "</p>";
    } else {
        echo "<p style='color:red;'>Error sending file.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Yaripo Careers</title>
    <style>
        body { background: #000; color: #ff0000; font-family: 'Courier New'; text-align: center; }
        .upload-area { border: 2px dashed #ff0000; padding: 30px; margin: 50px auto; width: 50%; }
    </style>
</head>
<body>
    <h1>YARIPO TALENT ACQUISITION</h1>
    <div class="upload-area">
        <p>Envie seu currículo para análise (Apenas PDF/DOCX)</p>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="Resume">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>