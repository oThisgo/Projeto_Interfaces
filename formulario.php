<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="styles2.css">
  <title>Cadastro</title>
</head>
<header>
  <svg style="display: inline-block; position: absolute; right: 4%; top: 18.5%; border-left: 1px solid #232323; padding-left: 53px" xmlns="http://www.w3.org/2000/svg" width="50" height="65" fill="#00930f" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </svg>
</header>
<hr id="rgb">
<body>
  <form id="container">
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

</html>