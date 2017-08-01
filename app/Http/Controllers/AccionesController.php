<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class AccionesController extends Controller 
{
    public function obtener(){
      $results = DB::select('select * from acciones_sistema');
          $json = json_encode($results);
          return $json;
    }
}

?>