<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $data = array([
            'name'=>'Edward Tua Panjaitan',
            'email' => 'marsadatrip@gmail.com',
            'no_hp'=> '082246821633',
            'password' =>Hash::make('marsadaadmin'),
            'role' => 'admin'
        ]);
        foreach($data as $d){
            User::create([
                'name'=>$d['name'],
                'email'=>$d['email'],
                'no_hp'=>$d['no_hp'],
                'password'=>$d['password'],
                'role'=>$d['role'],
            ]);
        }
    }
}
