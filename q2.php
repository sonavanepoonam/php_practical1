<?php

function calculateArea($length, $width)
{
    $area = $length * $width;
    return $area;
}


$length = 10;
$width = 5;

$result = calculateArea($length, $width);

echo "length =" . $length;

echo "Width =" . $width;
echo "Area of Rectangle = " . $result;

?>