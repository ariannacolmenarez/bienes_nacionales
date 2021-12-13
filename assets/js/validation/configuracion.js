function alerta(titulo){
    Swal.fire({
        icon: 'warning',
        title: titulo,
        showConfirmButton: false,
        timer: 1500
    })
}

var nombre=document.getElementById("nombre");

$("#submit").on("click", function(){
    if(nombre.value==null || nombre.value==""){
        nombre.focus();
        alerta("Ingresa el Nombre");  
        return false;  
    }else{
        var expresion= /^[a-zA-ZÀ-ÿ\s0-9]{3,50}$/;
        if (!expresion.test(nombre.value)) {
            nombre.focus();
            alerta("El nombre no tiene un formato válido");
            return false;
        }
    }

   $('#form').submit();
   return true;
    
});