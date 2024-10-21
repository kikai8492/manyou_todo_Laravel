<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Todo;
use App\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Auth;

class todosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $todos = Todo::all();
        // return view('todos.index',compact('todos'));

        $user = Auth::user;
        return view('todos.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoRequest $request)
    {
        $validated = $request->validated();
        Todo::create($validated);
        return to_route('todos.index')-> with('success','追加しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::find($id);
        return view('todos.show',compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TodoRequest $request, string $id)
    {
        $todo = Todo::find($id);
        $validated = $request->validated();
        $todo->update($validated);
        return to_route('todos.index') -> with('success','更新しました');
    }

    public function destroy(string $id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'タスクを削除しました');
    }
}
