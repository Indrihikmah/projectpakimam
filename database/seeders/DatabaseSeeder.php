<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\UserController;
use App\Models\User as ModelsUser;
use Illuminate\models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        ModelsUser::create([
            'nama'=> 'indri h',
            'email'=> 'indri@gmail.com',
            'password'=> bcrypt('123456')
        ]);
    }
}
