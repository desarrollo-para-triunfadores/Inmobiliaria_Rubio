$("#side-general").addClass("active");
$("#side-ele-lugares").addClass("active");
$("#side-ele-lugares-provinciaes").addClass("active");


function completar_campos(provincia) {
    $('#nombre').val(provincia.nombre);
    $('#form-update').attr('action', '/admin/provincias/' + provincia.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/provincias/' + id);
    $('#boton-modal-borrar').click();
}