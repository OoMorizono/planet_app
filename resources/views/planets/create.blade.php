<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>create</title>
</head>

<body>
    <h1>惑星情報登録</h1>
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
    <form action="/planets" method="post">
        @csrf
        <label for="name">名前</label>
        <input type="text" name="name" value="{{ old('name') }}">

        <label for="enname">名前（英語）</label>
        <input type="text" name="enname" value="{{ old('enname') }}">

        <label for="radius">半径</label>
        <input type="number" name="radius" value="{{ old('radius') }}">

        <label for="weight">重量</label>
        <input type="number" name="weight" value="{{ old('weight') }}">
        <p></p>
        <div>
            <input type="submit" value="登録">
        </div>
        <div>
            <a href="http://localhost/planets">戻る</a>
        </div>
    </form>
</body>

</html>