<?php

use Illuminate\Database\Seeder;

class EspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidades')->insert([
            'descricao' => "Alergologia",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Angiologia",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Buco Maxilo",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cardiologia Clinica",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cardiologia Infantil",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cirurgia Cebeça e Pescoço",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cirurgia Cardíaca",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cirurgia de Cebeça/Pescoço",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cirurgia de Torax",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cirurgia Geral",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cirurgia Pediátra",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cirurgia Plástica",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cirurgia Torácica",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Cirurgia Vascular",
        ]);


        DB::table('especialidades')->insert([
            'descricao' => "Clinica Medica",
        ]);
    }
}
