$("#side-general").addClass("active");
$("#side-ele-lugares").addClass("active");
$("#side-ele-lugares-paises").addClass("active");


function completar_campos(pais) {
    $('#nombre').val(pais.nombre);
    $('#form-update').attr('action', '/admin/paises/' + pais.id);
    $('#boton-modal-update').click();
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/paises/' + id);
    $('#boton-modal-borrar').click();
}