let categories=document.getElementById('categories');
categories.addEventListener('change',function(){
    location.href='https://ticket.test/filter/'+categories.value;
});





function setTotal(){

    var precio = parseFloat(document.getElementById("precio").value);
    var cantidadTickets = parseFloat(document.getElementById("cantidad-tickets").value);
    
    var TicketsMax = parseFloat(document.getElementById("cantidad-tickets").max);
    
    var  button= document.getElementById("boton-registro");
    var errorSpan = document.getElementById("formError");

    document.getElementById("precio-total").value = precio * cantidadTickets;

    if(cantidadTickets>TicketsMax || cantidadTickets==0){

        button.style.pointerEvents ="none";   
        errorSpan.innerHTML = "Cantidad de tickets excedida"
        errorSpan.style.display="block";

    }else{
        button.style.pointerEvents ="all";
        errorSpan.style.display="none";
    }  
    
}








function redirectInfo(idEvent){

    var cantidadTickets = parseFloat(document.getElementById("cantidad-tickets").value);

    var precioTotal = document.getElementById("precio-total").value

    location.href='https://ticket.test/info/'+precioTotal+"/"+cantidadTickets+"/"+idEvent;
}





//filtra para mostrar lo que coincide con lo buscado
function buscadorFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("buscadorInput");
    filter = input.value.toUpperCase();//no hace diferencia entre mayusculas y minusculas
    div = document.getElementById("buscadorList");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {//recorre y compara cada "a" con la busqueda
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "block";
           
        } else {
            a[i].style.display = "none";
        }
    }

    if(filter.length==0){
        for (i = 0; i < a.length; i++) {
            a[i].style.display = "none";
        }
    } 
}

