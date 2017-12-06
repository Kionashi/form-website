<?php

use Illuminate\Database\Seeder;
use App\Novelty;

class NoveltiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $novelty = new Novelty();
		$novelty->name = 'Numero de chasis empatada';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Vehiculo blindado';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Vehiculo marcado';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'No se toma impronta de motor por dificil acceso';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Presenta alto grado de corrosion';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Se sugiere solicitar factura de accesorios para acordar valor asegurado';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Piezas de latoneria en mal estado ';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Pinturas con golpes de piedra ';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Pintura con perdida de brillo ';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Numero de chasis regrabado ';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Carroceria en mal estado ';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Seguridad pasiva afectada';
		$novelty->value = 0;
		$novelty->save();
		
		$novelty = new Novelty();
		$novelty->name = 'Chasis fisurado';
		$novelty->value = 0;
		$novelty->save();

    }
}
