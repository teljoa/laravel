<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveTasksRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Task $task)
    {
        return view('tasks.create', compact('task'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveTasksRequest $request)
    {
        // Validamos y obtenemos los datos
        $data = $request->validated();

        // Hasheamos el password antes de crear la tarea
        $data['password'] = bcrypt($data['password']);

        // Creamos la nueva tarea
        Task::create($data);

        // Redirigimos con un mensaje de éxito
        return to_route('tasks.index')->with('status', 'Task Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveTasksRequest $request, Task $task)
    {
        // Validamos y obtenemos los datos
        $data = $request->validated();

        // Si el password fue proporcionado, lo hasheamos
        if ($request->has('password') && !empty($request->password)) {
            $data['password'] = bcrypt($data['password']);
        } else {
            // Si no se proporciona un password, no lo cambiamos
            unset($data['password']);
        }

        // Actualizamos el tarea con los nuevos datos
        $task->update($data);

        // Redirigimos con un mensaje de éxito
        return to_route('tasks.index')->with('status', 'task Updated');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return to_route('tasks.index')->with('status','tasks Deleted');
    }
}
