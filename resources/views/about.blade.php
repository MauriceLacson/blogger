
@extends('master')
@section('title', 'About')
@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif
        <div class="container">
            <div class="content">
                <div class="title">About Page</div>
                <div class="quote">Our about page!</div>
            </div>            
        </div>
    </div>
@endsection

