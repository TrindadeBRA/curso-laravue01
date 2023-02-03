<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor(); 
        $fornecedor->nome = "Lucas";
        $fornecedor->site = "LucasTrindade.dev";
        $fornecedor->uf = "SP";
        $fornecedor->email = "eu@lucastrindade.dev";
        $fornecedor->save();

        //habilitar campos possiveis em $fillable
        Fornecedor::create([
            "nome" => "joao",
            "site" => "joaoteste.com",
            "uf" => "RJ",
            "email" => "eu@joaoteste.com"
        ]);

        //Insert
        DB::table('fornecedores')->insert([
            "nome" => "mariana",
            "site" => "marianateste.com",
            "uf" => "RJ",
            "email" => "eu@marianateste.com"
        ]);
    }
}
