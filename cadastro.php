<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="styles2.css">
  <title>Ivonas Store</title>
</head>
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
  <form action="perfil.php" id="container">
    <fieldset id="field">
      <div id="titulo">
        <h1>CRIAR CONTA</h1>
      </div>
      <div id="conta">
        <label id="contatype">Tipo de conta</label>
        <div id="tipoConta">
            <input type="radio" name="tipopessoa" value="física" checked><label>Pessoa Física</label>
            <input type="radio" name="tipopessoa" value="juridica"><label>Pessoa Física</label>
        </div>
      </div>
      <div id="nome_cpf">
        <input type="text" name="nome" id="nome" placeholder="Nome completo">
        <input type="text" name="CPF" id="CPF" placeholder="CPF">
      </div>
      <div id="data_telefone">
        <input type="date" nome="nascimento" id="nascimento" placeholder="Data de nascimento">
        <input type="number" name="celular" id="celular" placeholder="Telefone celular">
      </div>
      <div id="emaildiv">
        <input type="email" name="email" id="email" placeholder="E-mail">
      </div>
      <div id="senha_confsenha">
        <input type="password" name="senha" id="senha" placeholder="Criar senha">
        <input type="password" name="confSenha" id="confSenha" placeholder="Confirmar senha">
      </div>
      <div id="politicas">
        <input type="checkbox" name="politicas"> Li e estou de acordo com as poíticas da empresa e políticas de privacidade
      </div>
      <div id="botao">
        <button class="btn btn-primary" type="button">Continuar</button>
      </div>
      
    </fieldset>
    
  </form>
</body>

<?php
include_once 'Includes/footer.php';
?>

</html>