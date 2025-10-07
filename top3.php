<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Top 3 Heróis</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
  <a href="index.php"> Voltar à Central</a>
</nav>

<h1> Top 3 Heróis Mais Fortes</h1>
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
