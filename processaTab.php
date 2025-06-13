<?php

$num = $_POST['num'];

echo " <h1>Tabuada " . $num . "</h1>";


for ($i=0; $i<= 10 ; $i++) { 
   echo $num . " x " . $i. " = " . ($i*$num) . "<br>";
     

}