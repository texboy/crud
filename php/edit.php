<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <?php 
        //Include do arquivo da conexão
        include_once("connection.php");

        //checando se o submit esta setado
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $tel = $_POST['tel'];
            $id = $_POST['id'];
            

            $update = mysqli_query($mysqli, "UPDATE user SET name = '".$name."', tel = '".$tel."' WHERE idUser = ".$id);

            echo "<h1>Usuário '$name' modificado com sucesso!</h1>";  
        }
    ?>
    <a href="../index.html"> Retornar ao inicio</a>
</body>
</html>