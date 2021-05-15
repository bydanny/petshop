<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProveedorController extends Controller
{
    //

    public function index()
    {
        $proveedores = Proveedor::all();
        return view('layouts_proveedor.proveedorIndex', compact('proveedores'));
    }

    public function edit($id_proveedor)
    {
        //dd($id);
        $proveedores = Proveedor::findOrFail($id_proveedor);

        //dd($proveedores);
       // $editor_id = \Auth::guard('editor')->user()->id;
       // $admin = Editor::where('id', $editor_id)->first();
        return view ('layouts_proveedor.proveedorEdit', compact('proveedores'));
      
    }

    public function update(Request $request, $id)
    {
        $entrada=$request->all();
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->update($entrada);
        return redirect()->route('proveedor.index')->with([
          'editorUpdate'=>'Has actualizado correctamente al Proveedor ',
          'clase-alerta'=>'alert-info',
        ]);;
    }


    public function scopeName(Request $request){
        $nombre = $request->buscar;
        $proveedores = Proveedor::where('nombre', 'LIKE', "%$nombre%")->get();
        return view('layouts_proveedor.proveedorIndex',compact('proveedores'));
      }


}
