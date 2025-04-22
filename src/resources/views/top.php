<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/top.css">
</head>
<body>
        <header>
          
          <span class="ma1">
             <img src="img/logo.svg" alt="coachtech">
          </span>
           <span class="ma2">
            <input type="text" class="kennsaku" placeholder="何をお探しですか？">
           </span>
         <span class="ma3">
            <span class="">
                <button  class=a2 type="button" onclick="location.href='/login'">ログアウト</button>
            </span>
            <span class="">
                <button class=a3 type="button" onclick="location.href='/mypage'">マイページ</button>
            </span>
            <span class="">
                <button class="a4" type="button" onclick="location.href='/sell'">出品</button>
            </span>
        </span>
        </header>
        <div class="flexbox-container">
            
            <main>
                <div class="a56">
                    <button class="a5">おすすめ</button>
                    <button class="a6">マイリスト</button>
                </div>
                
            </main>
            
        </div>
        <footer>
            <span class=item1>
                <button class="b1" type="button" onclick="location.href='/item/:item_id'">
                    <img src="" alt="" class="item">
                    <p class="p1">商品名</p>
                </button>
            </span>


            <span class=item2>
                <button class="b2" type="button" onclick="location.href='/item/:item_id'">
                    <img src="" alt="" class="item">
                    <p class="p2">商品名</p>
                </button>
            </span>
            

            <span class=item3> 
                <button class="b3" type="button" onclick="location.href='/item/:item_id'">
                    <img src="" alt="" class="item">
                    <p class="p3">商品名</p>
                </button>
            </span>
           
            
        </footer>
    </body>
</html>