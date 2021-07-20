<?php

/*   Autor: victor sanchez
     curso:desarrolo web en php
     ficha:2351723
     Actividad 4 - Taller Uso de Formularios para transferencia
      
 */
function Accion($fila,$puesto,$accion,$lista){
        /*Se evalua la opción del usuario dependiendo de lo contenido en el Array
        Si el puesto elegido por el usuario esta libre se modifica el Array con la acción elegida */
        if($lista[$fila-1][$puesto-1]=="L")
        {
            $lista[$fila-1][$puesto-1]=$accion;
        }
        //Si el puesto elegido por el usuario esta vendido se muestra una alerta con notificando en cada caso lo sucedido
        else if($lista[$fila-1][$puesto-1]=="V" )
        {
            echo "<script> alert('La silla ya está vendida";

            if($accion=="L"){echo ", No se puede liberar!";}
            else if($accion=="R"){echo ", No se puede Reservar!";}
            else if($accion=="V"){echo ", No se puede volver a Vender!";}
            echo"')";
            echo "</script>'";
        }

        //Si la silla elegida está reservada y la opción es reservar se muestra una alerta "la Silla ya se encuentra Reservada".

        else if($lista[$fila-1][$puesto-1]=="R" && $accion=="R")
        {
            echo "<script>
            alert('La Silla ya se encuentra Reservada');
            </script>'";
        }
       
        //Si el puesto esta reservado y la accion es diferente a reservar se modifica el array con la accion elegida por el usuario
        else if($lista[$fila-1][$puesto-1]=="R" && $accion!="R")
        {
            $lista[$fila-1][$puesto-1]=$accion; 
        }
        //Se retorna el Array modificado
        return $lista;
}
?>

