<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Document</title>
</head>

<?php 
include_once 'Includes/db.php';
include_once 'Includes/header.php';
?>

<body>

    <?php
        $sql = "SELECT * FROM produtos";
        $resultado = mysqli_query($db,$sql);

        if($resultado){

            while($row = mysqli_fetch_array($resultado)){
                echo '
                <div id="bloco-produtos">
                    <img id="img-produtos" src="Images/' . $row['imagem'] . '">
                    <h3 id="nome-produtos">' . $row['nome'] . '</h3>
                </div>';
            }

        }
    ?>

</body>

</html>