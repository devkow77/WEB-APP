{{-- Bladeowy komentarz --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    @if(!$name)
        Brak imienia
    @else
        Hello, {{$name}} <br />
        @if (str_starts_with(strtolower($name), 'b'))
            Imie zaczyna sie na B
        @else 
            Imie nie zaczyna sie na B
        @endif
    @endif
    @foreach($arr as $value)
        <p>{{$value}}</p>
        @if ($loop->first)
            <p>To jest pierwsza iteracja</p>
        @elseif ($loop->last)
            <p>To jest ostatnia iteracja</p>
        @endif
    @endforeach
    </div>
</body>
</html>
