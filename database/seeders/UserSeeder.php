<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Marco',
                'email' => 'marcosangiorgi@email.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Elia',
                'email' => 'eliavanon@email.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Leonardo',
                'email' => 'leonardocavazzi@email.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Lorenzo',
                'email' => 'lorenzogiannanti@email.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Mary',
                'email' => 'marychiodelli@email.com',
                'password' => Hash::make('12345678'),
            ],
        ];
        foreach( $users as $user) {
            $u = new User();
            $u->email = $user['email'];
            $u->password = $user['password'];
            $u->name = $user['name'];
            $u->save();
        }
    }
}
