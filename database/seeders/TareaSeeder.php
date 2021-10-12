<?php

namespace Database\Seeders;

use App\Models\Tarea;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tarea::create([
            'nombre' => "Hacer la compra en el mercado",
            'descripcion' => "comprar 5kg de arroz, comprar 1kg de pollo, comprar 1/2kg de papa",
            'fecha_realizar' => "2021-10-13 18:30:00",
        ]);

        Tarea::create([
            'nombre' => "Pagar la luz",
            'descripcion' => "ir a pagar la luz a mall",
            'fecha_realizar' => "2021-10-14",
        ]);

        Tarea::create([
            'nombre' => "Reunion de trabajo",
            'descripcion' => "Reunirme con mis comprañero de trabajo para validar funcionalidades del sistema",
            'fecha_realizar' => "2021-10-12 10:00:00",
        ]);

        Tarea::create([
            'nombre' => "Visitar a mi mama",
            'descripcion' => "comprar 5kg de arroz, comprar 1kg de pollo, comprar 1/2kg de papa",
            'fecha_realizar' => "2021-10-09 ",
        ]);
    }
}
