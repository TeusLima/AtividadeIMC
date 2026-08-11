<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FaixaModel;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categorias = [
            'abaixo',
            'normal',
            'sobrepeso',
            'obesidade'
        ];

        foreach($categorias as $categoria){

            FaixaModel::create([
                'categoria' => $categoria
            ]);
        }
    }
}
