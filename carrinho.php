<!DOCTYPE html>
<html lang="pt-Br">
<?php
include_once 'Includes/head.php';
include_once 'Includes/db.php';
?>

<header>
    <svg style="cursor: pointer; display: inline-block; position: relative; left:3%;" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#00930f" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </svg>

    <a href="index.php">
      <img style="display: inline-block; margin-top: 20px; margin-left: 100px;" height=60% src="Images/LOGO.png">
    </a>

    <form method="get" action="pesquisa.php" id="barradepesquisa">
        <input type="text" name="search" id="busca"/>
        <svg style="cursor: pointer; display: inline-block; position: absolute; left: 85%; top: 10%; height: fit-content; width: fit-content; background-color: white; border-left: 1px solid grey; padding: 8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#00930f" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </form>

    <a href="favoritos.php">
        <svg style="display: inline-block; position: absolute; right: 20%; top: 35%; cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#00930f" class="bi bi-heart-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
        </svg>
    </a>

    <a id="carrinho" href="carrinho.php">
        <svg style="display: inline-block; position: absolute; right: 15%; top: 30%; cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00930f" class="bi bi-cart-fill" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
    </a>

    <a href="login.php">
        <svg style="display: inline-block; position: absolute; right: 4%; top: 18.5%; border-left: 1px solid #232323; padding-left: 53px; cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#00930f" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
    </a>
</header>

<body>
<h3 style="display: block; width: 90%; border-radius: 10px; padding-bottom: 5px; margin-left: auto; margin-right: auto; background-color: #00930f; color: white; padding: 10px; margin-top: 150px;" id="cart">
    <svg style="position: relative; top: 5px;"xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>CARRINHO
</h3>
<div style="display: block; width: 92%; height: fit-content; margin-left: auto; margin-right: auto;" id="bloco-carrinho">
    <div style="display: inline-block; padding-top: 5px; margin-top: 30px; padding-left: 5px; height: fit-content; width: 48%; margin-right: 50px; margin-left: auto; background-color: white; border-radius: 25px; padding-bottom: 30px; margin-bottom: 30px;" id="box">
        <fieldset style="border: 1px solid transparent;">
            <legend>
                <svg style="display: inline-block; margin-right: 10px; position:relative; top:6px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="CurrentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>Selecione o endereço
            </legend>
            <div style="display: block; float: left; width: fit-content; height: fit-content; background-color: gray; color: black; padding: 10px; font-weight: bold; margin-top: 20px; border-radius: 25px; border-left: 3px solid #00930f;">
                <p>Rua tal tal</p>
                <p>Número tal tal</p>
                <p>CEP 94010010 - POA RS</p>
            </div>
            <a style="display: block; color: #00930f; text-decoration: none; float: right; position: relative; top: 40px; right: 30px;" href="#">Editar</a>
            <br>
            <a style="display: block; color: #00930f; text-decoration: none; float: right; position: relative; top: 60px; right: 30px;" href="#">Novo endereço</a>
            <br>
            <a style="display: block; color: #00930f; text-decoration: none; float: right; position: relative; top: 80px; right: 30px;" href="#">Selecionar outro</a>
        </fieldset>
    </div>
    <div style="display: inline-block; float:right; padding-top: 5px; margin-top: 30px; padding-left: 5px; height: fit-content; width: 48%; margin-right: auto; margin-left: auto; background-color: white; border-radius: 25px; padding-bottom: 30px; margin-bottom: 30px;" id="box">
        <fieldset style="border: 1px solid transparent;">
            <legend>
            <svg style="display: inline-block; margin-right: 10px; position:relative; top:6px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>Frete
            </legend>
            <div>
                <input style="display: inline-block; margin-top: 10px; margin-bottom: 15px;" type="radio" name="frete" value="fedex" checked><label>FedEX - R$49.99</label>
                <br>
                <input style="display: inline-block; margin-top: 10px; margin-bottom: 15px;" type="radio" name="frete" value="Magazine Luiza"><label>Magazine Luiza - R$49.99</label>
                <br>
                <input style="display: inline-block; margin-top: 10px; margin-bottom: 15px;" type="radio" name="frete" value="sedex"><label>SEDEX - R$49.99</label>
                <br>
                <input style="display: inline-block; margin-top: 10px; margin-bottom: 15px;" type="radio" name="frete" value="tnt"><label>TNT - R$49.99</label>
                <br>
                <input style="display: inline-block; margin-top: 10px; margin-bottom: 15px;" type="radio" name="frete" value="correios"><label>Correios - R$49.99</label>
            </div>
        </fieldset>
    </div>
    <div style="display: block; padding-top: 5px; margin-top: 30px; padding-left: 5px; height: fit-content; width: 100%; margin-right: auto; margin-left: auto; background-color: white; border-radius: 25px; padding-bottom: 30px; margin-bottom: 30px;" id="box">
        <fieldset style="border: 1px solid transparent;">
            <legend>
            <svg style="display: inline-block; margin-right: 10px; position:relative; top:6px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>Frete
            </legend>
            <div>
                <input style="display: inline-block; margin-top: 10px; margin-bottom: 15px;" type="radio" name="frete" value="fedex" checked><label>FedEX - R$49.99</label>
                <br>
                <input style="display: inline-block; margin-top: 10px; margin-bottom: 15px;" type="radio" name="frete" value="Magazine Luiza"><label>Magazine Luiza - R$49.99</label>
                <br>
                <input style="display: inline-block; margin-top: 10px; margin-bottom: 15px;" type="radio" name="frete" value="sedex"><label>SEDEX - R$49.99</label>
                <br>
                <input style="display: inline-block; margin-top: 10px; margin-bottom: 15px;" type="radio" name="frete" value="tnt"><label>TNT - R$49.99</label>
                <br>
                <input style="display: inline-block; margin-top: 10px; margin-bottom: 15px;" type="radio" name="frete" value="correios"><label>Correios - R$49.99</label>
            </div>
        </fieldset>
    </div>
</div>

</body>

<?php
include_once 'Includes/footer.php';
?>

</html>