<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XKCD</title>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/chosen.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="form-group"  class="col-md-8">
                <label for="title">{{ $comics['title'] }} </label>
            </div>
            <div class="col-md-8">
                <img src="{{  $comics['img'] }}" alt="{{ $comics['alt'] }}">
                <div class="row">
                    <div class="col-md-12">{{ $comics['alt'] }}</div>
                </div>
            </div>
            <div class="col-md-4">Year: {{ $comics['year'] }}</div>
            <div class="col-md-4">Month:  {{ $comics['month'] }}</div>
            <div class="col-md-4">Num: {{ $comics['num'] }}</div>
            <div class="col-md-4">Day: {{ $comics['day'] }}</div>
        </div>
        <div class="row" class="col-md-8" >
            <a class="fa fa-arrow-right" role="button" style="cursor: pointer; float:right; text-align:right;">Siguiente</a>
        </div>
    </div>

</body>
</html>
