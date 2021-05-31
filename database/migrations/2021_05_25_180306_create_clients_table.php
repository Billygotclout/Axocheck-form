<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
           
            $table->string("Firstname");
            $table->string("Lastname");
            $table-> string("relationship");
            $table-> string("gender");
            $table-> date("dob");
            $table->string("Phonenumber")->unique();
            $table->string("City");
            $table->string("Country");
            $table->string("state");
            $table->string("ailments")->nullable();
            $table->string("special")->nullable();
            $table-> date("dov");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
