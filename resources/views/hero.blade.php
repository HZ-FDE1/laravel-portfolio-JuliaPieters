<!DOCTYPE html>
<link rel="stylesheet" href="./css/style.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero</title>
</head>
<body>
<h1>{{ $hero->name}}</h1>
<hr>
{{--@dd($hero)--}}
<p>gender: {{ $hero->appearance->gender}}</p>
<p>race: {{ $hero->appearance->race}}</p>
<p>occupation: {{ $hero->work->occupation}}</p>
<p>alignment: {{ $hero->biography->alignment}}</p>
<h3>Powerstats</h3>
<p>intelligence: {{ $hero->powerstats->intelligence}}</p>
<p>strength: {{ $hero->powerstats->strength}}</p>
<p>speed: {{ $hero->powerstats->speed}}</p>
<p>durability: {{ $hero->powerstats->durability}}</p>
<p>power: {{ $hero->powerstats->power}}</p>
<p>combat: {{ $hero->powerstats->combat}}</p>

<img src="{{ $hero->image->url}}">

</body>
</html>

