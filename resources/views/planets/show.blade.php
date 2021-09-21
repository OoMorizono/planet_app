<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>show</title>
</head>

<body>
    <p>
        <b>名前:{{ $planet->name }}</b>
    </p>
    <p>
        <b>名前（英語名）:{{ $planet->enname }}</b>
    </p>
    <p>
        <b>半径:{{ $planet->radius }}</b>
    </p>
    <p>
        <b>重量:{{ $planet->weight}}</b>
    </p>
    <a href="http://localhost/planets/">戻る</a>
</body>

</html>