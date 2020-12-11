<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データを埋め込んだテンプレート</title>
</head>
<body>
    <h1>こんにちわ! {{$name}} さん!</h1>
    <p>現在時刻: {{date("Y/m/d H:i:s")}}</p>
</body>
</html>