<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/4/19
 * Time: 10:50 AM
 */
//sorting arrays
//array sort functions include:
    //sort: sorting arrays in ascending
    // order
    //rsort:sorting arrays in ascending
     // order
     //asort:sorting associatives arrays
//in ascending order
     //to the value
//ksort:sorting associative arrays
     //in ascending order
    //to the KEY
//arsort:sorting associative arrays
   //in descending
   //to the VALUE
//asort:sorting associative arrays
     //in descending
    //to the KEY
$nambari = array(12,34,2,1,45,6,7,9,40,96,33);
sort($nambari);
$arrlength = count($nambari);
for ($x = 0; $x<$arrlength;$x++){
    echo $nambari[$x]."<br>";
}
?>