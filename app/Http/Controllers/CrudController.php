<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CrudController extends Controller
{
    protected $model =null;
    protected $model_class = null;
    protected $view_folder = null;
    protected $data = null;

    public function __contruct()
    {
        $this->model_class = '\App\\' . ucfirst($this->model);
        $this->view_folder = str_plural($this->model);

        $this->data['current_route'] = str_plural($this->model);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = $this->model_class;
        $this->data['objects'] = $class::get();
        return View("$this->view_folder.index", $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View("$this->view_folder.form", $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = new $this->model_class;
        $class->create($request->all());

        return redirect(url("$this->view_folder"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = $this->model_class;
        $this->data['object'] = $class::find($id);

        return View("$his->view_folder.form" , $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $class = new $this->model_class;
        $class->find($id);

        $class->whereId($id)->update($request->except('_method' ,'_token'));

        return redirect(url("$this->view_folder"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $class = new $this->model_class;
       $class->destroy($id);

       return redirect(url("$this->view_folder")); 
    }
}
