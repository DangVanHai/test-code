<?php

use Illuminate\Database\Seeder;

class UserAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
            [
                'full_name'=>'Nguyen Van Admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345678'),
                'level'=>'1',
            ],
            
            [
                'full_name'=>'Nguyen Van A',
                'username'=>'employeeA',
                'email'=>'employeeA@gmail.com',
                'password'=>bcrypt('123456'),
                'level'=>'2',
            ],

            [
                'full_name'=>'Nguyen Van B',
                'username'=>'user1',
                'email'=>'user1@gmail.com',
                'password'=>bcrypt('123456'),
                'level'=>'3',
            ],

            [
                'full_name'=>'Đặng Như Hải',
                'username'=>'Kratos',
                'email'=>'hai.dangnhu.plm@gmail.com',
                'password'=>bcrypt('123456'),
                'level'=>'1',
            ]


            ];
            DB::table('UserAccount')->insert($data);
        }

}