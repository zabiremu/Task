<?php

namespace App\Http\Controllers;

use App\Models\ToDoApp;
use Illuminate\Http\Request;

class ToDoAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toDos=ToDoApp::get();
        return  view('Frontend.index',compact('toDos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $toDoApp= ToDoApp::create([
                'note'=>$request->value,
        ]);
        return response()->json(['success'=>$toDoApp],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ToDoApp::find($id)->delete();
        return back();
    }
}
