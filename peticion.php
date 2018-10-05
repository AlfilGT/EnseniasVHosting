<?php
	include 'conexion.php';
	function getArraySQL($sql){
    //Creamos la conexión con la función anterior
    $conexion = connectDB();

    //generamos la consulta
    mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
    
    if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexión cancelar programa
    $rawdata = array(); //creamos un array
    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;
    while($row = mysqli_fetch_array($result))
    {
        $rawdata[$i] = $row;
        $i++;
    }
     disconnectDB($conexion); //desconectamos la base de datos
    return $rawdata; //devolvemos el array
}
	$txt = $_POST['txt']; // Variable post
	$deletreo = $_POST['check'];
	//$txt = $_GET['txt'];
	$myArray = [];
	$auxArray = [];
	//echo $txt;
	
	foreach ($txt as &$imagen) {
		$sql = 'SELECT * FROM imagen WHERE nombre = "'.$imagen.'" ';
		$auxArray = getArraySQL($sql);
		if(empty($auxArray) && $deletreo==1){
		//para lampp	$data = file_get_contents("http://localhost/deletreo.php?txt=".$imagen);
			$data = file_get_contents('https://maztpugq.lucusvirtual.es/deletreo.php?txt='.$imagen);
			//echo 'HOLAAA: ' . $imagen;
			$auxArray = json_decode($data, true);
		}			
		$myArray =  array_merge($myArray, $auxArray );
	    	
	}

	echo json_encode($myArray);	
   
?>