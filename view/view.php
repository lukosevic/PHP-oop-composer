<?php
use XDE\Properties;
use XDE\Cars;
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
    <?php
    $carOne = new Cars ("Audi", "A4 B5", "1.9 TDI", "4 AG", "280km/h", '1200 KG');
    $carOne->changePrice("300$");
    $carOne->changeSeats("6 Seats");
    $carOne->changeDescription("kėbulas sveikas");
    $carOne->generateCar($carOne->getProperties());
    ?>
</body>
</html>