<!-- Autor: victor sanchez
     curso:desarrollo web en php
     ficha:2351723
     Actividad 4 - Taller Uso de Formularios para transferencia
      --> 

<!DOCTYPE html>
<html>
<head>
    <title>Teatro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <!--
         Mediante las clases de bootstrap aplicamos los estilos css
          -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
    
<body style="background-color: #34495E ;" >

    <div class="container text-center">
    <br><br><br>
        <h3><b>COMPRA Y RESERVA DE SILLAS PARA EL TEATRO</b></h3>
        <hr>
        <br>
<?php

//Se requieren las funciones para imprimir el escenario y para enviar las acciones del usuario
require("sala.php");
require("accion.php");

//Se ejecuta la sentencia if cuando el usuario envie la informacion del formulario
if(isset($_REQUEST["Enviar"])){

      // captura la información enviada del formulario
      $fila = $_POST['fila'];
      $puesto= $_POST['puesto'];
      $accion= $_POST['accion'];
      $StringEscenario=$_POST['lista'];

     //El String generado en el input oculto se convierte en un Array lo recorremos con el metodo for
                $count=0;
                for($i=0;$i<5;$i++){//Fila
                    for($j=0;$j<5;$j++){//Puesto
                        $count=5*$i+$j;
    //Cada captura cada elemento del Array extrayendo dicho elemento del String
    /*La función substr — Devuelve parte de una cadena
     puede recibir 3 parámetros:*/

         $lista[$i][$j]=substr($StringEscenario,$count,1);
    }
         $count=0;
}
     //Se devuelve el Array con la información modificada por el usuario
        $lista=Accion($fila,$puesto,$accion,$lista);
     //Se ejecuta la funcion para mostrar el Escenario, dado el Array modificado
        Escenario($lista);
}
    //Se ejecuta el else if cuando el usario resetea la informacion del formulario
     else if(isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])){
    $lista=array(array("L","L","L","L","L"),
           array("L","L","L","L","L"),
           array("L","L","L","L","L"),
           array("L","L","L","L","L"),
           array("L","L","L","L","L"));
    Escenario($lista);
}
?>

    <table style="margin:auto;" border="1">
        <form method="POST">

     <!-- Se separa el array $lista en un String y se oculta-->
             <input type="hidden" name="lista" value="<?php foreach ($lista as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>"  />
             <!-- Se crean los inputs que van a capturar la información y las acciones con las clases de bootstrap para estilos CSS-->
            <br>
             <tr>
                 <td><strong>fila:</strong></td>
                        <td>
                            <input type="number" name="fila" size="4" required>
                        </td>
                    </tr>
                    <tr>
                        <td> <strong>Puesto:</strong></td>
                        <td>
                            <input type="number" name="puesto" size="4" required>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Reservar:</strong></td>
                        <td>
                            <input type="radio" name="accion" value="R" />
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Comprar:</strong></td>
                        <td>
                            <input type="radio" name="accion" value="V" />
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Liberar:</strong></td>
                        <td>
                            <input type="radio" name="accion" value="L" checked="checked" />
                        </td>
                    </tr>
                    <tr>
                    <!-- botones -->
                        <td>
                            <input type="submit" value="Enviar" name="Enviar" class="btn btn-dark"/>
                        </td>
                        <td>
                            <input type="submit" value="Borrar" name="Borrar" class="btn btn-dark"/>
                        </td>
                    </tr>
                </div>    
            </form>
        </table>
    </div>
</body>
