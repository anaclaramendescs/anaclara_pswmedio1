
 <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("topo.php");
 if( !empty($_POST['form_submit']) ) {
 obterDados($_POST);
 }

 ?>

 <!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>exemplo-post</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<form style="background-color::#c6b299;" class="form" method="post" action="mostraaluno.php">
 <h1> CADASTRO</h1>

<div class="box1">
 <p> NOME: <br> <input type="text" name="nome" id="b1" placeholder="Digite seu nome" required /> </p> <br>

 <p> CPF: <br> <input type="text" name="cpf" id="b1" placeholder ="Digite seu cpf" required /> </p>
 </div>

<div class="box2">
 <p> EMAIL: <br> <input type="email" name="email" id="b2" placeholder =" Digite seu email " required/> </p> <br>

 <p> TELEFONE PARA CONTATO:<br>
<input type="text" name= "telefone" id="b2" placeholder="Digite seu telefone" required /> </p>

 <p> ESTADO: <br>
    <select name ="estado" id="b2"> 
   <option value=""></option>
    <option value="AC">AC</option>
    <option value="AL">AL</option>
    <option value="AM">AM</option>
    <option value="AP">AP</option> 
    <option value="BA">BA</option> 
    <option value="CE">CE</option> </p> </select> 

    </div>

<div class="box3">
<p> DATA DE NASCIMENTO:<br>
        <input type="text" name="nascimento" id="b3" placeholder="XX/XX/XXXX" required> </p>

    <p> CEP:<br>
     <input type="text"  id="b3" name = "cep" placeholder= "Digite seu CEP"  required/> </p>

     <p> INSTITUIÇÃO:<br>
    <input type="text" placeholder="Instituição em que estudo"  id="b3" required  name= "instituição"/> </p>
    </div>

<div class="box4" id="b4">
 <input TYPE="hidden" NAME="form_submit" VALUE="OK">
 <br><br>
 <button type="submit" class="btn"> 
 <b>Obter Dados Post</b>
</button>
</div>

</form>
</div>

<?php
include_once ("rodape.php");
?>
</body>
</html>
