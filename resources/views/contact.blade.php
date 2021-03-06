<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta property="og:title" content="資料請求 | 舞浜大学 HAIMAHA UNIVERSITY" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="資料請求をご希望の方は、下記フォームをご記入の上、「送信する」ボタンをクリックしてください。" />
    <meta property="og:url" content="https://afternoon20.github.io/university/index.html" />
    <meta property="og:site_name" content="資料請求 | 舞浜大学 HAIMAHA UNIVERSITY" />
    <meta property="og:image" content="https://afternoon20.github.io/university/img/dist/mv01.png" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
    <link rel="shortcut icon" href="favicon.ico" />
    <title>資料請求 | 舞浜大学 HAIMAHA UNIVERSITY</title>
  </head>
  <body>
    <header class="header">
      <nav class="navbar shadow navbar-expand-lg navbar-light fixed-top bg-white">
        <div class="container">
          <a class="navbar-brand" href="/">
            <strong>MAIHAMA UNIVERSITY</strong>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbar"
            aria-controls="navbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">大学について</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">学部・大学院</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">入試情報</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">資料請求</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main id="main">
      <!-- メインビジュアル -->
      <div id="mv" class="mv shadow">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="mv__ttl text-white">資料請求</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="form">
        <div class="container">
          <p>
            資料請求をご希望の方は、下記フォームをご記入の上、「送信する」ボタンをクリックしてください。<br />
            ご記入いただいたメールアドレス宛に、資料をお送りいたします。<br />
            ※このサイトは、デモサイトです。実際に資料が送られるようなことはありません。
          </p>
          <form class="contact-form needs-validation bg-light shadow" action="/send" method="post" novalidate>
            @csrf
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">お名前</h3>
              <div class="row">
                <div class="col-md-6">
                  <label for="kanji">漢字<span class="danger text-danger">【必須】</span></label>
                  <input type="text" class="form-control" name="name" autocomplete="name" required />
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-6">
                  <label for="kana">フリガナ<span class="danger text-danger">【必須】</span></label>
                  <input type="text" class="form-control" name="name-kana" required />
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
              </div>
            </div>
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">希望学部<span class="danger text-danger">【必須】</span></h3>
              <div class="row">
                <div class="col-6 col-lg-3">
                  <select class="custom-select" name="department" required>
                    <option value="">選択してください</option>
                    <option value="税務スタッフ">外国語学部</option>
                    <option value="会計スタッフ">経済学部</option>
                    <option value="労務スタッフ">法学部</option>
                  </select>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
              </div>
            </div>
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">性別<span class="danger text-danger">【必須】</span></h3>
              <div class="form-check">
                <input class="form-check-input" id="男性" type="radio" name="gender" value="男性" required />
                <label class="form-check-label" for="男性"> 男性 </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="女性" name="gender" value="女性" required />
                <label class="form-check-label" for="女性"> 女性 </label>
                <div class="invalid-feedback">必須項目です。</div>
              </div>
              
            </div>
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">住所</h3>
              <div class="row">
                <div class="col-6 col-lg-3">
                  <label for="postal-code">郵便番号<span class="danger text-danger">【必須】</span></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">〒</span>
                    </div>
                    <input type="text" class="form-control" name="postal-code" autocomplete="postal-code" required />
                    <div class="invalid-feedback">必須項目です。</div>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <label for="address-level1">都道府県<span class="danger text-danger">【必須】</span></label>
                  <select class="custom-select" name="prefecture" required>
                    <option value="">都道府県を選択</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                  </select>
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-12 contact-form__col">
                  <label for="address">市区町村<span class="danger text-danger">【必須】</span></label>
                  <input type="text" class="form-control" name="city" required />
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
                <div class="col-md-12 contact-form__col">
                  <label for="email">建物名</label>
                  <input type="text" class="form-control" name="building" />
                  <div class="invalid-feedback">必須項目です。</div>
                </div>
              </div>
            </div>
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">ご連絡先</h3>
              <label for="tel">電話番号</label>
              <input type="tel" class="form-control" name="tel-national"/>
              <div class="contact-form__col">
                <label for="email">メールアドレス<span class="danger text-danger">【必須】</span></label>
                <input type="email" class="form-control" name="email" required/>
                <div class="invalid-feedback">内容に不備があります。</div>
              </div>
            </div>
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">出身学校名</h3>
              <input type="text" class="form-control" name="graduate" placeholder="例）〇〇県立▲▲高等学校" /> 
            </div>
            <div class="contact-form__item">
              <h3 class="contact-form__ttl">備考</h3>
              <div class="form-group">
                <textarea class="form-control" name="qual" rows="8" placeholder="大学への質問などがあればご記入ください。"></textarea>
              </div>
            </div>
            <div class="form-check contact-form__check">
              <input class="form-check-input" type="checkbox" required />
              <label class="form-check-label" for="check"> ご記入いただいた内容を確認し、送信します。 </label>
            </div>
            <button id="send" class="mt-5 btn btn-danger btn-lg btn-block" type="submit">送信する</button>
            <button id="sending" class="recuit__btn--sending mt-5 btn btn-danger btn-lg btn-block justify-content-center" type="submit" disabled>
              <span class="mr-3 spinner-border" role="status" aria-hidden="true"></span>送信中
            </button>
            <p id="message" class="contact-form__message text-danger py-4 my-3">入力内容に問題があります。確認して再度お試しください。</p>
          </form>
        </div>
      </div>
    </main>
    <footer class="pt-4 mt-5 border-top">
      <div class="container">
        <div class="row mb-3">
          <div class="col-12 col-md">
            <a class="navbar-brand" href="/">
              <strong class="text-dark">MAIHAMA UNIVERSITY</strong>
            </a>
            <small class="d-block mb-3 text-muted">夢見ることができれば、それは実現できる</small>
            <small class="d-block mb-3 text-muted">〒279-3333<br />千葉県浦安市舞浜1−100</small>
          </div>
          <div class="col-6 col-md">
            <h5>メニュー</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">大学について</a></li>
              <li><a class="text-muted" href="#">学部・大学院</a></li>
              <li><a class="text-muted" href="#">入試情報</a></li>
              <li><a class="text-muted" href="#">資料請求</a></li>
              <li><a class="text-muted" href="#">お問い合わせ</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>関連組織</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">附属高等学校</a></li>
              <li><a class="text-muted" href="#">附属中等学校</a></li>
              <li><a class="text-muted" href="#">大学カルチャーセンター</a></li>
              <li><a class="text-muted" href="#">外国語専門学校</a></li>
            </ul>
          </div>
        </div>
        <div class="container">
          <p class="text-center">©University All Rights Reserved.</p>
        </div>
      </div>
    </footer>
     @if (session('completed'))
      <?php echo '<script type="text/javascript">
        window.onload = function() {
        alert("送信が完了しました。");
      };
      </script>'; ?>
    @endif
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="{{asset('js/script.js')}}"></script>
   
  </body>
</html>
