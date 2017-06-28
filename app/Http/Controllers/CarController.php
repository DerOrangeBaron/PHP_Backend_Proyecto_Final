<?php

namespace App\Http\Controllers;

use App\Brand;
use App\BrandModel;
use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    
    public function sales(Request $request)
    {
        $cars = Car::search($request->all())->get();
        $models = BrandModel::all();
        $brands = Brand::all();
        
        $selectModel = $request->model_id;
        $selectBrand = $request->brand_id;
        $selectYear = $request->year;
        $selectQ = $request->q;
        
        return view('web.sales', compact('cars', 'models', 'brands', 'selectModel', 'selectBrand', 'selectYear', 'selectQ'));
    }
    
    public function showReserve($id)
    {
        $car = Car::find($id);
        if (is_null($car)) {
            return redirect()->back()->with('message', 'El auto no se encontro');
        }
        
        return view('web.reserve', ['car'=>$car]);
    }
    
    public function reserve(Request $request, $id)
    {
        
    }

    public function showJson($id)
    {
        # code...
    }

    public function listJson($id)
    {
        # code...
    }
}

