<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PismoController extends Controller
{
    public function index(){

        $pisma=DB::table('pismo')->get();
        return view('pismo.index',["pisma"=>$pisma]);
    }
    public function create(){
    return view('pismo.create');
    }
    public function save(Request $request){
        $request->validate([
        'nazivPismo'=>'required'
        ]);
        $pismo=DB::table('pismo')->insert([
            'Naziv'=>$request->post('nazivPismo')
        ]);
        if($pismo){
          return redirect()->route('pismo.index')->with('ok','Pismo uspjesno dodato');
        }else{
         return redirect()->route('pismo.index')->with('fail','Pismo nije uspjesno dodato');
        }
    }  
    public function edit($id){
      $pismo=DB::table('pismo')->where('Id',$id)->first();
      return view('pismo.edit',["pismo"=>$pismo]);
    } 
    
    public function update(Request $request){
        $request->validate([
            'nazivPismoEdit'=>'required'
            ]);
            $pismo=DB::table('pismo')->where('Id',$request->post('id'))->update([
                'Naziv'=>$request->post('nazivPismoEdit')
            ]);
            if($pismo){
              return redirect()->route('pismo.index')->with('ok','Pismo uspjesno azurirano');
            }else{
             return redirect()->route('pismo.index')->with('fail','Pismo nije uspjesno azurirano');
            }

    } 
     public function delete($id){
         $pismo=DB::table('pismo')->where('Id',$id)->delete();
         if($pismo){
            return redirect()->route('pismo.index')->with('ok','Pismo uspjesno obrisano');
          }else{
           return redirect()->route('pismo.index')->with('fail','Pismo nije uspjesno obrisano');
          }
    }  
      
}
