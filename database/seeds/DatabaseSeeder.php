<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(VehicleClassTableSeeder::class);
        // $this->call(FuelTypesTableSeeder::class);
        // $this->call(VehicleServicesTableSeeder::class);
        // $this->call(FirstReferencesTableSeeder::class);
        // $this->call(SecondReferencesTableSeeder::class);
        // $this->call(ThirdReferencesTableSeeder::class);
        $this->call(ReferencesTableSeeder::class);
        // $this->call(NoveltiesTableSeeder::class);
        
    }
}
