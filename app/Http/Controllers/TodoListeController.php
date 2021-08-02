<?php

namespace App\Http\Controllers;

use App\Models\todo_liste;
use Illuminate\Http\Request;

class TodoListeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('view_list')->with('todo_arr', todo_liste::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create_new_list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        
        $todo = new todo_liste();
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todo_liste  $todo_liste
     * @return \Illuminate\Http\Response
     */
    public function show(todo_liste $todo_liste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todo_liste  $todo_liste
     * @return \Illuminate\Http\Response
     */
    public function edit(todo_liste $todo_liste, $id)
    {
        //
        $todo = todo_liste::find($id);
        return view('edit_list')->with('todo_arr', $todo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todo_liste  $todo_liste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todo_liste $todo_liste, $id)
    {
        //
        $todo = todo_liste::find($id);
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todo_liste  $todo_liste
     * @return \Illuminate\Http\Response
     */
    public function destroy(todo_liste $todo_liste, $id)
    {
        //
        $row = todo_liste::destroy($id);
        // $row->destroy();
// 
        
        return redirect('/');
    }
}