<?php

namespace Database\Seeders;

use App\Models\Tarefa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // criar uma tarefa
        //for($i = 0; $i <= 200; $i++){
        Tarefa::create([
            'nome'=> 'Teste',
            'data_hora'=> '2025-02-11 08:00:00',
            'descricao'=>'Teste de Descrição'
        ]);

        /*para o seeder funcionar, é preciso "dizer ao laravel" 
        que ele precisa ser executado e depois, executar
        Não é possivel executar um seeder diretamente, ou seja, 
        é necessário executar no databaseSeeder*/
    }
    //}
}
