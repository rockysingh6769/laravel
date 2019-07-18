<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
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
        Schema::dropIfExists('posts');
    }
}




 DB::table('countries')->insert(['name'=>'India','created_at'=>new DateTime,'updated_at'=>new DateTime]);

 DB::table('countries')->insert(['name'=>'America','created_at'=>new DateTime,'updated_at'=>new DateTime]);

 DB::table('posts')->insert(['user_id'=>'1','title'=>'this is first post', 'created_at'=>new DateTime,'updated_at'=>new DateTime]);

 DB::table('posts')->insert(['user_id'=>'1','title'=>'this is secound post', 'created_at'=>new DateTime,'updated_at'=>new DateTime]);

  DB::table('posts')->insert(['user_id'=>'2','title'=>'this is third post', 'created_at'=>new DateTime,'updated_at'=>new DateTime]);

   DB::table('posts')->insert(['user_id'=>'2','title'=>'this is fourth post', 'created_at'=>new DateTime,'updated_at'=>new DateTime]);

    DB::table('users')->insert(['name'=>'Demouser1','country_id'=>'1' 'created_at'=>new DateTime,'updated_at'=>new DateTime]);
    DB::table('users')->insert(['name'=>'Demouser2','country_id'=>'2' 'created_at'=>new DateTime,'updated_at'=>new DateTime]);
