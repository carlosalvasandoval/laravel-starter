var d = new Date();
var config_datatable = {
    dom: 'lBfrtip',
    "scrollX": true,
    "responsive": true,
    "pageLength": 75,
    "lengthMenu": [25, 50, 75, 100],
    "language": {
        "sProcessing": "...Cargando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst": "<i class='fas fa-angle-double-left'></i>",
            "sLast": "<i class='fas fa-angle-double-right'></i>",
            "sNext": "<i class='fas fa-angle-right'></i>",
            "sPrevious": "<i class='fas fa-angle-left'></i>"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    },
    buttons: [
        {
            extend: 'excel',
            text: 'Descargar Excel',
            title: 'Documento Excel_' + d.getTime()
        },
        {
            extend: 'pdf',
            text: 'Descargar pdf',
            title: 'Documento PDF_' + d.getTime()
        }

    ],
    "bProcessing": true,
    "serverSide": true,
    "ordering": true,
    "autoWidth": false,
    "columnDefs": [
        { "orderable": false, "targets": -1 }
      ]
};
$(function () {
    var dtable = $(".dataTable").dataTable().api();

    // Grab the datatables input box and alter how it is bound to events
    $(".dataTables_filter input")
        .unbind() // Unbind previous default bindings
        .bind("input", function (e) { // Bind our desired behavior
            // If the length is 3 or more characters, or the user pressed ENTER, search
            if ($.trim(this.value)!='' && (this.value.length >= 3 || e.keyCode == 13)) {
                // Call the API search function
                dtable.search($.trim(this.value)).draw();
            }
            return;
        });
});