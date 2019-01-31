<?php 
    
    include_once("../php/connection.php");

    $userId = $_GET["id"];
    $select = mysqli_query($mysqli, "select * FROM user WHERE idUser = ".$userId);
    
    ?>

<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8" />
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>
<body>    
        <?php 
            //adicionando valores a varial users
            $users = mysqli_fetch_array($select);
        ?>

        <h1>Editar</h1>

        <form action="../php/edit.php" method="POST" name="formEdit">

            <table class="table center">

                
                    <td><input type ="text" hidden value ="<?php echo $users["idUser"]?>" name = "id" required></td>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text"  value ="<?php echo $users["name"]?>" name = "name" required></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" value ="<?php echo $users["tel"]?>" name = "tel" required></td>
                </tr>

            </table>
            <input type="submit" name ="submit" class= "btn btn-primary"text ="editar">
            </table>

        </form>


    <a href="../index.html"> Retornar ao inicio</a>
</body>
</html>