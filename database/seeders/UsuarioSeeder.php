<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cidades = collect(['Presidente Epitácio', 
        'Rio de Janeiro', 'Londrina', 'Maringá', 'Brasília', 'Manaus',
        'Salvador', 'Fortaleza', 'Ubatuba', 'Dourados']);
        
        $estados = collect(['São Paulo', 'Rio de Janeiro', 'Paraná', 
        'Distrito Federal', 'Amazonas','Bahia', 'Ceará', 'Mato Grosso do Sul']);
        
    
        for ($i = 0; $i <= 400; $i++) {
        $ano_nascimento = rand(1990, 2005);
        $mes_nascimento = rand(1, 12);
        $dia_nascimento = rand(1, 28);

            Usuario::create([
                'nome' => 'Gabriela Saraiva',
                'email' => 'gabs'.$i.'@senai.com',
                'celular' => '18 981692004',
                'estado_civil' => 'Solteira',
                'data_nascimento' => $ano_nascimento . '/' . $mes_nascimento . '/' . $dia_nascimento,
                'cidade' => $cidades->random(),
                'estado' => $estados->random(),
                'endereco' => 'Manaus 4-54',
                'cep' => '19470-000',
                'password' => 'Gabriela123'
            ]);
        }


    }
}
