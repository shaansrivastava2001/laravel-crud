<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
        return view('create');
    }

    public function store(Request $request)
    {
        
        $res = new Todo;
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->age = $request->input('age');
        $res->save();

        $request->session()->flash('msg','Data Stored successfully!!');
        return redirect('show');
    }

    public function show(Todo $todo)
    {
        return view('show')->with('todoArr',Todo::all());
    }

    public function edit(Todo $todo)
    {
        //
    }

    public function update(Request $request, Todo $todo)
    {
        //
    }

    public function destroy(Todo $todo,$id)
    {
        //
        Todo::destroy(array('id',$id));
        return redirect('show');
    }
}
