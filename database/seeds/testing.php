<?php

use Illuminate\Database\Seeder;

class testing extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,10000)->create();
    }
}