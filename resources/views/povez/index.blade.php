<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naslov</title>
</head>
<body>
    @foreach($knjige as $knjiga)
        {{ $knjiga->name  }} <br>
        @foreach($knjiga->povezi as $povez)
            <p> ovo je povez {{ $povez->name }} </p>
        @endforeach
    @endforeach
</body>
</html>