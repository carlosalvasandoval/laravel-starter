<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('name', 100)->nullable();
            $table->string('license', 100);
            $table->string('integration_site_url', 150)->nullable();
            $table->string('integration_client_id', 100)->nullable();
            $table->string('integration_secret_key', 100)->nullable();
            $table->set('type', ['wordpress', 'shopify']);
            $table->integer('status');
            $table->date('expiration_date')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licenses');
    }
}
