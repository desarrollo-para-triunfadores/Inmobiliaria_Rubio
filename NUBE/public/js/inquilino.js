$("#side-inmueble").addClass("active");
$("#side-inmueble-ul").addClass("menu-open");
$("#side-ele-inquilinos").addClass("active");

/** Calendario de Fecha de Nacimiento **/
$("#fecha_nac").datepicker({
    format: 'dd/mm/yyyy',
    maxDate: 0,
    onSelect: function(date) {
        alert(date)
    },
});
/*************************************/

function completar_campos(inquilino) {    //funcion para cuando se llama al edit
    $('#nombre').val(inquilino.nombre);   $('#apellido').val(inquilino.apellido); $('#fecha_nac').val(inquilino.fecha_nac);
    $('#dni').val(inquilino.dni); $('#email').val(inquilino.email); $('#domicilio').val(inquilino.domicilio);
    $('#localidad_id').val(inquilino.localidad_id);    $('#telefono').val(inquilino.telefono);

    $('#form-update').attr('action', '/admin/inquilinos/' + inquilino.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/inquilinos/' + id);
    $('#boton-modal-borrar').click();
}