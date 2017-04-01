$("#side-general").addClass("active");
$("#side-ele-lugares").addClass("active");
$("#side-ele-lugares-edificios").addClass("active");


function completar_campos(edificio) {
    $('#nombre').val(edificio.nombre);
    $('#form-update').attr('action', '/admin/edificios/' + edificio.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/edificios/' + id);
    $('#boton-modal-borrar').click();
}