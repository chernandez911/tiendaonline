$(document).ready(inicio) 
function inicio(){
 $(".botoncompra").click(anade)
 $("#carrito").load("php/poncarrito.php");
}

function anade(){
	var idnumero=$(this).val();
	var unidades= $("#numero"+idnumero).val();
	confirmar=confirm("Añadir al carrito?");
	
if(confirmar){
	$("#carrito").load("php/poncarrito.php?p="+$(this).val()+"&cant="+unidades);
}

}

$(document).ready(function(){
  $("#button").click(function(){
    $("#flip").slideDown("slow");
  });
});

