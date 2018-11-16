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
        //
        $et= new \App\User;
        $et-> name ='E.T.';
        $et-> email ='et1982@gmail.com';
        $et->password =bcrypt('Extra0611');
        $et->save();

        $janine= new \App\User;
        $janine-> name = 'Janine';
        $janine->email = 'janine@gmail.com';
        $janine->password = bcrypt('EarthtoMars');
        $janine->save();
    }
}
