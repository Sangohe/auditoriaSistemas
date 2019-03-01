<?php

use Illuminate\Database\Seeder;
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

        for ($i=1;$i<=10;$i++) {
            User::create([
                'name' => 'user'.$i,
                'email' => 'user'.$i.'@auditoria.com',
                'password' => Hash::make('clave')
            ]);
        }
    }
}
