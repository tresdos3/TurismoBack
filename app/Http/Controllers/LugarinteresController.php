<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class LugarinteresController extends Controller 
{
  public function obtener(){
    $results = DB::select('select lugar_interes.id, lugar_interes.nombre, lugar_interes.descripcion, lugar_interes.telefono, lugar_interes.url, lugar_interes.imagen, tipo_servicio.nombre as servicio FROM lugar_interes, tipo_servicio WHERE lugar_interes.id_tipo_servicio = tipo_servicio.id');
        $json = json_encode($results);
        return $json;
  }
}

?>