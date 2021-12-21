var tabla
function init() {
    /*$('#test').on('click', function () {
    })*/

    $("#theform").on("submit", function (e) {
        e.preventDefault()
        //const formData = new FormData(e.target)
        $('#modalCliente').show();
    })

    listarClientes()
}

function listarClientes() {
    tabla = $('#listadoClientes').dataTable(
        {
            "aProcessing": true,//Activamos el procesamiento del datatables
            "aServerSide": true,//Paginación y filtrado realizados por el servidor
            dom: 'Bfrtip',//Definimos los elementos del control de tabla
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],
            "ajax":
                {
                    url: '../controllers/clientes.php?op=listaClientes',
                    type: "get",
                    dataType: "json",
                    error: function (e) {
                        console.log(e.responseText);
                    }
                },
            "bDestroy": true,
            "iDisplayLength": 5,//Paginación
            "order": [[0, "desc"]],//Ordenar (columna,orden)
            "pagingType": "full_numbers"
        }).DataTable();
}

init()