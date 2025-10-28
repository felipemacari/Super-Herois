<?php include('conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title> Editar Herói</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<h1> Editar Herói</h1>
<nav>
  <a href="index.php">Início</a>
  <a href="cadastrar.php">Adicionar Herói</a>
  <a href="editar.php">Editar</a>
  <a href="excluir.php">Excluir</a>
  <a href="top3.php">Top 3 Heróis</a>
  <a href="buscar.php">Buscar</a>

</nav>
<hr>

<form method="POST" action="">
  <label>ID do Herói:</label><br>
  <input type="number" name="id" required><br><br>

  <label>Novo Nome:</label><br>
  <input type="text" name="nome"><br><br>

  <label>Novo Superpoder:</label><br>
  <input type="text" name="superpoder"><br><br>

  <label>Novo Nível de Força (1-100):</label><br>
  <input type="number" name="nivel_forca" min="1" max="100"><br><br>

  <input type="submit" value="Atualizar Herói ">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $superpoder = $_POST['superpoder'];
    $nivel_forca = $_POST['nivel_forca'];

    $sql = "UPDATE herois SET nome='$nome', superpoder='$superpoder', nivel_forca='$nivel_forca' WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        echo "<p style='color:#00ff99;'> Herói atualizado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro: " . $conexao->error . "</p>";
    }
}
?>
</body>
</html>
