<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class ComentarioController extends Controller{
    public function login(){
      $results = DB::select('select comentario.id, comentario.texto, comentario.imagen, comentario.fecha, users.nombre, lugar_interes.nombre from comentario, users, lugar_interes where users.id = comentario.id_users AND lugar_interes.id = comentario.id_lugar_interes');
        $json = json_encode($results);
        return $json;
    }
    public function registro(Request $request){
      $fecha = $request->get('fecha');
      $texto = $request->get('texto');
      $imagen = $request->get('imagen');
      $id_lugar_interes = $request->get('id_lugar_interes');
      $id_users = $request->get('id_users');
      // echo 'insert into comentario (fecha, texto, imagen, id_lugar_interes, id_users) 
      // values("'.$fecha.'", "'.$texto.'", "'.$imagen.'", '.$id_lugar_interes.', '.$id_users.')';
      $results = DB::insert('insert into comentario (fecha, texto, imagen, id_lugar_interes, id_users) 
      values("'.$fecha.'", "'.$texto.'", "'.$imagen.'", '.$id_lugar_interes.', '.$id_users.')');
      if($results){
        return '{
          "status": "Success",
          "message": "Registrado Correctamente"
        }';
      }
      else{
        return '{
          "status": "Error",
          "message": "Error al registrar"
        }';
      }
      // echo $request->get('fecha');
      // echo $request->get('texto');
      // echo $request->get('imagen');
      // echo $request->get('id_lugar_interes');
      // echo $request->get('id_users');
    }
}

?>