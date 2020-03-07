// Cargar la tabla dinámica de producto

// $.ajax({

    // url: "ajax/datatable-productos.ajax.php",
    // success:function(respuesta){

        /*console.log(respuesta);*/

    // }
// })


$(".tablaProductos").dataTable().fnDestroy();

$('.tablaProductos').DataTable({
    "ajax":"ajax/datatable-productos.ajax.php",
    "deferRender": true,
    "retrieve": true,
    "processing": true,
    "language": {

        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }

    },
    "columns": [
        { "data": "id" },
        { "data": "imagen" },
        { "data": "codigo" },
        { "data": "descripcion" },
        { "data": "categoria" },
        { "data": "stock" },
        { "data": "precio_compra" },
        { "data": "precio_venta" },
        { "data": "fecha" },
        { "data": "botones" }               
    ]
    
});




