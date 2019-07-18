config_datatable.ajax = {
    "url": BASE_URL + "licenses/grid",
    "type": "GET",
    "dataSrc": function (json) {
        data = json.data;
        buttons_crud = $("#buttons_crud");
        for (i = 0; i < data.length; i++) {
            buttons_crud.find(".edit").attr("href", BASE_URL + "licenses/" + data[i].DT_RowId+'/edit');
            buttons_crud.find(".sync").attr("href", BASE_URL + "licenses/" + data[i].DT_RowId+'/sync');
            data[i][4] = buttons_crud.html();
        }
        return data;
    }
};

config_datatable.buttons = [];
$("table").DataTable(config_datatable);

$(document).on('click', '.delete', function (e) {
    e.preventDefault();
    var redirect = $(this).attr('href');
    swal({
        title: "Estas seguro de borrar este registro?",
        text: "Una vez ejecutada esta acción no es posible recuperarla!",
        icon: "warning",
        buttons: true,
        dangerMode: true
    })
        .then((willDelete) => {
            if (willDelete) {
                location.href = redirect;
            }
        });
})