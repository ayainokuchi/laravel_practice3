<?php

use Illuminate\Database\Seeder;
use App\Shop;


        
        // $this->call(UsersTableSeeder::class);


class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        
        DB::table('shop')->insert([
            'name'=>'アメヤ珈琲男鹿船越店',
            'address'=>'秋田県男鹿市船越一向２０７ー２１９',
            'phonenumber'=>'０１８５ー４７ー７４５１',
            'hpaddress'=>'http://ameyacoffee.com/',
            'area'=>'男鹿市',
            'type'=>'cafe',
            
            ]);
        
        DB::table('shop')->insert([
            'name'=>'松下茶寮',
            'address'=>'秋田県秋田市千秋公園１−１',
            'phonenumber'=>'０１８ー８２７ー３２４１',
            'hpaddress'=>'https://www.matsushita-akita.jp/saryou.html',
            'area'=>'秋田市',
            'type'=>'cafe',
            
            ]); 
            
        DB::table('shop')->insert( [
            'name'=>'08coffee',
            'address'=>'秋田県秋田市山王新町１３−２１ 三栄ビル',
            'phonenumber'=>'０１８ー８９３ー３３３０',
            'hpaddress'=>'https://08coffee.jp/',
            'area'=>'秋田市',
            'type'=>'cafe',
            
            ]);
            
        DB::table('shop')->insert( [
            'name'=>'ハーバルカフェプラーナ',
            'address'=>'秋田県秋田市泉中央４丁目１４−２７',
            'phonenumber'=>'018-863-2286',
            'hpaddress'=>'http://www.herbalcafeprana.com/',
            'area'=>'秋田市',
            'type'=>'cafe',
            
            ]); 
            
        DB::table('shop')->insert([
            'name'=>'パンプルムゥス 秋田',
            'address'=>'秋田県秋田市大町３丁目１−６',
            'phonenumber'=>'018-801-6677',
            'hpaddress'=>'http://akashia-mitsubachi-youhoujou.com/pamplemousse-akita/',
            'area'=>'秋田市',
            'type'=>'cafe',
            
            ]); 
        
        DB::table('shop')->insert([
            'name'=>'ヤマキウ南倉庫',
            'address'=>'秋田県秋田市南通亀の町4-15',
            'phonenumber'=>'各テナントによる',
            'hpaddress'=>'https://yamakiu-minamisoko.com/',
            'area'=>'秋田市',
            'type'=>'complexfacility',
            
            ]); 
        
        DB::table('shop')->insert( [
            'name'=>'KAMENOCHO STORE',
            'address'=>'秋田県秋田市南通亀の町４−１５',
            'phonenumber'=>'018-893-6783',
            'hpaddress'=>'///',
            'area'=>'秋田市',
            'type'=>'cafe',
            
            ]); 
        
        DB::table('shop')->insert([
            'name'=>'こおひい工房 珈音',
            'address'=>'秋田県男鹿市五里合琴川前田１０９',
            'phonenumber'=>'0185-34-2470',
            'hpaddress'=>'https://kanon-coffee.com/',
            'area'=>'男鹿市',
            'type'=>'cafe',
            
            ]);
            
        DB::table('shop')->insert([
            'name'=>'カフェ・ビーコロ',
            'address'=>'秋田県大仙市大曲通町２−１０',
            'phonenumber'=>'///',
            'hpaddress'=>'https://cafe-vicolo.business.site/',
            'area'=>'大仙市',
            'type'=>'cafe',
            
            ]); 
            
        DB::table('shop')->insert([
            'name'=>'FOGcoffee',
            'address'=>'秋田県大仙市大曲大町２−２４',
            'phonenumber'=>' 0187-64-9044',
            'hpaddress'=>'///',
            'area'=>'大仙市',
            'type'=>'cafe',
            
            ]); 
            
         
            
            
            
            
        
        
    }
}
