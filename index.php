<?php include('conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Central dos Heróis</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<h1>Central dos Super-Heróis</h1>

<nav>
  <a href="index.php">Início</a>
  <a href="cadastrar.php">Adicionar Herói</a>
  <a href="editar.php">Editar</a>
  <a href="excluir.php">Excluir</a>
  <a href="top3.php">Top 3 Heróis</a>
</nav>
<hr>

<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Superpoder</th>
    <th>Nível de Força</th>
  </tr>

<?php
$sql = "SELECT * FROM herois ORDER BY nivel_forca DESC";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nome"]."</td>";
        echo "<td>".$row["superpoder"]."</td>";
        echo "<td>".$row["nivel_forca"]."</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Nenhum herói cadastrado.</td></tr>";
}
?>
</table>
</body>
</html>
