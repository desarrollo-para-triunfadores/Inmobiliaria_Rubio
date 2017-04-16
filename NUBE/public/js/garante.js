$("#side-inmueble").addClass("active");
$("#side-inmueble-ul").addClass("menu-open");
$("#side-ele-garantes").addClass("active");


function completar_campos(garante) {
    $('#nombre').val(garante.nombre);   $('#apellido').val(garante.apellido); $('#fecha_nac').val(garante.fecha_nac);
    $('#dni').val(garante.dni); $('#email').val(garante.email); $('#domicilio').val(garante.domicilio);
    $('#localidad_id').val(garante.localidad_id);    $('#telefono').val(garante.telefono);

    $('#form-update').attr('action', '/admin/garantes/' + garante.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/garantes/' + id);
    $('#boton-modal-borrar').click();
}

/** Calendario de Fecha de Nacimiento **/
$("#fecha_nac").datepicker({
    format: 'dd/mm/yyyy',
    maxDate: 0,
    onSelect: function(date) {
        alert(date)
    },
});
/*************************************/