<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

use App\Todo;

class TodoListController extends Controller
{

	public $pageNumber = 20;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
	   // 
    }

	public function showTodo() {
        // dd('showTodo');
        // $todo = Todo::all();
        $todo = Todo::get()->toArray();
        
        // $todo = \App\Todos::get()->toArray();
        // dd($todo);

        // return view('todo',['AvVideos' => $AvVideos, 'links' => $links]);        
        // return view('todo.todolist');


        return view('todo.test');
	}



}