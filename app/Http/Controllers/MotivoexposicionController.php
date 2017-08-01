<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class MotivoexposicionController extends Controller 
{
  public function obtener(){
    $results = DB::select('SELECT motivo_exposicion.id, motivo_exposicion.nombre, motivo_exposicion.descripcion, motivo_exposicion.image, autor.nombre as autor FROM motivo_exposicion, autor WHERE motivo_exposicion.id_autor = autor.id');
        $json = json_encode($results);
        return $json;
  }
}

?>