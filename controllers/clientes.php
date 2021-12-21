<?php

require_once "../models/Clientes.php";

$clientes = new Clientes();


switch ($_GET["op"]) {

    case "guardar":
        $data = $_POST['data'];

        if (isset($data['idusuario'])) {
            $response = $clientes->editar($data['idusuario'], $data['name'], $data['roll'], $data['user'], $data['password']);
        } else {
            $response = $clientes->guardar($data['name'], $data['roll'], $data['user'], $data['password']);
        }
        echo $response ? 1 : 0;
        break;

    case "desactivarusuario":
        $data = $_POST['data'];
        $response = $clientes->desactivarUsuario($data);
        echo $response ? 1 : 0;
        break;

    case "activarusuario":
        $data = $_POST['data'];
        $response = $clientes->activarUsuario($data);
        echo $response ? 1 : 0;
        break;

    case 'listaClientes':
        $response = $clientes->listarClientes();
        $data = array();//almacenara todos los registros que voy a mostrar
        while ($reg = $response->fetch_object()) //recorrere todos los registros almacenare en la variable reg y almacenare en el indices cada dato y recorrera todos los registros
        {

            $roll = '';
            $estado = '';//onclick="paraEditar(`${'.$id.'}`,`${'.$reg->nombres.'}`,`${'.$reg->usuario.'}`,`${'.$reg->password.'}`,`${'.$reg->roll.'}`)"
            $id = $reg->idcliente;
            /*if ($reg->estado == 1) {
                $estado = '<div class="badge bg-danger-soft text-white rounded-pill" onclick="desactivarUsuario(' . $id . ',\'' . $reg->nombres . '\')" ><button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="fa fa-trash"></i></button></div> <div class="badge bg-cyan-soft text-white rounded-pill" onclick="paraEditar(' . $id . ',\'' . $reg->nombres . '\',\'' . $reg->usuario . '\',\'' . $reg->password . '\',\'' . $reg->roll . '\')"><button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="fa fa-edit"></i></button></div>';
            } else {
                $estado = '<div class="badge bg-primary-soft text-white rounded-pill" onclick="activarUsuario(' . $id . ',\'' . $reg->nombres . '\')" ><button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="fa fa-undo"></i></button></div>';
            }

            if ($reg->roll == '1') {
                $roll = '<div class="badge bg-primary text-white rounded-pill">Administrador</div>';
            }

            if ($reg->roll == '2') {
                $roll = '<div class="badge bg-info rounded-pill">Vendedor</div>';
            }*/


            $data[] = array(
                "0" => ($reg->nombres),
                "1" => $reg->cedula,
                "2" => $reg->telefono_uno,
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

