<?php

use Illuminate\Database\Seeder;
use App\BrandModel;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandModel::create(['brand_id' => 1,'name' => 'A4']);
        BrandModel::create(['brand_id' => 1,'name' => 'A6']);
        BrandModel::create(['brand_id' => 1,'name' => 'Q2']);
        BrandModel::create(['brand_id' => 1,'name' => 'Q3']);
        BrandModel::create(['brand_id' => 1,'name' => 'Q5']);
        BrandModel::create(['brand_id' => 2,'name' => 'X3']);
        BrandModel::create(['brand_id' => 2,'name' => 'X5']);
        BrandModel::create(['brand_id' => 2,'name' => 'X7']);
        BrandModel::create(['brand_id' => 2,'name' => '525i']);
        BrandModel::create(['brand_id' => 2,'name' => '330']);
        BrandModel::create(['brand_id' => 2,'name' => '320i']);
        BrandModel::create(['brand_id' => 3,'name' => 'S300']);
        BrandModel::create(['brand_id' => 3,'name' => 'A160']);
        BrandModel::create(['brand_id' => 4,'name' => 'Continental GT']);
        BrandModel::create(['brand_id' => 4,'name' => 'Mulsanne']);
        BrandModel::create(['brand_id' => 5,'name' => 'Xe R-sport']);
        BrandModel::create(['brand_id' => 6,'name' => '458 Spider']);
        BrandModel::create(['brand_id' => 6,'name' => 'Testarossa']);
        BrandModel::create(['brand_id' => 7,'name' => 'Huracan']);

    }
}


