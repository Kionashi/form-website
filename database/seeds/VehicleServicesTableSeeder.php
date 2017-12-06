<?php

use Illuminate\Database\Seeder;
use App\VehicleService;

class VehicleServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicleService = new VehicleService();
		$vehicleService->name = 'Público';
		$vehicleService->save();
		$vehicleService = new VehicleService();
		$vehicleService->name = 'Particular';
		$vehicleService->save();
    }
}
