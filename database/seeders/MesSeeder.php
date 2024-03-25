<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MesModel;

class MesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MesModel::create([
            'nome' => 'Janeiro',
        ]);
        MesModel::create([
            'nome' => 'Fevereiro',
        ]);
        MesModel::create([
            'nome' => 'Março',
        ]);
        MesModel::create([
            'nome' => 'Abril',
        ]);
        MesModel::create([
            'nome' => 'Maio',
        ]);
        MesModel::create([
            'nome' => 'Junho',
        ]);
        MesModel::create([
            'nome' => 'Julho',
        ]);
        MesModel::create([
            'nome' => 'Agosto',
        ]);
        MesModel::create([
            'nome' => 'Setembro',
        ]);
        MesModel::create([
            'nome' => 'Outubro',
        ]);
        MesModel::create([
            'nome' => 'Novembro',
        ]);
         MesModel::create([
            'nome' => 'Dezembro',
        ]);
    }
}
