<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('area')->insert([
            'city'=>'akita']);
            
        DB::table('area')->insert([
            'city'=>'oga']);
        
        DB::table('area')->insert([
            'city'=>'omagari']);
        
        DB::table('area')->insert([
            'city'=>'yurihonnjyo']);
            
        DB::table('area')->insert([
            'city'=>'kakunodate']);
            
        DB::table('area')->insert([
            'city'=>'noshiro']);    
        
        
    }
}
