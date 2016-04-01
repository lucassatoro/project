<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \codeprojeto\Client::truncate();
        factory (\codeprojeto\Client::class, 10)->create();
    }
}
