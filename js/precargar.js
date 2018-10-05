var request = $.ajax({
    type: "GET",
    url: 'precargar.php',
    dataType: "json",
});
request.done(function($msj) {
    console.log("precargar:")
    //console.log($msj);
    for( var j in $msj){
        $('<img>').attr('src','Galeria/'+$msj[j][0]); 
        //console.log($msj[j][0]);
    }
});

/* EJEMPLO:
var imagenesCargadas = ['abonar.jpg', 'abuso.jpg']; 

for (var i=0; i < imagenesCargadas.length; i++) { 
  $('<img>').attr('src','Galeria/'+imagenesCargadas[i]); 
}
*/