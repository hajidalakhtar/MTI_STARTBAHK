<?php

namespace App\Http\Controllers;
use App\Training;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TrainingController extends Controller
{

    public function createTraining()
    {
        return view('admin.create');
    }
    public function addTraining(Request $req)
    {
        $training = new Training;
        $training->name = $req->judul;
        $training->author = $req->author;
        $training->fasilitator = $req->fasilitator;
        $training->lokasi = $req->lokasi;
         $training->slug = Str::slug($req->get('judul'));
        $training->max = $req->max;
        $training->tgl = $req->tgl;
        $training->keterangan = $req->tentang;
        $file = $req->Images;
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('image',$newName);
        $training->thumnail = $newName;
        $training->save();
        return redirect('/admin/home');
    }


}
