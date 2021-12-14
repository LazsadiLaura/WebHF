Feladat1
<?php
$tomb= array (5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');

for($i=0; $i<count($tomb); ++$i){
 
    
    if(is_numeric($tomb[$i])==1){
        echo gettype($tomb[$i]). "<br>";
        echo "Igen"."<br>";
    }else{
        echo gettype($tomb[$i]). "<br>";
        echo "Nem"."<br>";
    }     

}

?>
Feladat2
<?php
$orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest","Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");

foreach($orszagok as $orszag => $varos){
    echo $orszag ."fovarosa".$varos."<br>";
}

?>

Feladat3
<?php
$napok = array(
    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);

foreach($napok as $kulcs => $ertek){
    echo $kulcs.": ";
    foreach($ertek as $betuk ){
        echo $betuk.",";
    }
    echo "<br>";
}

?>

Feladat4
<?php

$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');

function atalakitNagyba($tomb){
    foreach($szinek as $kulcs => $ertek){
       strtoupper($ertek);
    }
    foreach($szinek as $kulcs => $ertek){
        print $kulcs. " : ". $ertek."<br>";
     }
}

function atalakitKicsibe($tomb){
    foreach($szinek as $kulcs => $ertek){
       strtolower($ertek);
    }
    foreach($szinek as $kulcs => $ertek){
        print $kulcs. " : ". $ertek."<br>";
     }
}

?>