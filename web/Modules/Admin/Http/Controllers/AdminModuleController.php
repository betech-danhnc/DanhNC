<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Entities\AdminModule;
use App\Http\Controllers\BaseController;

class AdminModuleController extends BaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $models = AdminModule::latest()->paginate(5);
        return view('admin-modules.index', compact('models'))
                ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $model = new AdminModule();
        return view('admin::admin-modules.edit', compact('model'));
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
        ]);
  
        AdminModule::create($request->all());
   
        return redirect()->route('admin-modules.index')
                        ->with('success','Module created successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $model = AdminModule::find($id);
        return view('admin::admin-modules.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $model = AdminModule::find($id);
        return view('admin::admin-modules.edit', compact('model'));
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
        ]);
  
        $model = AdminModule::find($id);
        $model->update($request->all());
   
        return redirect()->route('admin-modules.index')
                        ->with('success','Module updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $model = AdminModule::find($id);
        $model->delete();
  
        return redirect()->route('admin-modules.index')
                        ->with('success','Module deleted successfully');
    }
}
