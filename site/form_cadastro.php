<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <link rel="stylesheet" type="text/css" href="css/formato.css">
</head>
<body>
  <div id="box_form">
    <h1 class="titulos" style="margin-left:10%">Cadastre-se</h1>
  <form action="cadastrar.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="nome" class="campos_cad" placeholder="Nome">
    <input type="email" name="email" class="campos_cad" placeholder="E-mail">
    <input type="password" name="senha" class="campos_cad" placeholder="Senha">
    <input type="password" name="repetesenha" class="campos_cad" placeholder="Confirmar Senha">
    <input type="text" name="lembrete" class="campos_cad" placeholder="Lembrete">
    <input type="file" name="foto" class="campos_cad">
    <div id="botoes">
    <input type="submit" value="Cadastrar" class="bt_cad">
    <input type="reset" value="Limpar" class="bt_cad">
    </div>
  </form>  
  <div class="botoes">
  <a href="index.php" class="form_link">&larr;Voltar para a página principal</a>
  <p class="p_form">Ja possui cadastro? Enatao clice no link abaixo para login</p>
  <a href="login.php" class="form_link">Logar</a>
  </div>
  </div>
</body>
</html>