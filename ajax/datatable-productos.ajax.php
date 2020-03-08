<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";


class TablaProductos{

    // Mostrar la tabla de productos
    public function mostrarTablaProductos(){

        $item = null;
        $valor = null;

        $productos = ControladorProductos::ctrMostrarProductos($item, $valor);

        
        
        $datosJson = '{
            "data": [';
            for($i =0; $i< count($productos); $i++){

                $imagen = "<img src='".$productos[$i]["imagen"]."' width='40px'>";
                
                $item = "id";
                $valor = $productos[$i]["id_categoria"];

                $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
                
                if($productos[$i]["stock"] <= 10){
                $stock = "<button class='btn btn-danger'>".$productos[$i]["stock"]."</button>";

                }else if($productos[$i]["stock"] > 11 && $productos[$i]["stock"] <= 15){
                $stock = "<button class='btn btn-warning'>".$productos[$i]["stock"]."</button>";

                }else{
                $stock = "<button class='btn btn-success'>".$productos[$i]["stock"]."</button>";

                }
		  	    $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."' codigo='".$productos[$i]["codigo"]."' imagen='".$productos[$i]["imagen"]."'><i class='fa fa-times'></i></button></div>"; 
              
                $datosJson .='{
                   "id": "' .($i+1).'",
                   "imagen" : "'.$imagen.'",
                   "codigo": "'.$productos[$i]["codigo"].'",
                   "descripcion": "'.$productos[$i]["descripcion"].'",
                   "categoria" : "'.$categorias["categoria"].'",
                   "stock" : "'.$stock.'",
                   "precio_compra": "'.$productos[$i]["precio_compra"].'",
                   "precio_venta": "'.$productos[$i]["precio_venta"].'",
                   "fecha": "'.$productos[$i]["fecha"].'",
                   "botones": "'.$botones.'"
                },';
            }

            $datosJson = substr($datosJson, 0, -1);
            $datosJson.= '] 
        }';
        echo $datosJson;
      

    
    }

}

// Activar la tabla de productos

$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();
