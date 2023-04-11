<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra aluno</title>
    <link rel="stylesheet" href="stylesmostra.css">
</head>
<body>
    <H1>ALUNO</H1>

    <div class="tabela">
<table>
<tr>
     <th>NOME: </th> 
<td> 
    <?php echo $_POST ['nome']; ?>
</td>  
 </tr>
 <tr>
    <th> CPF: </th>
<td>
     <?php  echo $_POST ['cpf'];?>
</td>
</tr>
<tr> <th>EMAIL</th>
<td>  <?php echo $_POST ['email']; ?></td>
</tr>
<tr> 
    <th>TELEFONE PARA CONTATO: </th>

<td><?php echo $_POST ['telefone'];?></td>
</tr>

<tr> 
    <th>ESTADO: </th>

<td><?php echo $_POST ['estado'];?></td>
</tr>
<tr> 
    <th>DATA DE NASCIMENTO: </th>

<td><?php echo $_POST ['nascimento'];?></td>
</tr> 
<tr> 
    <th>CEP: </th>

<td><?php echo $_POST ['cep'];?></td>
</tr> 
<tr> 
    <th>INSTITUIÇÃO: </th>

<td><?php echo $_POST ['instituição'];?></td>
</tr> 

</div>
</table>


<form action="editar.php" method="post">
<input type="hidden" name="nome" value="    <?php echo $_POST ['nome']; ?>">
<input type="hidden" name="telefone" value=" <?php  echo $_POST ['cpf'];?>">
<input type="hidden" name="cpf"   value="<?php  echo $_POST ['cpf'];?>" >
<input type="hidden" name="email" value="<?php  echo $_POST ['email'];?>">
<input type="hidden" name="nascimento" value="<?php  echo $_POST ['nascimento'];?>">
<input type="hidden" name="cep"value="<?php  echo $_POST ['cep'];?>">
<input type="hidden" name="instituição" value="<?php  echo $_POST ['instituição'];?>">

<div class="botao">
    <button type="submit" class="botao">
        <b>Editar</b>
        <br>
    </button>
    </div>
 
</form>

</body>
</html>