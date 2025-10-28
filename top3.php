<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Top 3 Heróis</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <h1> Top 3 Heróis Mais Fortes</h1>
<nav>
  <a href="index.php">Início</a>
  <a href="cadastrar.php">Adicionar Herói</a>
  <a href="editar.php">Editar</a>
  <a href="excluir.php">Excluir</a>
  <a href="top3.php">Top 3 Heróis</a>
  <a href="buscar.php">Buscar</a>

</nav>


<hr>

<?php
$sql = "SELECT * FROM herois ORDER BY nivel_forca DESC LIMIT 3";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Posição</th><th>Nome</th><th>Superpoder</th><th>Nível de Força</th></tr>";
    $pos = 1;
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>#$pos</td>
                <td>{$row['nome']}</td>
                <td>{$row['superpoder']}</td>
                <td>{$row['nivel_forca']}</td>
              </tr>";
        $pos++;
    }
    echo "</table>";
} else {
    echo "<p>Nenhum herói cadastrado.</p>";
}
?>
</body>
</html>
