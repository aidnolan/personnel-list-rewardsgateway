<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        @foreach ($data as $profile)
            <ul class="">
                <li>
                    <img src="{{$profile->avatar}}" alt="No image available">
                </li>
                <li>
                    {{$profile->name}}
                </li>
                <li>
                    {{$profile->title}}
                </li>
                <li>
                    {{$profile->company}}
                </li>
                <li>
                    {{$profile->bio}}
                </li>
            </ul>
        @endforeach
    </body>
</html>
