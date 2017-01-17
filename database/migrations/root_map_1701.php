<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RootMap extends Migration
{
 /**
     * Run the migrations.
     *
     * @return void
     */
	  public function up()
    {
        Schema::create('root_maps', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamps();

            
        });
		
		 public function down()
    {
        Schema::drop('root_maps');
	}
	