<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

use App\Todo;

class TodoController extends Controller
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

	public function getListTodo() {
        $todoList = Todo::get()->toArray();
        return response()->json($todoList, 200);
    }
    
	public function createListTodo(Request $request) {
        $this->validate($request,[
            'title'     =>  'required',
            ]
        );

        $createItem = Todo::create($request->all());
        return response($createItem, Response::HTTP_CREATED);
    }


	public function updateListTodo(Request $request) {
        $this->validate($request,[
            'id'     =>  'required',
            ]
        );

        $updatedItem = Todo::where('id', '=', $request->id)->update([
            'title' => $request->title ? $request->title : 'update title',
            'content' => $request->content ? $request->content : 'update content'
        ]);
        
        return response()->json($updatedItem, 200);
    }

	public function deleteListTodo(Request $request) {
        $this->validate($request,[
            'id'     =>  'required',
            ]
        );

        $deleteItem = Todo::find($request->id);
        $deleteItem->delete();
        
        return response()->json($deleteItem, 200);
    }

}
