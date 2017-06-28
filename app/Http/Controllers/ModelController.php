<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BrandModel;

class ModelController extends Controller
{
    public function showList()
    {
    	$models = BrandModel::all();
    	return view('admin.modelsList', ['models' => $models]);
    }

    public function listModelsJson()
    {
    	# code...
    }
}
