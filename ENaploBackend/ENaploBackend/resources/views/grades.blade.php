<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ENAPLO</title>
</head>
<body>

<h1>Osztályzatok</h1>

<hr>

<ul>
    @foreach($grades as $grade)
        <li>
            {{$grade->grade}} (x{{$grade->weight}}) [{{$grade->comment}}]
            <ul>
                <li>{{$grade->student->name}}</li>
            </ul>
        </li>
    @endforeach
</ul>

</body>
</html>
