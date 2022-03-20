<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            'nombre' => 'Star tomorrow',
            'lugar' => 'Mexico',
            'grupo' => 'Kiss',
            'descripcion' => 'Este evento sera de rock pesado',
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Mexico Power',
            'lugar' => 'Mexico',
            'grupo' => 'Molotov',
            'descripcion' => 'Un gran evento donde vendra grandes estrellas',
        ]);
    }
}
