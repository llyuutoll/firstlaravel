<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>テンプレート中のif</title>
</head>
<body>
    <p>
        {{--           
        @if ($rand == 1)
            大吉です!<br>
            おめでとうございます!
        @elseif ($rand == 2)
            中吉です!
        @else
            凶です!
        @endif
        --}}
        <ol>
            @for($i = 1; $i < 5; $i++)
                <li>{{$i}}個目</li>
            @endfor
        </ol>
        

        @switch($rand)
        @case(1)
            大吉です!<br>
            おめでとうございます!
            @break
        @case(2)
            中吉です!
            @break
        @default
            凶です!
        @endswitch
    </p>
</body>
</html>