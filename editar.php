<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesedit.css">
</head>
<body>
    
<form action="mostraaluno.php" method="post">

<div class="caixa">
<form action="mostraaluno.php" method="post">
<p class="text" > NOME: <br> <input class="configurar" type="text" name="nome" value="<?php echo $_POST ['nome']?>" /></p>
<p class="text"> CPF: <br> <input class="configurar" type="text" name="cpf" value="<?php echo $_POST ['cpf']?>"/></p>
<p class="text"> EMAIL: <br> <input class="configurar" type="email" name="email" value="<?php echo $_POST ['email']?>" required/></p>
<p class="text"> TELEFONE PARA CONTATO: <br> <input class="configurar" type="text" name="telefone" value="<?php echo $_POST ['telefone'];?>" /></p>
<p> ESTADO: <br>
    <select name ="estado" id="b2"> 
   <option value=""></option>
    <option value="AC">AC</option>
    <option value="AL">AL</option>
    <option value="AM">AM</option>
    <option value="AP">AP</option> 
    <option value="BA">BA</option> 
    <option value="CE">CE</option> </p> </select> 


<p class="text"> DATA DE NASCIMENTO: <br> <input class="configurar" type="text" name="nascimento" value="<?php echo $_POST ['nascimento']?>" /></p>
<p class="text"> CEP: <br> <input class="configurar" type="text" name="cep" value="<?php echo $_POST ['cep']?>" required/> </p>
<p class="text"> INSTITUIÇÃO: <br> <input class="configurar" type="text" name="instituição" value="<?php echo $_POST ['instituição']?>" /> </p>


<div class="botao">
        <button type="submit" class="btn">
            <b>EDITAR</b>
        </button>

</div>
</div>

</body>
</html>