$("#side-general").addClass("active");
$("#side-ele-lugares").addClass("active");
$("#side-ele-lugares-inquilinos").addClass("active");


function completar_campos(inquilino) {
    $('#nombre').val(inquilino.nombre);
    $('#form-update').attr('action', '/admin/inquilinos/' + inquilino.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/inquilinos/' + id);
    $('#boton-modal-borrar').click();
}