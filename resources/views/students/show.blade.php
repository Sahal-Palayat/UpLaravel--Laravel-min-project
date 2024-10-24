@extends('layout')
@section('content')

<x-app-layout>

<div class="card">
    <div class="card-header">Student Page</div>
    <div class="card-body">
    <h5 class="card-title">Name:{{$students->name}}</h5>
    <p class="card-text">Address:{{$students->address}}</p>
    </div>
    <hr>

</div>
</x-app-layout>
@endsection