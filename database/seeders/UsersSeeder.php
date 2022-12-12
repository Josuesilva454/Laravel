<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Criando o usuário
        User::create([
        'name' => 'Josue Silva',
        'email'=>  'josuerosasilva49@gmail.com',
        'password' => bcrypt('12345678'),
        ]);
    }
}
