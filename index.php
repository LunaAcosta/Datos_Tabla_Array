<?php
   // 
   if(isset($_POST['Procesar'])){
    $data = $_POST['data'];
    $data1 = $_POST['data1'];
    $personas = array($data, $data1);
    echo '<table border="1">';
    echo '<tr><th>NOMBRE </th> <th>APELLIDO </th> <th>EDAD </th></tr>';
  
    foreach ($personas as $datos){
        echo '<tr>';
        foreach ($datos as $key => $value){
            echo '<td>' . $value .'</td>';
        }
        echo "</tr>";
    }
    echo '</table>';
   }
?>