function registraVisita(id){
	
var url="registravisita/"+id+"";
$.get(url,function(resul){	
});
}


function mostrarDetalle(id) {
  //funcion para mostrar del detalle de visitas  de la URL seleccionada  
  $("#capa_para_edicion").show();
  var url = "mostrar_detalle_url/"+id+"";   
  $.get(url,function(resul){
      $("#capa_para_edicion").html(resul);
  });
}

function cerrarPopup()
{ //funcion que cierra la ventana popup
 $("#capa_para_edicion").hide();
 $("#capa_para_edicion").html("");
}