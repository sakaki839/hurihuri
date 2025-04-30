<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>住所変更ページ</title>
    <link rel="stylesheet" href="../../css/address.css">
</head>
  <body>
        <header>           
          <span class="ma1">
             <img src="../../img/logo.svg" alt="coachtech">
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
            <aside>
                    
            </aside>
            <main>

                <div class="contact-form__content">
      <div class="ha">
        <h2>住所の変更</h2>
      </div>
      <form class="form">
        <div class="n1">
          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
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
        <div class="n1">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
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
        <div class="n1">
          <div class="form__group-title">
            <span class="form__label--item">物件名</span>
          </div>
          <div class="ha">
            <div class="form__input--text">
              <input type="pas" name="pas" placeholder="" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
       
        <div class="ha">
          <button class="dd" type="button"  onclick="location.href='/purchase/:item_id'">更新する</button>
        </div>

       
      </form>
    </div>

            </main>
            <aside>
               
            </aside>
        </div>
        <footer>
            
        </footer>
    </body>
</html>