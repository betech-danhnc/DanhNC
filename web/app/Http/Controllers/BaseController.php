<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    //-----------------------------------------------------
    // Constants
    //-----------------------------------------------------
    const VIEW_INDEX        = 'index';
    const VIEW_FORM         = 'form';
    const VIEW_SHOW         = 'show';
    //-----------------------------------------------------
    // Properties
    //-----------------------------------------------------
    /** Class of model */
    public $modelClass      = '\App\Entities\BaseModel';
    /** Name of module */
    public $moduleName      =   '';
    /** Name of controller */
    public $controllerName  =   '';
    
    /**
     * Get string name of module and controller
     * module::controller
     * @return String
     */
    public function getModuleController($needModule = true) {
        if ($needModule) {
            return $this->moduleName . '::' . $this->controllerName;
        }
        return $this->controllerName;
    }
    
    /**
     * Get index view path
     * module::controller.index
     * @return String
     */
    public function getIndexView($needModule = true) {
        return $this->getModuleController($needModule) . '.' . self::VIEW_INDEX;
    }
    
    /**
     * Get form view path
     * module::controller.form
     * @return String
     */
    public function getFormView($needModule = true) {
        return $this->getModuleController($needModule) . '.' . self::VIEW_FORM;
    }
    
    /**
     * Get show view path
     * module::controller.show
     * @return String
     */
    public function getShowView($needModule = true) {
        return $this->getModuleController($needModule) . '.' . self::VIEW_SHOW;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controller = $this->controllerName;
        $models = $this->modelClass::latest()->paginate(5);
        return view($this->getIndexView(), compact('models', 'controller'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new $this->modelClass();
        $controller = $this->controllerName;
        return view($this->getFormView(), compact('model', 'controller'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->modelClass::getRules());
        $this->modelClass::create($request->all());
        return redirect()->route($this->getIndexView(false))
                ->with('success', 'Model created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  String  Id of model
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = $this->modelClass::find($id);
        $controller = $this->controllerName;
        return view($this->getShowView(), compact('model', 'controller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  String  Id of model
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = $this->modelClass::find($id);
        $controller = $this->controllerName;
        return view($this->getFormView(), compact('model', 'controller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  String  Id of model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->modelClass::getRules());
        $model = $this->modelClass::find($id);
        $model->update($request->all());
        return redirect()->route($this->getIndexView(false))
                ->with('success', 'Model updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  String  Id of model
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = $this->modelClass::find($id);
        $model->delete();
        return redirect()->route($this->getIndexView(false))
                ->with('success', 'Model deleted successfully.');
    }
}

