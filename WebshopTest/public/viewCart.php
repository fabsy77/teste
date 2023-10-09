<?php 

    include_once('../class/cart.php');
    include_once('../class/products.php');
    include_once('../class/products_in_cart.php');

    $class_cart = new Cart();
    $products_in_cart = $class_cart->getAllProducts($_SESSION['cartId']);

     $totalCart = 0;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
         <div>
        <ul>
            <?php foreach($products_in_cart as $product){ ?>
                <li>
                <?php 
                
                    $class_prod = new Products();
                    $class_prodInCart = new ProductsInCard();
                    $class_prod = $class_prod->get($product['product_id']);

                    $qttProduct  = $product['quantity']; 


                    $totalCart += ($class_prod[0]['price'] *  $qttProduct);

                    
                    $path = "../modules/image/"; 
                    $image =  $class_prod[0]['image'];
                    echo '<img src="' . $path . $image . '" style="width:200px;"><br>';
                ?>     
                    <img src="" alt="">
                    <p>Name: <?php echo $class_prod[0]['name'];?> </p><br>
                    <p>Quantity: <?php echo $qttProduct;?></p>
                    <p>Preis: <?php echo $class_prod[0]['price'];?> </p>

             
                    <?php
                    

                    ?>
                </li>

                <?php } ?>

            </ul>


    </div>
</body>
</html>
