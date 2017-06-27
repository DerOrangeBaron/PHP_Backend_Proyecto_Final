<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model
{
    protected $fillable = ['name', 'brand_id'];

    protected $table = 'models';

    public function brand(){
    	return $this->belongsTo(Brand::class);
    }

}
