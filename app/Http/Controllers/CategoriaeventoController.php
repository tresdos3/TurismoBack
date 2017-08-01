<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class CategoriaeventoController extends Controller 
{
    public function obtener(){
      $results = DB::select('select * from categoria_evento');
          $json = json_encode($results);
          return $json;
    }
}

?>