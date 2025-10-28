<?php include('conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Excluir Herói</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<h1>Excluir Herói</h1>
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
  <label>ID do Herói para Excluir:</label><br>
  <input type="number" name="id" required><br><br>
  <input type="submit" name="excluir_um" value="Excluir Herói">
</form>

<hr>


<form method="POST" action="" onsubmit="return confirmarExclusao();">
  <input type="submit" name="excluir_todos" value=" Excluir Todos os Heróis" style="background-color:red; color:white;">
</form>

<script>
function confirmarExclusao() {
    return confirm("Tem certeza que deseja excluir TODOS os heróis? Esta ação não pode ser desfeita!");
}
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['excluir_um'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM herois WHERE id=$id";

        if ($conexao->query($sql) === TRUE) {
            echo "<p style='color:#00ff99;'>Herói excluído com sucesso!</p>";
        } else {
            echo "<p style='color:red;'>Erro ao excluir: " . $conexao->error . "</p>";
        }
    }


    if (isset($_POST['excluir_todos'])) {
        $sql = "DELETE FROM herois";

        if ($conexao->query($sql) === TRUE) {
            echo "<p style='color:#ff3333;'>Todos os heróis foram excluídos com sucesso!</p>";
        } else {
            echo "<p style='color:red;'>Erro ao excluir todos: " . $conexao->error . "</p>";
        }
    }
}
?>
</body>
</html>
