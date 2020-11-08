<?php
    $mysqli = new mysqli("localhost", 'root', '','CardenasDB');
    if($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
    }
    
    $sql = "SELECT * FROM belt";
    $resultado = $mysqli->query($sql);
    if($resultado->num_rows >0){
        while($row = $resultado->fetch_assoc()){
            echo '<div>'.$row['color'].'</div>';
        }
    }
?>