<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php
        require('Header.html');
        function create_table($data,$border=1,$cellpadding=1,$cellspacing=4){
            echo"<table border= \"".$border."\"cellpadding=\"".$cellpadding."\" 
                cellspacing= \"".$cellspacing."\">";
            reset($data); //remember this points to the beggining of the var
            $value= current($data);
            while($value){
                echo"<tr><td>". $value."</td></tr>\n";
                $value = next($data);
            }
            echo "</table>";
        }
        
        ?>
