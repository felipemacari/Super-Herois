<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Buscar Heróis</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<h1> Buscar Heróis</h1>

<nav>
  <a href="index.php">Início</a>
  <a href="cadastrar.php">Adicionar Herói</a>
  <a href="editar.php">Editar</a>
  <a href="excluir.php">Excluir</a>
  <a href="top3.php">Top 3 Heróis</a>
  <a href="buscar.php">Buscar</a>

</nav>
<hr>

<form method="GET" action="">
  <input type="text" name="termo" placeholder="Digite o nome ou superpoder" required>
  <input type="submit" value="Buscar">
</form>

<?php
if(isset($_GET['termo'])){
    $termo = $_GET['termo'];


    $sql = "SELECT * FROM herois WHERE nome LIKE '%$termo%' OR superpoder LIKE '%$termo%'";
    $result = $conexao->query($sql);

    if($result->num_rows > 0){
        echo "<h2>Resultados da busca para: <em>$termo</em></h2>";
        echo "<table>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Superpoder</th>
                  <th>Nível de Força</th>
                </tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['superpoder']}</td>
                    <td>{$row['nivel_forca']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum herói encontrado para: <strong>$termo</strong></p>";
    }
}
?>
</body>
</html>
