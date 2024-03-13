<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{//menampilkan data
    public function todo()
    {
        $todo = Todo::all();
       return view('login', compact(['todo']));
    }
    
     //menampilkan formulir untuk menginputkan data
     public function create()
     {
         return view('input');
     }

     public function store(Request $request)
    {   
        $todo = Todo::create($request->all());


        return redirect('/');
    }

    public function destroy($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/');
    }

     //meanmpilkan halaman edit
     public function edit($id)
     {
         $todo = Todo::find($id);
         return view('update.edit',compact(['todo']));
     }

     public function update($id, Request $request){
        $todo = Todo::find($id);
        $todo->update($request->all());
        return redirect('/');
    }
}
