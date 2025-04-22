<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/purchase.css">
</head>
<body>
        <header>
          
          <span class="ma1">
             <img src="../img/logo.svg" alt="coachtech">
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
                 <div class="c11">
                <span>
                <img class="item2" src="" alt="">
               </span>
               
               <span class="c1">
                <h3 class="c2">商品名</h3>
                <div class="c3">￥47,000</div>
               </span>
                 </div>
               
              <div class="c12">
                <h4 class="c121">支払い方法</h4>
                <select class="sel1" name="example" id="">
                <option value="">------</option>
                 <option value="">カード払い</option>
                 <option value="">コンビニ払い</option>
                </select>
              </div>

               <div class="c13">
                <h4 class="c131">配送先</h4>
                <a href="/purchase/address/:item_id">変更する</a>
                <div class="c132">
                 <p>〒XXX-YYY</p>
                 <p>ここには住所と建物が入ります</p>
                </div>
               </div>
                
            </main>
            
            <aside>
              <div class="b">
                <div class="b1">
                    <span class="b11">商品代金</span>
                    <span class="b12">￥47,000</span>   
                </div>
                <div class="b2">
                    <span class="b21"> 支払い方法 </span>
                    <span class="b22">コンビニ払い</span>
                </div>
             </div>
                <div class="b3">
                    <button class="item1">
                        購入する
                    </button>
                </div>
            </aside>
        </div>
        <footer>
            
            
        </footer>
    </body>
</html>