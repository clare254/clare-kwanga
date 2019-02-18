<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/4/19
 * Time: 9:51 AM
 */
//This is an associative array
$magari = array("Daisy", "Twity", "Joy", "Stacy", "Alison", "Mwas");
echo $magari[5].",".$magari[4].",".$magari[3];
echo "<br>";
echo "my name is".$magari[0].","."my twin sister is called".",".$magari[3];
echo "<br>";
echo count ($magari);
$arrleng = count($magari);
echo "<br>";
for ($x = 0; $x < $arrleng; $x++){
    echo $magari[$x]."<br>";
}
?>