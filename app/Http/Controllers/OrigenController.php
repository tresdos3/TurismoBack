<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class OrigenController extends Controller 
{
    public function obtener(){
      $results = DB::select('SELECT origen.id, CONCAT(origen.pais," - ", origen.departamento) as origen FROM origen');
        $json = json_encode($results);
        return $json;
    }
}

?>