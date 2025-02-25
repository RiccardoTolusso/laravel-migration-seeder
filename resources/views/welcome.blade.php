<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>
        Treni
    </h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <div>
                    <h6>
                        <b>
                            {{ $train->company }}
                        </b>
                    </h6>
                    <h6>
                        {{ $train->from }} &RightArrow; {{ $train->destination }}
                    </h6>
                    <h6>
                        {{ $train->start_time }}
                    </h6>
                </div>
            </li>
        @endforeach
    </ul>
</body>

</html>
