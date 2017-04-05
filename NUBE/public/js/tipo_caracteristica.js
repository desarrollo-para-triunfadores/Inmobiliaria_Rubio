$("#side-general-li").addClass("active");
$("#side-general-ul").addClass("menu-open");
$("#side-ele-caracteristicas-ul").addClass("menu-open");
$("#side-ele-caracteristicas-li").addClass("active");
$("#side-ele-caracteristicas-tipos").addClass("active");


function completar_campos(tipo) {
    $('#nombre').val(tipo.nombre);
    $('#descripcion').val(tipo.descripcion);
    $('#form-update').attr('action', '/admin/tipos_caracteristicas/' + tipo.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/tipos_caracteristicas/' + id);
    $('#boton-modal-borrar').click();
}
