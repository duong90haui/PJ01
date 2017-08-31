<?php

use Illuminate\Database\Seeder;

class thanh_viens_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thanh_viens')->insert([
        ['user'=>'teo','pass'=>Hash::make(12345),'level'=>1],
        ['user'=>'ty','pass'=>Hash::make(12345),'level'=>1],
        ['user'=>'tun','pass'=>Hash::make(12345),'level'=>2],
        ['user'=>'toet','pass'=>Hash::make(12345),'level'=>1]
        
        
        ]);
    }
}
