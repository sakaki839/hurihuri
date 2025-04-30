<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール編集画面</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
 <body>
        <header>
            <img src="../img/logo.svg" alt="coachtech">
        </header>
        <div class="flexbox-container">
            <aside>
                    
            </aside>
            <main>
            <span>
              <div class="m"></div>
              </span>
              <span>
                <button class="btn1">画像を選択する</button>
            </span>
           

                <div class="contact-form__content">
      <div class="ha">
        <h2>プロフィール設定</h2>
      </div>
      <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ユーザー名</span>
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
            <span class="form__label--item">郵便番号</span>
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
            <span class="form__label--item">住所</span>
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
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
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
          <button class="btn2" type="button" onclick="location.href='/'">更新する</button>
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