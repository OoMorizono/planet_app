<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>index</title>
</head>

<body>
    <h1>惑星一覧</h1>
    @if ($errors->any())
    <div class="error">
        <p>
            <b>【エラー内容】</b>
        </p>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前（英語）</th>
            <th>半径</th>
            <th>重量</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($planets as $planet)
        <tr>
            <td>{{ $planet->name }}</td>
            <td>{{ $planet->enname }}</td>
            <td>{{ $planet->radius }}</td>
            <td>{{ $planet->weight }}</td>
            <td><a href="/planets/{{ $planet->id }}">詳細へ</a></td>
            <td><a href="/planets/{{ $planet->id }}/edit">編集</a></td>
            <td>
                <div class="button-group">
                    <form action="/planets/{{ $planet->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="http://localhost/planets/create">新規登録</a>
</body>

</html>