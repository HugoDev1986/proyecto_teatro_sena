<?php

/*   Autor: victor sanchez
     curso:desarrollo web en php
     ficha:2351723
     Actividad 4 - Taller Uso de Formularios para transferencia
    */ 

function Escenario($lista){
    //Se crea la tabla y sus encabezados
echo "<table class='table table-bordered table-dark table-condensed table-hover' style='margin:auto;'>";
            echo "<tr>";
            echo "<th colspan='6'><h4><strong>ESCENARIO</strong></h4></th>";
            echo "<tr>";
            echo "<th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th> 
                <th>5</th>
                </tr>";
    
$i=1;
// Imprimimos el contenido de la tabla
foreach ($lista as $fila) {
       echo "<tr>";
       echo "<th>";
       echo $i;
       echo "</th>";
    foreach ($fila as $silla) {
        echo "<td>";
        echo "<strong><h2>$silla</h2></strong>";
        echo "</td>";
    }
        echo "</tr>";
        $i++;
    }
        echo "</table>";
}
?>
