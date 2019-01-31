<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Inserir</title>
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

            $insert = mysqli_query($mysqli, "INSERT INTO user(name,tel) 
            VALUES('$name','$tel')");

            echo "<h1>Usuário '$name' inserido com sucesso!</h1>";  
        }
    ?>
    <a href="../index.html"> Retornar ao inicio</a>
</body>
</html>