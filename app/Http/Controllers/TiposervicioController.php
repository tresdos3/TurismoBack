<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class TiposervicioController extends Controller 
{
  public function obtener(){
    $results = DB::select('select * from tipo_servicio');
    $json = json_encode($results);
    return $json;
  }
}

?>