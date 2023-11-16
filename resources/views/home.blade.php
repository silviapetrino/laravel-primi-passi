
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    <header>
        <nav>
            <ul>
                @foreach ($navPages as $page)
                <li>
                    <a href="{{$page}}">{{ $page }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </header>
</body>
</html>
