<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(['name' => 'Audi']);
        Brand::create(['name' => 'BMW']);
        Brand::create(['name' => 'Mercedes Benz']);
        Brand::create(['name' => 'Bentley']);
        Brand::create(['name' => 'Jaguar']);
        Brand::create(['name' => 'Ferrari']);
        Brand::create(['name' => 'Lamborghini']);
    }
}
