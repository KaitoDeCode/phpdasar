<?php
//Pertemuan 2 PHP dasar
// Syntx php dasar

//standar output
// echo,print
// print_r
// var_dump

// echo "Adi Kurniawan";
// print "Adi Kurniawan";

//Penulisan Sybtax php
// php dalam html
//2. html dalam php

//Variable dan tipe data
//variable
$nama = "Kurniawan";


//operator 
// Aritmatika
// +,-,&,%,/dfzfc    

    







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
    <h1>Halo <?=$nama?></h1>

    <?php
    for($i = 0;$i <10;$i++){
        ?>
        <p>Haloo</p><br>
        <?php
    }
    ?>

</body>
</html>