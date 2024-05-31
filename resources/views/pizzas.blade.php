<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .title {
                font-size: 50px;
                font-weight: 700;
                margin: 30px 0;
                text-align: center;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="flex-center position-ref full-height">

            <div class="content text-center mt-5 ">
                <div class="title m-b-md">
                    Pizza List
                </div>
                {{-- <p>{{ $type }} - {{ $base }} : {{ $price }}</p> --}}

                {{-- @for ($i = 0; $i < count($pizzas); $i++)
                    <p>{{ $pizzas[$i]['type'] }}</p>
                @endfor --}}

                @foreach ($pizzas as $pizza)
                    <div>
                      {{ $loop->index + 1 }}  {{ $pizza['type'] }} - {{ $pizza['base'] }}
                      @if ($loop->first)
                          <span> - first in the loop - </span>
                        @elseif ($loop->last)
                        <span> - last in the loop - </span>
                      @endif
                    </div>
                @endforeach

            </div>
        </div>
    </body>
</html>
