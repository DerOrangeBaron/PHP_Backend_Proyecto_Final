<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function showList()
    {
    	$brands = Brand::all();
    	return view('admin.brandsList', ['brands' => $brands]);
    }
}
