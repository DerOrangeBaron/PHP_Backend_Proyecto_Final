<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Car extends Model
{
    protected $fillable = ['year', 'model_id', 'description', 'price'];
    
    
    public function model()
    {
        return $this->belongsTo(BrandModel::class);
    }
    
    public function uploadPhotoAndSave($file = null)
    {
        if ($file != null) {
            if($this->photo != null) {
                Storage::delete($this->photo);
            }
    
            $photoUrl = $file->store('cars');
            $this->photo = $photoUrl;
        }
        return $this->save();
    }
    
    public static function search($inputs)
    {
        $query = new Car;
        
        return $query;
    }
    
    
}
