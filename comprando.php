<?php

require 'Cart.php';
require 'Product.php';

session_start();

$products = [
  1 => ['id' => 1, 'name' => 'Volante', 'price' => 40, 'quantity' => 1],
  2 => ['id' => 2, 'name' => 'Cacto', 'price' => 85, 'quantity' => 1],
  3 => ['id' => 3, 'name' => 'Mini Cozinha', 'price' => 200, 'quantity' => 1],
  4 => ['id' => 4, 'name' => 'Fazendinha Bita', 'price' => 175, 'quantity' => 1],
];


if (isset($_GET['id'])) {
  $id = strip_tags($_GET['id']);
  $productInfo = $products[$id];
  $product = new Product;
  $product->setId($productInfo['id']);
  $product->setName($productInfo['name']);
  $product->setPrice($productInfo['price']);
  $product->setQuantity($productInfo['quantity']);

  $cart = new Cart;
  $cart->add($product);
}

var_dump($_SESSION['cart'] ?? []);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smiling</title>

  <style>
    
    body {
    background-image: url('imagens/fundo.avif');
    background-size: cover;
    background-position: center;
  
      
    }
    
    .home{
      margin-top: 100px;
      
    }

    .bita{
      position: absolute;
      margin-top:-20px;
      margin-left:1000px;
    }
  
    .cozinha{
      position: absolute;
      margin-top:-20px;
      margin-left:800px;
    }
  
    .cacto{
      position: absolute;
      margin-top:-20px;
      margin-left:600px;
    }

    .volante{
      position: absolute;
      margin-top:-20px;
      margin-left:400;
    }

    .buying{
      margin-left: 680;
      margin-top:  50px;
      font-size:20px;
    }

    .home{
      margin-top:450px;
      margin-left:650;
      font-size:20px;
    }
    
    .title{
     position: absolute;
      margin-top:370px;
      margin-left: 700px;
      font-size: 30px
    }

    .header{
      display: flex;
        justify-content: space-around;
        padding-top: 1rem;
        align-items: center;
        text-align: center;
        width: 100%;
        top: 0;
        right: 0;
        z-index: 800;
        position: absolute;
        transition: all.35s ease;
        background-color:  rgb(46, 146, 44);
        box-shadow:         30px 20px 70px rgba(0, 0, 0, 0.33);
        padding: 1px 1%;
    }

    .produtos{
      position: absolute;
      margin-top:150px;
      
    }




  </style>

  
</head>

<body>

     <div class=header><header>
             </nav>
            <center>
            <a href="index.html"><img src="imagens/logo.png" width="400px"></a>
            </center> 
      </header></div>


      <div class=produtos>
         <div class="volante">
              <img src="imagens/Volante_Fom_Fom-removebg-preview.png" alt="volante" class="product-image">     
           </div>
    
  
         <div class="cacto">
            <img src="imagens/Cacto_Dançante-removebg-preview.png" alt="Cacto" class="product-image">
         </div>


         <div class="cozinha">
            <img src="imagens/MINI_COZINHA_INFANTIL_COMPLETA-removebg-preview.png" alt="Minicozinha" class="product-image">
        </div>

        <div class="bita">
          <img src="imagens/Fazendinha_Mundo_Bita-removebg-preview.png" alt=" Mundo Bita" class="product-image">
       </div>
    </div>
</body>

<body>

    <div class=title><a href="mycart.php">Ver compras</a></div>
  
    <div class=home>
      <ul>
        <li>Volante<a href="?id=1">Adicionar</a> R$ 40</li>
        <li>Cacto<a href="?id=2">Adicionar</a> R$ 85</li>
        <li>Mini Cozinha<a href="?id=3">Adicionar</a> R$ 200</li>
        <li>Fazendinha Bita<a href="?id=4">Adicionar</a> R$ 175</li>
      </ul>
      </div>
</div>
  
    </body>


</html>