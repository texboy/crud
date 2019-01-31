<?php 
    
    include_once("connection.php");

    $select = mysqli_query($mysqli, "select * FROM user ORDER BY idUser DESC");
    
    ?>

<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8" />
    <title>listar</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>
<body>
    
    <table class = "table">
        <th>
            Nome:
        </th>
        <th>
            Telefone:
        </th>
        <th>
            Modificar:
        </th>
        

        <?php 
            //listando valores
           
            while ($users = mysqli_fetch_array($select)){
                
                echo "<tr>";
                echo "<td>".$users["name"]."</td>";
                echo "<td>".$users["tel"]."</td>";
                echo "<td> <a href='../html/editView.php?id=".$users["idUser"]."'>editar </a>";
                echo "<a href='del.php?id=".$users["idUser"]."'>deletar</a></td>";
                echo"</tr>";

            }
        ?>
    </table>
    <a href="../index.html"> Retornar ao inicio</a>
</body>
</html>