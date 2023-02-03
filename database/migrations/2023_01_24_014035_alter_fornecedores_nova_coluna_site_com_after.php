<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('fornecedores' , function(Blueprint $table) {
            $table->string('site', 150)->after('nome');
        });

    }

    public function down()
    {
        Schema::table('fornecedores' , function(Blueprint $table) {
            $table->dropColumn('site');
        });
    }
};
