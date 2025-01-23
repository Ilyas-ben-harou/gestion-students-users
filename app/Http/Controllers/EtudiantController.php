<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    public function showEtudiants(){
        $etudiants=Student::paginate(10);
        return view('etudiants.etudiants',compact('etudiants'));
    }
    public function detail(Student $student){

        // $etudiant=Student::findOrFail($request->id);
        // $etudiant=$id;
        return view('etudiants.detail',compact('student'));
    }

    public function create(){
        return view('etudiants.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => [
                'required',
                'string',
                'min:8',
                function($attribute, $value, $fail) use ($request) {
                    if ($value !== $request->c_password) {
                        $fail('The passwords do not match.');
                    }
                }
            ],
            'c_password' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'filiere' => 'required|string',
        ]);

        Student::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),  // Hash the password
            'c_password' => Hash::make($request->c_password),  // Hash the password
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'filiere' => $request->filiere,
        ]);

        return redirect()->route('etudiants.etudiants')->with('succes', 'good');
    }

    public function delete($id){
        Student::destroy($id);
        return redirect()->back();
    }

    public function edit(Student $student){
        return view('etudiants.edit',compact('student'));
    }
    public function update(Student $student,Request $request)
    {
        // dd($request);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => [
                'required',
                'string',
                'min:8',
                function($attribute, $value, $fail) use ($request) {
                    if ($value !== $request->c_password) {
                        $fail('The passwords do not match.');
                    }
                }
            ],
            'c_password' => 'required',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'filiere' => 'required|string',
        ]);

        $student->fill([
            'name' => $request->name,
            'password' => Hash::make($request->password),  // Hash the password
            'c_password' => Hash::make($request->c_password),  // Hash the password
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'filiere' => $request->filiere,
        ]);
        $student->save();

        return redirect()->route('etudiants.etudiants')->with('succes', 'vous etes bien editer ');
    }
}
