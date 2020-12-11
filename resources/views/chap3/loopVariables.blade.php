<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>テンプレート中のfor</title>
</head>
<body>
    <ul>
        @foreach($resultList as $key => $value)
        <li>
            @if($loop->first)
                ループの始まりです<br>
            @endif
            {{$loop->iteration}}回目: {{$key}}は{{$value}}です.
            @if($loop->last)
                <br>ループの終わりです
            @endif          
        </li>
        @endforeach
    </ul>
</body>
</html>