<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sell.css">
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
                <button class=a3 type="button" onclick="location.href='./mypage'">マイページ</button>
            </span>
            <span class="">
                <button class="a4" type="button" onclick="location.href='/sell'">出品</button>
            </span>
        </span>
        </header>
        <div class="flexbox-container">
            <aside>
                    
            </aside>
            <main>

      <div class="h1">
            <h2>商品の出品</h2>
      </div>

      <div class="hh1">
        <h4>商品画像</h4>
        <div class="hhh3">
          <button class="hh3">画像を選択する</button>
        </div>
      </div>

      <div class="h2">
        <div class="hh">
            <h3>商品の詳細</h3>
        </div>
        <h4>カテゴリー</h4>
        <div class="">
          <button class="hh4">ファッション</button>
          <button class="hh4">家電</button>
          <button class="hh4">インテリア</button>
          <button class="hh4">レディース</button>
          <button class="hh4">メンズ</button>
          <button class="hh4">コスメ</button>
          <button class="hh4">本</button>
          <button class="hh4">ゲーム</button>
          <button class="hh4">スポーツ</button>
          <button class="hh4">キッチン</button>
          <button class="hh4">ハンドメイド</button>
          <button class="hh4">アクセサリー</button>
          <button class="hh4">おもちゃ</button>
          <button class="hh4">ベビー・キッズ</button>
        </div>
        <h4>商品の状態</h4>
        <select class="hh5" name="example" id="">
          <option value="">------</option>
          <option value="">良好</option>
          <option value="">目立った傷やや汚れなし</option>
          <option value="">やや傷や汚れあり</option>
          <option value="">状態が悪い</option>
        </select>
      </div>
      <div class="h3">
        <div class="hh">
             <h3>商品名と説明</h3>
        </div>
        <h4>
            <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品名</span>
          </div>
          <div class="ha">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ブランド名</span>
          </div>
          <div class="ha">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form2__group">
          <div class="">
            <span class="form2__label--item">商品の説明</span>
          </div>
          <div class="ha">
            <div class="form2__input--text">
              <textarea id="message" name="message" rows="7" cols="70"></textarea>
            </div>
            <div class="form2__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">販売価格</span>
          </div>
          <div class="ha">
            <div class="form__input--text">
              <input type="pas" name="pas" placeholder="￥" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="ha">
          <button class="b1" type="submit" href="">出品する</button>
        </div>
        </h4>
      </div>
      

            </main>
            <aside>
               
            </aside>
        </div>
        <footer>
            
        </footer>
    </body>
</html>