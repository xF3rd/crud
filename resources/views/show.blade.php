@extends('layouts.app')

@section('content')

<div class="col-md10 offset-md-1">
    <div class="row">
        
        <div id="image-container" class="col-md-6">
            <img src="/img/avatares/{{ Auth::user()->image }}.png" alt="">
        </div>

        <div id="info-container" class="col-md-6">
            <h1>{{ Auth::user()->name }}</h1>
            <h3>Email: {{ Auth::user()->email }}</</h3>
            <h3>CPF: {{ Auth::user()->cpf }}</</h3>
            <h3>Endereço: {{ Auth::user()->endereco }}</</h3>
        </div>
        <div id="btn-container">
            <a href="/home/edit/{{Auth::user()->id}}" class="btn btn-primary"><ion-icon name="sync-outline"></ion-icon>Editar</a>
           <form action="/home/{{ Auth::user()->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><ion-icon name="trash-bin-outline"></ion-icon>Deletar</button>
           </form>
    </div>


    </div>
</div>

@endsection
