@extends('layout.app')
@section('title','Listagem')
@section('content') 
    <h1>Listagem</h1>
    <ul>
    @foreach ($animal as $animal)
        <li><a href="{{url('abriguepet/'.$animal->id)}}">
            {{$animal->nome}}</a>
        </li>
        @endforeach
    </ul>
@endsection