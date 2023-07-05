<!DOCTYPE html>
<html lang="pt-Br">
<?php
include_once 'Includes/head.php';
?>
<header>
    <svg style="cursor: pointer; display: inline-block; position: absolute; left:3%; top: 20%;" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#00930f" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </svg>

    <a href="index.php">
      <img style="display: inline-block; margin-top: 20px; margin-left: 150px;" height=60% src="Images/LOGO.png">
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
<div style="display: block; padding-top: 30px; margin-top: 100px; padding-left: 50px; height: fit-content; width: 95%; margin-right: auto; margin-left: auto; background-color: white; border-radius: 25px; padding-bottom: 30px; margin-bottom: 30px;" id="box">
    <fieldset style="border-radius: 10px; color: grey; display:block; height: fit-content; width: 90%; margin-left:50px; margin-right: auto;" id="meusdados">
        <legend>
            <svg style="display: inline-block; margin-right: 10px; position:relative; top:6px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#00930f" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>MEUS DADOS
        </legend>
        <img style="display: inline-block; border-radius: 50%; margin: 10px;" height="8%" width="8%"src="Images/fatraccoon.jpg">
        <h3 style="display: inline-block; position: relative; top: -90px; margin-left: 20px;">A FAT RACCOON
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#00930f" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
            </svg>
        </h3>
        <a style="display: inline-block; position: relative; left: -180px; top: -60px; color: black;" href="#">justafatraccoon@gmail.com</a>
        <a style="display: block; color:#00930f; margin-left: 10px; margin-top: -20px; font-size: 16px; text-decoration: none;" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
            </svg>
            Mudar foto
        </a>
        <div style="display: inline-block;  margin-top: -130px; margin-right: 70px; float: right; width: fit-content; height: fit-content; padding-left: 80px; text-align: center; border-left: 2px solid grey;">
            <p>Crédito disponível</p>
            <h1 style="color: #00930f;">R$ 0,00</h1>
        </div>
    </fieldset>

        <fieldset style="margin-top: 20px; float: left; border-radius: 10px; color: grey; display:inline-block; height: 500px; width: 42%; margin-left:50px; margin-right: auto;" id="meusdados">
            <legend>
                <svg style="display: inline-block; margin-right: 10px; position:relative; top:6px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                    <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
                </svg>INFO. BÁSICAS
            </legend>
            <fieldset style="border-radius: 10px;">
                <legend>Nome Completo</legend>
                <p>Fat Raccoon</p>
            </fieldset>
            <fieldset style="border-radius: 10px;">
                <legend>Telefone Celular</legend>
                <p>(99)99999-9999</p>
            </fieldset>
            <fieldset style="border-radius: 10px;">
                <legend>E-mail</legend>
                <p>justafatraccoon@gmail.com</p>
            </fieldset>
            <fieldset style="border-radius: 10px;">
                <legend>CPF</legend>
                <p>999.999.999-99</p>
            </fieldset>
        </fieldset>

        <fieldset style="margin-top: 20px; border-radius: 10px; color: grey; display: inline-block; height: 500px; width: 42%; margin-left:50px; margin-right: auto;" id="meusdados">
            <legend>
                <svg style="display: inline-block; margin-right: 10px; position:relative; top:6px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="CurrentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>ENDEREÇO
            </legend>
            <div style="display: block; padding-left: 30px; margin-left: 20px; margin-top: 30px; border-left: 3px solid #00930f">
                <h5 style="font-size: 20px;"><b>Endereço principal</b></h5>
                <p>Rua Coronel Genuíno</p>
                <p>Número: 130</p>
                <p>CEP 90010-350 - POA, RS</p>
            </div>
        </fieldset>
</div>
<script src="animation.js"></script>
</body>
<?php
include_once 'Includes/footer.php';
?>
</html>

