@extends('layout.app')
@section('title','Animal - {{$animal->nome}}')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Animal - {{$animal->nome}}</h1>
        </div>
        <div class="card-body">
                <h3 class="card-title">ID: {{$animal->id}}</h3>
                <p class="text">animal:{{$animal->animal}}</a><br/>
                nome: {{$animal->nome}}<br/>
                raça: {{$animal->raca}}<br/>
                Doença: {{$animal->doenca}}</p>
        </div>
        <div class="card-footer">
            {{Form::open(['route' => ['animais.destroy',$animal->id],'method' => 'DELETE'])}}
            <a href="{{url('animais/'.$animal->id.'/edit')}}" class="btn btn-success">Alterar</a>
            {{Form::submit('Excluir',['class'=>'btn btn-danger','onclick'=>'return confirm("Confirma exclusão?")'])}}
            <a href="{{url('adocao/')}}" class="btn btn-secondary">Voltar</a>
            {{Form::close()}}
        </div>
    </div>
@endsection


