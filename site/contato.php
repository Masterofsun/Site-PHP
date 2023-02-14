<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site PHP</title>
    <link rel="stylesheet" type="text/css" href="css/formato.css">
</head>
<body>
    <div id="geral">
    <div id="topo">
       <?php include "topo.php"; ?>
    </div>
    <div id="menu">
        <?php include"menu.php";?>
    </div>
    <divi id="conteudo">
        <br><br>
      <form action="luc_contato.php" method="POST">
        <label class="legenda">Nome:</label><br>
        <input type="text" name="nome" class="campos" placeholder="Preencha esse campo com seu nome" required><br>

        <label class="legenda">Email:</label><br>
        <input type="email" name="email" class="campos" placeholder="Digite seu e-mail aqui" required><br>

        <label class="legenda">Assunto:</label><br>
        <input type="text" name="assunto" class="campos" placeholder="Sobre o que deseja falar"required><br>

        <label class="legenda">Contato:</label><br>
        <textarea name="conteudo" class="campo2" placeholder="Digite em no maximo 140 carcteres" maxlength="140"></textarea><br>
        <input type="submit" value="Enviar" class="bt_enviar">
      </form>
    </divi>
    <div id="rodape">
        <?php include"rodape.php"; ?>    </div>
    </div><!-- fim da div geral-->
</body>
</html>