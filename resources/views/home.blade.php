<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

        

        
    </head>
    <body>
        @extends('master')
        @section('title', 'Home')
        @section('content')
        <div class="container">
            <div class="content">
                <div class="title">Home Page</div>
                <div class="quote">Our Home page!</div>
                <div class="btn btn-primary"><a href="{{ action('TicketsController@index') }}">View Tickets</div>
            </div>
        </div>
@endsection
</html>
