<?php

require_once "../models/cuenta.php";

$cuenta = new Cuenta();


switch ($_GET["op"]) {

    case "guardar":
        $data = $_POST['data'];

        if (isset($data['idusuario'])) {
            $response = $cuenta->editar($data['idusuario'], $data['name'], $data['roll'], $data['user'], $data['password']);
        } else {
            $response = $cuenta->guardar($data['name'], $data['roll'], $data['user'], $data['password']);
        }
        echo $response ? 1 : 0;
        break;

    case "desactivarusuario":
        $data = $_POST['data'];
        $response = $cuenta->desactivarUsuario($data);
        echo $response ? 1 : 0;
        break;

    case "activarusuario":
        $data = $_POST['data'];
        $response = $cuenta->activarUsuario($data);
        echo $response ? 1 : 0;
        break;

    case 'listaUsuarios':
        $response = $cuenta->listarUsuario();
        $data = array();//almacenara todos los registros que voy a mostrar
        while ($reg = $response->fetch_object()) //recorrere todos los registros almacenare en la variable reg y almacenare en el indices cada dato y recorrera todos los registros
        {

            $roll = '';
            $estado = '';//onclick="paraEditar(`${'.$id.'}`,`${'.$reg->nombres.'}`,`${'.$reg->usuario.'}`,`${'.$reg->password.'}`,`${'.$reg->roll.'}`)"
            $id = $reg->idusuario;
            if ($reg->estado == 1) {
                $estado = '<div class="badge bg-danger-soft text-white rounded-pill" onclick="desactivarUsuario(' . $id . ',\'' . $reg->nombres . '\')" ><button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="fa fa-trash"></i></button></div> <div class="badge bg-cyan-soft text-white rounded-pill" onclick="paraEditar(' . $id . ',\'' . $reg->nombres . '\',\'' . $reg->usuario . '\',\'' . $reg->password . '\',\'' . $reg->roll . '\')"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="fa fa-edit"></i></button></div>';
            } else {
                $estado = '<div class="badge bg-primary-soft text-white rounded-pill" onclick="activarUsuario(' . $id . ',\'' . $reg->nombres . '\')" ><button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="fa fa-undo"></i></button></div>';
            }

            if ($reg->roll == '1') {
                $roll = '<div class="badge bg-primary text-white rounded-pill">Administrador</div>';
            }

            if ($reg->roll == '2') {
                $roll = '<div class="badge bg-info rounded-pill">Vendedor</div>';
            }


            $data[] = array(
                "0" => ($reg->nombres),
                "1" => $reg->usuario,
                "2" => $roll,
                "3" => $estado
            );
        }

        $reult = array(
            "sEcho" => 1, //informacion para el datatable
            "iTotalRecords" => count($data),//se envia el total de registros al datatable
            "iTotalDisplayRecords" => count($data),//enviamos el total de registros a vizualizar
            "aaData" => $data
        );
        echo json_encode($reult);

        break;

}
