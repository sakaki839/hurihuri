<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細画面</title>
    <link rel="stylesheet" href="../css/item.css">
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
                <button class="a4" type="button" onclick="location.href='../sell'">出品</button>
            </span>
        </span>
        </header>

                <div class="flexbox-container">
             <aside>
                <img class="img1" src="" alt="">
            </aside>
            <main>
               <h1>商品名がここに入る</h1>
               <p>ブランド名</p>
               <h3>￥47,000(税込)</h3>
               <h3>

            <div class="like-container">
                <button class="like-button" id="likeButton">
                    <span class="hoshi">☆</span>
                </button>
                <div class="like-count" id="likeCount">0</div>
            </div>
            

            <div class="like-container">
                <button class="like-button" id="likeButton">
                    <span class="hukidashi">💬</span>
                </button>
                <div class="like-count" id="likeCount">0</div>
            </div>

             <script>
    // いいねボタンとカウン要素を取得
    const likeButton = document.getElementById('likeButton');
    const likeCount = document.getElementById('likeCount');
    
    // クリック時にカウントを増加させる関数
    let count = 0;
    likeButton.addEventListener('click', () => {
      count++;

      // カウントを更新
      likeCount.textContent = count;

      // アニメーション後にクラスを削除
      setTimeout(() => {
        likeCount.classList.remove('count-animation');
      }, 300);
    });

    
  </script>

               
               </h3>
               
               <div>
                 <button class="button1" type="button" onclick="location.href='/purchase/:item_id'">
                購入手続きへ
               </button>
               </div>

              

               <h2>商品説明</h2>

               <p>カラー：グレー</p>
               <p>新品</p>
               <p>商品の状態は良好です。傷もありません。</p>
               <p>購入後、即発送いたします。</p>

               <h2>商品の情報</h2>

               <h3>カテゴリー</h3>
               <h3>商品の状態</h3>


               <h2>コメント()</h2>
               
                <img class="img2" src="" alt="">
               <h3 class="item1">admin</h3>

               <h3>商品へのコメント</h3>


               <textarea name="text" id="" rows="10" cols="60"></textarea>

               <div>
                 <button class="button2">コメントを送信する</button>
               </div>
              



            </main>
        </div>
        
    </body>
</html>
