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
        if(validar_nombre($('#nombre')) && validar_telefono($("#telefono")) && validar_mail($("#email"))) {
            alert("Datos ok");
        }
        alert("ok");
    });
}


function calcular(articulos){
    var total = 0;
    articulos.forEach(articulo => {
        total += articulo.cantidad * articulo.precio;
    });

    return total;
}

function iniciar(){
    var articulos = [];
    $(".row-articulo").forEach(row => {
        var articulo = {
            cantidad = 0,
            precio = parseInt(row.children("#precio").val().replace("$","")) || 0
        };

        articulos.push(articulo);

        row.children("#cant").on("input", function(){
            articulo.cantidad = parseInt($(this).val() || 0);
            $("#total").text(calcular(articulos));
        });
    });
}
