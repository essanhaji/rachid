<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppareilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appareils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_repareur')->nullable();
            $table->integer('id_client')->nullable();

            $table->string('num_recu');
            $table->dateTime('date_depot')->useCurrent();
            $table->string('appareil')->nullable();
            $table->string('marque')->nullable();
            $table->string('reference')->nullable();
            $table->string('panne')->nullable();
            $table->string('progression')->nullable();

            $table->double('prix')->default(0.0);
            $table->double('versement')->default(0.0);
            $table->double('reste')->default(0.0);
            
            $table->text('detail')->nullable();
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
        Schema::dropIfExists('appareils');
    }
}
