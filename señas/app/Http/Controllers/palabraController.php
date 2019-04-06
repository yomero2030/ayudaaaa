<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\palabra;
use App\Imagenes;
use Illuminate\Support\Facades\Storage;
class palabraController extends Controller
{
    //
    public function index(Request $request){
        /*$palabra ="aceite";
        $palabra=palabra::serchWord($palabra)->get();
        //return view('welcome',['p'=>$palabra]);
         return  response($palabra);*/
        /*$palabras = palabra::join('imagenes','palabras.id_palabra','imagenes.palabra_id')
        ->select('imagenes.imagen','palabras.palabra')->orderBy('palabras.id_palabra','DESC')->get();

    
        return view('index',compact('palabras'));*/
        $palabra ="Aceituna";
        $palabra=palabra::serchWord($palabra)->get();
        return  response()->json($palabra);
    }
    public function create(){
        $palabra = palabra::all();
        return view('welcome',compact('palabra'));
    }
    public function Buscar(){

        return response();
    }

    public function store(Request $request){
        //dd($request);
        $image = "";
        $file = $request->file('pic');
        if(!empty($file)){
            $num = rand(1,100);
            $image = $num.Carbon::now()->format('Y-m-d').'_'.'app.'.$file->getClientOriginalExtension();
            Storage::disk('local')->put($image,file_get_contents($file));
        }

        $palabra = new imagenes;
        $palabra->palabra_id = $request->palabra_id;
        $palabra->imagen = $image;
        $palabra->letra_id = 1;
        $palabra->numero_id = 1;
        $palabra->save();

        return redirect('palabras');
    }   

}
