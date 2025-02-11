<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Usuario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // isso serve para chamar os outros seeders
        //este sider->se chamará([Tarefa....])

        $this->call([
            TarefaSeeder::class,
            UsuarioSeeder::class
        ]);

        
    }
}
