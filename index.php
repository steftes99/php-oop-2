<?php

require_once 'User.php';
require_once 'PremiumUser.php';
require_once 'Product.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Prodotti</h1>
        <p><?php echo $iphone ->getInfo() ?></p>
        <p><?php echo $dyson->getInfo() ?></p>
    </div>

    <div>
        <h1>Utente</h1>
        <p><?php echo $pippo ->getInfo() ?></p>
    </div>

    <div>
        <h1>Sconto</h1>
        <p><?php echo $pippo ->getDiscount() ?></p>
    </div>
   
   
</body>
</html>