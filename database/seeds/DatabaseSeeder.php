<?php

use Illuminate\Database\Seeder;
use App\user;
//use App\user;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
    */
    public function run()
    {
        $this->call(testing::class);
        //  DB::table('users')->insert([
        //   'name' => Str::random(10),
        //   'country_id' => rand(3, 12),
        //   'created_at' => date("Y-m-d H:i:s"),
        //   'updated_at' => date("Y-m-d H:i:s"),
        // ]);           
        // factory(App\User::class,10000)->create();
    }
}
