function saludar() {
    alert("Hola Mundo!!");
}

function validar_nombre(obj) {
    var es = /^[a-z]{1,15}$/;
    
    if(!es.test($(obj).val())) {
        alert("Por favor, complete  nombre.");
        $(obj).focus();
        return false;
    }
    return true;
}

function validar_telefono(obj) {  
    var tel = /^[0-9]{3,10}$/;

    if(!tel.test($(obj).val())) {
        alert("Por favor, complete telefono.");
        $(obj).focus();
        return false;
    }
    return true;
}

function validar_mail(obj) {
    
    var mail = /^(*){3,30}$/;

    if(!mail.test($(obj).val())) {
        alert("Por favor, complete mail.");
        $(obj).focus();
        return false;
    }
     return true;
}



//======================  DEDICADAS  ==================================================

function login() {
    $('#datos').submit(function(e) {
        e.preventDefault();
        if(validar_nombre($('#nombre')) && validar_telefono($("#telefono")) && validar_mail($("#mail"))) {
            alert("Datos ok");
        }
        alert("ok");
    });
}


function total(){

    cantidades = [$("#cant").val(),$("#cant2").val(),$("#cant3").val(),$("#cant4").val(),$("#cant5").val(),$("#cant6").val()];
    precios = [5000,7000,8000,9000,14000,15000];
    total = 0;
  
    for(i = 0; i <= 5; i++){
      if(cantidades[i] > 0){
          total += cantidades[i] * precios[i];
      }
    }

    return total;

}


