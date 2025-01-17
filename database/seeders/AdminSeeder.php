<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Jafar', // Admin adını daxil edin
            'email' => 'Jafarnuri1994@gmail.com', // Admin emailini daxil edin
            'password' => bcrypt('admin123'), // Admin şifrəsini daxil edin
            
        ]);
    }
}
