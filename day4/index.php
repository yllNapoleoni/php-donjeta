<?php

    $dog=array(array("chiuaua","mexico",20), array("husky","siberia",15), array("bulldog","england",10));

    /*ho $dog[0][0]  . " origjina " . $dog[0][1] . " lifespan " . $dog[0][2] . "<br>"; 
    echo $dog[1][0]  . " origjina " . $dog[1][1] . " lifespan " . $dog[1][2] . ; 
    echo $dog[2][0]  . " origjina " . $dog[2][1] . " lifespan " . $dog[2][2]; */

    for($row=0; $row<3; $row++){
        echo "<p>row number $row </p>";
        echo"<ul>";

        for($col=0; $col<3; $col++){
            echo "<li>" .$dog[$row][$col]."</li>";
        };




        echo "</ul>";
    }

    for($i=0; $i<3; $i++){
        echo $i ."<br>";
        for($j=0;$j<3;$j++){
            echo $j ."elementi i $j mbrenda..";
        }
    }










?>