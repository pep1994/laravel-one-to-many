<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('pages.home', compact('tasks'));
    }

    public function show($id) {
        $task = Task::findOrFail($id);
        return view('pages.show', compact('task'));
    }

    public function edit($id) {
        $task = Task::findOrFail($id);
        return view('pages.edit', compact('task'));
    }

    public function update(Request $request, $id) {
        $task_validate = $request -> validate([
            'name' => 'required|alpha',
            'description' => 'required',
            'deadline' => 'required|date'
        ]);

        Task::whereId($id) -> update($task_validate);
        return redirect() -> route('show', $id) -> withSuccess("Upload di " . $task_validate['name'] . " riuscito");
    }

    public function delete($id) {
        Task::whereId($id) -> delete();
        return redirect() -> route('home') -> withSuccess("Task eliminato con successo");
    }

    public function create() {
        return view('pages.create');
    }

    public function store (Request $request) {
        $validate_task = $request -> validate([
            'name' => 'required|alpha',
            'description' => 'required',
            'deadline' => 'required|date',

        ]);

        $task = new Task;

        $task -> name = $validate_task['name'];
        $task -> description = $validate_task['description'];
        $task -> deadline = $validate_task['deadline'];
        $task -> employee_id = 4;

        $task -> save();

        return redirect() -> route('home') -> withSuccess("Task inserito");
    }
}
