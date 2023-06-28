<div class="tudo">
<?php
 include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM carrinho");
$resultado = $comando->execute();
while( $linhas = $comando->fetch() )
{

    $produto =  $linhas["Id_produto"];
    $codigo =  $linhas["login"];
    
    echo( "ID pedido: $produto Login: $codigo  <br>");

}
	
?></div>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pedidos2.css">
    <link rel="shortcut icon" href="imagens/icone-da-pagina.png" type="image/x-icon">
    <title>Smiling</title>
   

</head>
<body>
    
    <header>
    </nav>
   <center>
       <a href="pgadm.html"><img src="imagens/smlAGRvaiP.png" width="200px"></a>
   </center> 
   <h2 class=asks>Pedidos Solicitados</h2>
</header>



</body>
</html> 


