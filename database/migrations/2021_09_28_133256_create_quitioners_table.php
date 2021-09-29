<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuitionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quitioners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            // $table->foreignId('form_id');
            $table->timestamps();
            
            for($x=1;$x<=96;$x++){
                $table->string('quis'.$x,10)->default('-');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quitioners');
    }
}
