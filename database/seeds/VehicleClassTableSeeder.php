<?php

use Illuminate\Database\Seeder;
use App\VehicleClass;

class VehicleClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'AUTOMOVIL';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'CAMIONETA PASAJ.';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'CAMPERO';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'MOTOCICLETA';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'MOTOCARRO';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'PICKUP DOBLE CAB';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'BUS / BUSETA / MICROBUS';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'CAMIONETA REPAR';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'PICKUP SENCILLA';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'REMOLCADOR';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'CAMION';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'CARROTANQUE';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'CHASIS';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'FURGON';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'VOLQUETA';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'UNIMOG';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'FURGONETA';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'ISOCARRO';
		$vehicleClass->save();
		$vehicleClass = new VehicleClass();
		$vehicleClass->name = 'REMOLQUE';
		$vehicleClass->save();
    }
}
