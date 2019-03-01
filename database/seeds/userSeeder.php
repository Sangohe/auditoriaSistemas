<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@auditoria.com',
            'password' => Hash::make('clave')
        ]);
    }
}
