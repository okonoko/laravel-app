<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'John Doe',
            'email'=>'john@doe.com',
            'password'=>bcrypt('password'),
            'phone'=>123456789,
            'address'=>'Abc 12, Katowice, Poland',
            'status'=>'Active',
            'pesel'=>'123123123',
            'type'=>'Admin'
        ]);

        DB::table('users')->insert([
            'name'=>'Monica Belluci',
            'email'=>'monica@belluci.com',
            'password'=>bcrypt('password'),
            'phone'=>123123123,
            'address'=>'Abc 13, Katowice, Poland',
            'status'=>'Active',
            'pesel'=>'123232323',
            'type'=>'Patient'
        ]);

        DB::table('users')->insert([
            'name'=>'Mark Cyc',
            'email'=>'mark@cyc.com',
            'password'=>bcrypt('password'),
            'phone'=>321321321,
            'address'=>'Abc 14, Katowice, Poland',
            'status'=>'Active',
            'pesel'=>'123232323',
            'type'=>'Patient'
        ]);

        DB::table('users')->insert([
            'name'=>'Chin Buy',
            'email'=>'chin@buy.com',
            'password'=>bcrypt('password'),
            'phone'=>424224423,
            'address'=>'Abc 15, Katowice, Poland',
            'status'=>'Active',
            'pesel'=>'123231313',
            'type'=>'Patient'
        ]);

        DB::table('users')->insert([
            'name'=>'Bunny Bugss',
            'email'=>'bunny@bugs.com',
            'password'=>bcrypt('password'),
            'phone'=>424224213,
            'address'=>'Abc 16, Katowice, Poland',
            'status'=>'Active',
            'pesel'=>'412444223',
            'type'=>'Doctor'
        ]);

        DB::table('users')->insert([
            'name'=>'Goter Bodos',
            'email'=>'goter@bodos.com',
            'password'=>bcrypt('password'),
            'phone'=>425234423,
            'address'=>'Abc 17, Katowice, Poland',
            'status'=>'Active',
            'pesel'=>'233223321',
            'type'=>'Doctor'
        ]);

        DB::table('specializations')->insert([
            'name'=>'oncology',
        ]);

        DB::table('specializations')->insert([
            'name'=>'surgeon',
        ]);

        DB::table('specializations')->insert([
            'name'=>'internist',
        ]);

    }
}