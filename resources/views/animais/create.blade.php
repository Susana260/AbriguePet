s@extends('layout.app')
@section('title','Adicionar um animal')
@section('content')
    <h1>Adicionar Pet</h1>
    <br>
    {{Form::open[('Route' =>'abrigue_pets.store', 'method' =>'POST')]}}
        {{Form::label('animal', 'Animal')}}
        {{Form::text('animal', '',['class=>'form-control','required','placeholder'=>'Espécie do animal(gato, cachorro...'])}}
        {{Form::label('nome', 'Nome')}}
        {{Form::text('nome', '',['class=>'form-control','required','placeholder'=>'Nome do bixano'])}}
        {{Form::label('raca', 'Raca')}}
        {{Form::text('raca', '',['class=>'form-control','required','placeholder'=>'Nome do raca'])}}
        {{Form::label('doenca', 'Doenca')}}
        {{Form::text('doenca', '',['class=>'form-control','required','placeholder'=>'Nome do doenca'])}}
        {{Form::label('imagem', 'imagem')}}
        {{Form::text('imagem', '',['class=>'form-control','required','placeholder'=>'Nome do imagem'])}}
        <br>
        {{Form::submit('Salvar',['class'=>'bnt bnt-success'])}}
        {!!Form::button('Cancelar',['onclick'=>'javascript:history.go(-1)',
        'calss'=>'bnt bnt-secondary'])!!}
    {{Form::close()}}
@endsection