<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$vect = range(1,100000); 
$val = array_rand($vect);
$start = current($vect);
$end = end($vect);

function searchNumber($val,$vect,$start,$end){
    
    $half = $start+($end - $start)/2;

    if ($vect[$half] > $val){
        return searchNumber($val,$vect,$start,$half-1);
    }else if ($vect[$half] < $val){
        return searchNumber($val,$vect,$half+1,$end);
    }else if ($val == $vect[$half])
        return $vect[$half];
}

echo "El valor random es: ";
echo $val;
echo "<br>";
echo "El valor encontrado es: ";
echo searchNumber($val,$vect,$start,$end);

?>

</body>
</html>

