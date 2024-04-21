<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // protected $task;

    // public function __construct()
    // {
    //     $this->task = new Todo();
    // }                                    Mehema Construct ekak widihata aran create, update, delete karannath puluwn.


    public function index()
    {

        return view('pages.home');
    }

    public function todo()
    {
        $response['tasks'] = Todo::all();

        return view('pages.todo')->with($response);
    }

    public function store(Request $request)
    {
        $task = new Todo;
        $task->title = $request->title;
        $task->save();

        return redirect()->back();

        // return redirect()->route('todo');          Mehema yanna one thana route eka dennath puluwan
    }

    public function taskcheck($task_id)
    {
        $task = Todo::find($task_id);
        $task->status = 1;
        $task->update();

        return redirect()->back();
    }

    public function taskdelete($task_id)
    {
        $task = Todo::find($task_id);
        $task->delete();
        return redirect()->back();
    }
}
