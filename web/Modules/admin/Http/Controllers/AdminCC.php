<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\AdminController;
use Modules\Admin\Http\Controllers\Input;

class AdminCC extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $models = AdminController::latest()->paginate(10);
        return view('admin::admin-controllers.index', compact('models'))
                ->with('i', (request()->input('page', 1) - 1) * 10); 
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $model = new AdminController();
        return view('admin::admin-controllers.edit', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'module_id' =>'required',
        ]);
  
        AdminController::create($request->all());
   
        return redirect()->route('admin-controllers.index')
                        ->with('success','Controller created successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $model = AdminController::find($id);
        return view('admin::admin-controllers.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $model = AdminController::find($id);
        return view('admin::admin-controllers.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'module_id'  =>'required',
        ]);
  
        $model = AdminController::find($id);
        $model->update($request->all());
   
        return redirect()->route('admin-controllers.index')
                        ->with('success','Controller updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $model = AdminController::find($id);
        $model->delete();
  
        return redirect()->route('admin-controllers.index')
                        ->with('success','Controller deleted successfully');
    }
}
