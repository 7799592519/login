<?php
$str = "hello World";//variable lo data store chesam
$arr = explode(" ",$str);//explode ane function dwara string ni array ga changr chesam hello world
$arr[1] = strrev($arr[1]);//hello dlrow
echo implode(" ",$arr);
echo "Testing Code";
echo "Retest";
echo "Latest Code";


?>