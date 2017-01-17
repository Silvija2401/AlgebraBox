<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class RootMaps extends Migration
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
            $table->timestamps('updated_at')->nullable();
		});
			
            Schema::table('roots_maps', function(Blueprint $table){
 +        $table->string('name');
 +        $table->integer('users_id')->unsigned();
 +		});
      
		
				
	
		 public function down()
    {
        Schema::dropifexists('root_maps');
	};
	