<?php
	function connectDB(){
      // lampp $conexion = mysqli_connect("localhost", "root", "", "enseniasbd");
      $conexion = mysqli_connect("localhost", "voxgtsun", "6W[O6i8uNjQ-6n", "voxgtsun_enseniasbd");
	    return $conexion;
    }
    
	function disconnectDB($conexion){
        $close = mysqli_close($conexion);
    return $close;
    }
/* TEST DE CONEXION:
    $conexion = connectDB();
    echo mysqli_set_charset($conexion, "utf8");
    */
    
?>