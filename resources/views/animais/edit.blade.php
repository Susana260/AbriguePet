@extends('layout.app')
@section('title','Alteração Animal {{$animal->nome}}')
@section('content')
    <h1>Alteração Animal {{$animal->nome}}</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('mensagem'))
        <div class="alert alert-success">
            {{Session::get('mensagem')}}
        </div>
    @endif
    <br />
    {{Form::open(['route' => ['animais.update',$animal->id], 'method' => 'PUT'])}}
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
        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
        <br>
        <a href="{{url('animais')}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
@endsection