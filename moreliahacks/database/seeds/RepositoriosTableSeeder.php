<?php

use Illuminate\Database\Seeder;

class RepositoriosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('repositorios')->insert([
            'nombre' => str_random(10),
            'descripcion' => str_random(10).'@gmail.com',
            'autores' => str_random(10),
            'fecha_publicacion' => '20015-12-12',
            'link' => str_random(10),
            'etiquetas' => str_random(10),
            'inputs' => str_random(10),
            'outputs' => str_random(10),
            'lenguaje_backend' => str_random(10),
            'lenguaje_frontend' => str_random(10),
        ]);

        DB::table('repositorios')->insert([
            'nombre' => str_random(10),
            'descripcion' => str_random(10).'@gmail.com',
            'autores' => str_random(10),
            'fecha_publicacion' => '20015-12-12',
            'link' => str_random(10),
            'etiquetas' => str_random(10),
            'inputs' => str_random(10),
            'outputs' => str_random(10),
            'lenguaje_backend' => str_random(10),
            'lenguaje_frontend' => str_random(10),
        ]);


        DB::table('repositorios')->insert([
            'nombre' => str_random(10),
            'descripcion' => str_random(10).'@gmail.com',
            'autores' => str_random(10),
            'fecha_publicacion' => '20015-12-12',
            'link' => str_random(10),
            'etiquetas' => str_random(10),
            'inputs' => str_random(10),
            'outputs' => str_random(10),
            'lenguaje_backend' => str_random(10),
            'lenguaje_frontend' => str_random(10),
        ]);


    }
}
