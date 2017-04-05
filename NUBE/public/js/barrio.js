$("#side-general-li").addClass("active");
$("#side-general-ul").addClass("menu-open");
$("#side-ele-lugares-ul").addClass("menu-open");
$("#side-ele-lugares-li").addClass("active");
$("#side-ele-lugares-barrios").addClass("active");


function completar_campos(barrio) {
    $('#nombre').val(barrio.nombre);
    $('#form-update').attr('action', '/admin/barrios/' + barrio.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/barrios/' + id);
    $('#boton-modal-borrar').click();
}