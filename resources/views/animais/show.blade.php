@extends('layout.app')
@section('title','Listagem - {{$animal->nome}}')
@section('content') 
    <h1>Listagem de animais</h1>
    <ul>
        <li>ID: {{$animal->id}}</li>
        <li>Animal: {{$animal->animal}}</li>
        <li>Nome: {{$animal->nome}}</li>
        <li>Raça: {{$animal->raca}}</li>
        <li>Doença: {{$animal->doenca}}</li>
    </ul>
    <a href="{{url('contatos')}}">Voltar</a>
@endsection