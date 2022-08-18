<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use DB;

class TaskController extends Controller
{
    function __construct()

    {

         $this->middleware('permission:task-list|task-create|task-edit|task-delete', ['only' => ['index','show']]);

         $this->middleware('permission:task-create', ['only' => ['create','store']]);

         $this->middleware('permission:task-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:task-delete', ['only' => ['destroy']]);

    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $products = Task::latest()->paginate(5);
        $data = User::get();
        // $endTime = Carbon::parse("2021-09-23 19:50:16");
        // $startTime = Carbon::parse("2021-09-23 19:15:14");
        // $timeleft = $startTime->diffForHumans($endTime);
        //  dd($timeleft);
        return view('task.index',compact('products','data'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('task.create');

    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        // request()->validate([

        //     'name' => 'required',

        //     'detail' => 'required',

        // ]);

    

        Task::create($request->all());

    

        return redirect()->route('task.index')

                        ->with('success','task created successfully.');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Task $task)

    {

        return view('task.show',compact('task'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Task $task)

    {

        return view('task.edit',compact('task'));

    }

    public function edittask($id)

    {
        $product = Task::find($id);

        return view('task.edit',compact('product'));

    }

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Task $task)

    {

        //  request()->validate([

        //     'name' => 'required',

        //     'detail' => 'required',

        // ]);

    

        $task->update($request->all());

    

        return redirect()->route('task.index')

                        ->with('success','task updated successfully');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product
   * @return \Illuminate\Http\Response

     */

    public function destroy(task $task)

    {

        $task->delete();

    

        return redirect()->route('task.index')

                        ->with('success','Task deleted successfully');

    }


    public function approve($id)

    {

       
        $task = DB::table('tasks')
        ->where('id', $id)
         ->update([
             'status'     => 1
         ]);
    

        return back();

    }

}
