<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=[
            [
                'name'=>'มงคล',
                'last_name'=>'ขาวใส',
                'address'=>'',
                'phone'=>'0666666666',
                'email'=>'user@user.com',
                'password'=>bcrypt('6666'),
                'is_admin'=>'0'
            ],[
                'name'=>'แสงจันทร์',
                'last_name'=>'ใจดี',
                'address'=>'',
                'phone'=>'088888888',
                'email'=>'admin@admin.com',
                'password'=>bcrypt('8888'),
                'is_admin'=>'1'
            ]
        ];
        foreach($user as $key=>$value){
            User::create($value);
        }
    }
}
