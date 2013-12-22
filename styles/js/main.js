BASE_URL = 'php';
$(document).ready(function() {

    $("#contact-send").on("click", function(e) {
        e.preventDefault();
        e.stopPropagation();
        contacto();
    });
    albumPrincipal(function() {
        $('.carousel').carousel();
    });
    $("#contact").on('show.bs.modal', function() {
        $(".modal-footer").show();
        $(".form-group").show();

    });
    $("#mapa").on('show.bs.modal', function() {
        $('#mapa-wrapper').html('<iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zSIcFfjPQeK8.k_WQMAXJuuWs" width="558" height="314"></iframe>');
    });

});
/**
 * 
 * Levanta el slideshow para la pagina principal
 */
function albumPrincipal(callback) {
    var album = new Array();
    var itemClass = 'active';
    var indicators = '';
    var item = '';
    $.ajax(BASE_URL + "/album/apiFullAlbum", {method: "GET"}).done(function(response) {
        try {
            album = JSON.parse(response);
            if (typeof (album.photos) != 'undefined') {
                for (var i = 0; i < album.photos.length; i++) {
                    item = '<div class="item ' + itemClass + '">' +
                            '<img src="' + BASE_URL + '/uploads/' + album.photos[i].file_name + '" >' +
                            '<div class="carousel-caption">' + album.photos[i].name +
                            '<p>' + album.photos[i].description + '</p>' +
                            '</div>' +
                            '</div>';
                    indicators = '<li data-target="#slideshow-principal" data-slide-to="' + i + '" class="' + itemClass + '"></li>';
                    $("#slideshow-principal .carousel-inner").append(item);
                    $("#slideshow-principal .carousel-indicators").append(indicators);
                    itemClass = '';
                    item = '';
                    indicators = '';
                }
            }
            if (typeof (callback) != "undefined") {
                callback();
            }

        } catch (e) {

        }
    });
}
function contacto() {
    var datos = obtenerFormularioContacto();
    var respuesta = "";
    if (datos) {
        $(".modal-footer").fadeOut(200);
        $(".form-group").fadeOut(200);
        $("#respuesta").html("Enviando...");
        $.ajax(BASE_URL + "/contact/enviar", {method: "POST", data: datos}).done(function(response) {
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
            }, 5000);
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