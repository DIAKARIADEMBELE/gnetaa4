<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;



class CreateSupAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $password ='gnetaa123';
        
        $User = User::create([
            'name' => 'gnetaa', 
            'email' => 'admin@me.com',
            'password' => Hash::make($password),
            'tel'=> '74745278',
            'adresse'=>'Bamako',
            'username'=>'ASK123'
        ]); 
        $role = Role::select('id')->where('name', 'superadmin')->first();
        $User->roles()->attach($role);
        $User->save();
    }
}
