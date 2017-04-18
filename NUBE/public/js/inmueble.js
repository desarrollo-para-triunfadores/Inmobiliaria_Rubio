$("#side-inmueble").addClass("active");
$("#side-inmueble-ul").addClass("menu-open");
$("#side-ele-inmuebles").addClass("active");

var caracteristicas_seleccionadas = [];

var handleBootstrapWizards = function () {
    "use strict";
    $("#wizard").bwizard();
};

$(function ()
{
    $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanged: function (event, currentIndex)
        {
            $(".select3").select2({
                placeholder: "seleccione una opción"
            });
            if (currentIndex === 3) {
                initMap();
            }

        },
        onFinished: function (event, currentIndex)
        {
            $('#enviar_datos').click();
        }
    });
});



function agregar_característica() {
    $("#combo option:selected").each(function () {
        var caracteristica = JSON.parse($(this).attr('value'));
        if (!caracteristicas_seleccionadas.includes(caracteristica.id)) {
            agregar_a_tabla(caracteristica);
        } else {
            $("#boton-modal-elemento-seleccionado").click();
        }
        $("#combo").val(null).trigger("change");
        $("#boton_cerrar_crear").click();
    });
}

$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    var caracteristica = $($(this).closest('tr')["0"].lastElementChild).find("input")["0"].value;
    caracteristicas_seleccionadas.splice(caracteristicas_seleccionadas.indexOf(caracteristica), 1);
    $(this).closest('tr').remove();
});


function agregar_a_tabla(caracteristica) {
    var tabla = document.getElementById("tabla_caracteristicas");
    var row = tabla.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cell1.innerHTML = caracteristica.nombre;
    cell2.innerHTML = caracteristica.descripcion;
    cell3.innerHTML = '<input type="button" class="borrar" value="Eliminar" />';
    cell4.innerHTML = '<input type="text" name="caracteristica' + caracteristica.id + '" class="hide" value="' + caracteristica.id + '" />';
    caracteristicas_seleccionadas.push(caracteristica.id);
    $('#cantidad_caracteristicas').val(caracteristicas_seleccionadas.length);
}

function cerrar_modal_amarillo() { //jaja
    $('#boton-cerrar-elemento-seleccionado').click();
    $('#boton-modal-crear').click();
}


$(document).ready(function () {
    $(".content .clearfix").css("background-color", "#fff");
});


function initMap() {
    $(".select3").select2({
        placeholder: "seleccione una opción"
    });
    var uluru = {
        lat: -25.363,
        lng: 131.044
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}