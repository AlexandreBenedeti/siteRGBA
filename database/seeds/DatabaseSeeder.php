<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nomes = ['Mario', 'Arthur'];
        $funcoes = ['Gerente', 'Fisico'];
        
        for($i = 0; $i < count($nomes); $i++){
            $dados = ['nome'=>$nomes[$i], 'funcao'=>$funcoes[$i]];
            DB::table('equipe')->insert($dados);
        }
    }
}
