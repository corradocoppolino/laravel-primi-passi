<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL</title>
</head>
<body>
    
    <h1> Hello World </h1>

    <ul>

        <li><a href="#">HOME</a></li>
        <li><a href="/film">FILM</a></li>
        <li><a href="/serie">SERIE</a></li>
        <li><a href="/originals">ORIGINALS</a></li>
        <li><a href="/account">ACCOUNT</a></li>

    </ul>

    <div class="container">
    
        @if (count($films) > 0)
            <ul>
                @foreach($films as $element)
                    <li> {{ $element }} </li>
                @endforeach
            </ul>
        @else
            <h2>Non ci sono film</h2>   
        @endif 
    
    </div>

</body>
</html>