<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class UbicacionController extends Controller 
{
    public function ubicacion(){
        $results = DB::select('select * from ubicacion');
        $json = json_encode($results);
        return $json;
    }  
}

?>