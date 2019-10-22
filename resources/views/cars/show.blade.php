@extends('layouts.master')

@section('title', $car->title)

@section('content')

    <table class="table">
        <tr>
            <th>Car ID </th>
            <th>Car title </th>
            <th>Car producer </th>
            <th>Number of doors </th>     
        </tr>
        <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->title}}</td>
            <td>{{$car->producer}}</td>
            <td>{{$car->number_of_doors}}</td>     
        </tr>
    </table>

@endsection