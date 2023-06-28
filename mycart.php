<?php

require 'Product.php';
require 'Cart.php';

session_start();

$cart = new Cart;
$productsInCart = $cart->getCart();

var_dump($productsInCart);

if (isset($_GET['id'])) {
  $id = strip_tags($_GET['id']);
  $cart->remove($id);
  header('Location: mycart.php');
}

?>

<!DOCTYPE html>
<html lang="p-br">

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

    header{
        display: flex;
        justify-content: space-around;
        padding-top: 1rem;
        align-items: center;
        text-align: center;
        width: 100%;
        top: 0;
        right: 0;
        z-index: 800;
        position: fixed;
        transition: all.35s ease;
        background-color:  rgb(46, 146, 44);
        box-shadow:         30px 20px 70px rgba(0, 0, 0, 0.33);
        padding: 1px 1%;
    }

    .home{
      margin-top:300px;
      margin-left:630;
      font-size:20px;
    }
  
    .title{
     position: absolute;
      margin-top:200px;
      margin-left: 630px;
      font-size: 30px
    }

    .final{
      position: absolute;
      margin-top:30px;
      margin-left: -10px;
      font-size: 30px;
  
    }

  </style>
</head>

<body>

<header>
    </nav>
   <center>
       <a href="index.html"><img src="imagens/smlAGRvaiP.png" width="200px"></a>
   </center> 
</header>

<div class=title><a href="comprando.php">Voltar a página de compras</a></div>

  <div class=home>
    <ul>
      <?php if (count($productsInCart) <= 0) : ?>
        Nenhum produto no carrinho
      <?php endif; ?>

      <?php foreach ($productsInCart as $product) : ?>
        <li>
          <?php echo $product->getName(); ?>
        
          Preço: R$ <?php echo number_format($product->getPrice(), 2, ',', '.') ?>

          <div><a href="?id=<?php echo $product->getId(); ?>">remover</a></div>
        </li>
       
      <?php endforeach; ?>
      <li>Total: R$ <?php echo number_format($cart->getTotal(), 2, ',', '.'); ?></li>
      <div class=final>
        <a href="?id=<?php echo $product->getId(); ?>">Finalizar Compra</a>
      </div>
    </ul>
</div>

</body>

</html>