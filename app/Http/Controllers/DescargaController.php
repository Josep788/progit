<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\archivo;

class DescargaController extends Controller
{
    public function createform(){
        return view('saki.archivos');
    }

    public function download(Request $request){
        $request->validate([
            'file' => 'required|mimes:png,jpg,jfif,org,csv,txt,xlx,xls,pdf|max:2048'
            ]);
            $fileModel = new archivo;
            if($request->file()) {
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
                $fileModel->nombrearchivo = time().'_'.$request->file->getClientOriginalName();
                $fileModel->archivo_path = '/storage/' . $filePath;
                $fileModel->save();
                return back()
                ->with('success','El archivo se ha subido correctamente')
                ->with('file', $fileName);
            }
       }

       public function directa(){

           $archivos = archivo::all();
           return view('saki.descargadirecta', compact('archivos'));
       }

       public function upload(archivo $archivo){
            $archivob = public_path().$archivo->archivo_path;
            $headers = ['Content-Type: images/jpeg'];
            if(file_exists($archivob)){
                return response()->dowload($archivob, $archivo->nombrearchivo, $headers);
            } else{
                echo('No se ha encontrado el archivo');
            }
       }
    }

