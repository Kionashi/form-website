<?php

use Illuminate\Database\Seeder;
use App\FuelType;

class FuelTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fuelType = new FuelType();
		$fuelType->name = 'DSL';
		$fuelType->save();
		$fuelType = new FuelType();
		$fuelType->name = 'ELT';
		$fuelType->save();
		$fuelType = new FuelType();
		$fuelType->name = 'HBD';
		$fuelType->save();
		$fuelType = new FuelType();
		$fuelType->name = 'GAS';
		$fuelType->save();
    }
}
