<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charaset="utf-8">
    <title>Minimal Akita</title>
    <link href="css/home.css" rel="stylesheet">
</head>
<body>
<h1>Minimal Akita -ミニマルアキタ-</h1>
<p>行きたいを見つける行きつけを見つける小さなお店の情報シェアサイトです。</p>
<img src="photo/IMG_7999.jpeg">
<div class="menu"> 
    <div class="area">
      <lavel for="addless">地域から探す</lavel>
      <select id="addless">
       <option>秋田市</option>
       <option>男鹿市</option>
       <option>大曲市</option>
       <option>由利本荘市</option>
       <option>角館市</option>
       <option>能代市</option>
     </select>
     <input type="submit" value="探す" >
    </div>

    <div class="category">
      <lavel for="type">カテゴリーから探す</lavel>
      <select id="type">
       <option>カフェ</option>
       <option>食事</option>
       <option>ファッション</option>
       <option>モール・施設</option>
     </select>
     <input type="submit" value="探す" >
    </div>    
    
    <div class="shop-name">
      <lavel for="shopname">shopから探す</lavel>
      <select id="shopname">
       <option>アメヤ珈琲男鹿船越店</option>
       <option>松下茶寮</option>
       <option>08coffee</option>
       <option>ハーバルカフェプラーナ</option>
       <option>パンプルムゥス秋田</option>
       <option>ヤマキウ南倉庫</option>
       <option>KAMENOCHO STORE</option>
       <option>こおひい工房 珈音</option>
       <option>カフェ・ビーコロ</option>
       <option>FOGcoffee</option>
     </select>
     <input type="submit" value="探す" >
    </div>    
    
    <input type="submit" value="新規投稿はこちら" onclick="location.href='admin/news/create'">
    
</div>






</body>
</html>