SUBDIR = 'carpinteria';
$(document).ready(function() {
    $('.carousel').carousel();
    $("#contact-send").on("click", function(e) {
        e.preventDefault();
        e.stopPropagation();
        contacto();
    });
    
    $("#contact").on('show.bs.modal', function() {
        $(".modal-footer").show();
        $(".form-group").show();

    });

});

function contacto() {
    var datos = obtenerFormularioContacto();
    var respuesta = "";
    if (datos) {
        $(".modal-footer").fadeOut(200);
        $(".form-group").fadeOut(200);
        $("#respuesta").html("Enviando...");
        $.ajax("php/index.php/contact/enviar", {method: "POST", data: datos}).done(function(response) {
            try {
                if (JSON.parse(response).success == 1) {
                    respuesta = ("<span id='respuesta-contacto'><h3>Su consulta ha sido enviada con exito.</h3></span>");
                } else {
                    respuesta = ("<span id='respuesta-contacto'><h3>Lo sentimos, hubo un error al enviar su solicitud.<br/> Por favor, intentelo nuevamente. </h3></span>");
                }

            } catch (e) {
                respuesta = "<span id='respuesta-contacto'><h3>Lo sentimos, hubo un error al enviar su solicitud.<br/> Por favor, intentelo nuevamente. </h3></span>";
            }
            $("#respuesta").html(respuesta);
            setTimeout(function(e) {
                $("#respuesta").html("");
                $('#contact').modal('toggle');
            },5000);
        });
    }
}

function obtenerFormularioContacto() {
    var data = {telefono: '', email: '', mensaje: ''};
    data.telefono = $("#telefono").val();
    data.email = $("#email").val();
    data.mensaje = $("#mensaje").val();
    var ret = data;
    if (!data.email || !data.email.match(/@{1}/)) {
        $("#email").parents('.form-group').addClass("has-error");
        ret = null;
    } else {
        $("#email").parents('.form-group').removeClass('has-error');
    }
    if (!data.mensaje) {
        $("#mensaje").parents('.form-group').addClass("has-error");

        ret = null;
    } else {
        $("#mensaje").parents('.form-group').removeClass("has-error");
    }

    return ret;
}