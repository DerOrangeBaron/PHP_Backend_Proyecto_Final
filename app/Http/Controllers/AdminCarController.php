<?php

namespace App\Http\Controllers;

use App\BrandModel;
use App\Car;
use Illuminate\Http\Request;

class AdminCarController extends Controller
{
    protected $rules = [
        'year'          => 'required',
        'model_id'      => 'required',
        'description'   => 'required',
        'price'         => 'required',
        'photo'         => 'required'
    ];
    
    public function index()
    {
        $cars = Car::all();
        
        return view('admin.carList', ['cars'=>$cars]);
    }
    
    public function create()
    {
        $models = BrandModel::all();
        
        return view('admin.carCreateForm', ['models'=>$models]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        
        $car = new Car;
        $car->fill($request->all());
        
        $car->uploadPhotoAndSave($request->file('photo'));
        
        
        return redirect('/admin/autos')->with('message', 'El auto se creo correctamente');
    }
    
    
    public function edit($id)
    {
        $car = Car::find($id);
        if (is_null($car)) {
            return redirect('/admin/autos')->with('message', 'El auto no se encontro');
        }
    
        $models = BrandModel::all();
        
        return view('admin.carEditForm', ['car'=>$car, 'models'=>$models]);
    }
    
    public function update(Request $request, $id)
    {
        $rules = $this->rules;
        $rules['photo'] = '';
        
        $this->validate($request, $rules);
        
        $car = Car::find($id);
        if (is_null($car)) {
            return redirect()->back()->with('message', 'El auto no se encontro');
        }
        
        $car->fill($request->all());
        $car->uploadPhotoAndSave($request->file('photo'));
        
    
        return redirect('/admin/autos')->with('message', 'El auto se actualizo correctamente');
    }
    
    public function delete($id)
    {
        $car = Car::find($id);
        if (is_null($car)) {
            return redirect('/admin/autos')->with('message', 'El auto no se encontro');
        }
        
        $car->delete();
        return redirect('/admin/autos')->with('message', 'El auto se elimino correctamente');
    }
}
