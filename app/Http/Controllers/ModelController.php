<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BrandModel;

class ModelController extends Controller
{
    public function adminList()
    {
    	$models = BrandModel::all();
    	return view('admin.modelsList', ['models' => $models]);
    }

    public function listJson()
    {
    	# code...
    }
}
