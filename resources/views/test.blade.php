<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
</head>
<body>
    <!-- ｛｛　｝｝ = ＜?php echo $変数; ?＞ -->
{{-- blade問題１ --}}
    {{-- @if ($figure % 2 === 0)
    <p>２の倍数です。</p>
    @elseif ($figure % 3 === 0)
    <p>３の倍数です。</p>
    @else
    <p>２の倍数でも３の倍数でもありません。</p>
    @endif --}}

{{-- blade問題２ --}}

{{--↓これをforeachで書き換えたい
    <p>{{ $animals[0] }}</p>
    <p>{{ $animals[1] }}</p>
    <p>{{ $animals[2] }}</p>
    ↓
--}}
    @foreach ( $animals as $animal )
        <p>{{ $animal }}</p>
    @endforeach

    {{-- ↓値になにも無い時に何か表示させたい場合 --}}
    @forelse ( $animals as $animal )
        <p>{{ $animal }}</p>
    @empty
        <p>No animals yet</p>
    @endforelse
</body>
</html>
