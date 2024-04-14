<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Models\User;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User([
            'name' => 'João Lucas',
            'email' => "joao@noreply.com",
            'password' => "Senha12"
        ]);

        $user->save();   
    }
}
