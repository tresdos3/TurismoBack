<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class EventoController extends Controller 
{
    public function obtener(){
      $results = DB::select('SELECT evento.titulo, evento.descripcion, evento.fechainicio, evento.fechafinal, categoria_evento.nombre as evento, users.nombre FROM evento, categoria_evento, users WHERE evento.id_categoria_evento = categoria_evento.id AND evento.id_users = users.id');
          $json = json_encode($results);
          return $json;
    }
}

?>