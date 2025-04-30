<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会委員登録画面</title>
    <link rel="stylesheet" href="css/register.css">
</head>
  <body>
        <header>
            <img src="img/logo.svg" alt="coachtech">
        </header>
        <div class="flexbox-container">
            <aside>
                    
            </aside>
            <main>

                <div class="contact-form__content">
      <div class="ha">
        <h2>会員登録</h2>
      </div>
      <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ユーザー名</span>
          </div>
          <div class="ha">
            <div class="form__input--text">
              <input type="name" name="name" placeholder="" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
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
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">パスワード</span>
          </div>
          <div class="ha">
            <div class="form__input--text">
              <input type="password" name="password" placeholder="" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">確認用パスワード</span>
          </div>
          <div class="ha">
            <div class="form__input--text">
              <input type="password" name="password" placeholder="" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="ha">
          <button class="btn" type="button" onclick="location.href='./mypage/profile'">登録する</button>
        </div>
<div class=ha>
     <a href="./login">ログインはこちら</a>
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