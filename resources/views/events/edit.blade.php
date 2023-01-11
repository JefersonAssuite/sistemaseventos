@extends('layout.main')
@section('title','Editando'. $event->title)
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando Evento</h1>
    <form action="/events/update/{{$event -> id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do Evento" value="{{$event->title}}">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" id="date" class="form-control" >
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Nome da Cidade" value="{{$event->city}}">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private"class="form-control">
            <option value="0">Não</option>
            <option value="1" {{$event->private ==1?"selected='selected'":""}}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do Evento">{{$event->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione Itens de Infraestrutura</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="cadeiras">Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="OpenBar">OpenBar
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Sorteio">Sorteios
            </div>
        </div>

        <input type="submit"class="btn btn-primary" value="Editar Evento">
    </form>
</div>
@endsection