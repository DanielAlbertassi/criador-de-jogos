<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class ControllerApp extends Controller
{
    public function index()
    {
        //dd('Ola mundo');
        $home = Home::all();
        //dd($home);
        return view('home.index',['home'=>$home]);
    }
    public function create()
    {
        return view('home.create');
    }
    public function store(Request $request)
    {
        Home::create($request->all());
        return redirect()->route('homes-index');
    }
    public function edit($id)
    {
        $home=Home::where('id',$id)->first();
        if(!empty($home)){
            return view('home\edit',['home'=>$home]);
        }
        else{
            //return"ERRO";
            return redirect()->route('homes-index');
        }
    }
    public function update(Request $request,$id)
    {
        $data = [
            'nome'=> $request->nome,
            'categoria'=> $request->categoria,
            'ano_criacao'=> $request->ano_criacao,
            'valor'=> $request->valor,
        ];
        Home::where('id',$id)->update($data);
        return redirect()->route('homes-index');
    }
    public function destroy($id)
    {
        Home::where('id',$id)->delete();
        return redirect()->route('homes-index');
    }
}
