<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Feladat1</p>
        <?php
        $napok=array("vasarnap","hetfo", "kedd", "szerda", "csutortok","pentek","szombat");
        $nap=$napok[date("w")];
        print "A mai nap datuma: ". date("Y. ").date("m. "). date("d. "). "Ma $nap van. ";
        ?>
        
        <p>Feladat2</p>
        <?php
        function osszead($szam1,$szam2){
            echo "Az eredmeny: ".($szam1+$szam2)."<br>";
        }
        function kivon($szam1,$szam2){
            echo "Az eredmeny: ".($szam1-$szam2)."<br>";
        }
        function szorzas($szam1,$szam2){
            echo "Az eredmeny: ".($szam1*$szam2)."<br>";
        }
        function osztas($szam1,$szam2){
            echo "Az eredmeny: ".($szam1/$szam2)."<br>";
        }
        echo osszead(5, 10);
        echo kivon(106, 78);
        echo szorzas(30, 6);
        echo osztas(100, 10);
        
        ?>
        <p>Feladat3</p>
        <?php
        function osztotabla($szam){
            for($szamlalo=1; $szamlalo<=10; $szamlalo++){
                echo " $szamlalo : $szam = ".($szamlalo/$szam)."<br>";
            }
        }
        osztotabla(1);
        
        ?>
        
        
        <p>Feladat4</p>
        <table border="2">
            <?php
            for($sor = 1; $sor <= 8; $sor++){
            echo "<tr>";
            for($oszlop = 1; $oszlop <= 8; $oszlop++){
               if(($sor + $oszlop) % 2 == 0){
                  echo "<td style='background-color:black ; height: 60px; width: 60px;'></td>";
               } else {
                  echo "<td></td>";
               }    
            }
         echo "</tr>";
         }
            ?>
        </table>
      
    </body>
</html>

