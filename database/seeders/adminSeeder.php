<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\FuncionarioModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Os Gigantes',
            'email' => 'osgigantes@gmail.com',
            'genero'=>'desconhecido',
            'password' => Hash::make('OsGigantes'),
            'telemovel'=>900000000,
            'num_bi'=>'desconhecido',
        ]);
        event(new Registered($user));
        FuncionarioModel::create([
            'id_funcionario'=> $user->id,
            'cargo'=>"sem",
            'numero_identificacao'=>1
        ]);
        
    }
}
