<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de componentes - php com mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    
<div class="container">
    <h4 class="text-center text-white bg-dark">pesquisa de componentes - php com mysql</h4>

    <section>
            <p class="text-center"><img src="imagens/PHP-logo.svg.png" alt="cadastro com php/mysql"></p>
    </section>

    <?php
    require "conexao";
    $sql="SELECT * FROM tbcomponente ORDER BY componente";
    $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    echo "<table border='1' width='600'>";
    echo "<tr>";
    echo "<th>codigo</th>";
    echo "<th>componentes</th>";
    echo "<th>cursos</th>";
    echo "<th>editar</th>";
    echo "</tr>";

    while($linha=mysqli_fetch_array($resultado))
    {
        $codigo = $linha["codigo"];
        $curso = $linha["curso"];
        $componente = $linha["componente"];
    }
    echo "</table>"
    ?>
</div>

</body>

</html>