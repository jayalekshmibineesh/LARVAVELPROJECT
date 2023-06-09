<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

'name'=>'admin',
'email'=>'admin@gmail.com',
'password'=>bcrypt('admin123'),
'username'=>'admin@gmail.com',
'type'=>'admin',           
        ]);
    }
}
