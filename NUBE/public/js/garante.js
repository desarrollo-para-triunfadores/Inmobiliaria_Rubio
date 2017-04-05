$("#side-inmueble").addClass("active");
$("#side-inmueble-ul").addClass("menu-open");
$("#side-ele-garantes").addClass("active");


function completar_campos(garante) {
    $('#nombre').val(garante.nombre);
    $('#form-update').attr('action', '/admin/garantes/' + garante.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/garantes/' + id);
    $('#boton-modal-borrar').click();
}