<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class ToDoController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();

    	return view('pages.index')
    					->with('tasks', $tasks);
    }

    public function show($id)
    {
    	$task = Task::find($id);

    	// SELECT * FROM `tasks` where id = $id

    	return view('pages.show')
    					->with('task', $task);
    }

    public function create()
    {
    	return view('pages.create');
    }

    public function store(Request $request)
    {
    	$name = $request->name;
    	$description = $request->description;

    	$task = new Task;

    	$task->name = $name;
    	$task->description = $description;
    	$task->status = 0;

    	$task->save();

    	return redirect('/')
    					->with('success', 'Saved successfully!');
    }

    public function edit($id)
    {
    	$task = Task::find($id);

    	return view('pages.edit')
    					->with('task', $task);
    }

    public function update(Request $request, $id)
    {
    	$name = $request->name;
    	$description = $request->description;

    	$task = Task::find($id);

    	$task->name = $name;
    	$task->description = $description;

    	$task->save();

    	return redirect('/tasks/'.$id."/edit")
    					->with('success', 'Saved successfully!');
    }

    public function destroy($id)
    {
    	$task = Task::find($id);

    	$task->delete();
    	
    	return redirect('/')
    					->with('success', 'Deleted successfully!');
    }
}
