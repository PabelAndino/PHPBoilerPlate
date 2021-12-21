var table
var globalUsuario = ''

function init() {

    listaUsuarios()
    $("#theform").on("submit", function (e) {
        e.preventDefault()
        const formData = new FormData(e.target)
        validacion(formData)
    })

    $('#test').on('click', function () {
        listaUsuarios()

    })


}

function limpiar() {
    $('#name').val('')
    $('#user').val('')
    $('#password').val('')
    $("#roll").val(1)
}

function desactivarUsuario(idusuario, nombre) {
    bootbox.confirm(`Seguro que desea desactivar a ${nombre} ?`, function (result) {
        if (result) {
            $.ajax({
                url: '../controllers/cuenta.php?op=desactivarusuario',
                type: "POST",
                dataType: 'json',
                data: {
                    'data': idusuario
                },
                success: function (data) {

                    if (data === 1) {
                        mensaje('success')
                    } else {
                        mensaje('error')
                    }
                    listaUsuarios()
                }

            });
        }
    });
}

function activarUsuario(idusuario, nombre) {
    bootbox.confirm(`Seguro que desea activar nuevamente a ${nombre} ?`, function (result) {
        if (result) {
            $.ajax({
                url: '../controllers/cuenta.php?op=activarusuario',
                type: "POST",
                dataType: 'json',
                data: {
                    'data': idusuario
                },
                success: function (data) {

                    if (data === 1) {
                        mensaje('success')
                    } else {
                        mensaje('error')
                    }
                    listaUsuarios()
                }

            });
        }
    });
}

function validacion(formData) {
    let nombre = $('#name').val()
    let usuario = $('#user').val()
    let password = $('#password').val()
    let roll = $("#roll").val()


    if (!(nombre && usuario && password && roll)) {
        mensaje('error')
    } else {
        guardar(formData)
    }
}

function showName() {
    let nombre = $("#name").val()

}

function mensaje(tipo) {
    if (tipo === "error") {
        $("#toastError").toast("show");

    }
    if (tipo === "success") {
        $("#toastSuccess").toast("show");

    }

}

function guardar(formData) {

    const data = {}
    formData.forEach((value, key) => (data[key] = value))

    $.ajax({
        url: '../controllers/cuenta.php?op=guardar',
        type: "POST",
        dataType: 'json',
        data: {
            'data': data
        },
        success: function (data) {
            if (data === 1) {
                mensaje('success')
                $('#idusuario').val('')
                limpiar()
            } else {
                mensaje('error')
            }
            listaUsuarios()
        }
    });

}

function listaUsuarios() {
    tabla = $('#listadoUsuarios').dataTable(
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
                    url: '../controllers/cuenta.php?op=listaUsuarios',
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

function paraEditar(id, nombre, usuario, password, roll) {

    globalUsuario = id
    $('#idusuario').val(id)
    $('#name').val(nombre)
    $('#user').val(usuario)
    $('#password').val(password)
    $("#roll").val(roll) // r es las opciones que nos esta devolviendo el archivo articulo.php en la carpeta controller cuando la cvariable op sea selectCategoria
    //$("#roll").selectpicker('refresh');


}

init()