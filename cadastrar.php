<?php include('conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title> Cadastrar Herói</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<h1> Adicionar Novo Herói</h1>
<nav>
  <a href="index.php"> Voltar à Central</a>
</nav>
<hr>

<form method="POST" action="">
  <label>Nome:</label><br>
  <input type="text" name="nome" required><br><br>

  <label>Superpoder:</label><br>
  <input type="text" name="superpoder" required><br><br>

  <label>Nível de Força (1-100):</label><br>
  <input type="number" name="nivel_forca" min="1" max="100" required><br><br>

  <input type="submit" value="Cadastrar Herói ">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $superpoder = $_POST['superpoder'];
    $nivel_forca = $_POST['nivel_forca'];

    $sql = "INSERT INTO herois (nome, superpoder, nivel_forca) VALUES ('$nome', '$superpoder', '$nivel_forca')";

    if ($conexao->query($sql) === TRUE) {
        echo "<p style='color:#00ff99;'> Herói cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro: " . $conexao->error . "</p>";
    }
}
?>
</body>
</html>
