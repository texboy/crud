<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Deletar</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <?php 
        //Include do arquivo da conexão
        include_once("connection.php");

        //checando se o submit esta setado
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            

            $update = mysqli_query($mysqli, "DELETE FROM user WHERE idUser = ".$id);

            echo "<h1>Removido com sucesso!</h1>";  
        }
    ?>
    <a href="read.php"> Retornar a listagem</a>
</body>
</html>