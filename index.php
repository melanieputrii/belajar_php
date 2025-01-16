<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Document</title>
<head>
<body>
    <h1>
<?php

//konstanta
define ("gajipokok" , 5000000);
define ("bonus" , 500000);
define ("pajak" , 0.12);

// operator penghitungan 
$proyek = 2;
$total = gajipokok + (bonus * $proyek);
$gajibersih = $total - pajak;

echo " gaji pokok yang di peroleh sebesar Rp.5000.000 ";
echo "<br>" ;
echo " total pendapatan adalah sebesar " . $total ;
echo "<br>" ;
echo " gajibersih seluruh pendapatan adalah sebesar " . $gajibersih;



?/
   </h1>

 </body>
 </html>








