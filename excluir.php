<?php include('conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title> Excluir Herói</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<h1> Excluir Herói</h1>
<nav>
  <a href="index.php"> Voltar à Central</a>
</nav>
<hr>

<form method="POST" action="">
  <label>ID do Herói para Excluir:</label><br>
  <input type="number" name="id" required><br><br>
  <input type="submit" value="Excluir Herói ">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "DELETE FROM herois WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        echo "<p style='color:#00ff99;'> Herói excluído com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro: " . $conexao->error . "</p>";
    }
}
?>
</body>
</html>
