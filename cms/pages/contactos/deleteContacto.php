
<?php

$id=$_GET['id'];
require('../../db/connect.php');
$pdo = pdo_connect_mysql();

# podemos utilizar diretamente o método ->query() uma vez que, ainda, não estamos a utilizar varíaveis na instrução SQL
$stmt = $pdo->prepare('SELECT * from contactos where id=:id');
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
    <title>Contacto</title>
</head>
<body>

<h3>Pretende apagar este registo dos contactos?</h3>

<form action="../../functions/contactos/deleteContactoDB.php" method="post">
<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id?>">   
    <div>
        <label id="nome" name="nome">Nome:<?php echo $dados['nome']?></label>
    </div>
    <div>
        <label id="descricao" name="descricao">Descrição:<?php echo $dados['descricao']?></label>
    </div>
    <div>
        <label id="link" name="link">Link:<?php echo $dados['link']?></label>
    </div>
   

    <div>
        <input type="submit" value="Confirmar">
    </div>
</form>
<a href="./contactos.php">Cancelar</a>









</body>
</html>

