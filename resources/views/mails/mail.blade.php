<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body style="padding :0 24px">
  <h1 style="margin-bottom:16px">資料請求</h1>
  <p>資料請求フォームをご利用いただきありがとうございます。<br>下記の内容で受け付けました。</p>
  お名前：{{ $content['name'] }}<br> 
  フリガナ：{{ $content['name-kana'] }}<br> 
  性別：{{ $content['gender'] }}<br>
  住所：〒{{ $content['postal-code'] }} {{ $content['prefecture'] }} {{ $content['city'] }} {{ $content['building'] }}<br>
  電話番号：{{ $content['tel-national'] }}<br>
  メールアドレス：{{ $content['email'] }}<br>
  出身学校名：{{ $content['graduate'] }}<br>
  備考：{{ $content['qual'] }}<br>
  <br>
  このメール及び、資料請求はデモです。実際に資料が送られることはございません。<br>
  ご記入いただいた情報は、このメール送信以外には利用しません。
</body>
</html>



