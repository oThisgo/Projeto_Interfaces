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

    <div class="carousel">
        <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item">
                <img width=2150 height=600 src="https://i.pinimg.com/originals/e0/14/8b/e0148b1086ba9877d95ba4cbfd4a796b.jpg">
            </div>
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <img width=2150 height=600 src="https://www.e-retail.com/wp-content/uploads/2021/12/razer-banner.jpg">
            </div>
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <img width=2150 height=600 src="https://cdna.artstation.com/p/assets/images/images/053/685/658/large/john-lord-ralla-night-owl-razer-new-arrivals.jpg?1662778041">
            </div>
            <label for="carousel-3" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-1" class="carousel-control next control-3">›</label>
            <ol class="carousel-indicators">
                <li>
                    <label for="carousel-1" class="carousel-bullet">_</label>
                </li>
                <li>
                    <label for="carousel-2" class="carousel-bullet">_</label>
                </li>
                <li>
                    <label for="carousel-3" class="carousel-bullet">_</label>
                </li>
            </ol>
        </div>
    </div>

    <div id="blocos-produtos">
        
        <?php
            $sql = "SELECT * FROM secoes";
            $resultado = mysqli_query($db,$sql);

            if($resultado){

                while ($row = mysqli_fetch_array($resultado)) {
                    $secao = $row['secao'];
                    echo '
                    <h3 class="secao" id="'.$secao.'">'.$secao.'</h3>';

                    $sql1 = "SELECT * FROM produtos WHERE secao = '$secao'";
                    $resultado1 = mysqli_query($db,$sql1);

                    if($resultado1){

                        while($row1 = mysqli_fetch_array($resultado1)){
                            echo '
                            <div id="produtos">
                                <img id="img-produtos" src="Images/' . $row1['imagem'] . '">
                                <h3 id="nome-produtos">' . $row1['nome'] . '</h3>
                                <h3 id="preco-produtos">R$' . $row1['preco'] . '</h3>
                                <a id="comprar-home" href="produto.php">COMPRAR</h3>
                            </div>';
                        }
        
                    }
                }
            }
        ?>

    </div>

</body>

</html>