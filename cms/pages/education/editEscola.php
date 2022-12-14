
<?php

$id=$_GET['id'];
require('../../db/connect.php');
$pdo = pdo_connect_mysql();

# podemos utilizar diretamente o método ->query() uma vez que, ainda, não estamos a utilizar varíaveis na instrução SQL
$stmt = $pdo->prepare('SELECT * from educacao where id=:id');
$stmt->bindParam(":id", $id, PDO::PARAM_STR);
$stmt->execute();

 # definir o fetch mode
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$dados=$stmt->fetch();



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Escola</title>
</head>
<body>

<form action="../../functions/education/editEscolaDB.php" method="post">
<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id?>">
<div>
    <label> Nome</label>
    <input type="text" id="nome" name="nome" value="<?php echo $dados['nome']?>">
</div>

<div>
    <label> Descrição</label>
    <input type="text" id="descricao" name="descricao" value="<?php echo $dados['descricao']?>">
</div>

<div>
    <input type="submit" value="Atualizar">
</div>

</form>







</body>
</html>