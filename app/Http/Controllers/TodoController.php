<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::orderBy('completed')->get();

        return view('todos.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Todo::create($request->all());

        return redirect('/todo')->with('message','Successfully added Todo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::findOrfail($id);

        return view('todos.edit',compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::findOrfail($id);
        $todo->update(['title' => $request->title]);

        return redirect('/todo')->with('message','Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::findOrfail($id);
        $todo->delete();

        return redirect()->back()->with('message','Todo Deleted!');
    }

    public function completeTodo($id)
    {
        $todo = Todo::findOrfail($id);

        if ($todo->completed == 1) {
            $todo->update(['completed'=>0]);

            return redirect()->back()->with('errors','\''.$todo->title.'\''.' Marked as inComplete :( ');
        }else {
            $todo->update(['completed'=>1]);

            return redirect()->back()->with('message','\''.$todo->title.'\''.' Completed :)');
        }
    }
}
