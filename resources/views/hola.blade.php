<?php
$titulo = "Hola </> Mundo";
$year = 20;
$calificacion = 8;
$arrCancion = [];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{-- {{}} Sanitiza la salida de texto --}}
<H1>{{$titulo}}</H1>
{{-- {!!  !!} NO SANITIZAMOS la salida de texto --}}
{{-- <H1>{!!$titulo!!}</H1>--}}
<H2>{{date('Y')}}</H2>
{{-- Estos son comentario en Blade --}}
<H1><?php echo $year ?></H1>
@isset($variable)
    <p>{{$variable}}</p>
@endisset
@empty($variable)
    <p>No existen datos...</p>
@endempty
@if($year >= 21)
<p>PUEDES VOTAR....</p>
@elseif($year >= 18)
    <p>en estados unidos no puedes hacer cosas</p>
@endif
@switch($calificacion)
    @case(10)
        <p>A+</p>
        @break
    @case(9)
        <p>A</p>
        @break
    @case(8)
        <p>B</p>
        @break
    @case(7)
        <p>C</p>
        @break
    @case(6)
        <p>D</p>
        @break
    @default
        <p>F</p>
        @break
@endswitch

@forelse($arrCancion as $rola)
    <li>{{$rola}}</li>
@empty
    <li>No rolas</li>
@endforelse
</body>
</html>
