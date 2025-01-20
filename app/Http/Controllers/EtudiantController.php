<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function showEtudiants(){
        $etudiants=Student::paginate(10);
        return view('etudiants.etudiants',compact('etudiants'));
    }
    public function detail(Request $request){
        $etudiant=Student::findOrFail($request->id);
        return view('etudiants.detail',compact('etudiant'));
    }

    public function create(){
        return view('etudiants.create');
    }
    public function store(Request $request){
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $address=$request->address;
        $filiere=$request->filiere;
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'filiere'=>'required',
        ]);
        Student::create([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address,
            'filiere'=>$filiere,
            'date_inscription' => now()->toDateString()
        ]);
        return redirect()->route('etudiants.etudiants');
    }

    public function delete($id){
        Student::destroy($id);
        return redirect()->back();
    }
}
