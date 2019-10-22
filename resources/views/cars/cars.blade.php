@extends('layouts.master')

@section('title','All cars')

@section('content')

<div class="cars">
    @foreach($cars as $car)

        <div class="car-table"> 
            <p>
               Car ID: {{$car->id}} <br>
               Car title: {{$car->title}} <br>
               <a href="/cars/{{$car->id}}">Show<a><br><br>
            </p>
        </div>
        
    @endforeach
</div>

@endsection